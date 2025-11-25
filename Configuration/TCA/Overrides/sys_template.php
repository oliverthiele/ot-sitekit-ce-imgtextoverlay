<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addStaticFile(
    'ot_sitekitceimgtextoverlay',
    'Configuration/TypoScript/',
    'CE Image with text overlay'
);
