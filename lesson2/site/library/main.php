<?php
/**
 * @author Vyacheslav Nozhenko <vv.nojenko@gmail.com>
 */

const PHP_FILE_EXT = '.php';
const TEMPLATES_DIR = 'templates';
const PAGES_DIR = 'pages';

/**
 * Includes template.
 *
 * @param string $templateName
 */
function includeTemplate($templateName)
{
    include TEMPLATES_DIR . DIRECTORY_SEPARATOR . $templateName . PHP_FILE_EXT;
}

/**
 * Requires page.
 *
 * @param string $pageName
 */
function requirePage($pageName) {
    require PAGES_DIR . DIRECTORY_SEPARATOR . $pageName . PHP_FILE_EXT;
}
