<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/jquery_techniques/fix_content_top_viewport_upon_scrolling.php.
 * Purpose: Web page file.
 * Used in: No other file.
 * Last reviewed/updated: 21 Apr 2019.
 * Published: 21 Sep 2016. */
error_reporting(E_ALL);
ini_set('display_errors', '0'); // To display errors, change '0' to '1'.
include_once "Web_Page.class.php";
$webPage = new Web_Page();
$webPage->head_title = "jQuery Technique: Fix Web Page Content To Top Of Viewport Upon Scrolling"; // No markup in title tags.
$webPage->head_meta_keywords = "jQuery, technique, position, fixed, web page, content, top, viewport, window, scroll"; // Cap words as if used in sentence. No markup in Keywords.
$webPage->head_meta_description = "A jQuery script that fixes web page content to the top of the viewport upon scrolling down the web page."; // Sentence and/or structured data less than 160 char per Google. No markup in Description.
$webPage->body_header_callBcrumbsNav = "BcrumbsNavUtil.bcrumbsNav(\"../\", \"JavaScript\", \"\", \"jQuery Techniques\");";
$webPage->body_main_webPageTitle = "jQuery Technique: Fix Web Page Content To Top Of Viewport Upon Scrolling";
$webPage->body_main_lastReviewed = "Last reviewed/updated: 21 Apr 2019 | Published: 04 Nov 2015 | Status: Active";
$webPage->body_main_toc = include_once "fix_content_top_viewport_upon_scrolling_toc.php";
$webPage->body_main_sections = include_once "fix_content_top_viewport_upon_scrolling_sections.php";
$html = include_once "template.php";
echo $html;
