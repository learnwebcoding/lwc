<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/php/install_quickinstall_windows.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 22 Aug 2020.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "Install phpBB QuickInstall On Your Local Windows Web Server To Develop phpBB Board Styles"; // No markup in title tags.
$webPage->head_meta_keywords = "install, phpBB, QuickInstall, local, windows, web server, develop, phpBB, board, styles"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "How to install phpBB QuickInstall on your local Windows web server in order to develop phpBB board styles."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"\", \"PHP\");";
$webPage->body_main_webPageTitle = "Install phpBB QuickInstall On Your Local Windows Web Server To Develop phpBB Board Styles";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 22 Aug 2020 | Published: 08 Dec 2014 | Status: Active";
$webPage->body_main_toc = include_once "install_quickinstall_windows_toc.php";
$webPage->body_main_sections = include_once "install_quickinstall_windows_sections.php";
$html = include_once "template.php";
echo $html;
