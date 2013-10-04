<?php

function pearson_mp_views_default_views() {

	$views = array();
	$path = drupal_get_path('module', 'pearson_mp') . '/views';
	$dir = new DirectoryIterator($path);
	// dsm($path, 'dir');
	foreach ($dir as $fileinfo) {// loop through each file in the directory
		if (!$fileinfo->isDot()) { // make sure its not . (current directory) or .. (parent directory)
			$filename = $fileinfo->getFilename();
			include($path . '/' . $filename);
			$views[$view->name] = $view;
		}
	}
	
	return $views;
	
}