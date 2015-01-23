<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao;

// Set the script name
define('TL_SCRIPT', 'contao/preview.php');

// Initialize the system
define('TL_MODE', 'BE');
require __DIR__ . '/../../system/initialize.php';

// Run the controller
$controller = new BackendPreview();
$controller->run();
