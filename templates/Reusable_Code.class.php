<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/templates/Reusable_Code.class.php.
 * Purpose: Reusable code object definition file. Assign reusable code as object property values.
 * Used in: css_font_compare_sections.php and css_font_sizes.php.
 * Last reviewed/updated: 13 Aug 2023.
 * Published: 11 Oct 2016.
 * NOTE: Copy changes to css_font_compare.js.
 * cursive (aka script), fantasy (aka decorative), monospace, serif, sans-seric  = (generic) = all lower case. */
class Reusable_Code {
 public $allCharactersString ="The quick brown fox jumps over the lazy dog THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG 1234567890 `~!@#$%^&amp;*-_=+()\/[]{}&lt;&gt;;:'|&quot;,.?";
 public $fontFamilySelectboxOptions ="
  <option value='Arial' selected>Arial (sans-serif)</option>
  <option value='Baskerville'>Baskerville (serif)</option>
  <option value='\"Bodoni MT\"'>Bodoni MT (serif)</option>
  <option value='\"Book Antiqua\"'>Book Antiqua (serif)</option>
  <option value='Calibri'>Calibri (sans-serif)</option>
  <option value='\"Calisto MT\"'>Calisto MT (serif)</option>
  <option value='Cambria'>Cambria (serif)</option>
  <option value='Candara'>Candara (sans-serif)</option>
  <option value='\"Century Gothic\"'>Century Gothic (sans-serif)</option>
  <option value='\"Comic Sans MS\"'>Comic Sans MS (cursive)</option>
  <option value='Consolas'>Consolas (monospace)</option>
  <option value='Constantia'>Constantia (serif)</option>
  <option value='Copperplate'>Copperplate (fantacy)</option>
  <option value='Courier'>Courier (monospace)</option>
  <option value='\"Courier New\"'>Courier New (monospace)</option>
  <option value='cursive'>cursive (generic)</option>
  <option value='\"Dejavu Sans\"'>Dejavu Sans (sans-serif)</option>
  <option value='Didot'>Didot (serif)</option>
  <option value='Ebrima'>Ebrima (sans-serif)</option>
  <option value='Euphemia'>Euphemia (sans-serif)</option>
  <option value='fantasy'>fantasy (generic)</option>
  <option value='\"Franklin Gothic\"'>Franklin Gothic (sans-serif)</option>
  <option value='Garamond'>Garamond (serif)</option>
  <option value='Geneva'>Geneva (sans-serif)</option>
  <option value='Georgia'>Georgia (serif)</option>
  <option value='\"Gill Sans\"'>Gill Sans (sans-serif)</option>
  <option value='\"Goudy Old Style\"'>Goudy Old Style (serif)</option>
  <option value='Helvetica'>Helvetica (sans-serif)</option>
  <option value='Impact'>Impact (sans-serif)</option>
  <option value='Latha'>Latha (sans-serif)</option>
  <option value='\"Lithos Regular\"'>Lithos Regular (sans-serif)</option>
  <option value='\"Lithos Pro Regular\"'>Lithos Pro Regular (sans-serif)</option>
  <option value='\"Lucida Console\"'>Lucida Console (monospace)</option>
  <option value='\"Lucida Sans Unicode\"'>Lucida Sans Unicode (sans-serif)</option>
  <option value='Luminari'>Luminari (fantasy)</option>
  <option value='\"Microsoft Sans Serif\"'>Microsoft Sans Serif (sans-serif)</option>
  <option value='\"Minion Regular\"'>Minion Regular (serif)</option>
  <option value='\"Minion Pro Regular\"'>Minion Pro Regular (serif)</option>
  <option value='Monaco'>Monaco (monospace)</option>
  <option value='monospace'>monospace (generic)</option>
  <option value='\"MS Sans Serif\"'>MS Sans Serif (sans-serif)</option>
  <option value='\"Myriad Pro Regular\"'>Myriad Pro Regular (sans-serif)</option>
  <option value='\"Myriad Web Pro\"'>Myriad Web Pro (sans-serif)</option>
  <option value='\"Neue Helvetica\"'>Neue Helvetica (sans-serif)</option>
  <option value='\"Nueva Std Regular\"'>Nueva Std Regular (serif)</option>
  <option value='Optima'>Optima (sans-serif)</option>
  <option value='Palatino'>Palatino (serif)</option>
  <option value='\"Palatino Linotype\"'>Palatino Linotype (serif)</option>
  <option value='Papyrus'>Papyrus (fantasy)</option>
  <option value='Perpetua'>Perpetua (serif)</option>
  <option value='Rockwell'>Rockwell (serif)</option>
  <option value='sans-serif'>sans-serif (generic)</option>
  <option value='\"Segoe Print\"'>Segoe Print (cursive)</option>
  <option value='\"Segoe Script\"'>Segoe Script (cursive)</option>
  <option value='\"Segoe UI\"'>Segoe UI (sans-serif)</option>
  <option value='serif'>serif (generic)</option>
  <option value='Sylfaen'>Sylfaen (serif)</option>
  <option value='Symbol'>Symbol (serif)</option>
  <option value='Tahoma'>Tahoma (sans-serif)</option>
  <option value='\"Tekton Regular\"'>Tekton Regular (cursive)</option>
  <option value='\"Tekton Pro Regular\"'>Tekton Pro Regular (cursive)</option>
  <option value='Times'>Times (serif)</option>
  <option value='\"Times New Roman\"'>Times New Roman (serif)</option>
  <option value='Trajan'>Trajan (serif)</option>
  <option value='\"Trajan Pro\"'>Trajan Pro (serif)</option>
  <option value='\"Trebuchet MS\"'>Trebuchet MS (sans-serif)</option>
  <option value='Verdana'>Verdana (sans-serif)</option>
  <option value='Webdings'>Webdings (fantacy)</option>";
 public $fontSizeAbsSelectboxOptions ="
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
  <option value='5'>5</option>
  <option value='6'>6</option>
  <option value='7'>7</option>
  <option value='8'>8</option>
  <option value='9'>9</option>
  <option value='10'>10</option>
  <option value='11'>11</option>
  <option value='12'>12</option>
  <option value='13'>13</option>
  <option value='14' selected>14</option>
  <option value='15'>15</option>
  <option value='16'>16</option>
  <option value='17'>17</option>
  <option value='18'>18</option>
  <option value='19'>19</option>
  <option value='20'>20</option>
  <option value='21'>21</option>
  <option value='22'>22</option>
  <option value='23'>23</option>
  <option value='24'>24</option>
  <option value='25'>25</option>
  <option value='26'>26</option>
  <option value='27'>27</option>
  <option value='28'>28</option>
  <option value='29'>29</option>
  <option value='30'>30&nbsp;</option>
  <option value='31'>31</option>
  <option value='32'>32</option>";
 public $fontSizePxPtSelectboxOptions ="
  <option value='px' selected>px&nbsp;</option>
  <option value='pt'>pt</option>";
 public $fontWeightSelectboxOptions ="
  <option value='normal' selected>normal (400)</option>
  <option value='bold'>bold (700)</option>
  <option value='100'>100 (thin)</option>
  <option value='200'>200 (extra/ultra light)</option>
  <option value='300'>300 (light)</option>
  <option value='400'>400 (normal)</option>
  <option value='500'>500 (medium)</option>
  <option value='600'>600 (semi/demi bold)&nbsp;</option>
  <option value='700'>700 (bold)</option>
  <option value='800'>800 (extra/ultra bold)</option>
  <option value='900'>900 (black/heavy)</option>";
 public $fontStyleSelectboxOptions ="
  <option value='normal' selected>normal&nbsp;</option>
  <option value='italic'>italic</option>";
}
