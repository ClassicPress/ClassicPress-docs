#!/usr/bin/env php
<?php

$root = dirname( __DIR__ );
$repo = 'ClassicPress/ClassicPress-docs';

$manifest = array();
$paths = array(
	$root . '/*.md',
	$root . '/*/*.md',
);
$excludes = array(
	'README.md',
);
foreach ( $paths as $path ) {
	foreach ( glob( $path ) as $file ) {
		$file = str_replace( $root . '/', '', $file );

		if ( in_array( $file, $excludes ) ) {
			continue;
		}

		$slug = basename( $file, '.md' );
		if ( $file === 'index.md' ) {
			// Main index file 'index.md'
			$slug = $key = 'home';
		} else if ( $slug === 'index' ) {
			// e.g. 'installing-classicpress/index.md'
			$slug = basename( dirname( $file ) );
			$key = str_replace( '/index.md', '', $file );
		} else {
			// e.g. 'browser-support.md'
			$key = str_replace( '.md', '', $file );
		}
		$parent = null;
		if ( stripos( $key, '/' ) ) {
			$bits = explode( '/', $key );
			array_pop( $bits );
			$parent = implode( '/', $bits );
		}
		if ( getenv( 'MANIFEST_BASE_URL' ) ) {
			$source_url = sprintf(
				'%s/%s',
				rtrim( getenv( 'MANIFEST_BASE_URL' ), '/' ),
				$file
			);
		} else {
			$source_url = sprintf(
				'https://github.com/%s/blob/master/%s',
				$repo,
				$file
			);
		}
		$manifest[ $key ] = array(
			'slug'            => $slug,
			'parent'          => $parent,
			'markdown_source' => $source_url,
		);
	}
}

file_put_contents(
	$root . '/bin/manifest.json',
	json_encode(
		(object) $manifest,
		JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
	)
);

$count = count( $manifest );
echo "Generated manifest.json of {$count} pages\n";
