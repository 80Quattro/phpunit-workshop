<?php

declare(strict_types=1);

defined('TYPO3') or die('Access denied.');

call_user_func(function (): void {
    /**
     * Temporary variables
     */
    $extensionKey = 'theme';

    /**
     * Default TypoScript for Theme
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Theme'
    );
});
