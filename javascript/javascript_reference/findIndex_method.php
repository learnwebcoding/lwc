<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/findIndex_method.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 15 May 2018.
 * Published: 09 Feb 2018. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "JavaScript Feature Reference: findIndex() Method Web Browser Support Test"; // No markup in title tags.
$webPage->head_meta_keywords = "JavaScript, findIndex() method, web browser support, test"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A JavaScript that tests and reports if the web browser supports the JavaScript findIndex() method."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"JavaScript\", \"\", \"JavaScript Feature Reference\");";
$webPage->body_main_webPageTitle = "JavaScript Feature Reference: <code>findIndex()</code> Method Web Browser Support Test";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 09 Feb 2018 | Published: 09 Feb 2018 | Status: Active";
$webPage->body_main_toc = include_once "findIndex_method_toc.php";
$webPage->body_main_sections = include_once "findIndex_method_sections.php";
$html = include_once "template.php";
echo $html;
