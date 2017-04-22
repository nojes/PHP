<?php

const UPLOAD_DIR = 'uploads';

/**
 * @param string $baseDir
 * @return array
 */
function getCategoryList($baseDir)
{
    $categories = [];
    $d = opendir($baseDir);
    while($entry = readdir($d)){
        if(!is_dir($baseDir . DIRECTORY_SEPARATOR . $entry) or $entry == '.' or $entry == '..') {
            continue;
        }
        $categories[] = $entry;
    }

    return $categories;
}

/**
 *
 * @param $path
 * @return array
 */
function getCategoryImages($path) {
    $images = [];
    if (is_dir($path)) {
        $d = opendir($path);
        while ($entry = readdir($d)) {
            $filename = $path . DIRECTORY_SEPARATOR . $entry;
            if (!is_file($filename) or $entry == '.gitignore') {
                continue;
            }
            $images[] = $filename;
        }
    }

    return $images;
}
