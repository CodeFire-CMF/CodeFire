<?php

/*
 * This file is part of the CodeFire CMF
 * -----------------------------------------------------------------------
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * (c) CodeFire CMF
 */

// Define basic constants
define('CF_VERSION', '1.0');
define('CF_DIRECTORY', __DIR__ . '/codefire');

// Check for absence
if(!is_dir(CF_DIRECTORY))
{
	echo "<h2>Whoops! It seems like the CodeFire directory is missing!</h2>";
	echo "Are you sure that it has been installed correctly?";

	exit;
}

// Check for installation directory
if(is_dir(__DIR__ . '/install'))
{
	// TODO
	exit;
}

// Everything seems fine, start laravel
require CF_DIRECTORY . '/public/index.php';
