/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/css_font_compare.js.
 * Purpose: Change web page content when; 1.) select CSS font property value, 2.) click Reset button, and 3.) click Add Another To Compare button.
 * Used in: css_font_compare.php.
 * Last reviewed/updated: 18 Aug 2023.
 * Published: 23 Jan 2014.
 * Unobtrusive: 1.) decouple HTML/JavaScript: a.) no register JavaScript event handlers in HTML via HTML attributes (eg, onload and onclick), and b.) no embed JavaScripts in HTML via HTML script element; 2.) as reasonable, decouple CSS/JavaScript. Eg, as reasonable, use JavaScript to change HTML class attribute value assignments (loose coupling), not use JavaScript to change JavaScript style object CSS property value assignments (tight coupling); and 3.) no define JavaScript variables and functions on JavaScript global scope. In this file, use of JavaScript style object is deemed reasonable. Instead, in future, perhaps decouple the HTML from within this file.
 * Web browser support: IE11+, ED12+, FF8+, SM2.5+, SF5.1+, CH7+, OP11.10+, which corresponds to dataset property support (IE11+, SF5.1+, CH7+, OP11.10+) and insertAdjacentHTML() method support (FF8+, SM2.5+).
 * Objects: CssFontCompareUtil.
 * cursive (aka script), fantasy (aka decorative), monospace, serif, sans-seric  = (generic) = all lower case. */

/* -------------------- JAVASCRIPT OBJECT DEFINITIONS -------------------- */

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

var CssFontCompareUtil = {
 // Method: CssFontCompareUtil.displayFont().
 // Purpose: Handler for CssFontCompareUtil.form change event. Handler for select CSS font property value in form. When select CSS font property value in form, get CSS font property value and set it on comparison string of text.
 displayFont: function(event){
  // Get reference to changed selection box id.
  var changedSelectionBoxId = event.target.id; // Gets fontProperty_Id#.
  // Split fontProperty_Id# into fontProperty and #.
  var splitter = changedSelectionBoxId.indexOf("_");
  var changedFontProperty = changedSelectionBoxId.substring(0, splitter); // Gets fontProperty.
  var changedNum = changedSelectionBoxId.slice(splitter + 3); // Gets #.
  // For changed fontFamily value, fontWeight value, and fontStyle value, get the selected value.
  if ((changedFontProperty === "fontFamily") || (changedFontProperty === "fontWeight") || (changedFontProperty === "fontStyle")){
   // Get reference to changed selection box.
   var changedSelectionBox = event.target; // = [object HTMLSelectElement]
   // From changed selection box, get selected option.
   var selectedOption = changedSelectionBox.options[changedSelectionBox.selectedIndex];
   // From selected option, get selected value.
   var selectedValue = selectedOption.value;
   var selectedProperty = changedFontProperty;
  // The fontSize value comes from the concatenation of two separate form element values, the fontSizeAbs value and the fontSizePxPt value.  Therefore, a slightly different technique is required to get the fontSize value. For changed fontSizeAbs value OR fontSizePxPt value, get current fontSizeAbs value AND fontSizePxP value, and concatenate.
  } else if ((changedFontProperty === "fontSizeAbs") || (changedFontProperty === "fontSizePxPt")){
   // Get reference to both fontSize-related selection boxes.
   var fontSizeAbsSelectionBox = document.getElementById("fontSizeAbs_Id" + changedNum);
   var fontSizePxPtSelectionBox = document.getElementById("fontSizePxPt_Id" + changedNum);
   // From both fontSize-related selection boxes, get currently selected options.
   var fontSizeAbsSelectedOption = fontSizeAbsSelectionBox.options[fontSizeAbsSelectionBox.selectedIndex];
   var fontSizePxPtSelectedOption = fontSizePxPtSelectionBox.options[fontSizePxPtSelectionBox.selectedIndex];
   // From selected options, get selected values and concatenate.
   var selectedValue = fontSizeAbsSelectedOption.value + fontSizePxPtSelectedOption.value;
   var selectedProperty = "fontSize";
  }
  // Set user selected web font properties value on comparison string of text.
  var string = document.getElementById("stringId" + changedNum);
  switch (selectedProperty){
   case "fontFamily":
    string.style.fontFamily = selectedValue;
    break;
   case "fontSize":
    string.style.fontSize = selectedValue;
    break;
   case "fontWeight":
    string.style.fontWeight = selectedValue;
    break;
   case "fontStyle":
    string.style.fontStyle = selectedValue;
    break;
   default:
    alert("There was a problem processing the request. Error report - File: css_font_compare.js. Object: CssFontCompareUtil. Method: displayFont(). Line: 63. Issue: selectedProperty value not matched by switch cases.");
  }
 },
 // Method: CssFontCompareUtil.reset().
 // Purpose: Handler for CssFontCompareUtil.resetBtn click event. Handler for click Reset button. When click form Reset button, reset comparison strings of text to default.
 // NOTE: 1.) IE, FF, and SM retain manually and programmatically entered web page form element content upon F5 (Refresh/Reload), thereby not returning web page form element content to defaults upon F5 (Refresh/Reload). SF, CH, and OP remove manually and programmatically entered web page form element content upon F5 (Refresh/Reload), thereby returning web page form element content to defaults upon F5 (Refresh/Reload). All of the aforementioned web browsers remove programmatically displayed web page non-form element content upon F5 (Refresh/Reload), thereby returning programmatically displayed web page non-form element content to defaults upon F5 (Refresh/Reload). For more on this see web_browser_retain_remove_content_f5.html. In other words, in IE, FF, and SM, F5 (Refresh/Reload) returns the comparison strings of text to default, not the web page form element content to defaults. Therefore, to return the web page form element content to defaults, use form reset button, not F5 (Refresh/Reload). 2.) Form reset button (ie, reset button nested inside <form></form>) default behavior is to reset web page form element content to defaults, not to reset comparison strings of text to default. Therefore, need a way to reset comparison strings of text to default when user clicks form reset button. The CssFontCompareUtil.reset() method resets comparison strings of text to default when user clicks form reset button.
 reset: function(){
  // Get reference to element used with HTML attribute data-abcxyz/JavaScript property dataset.abcxyz as Add Another counter.
  var addAnotherBtn = document.getElementById("addAnotherBtnId");
  // Get Add Another counter value. addanothercountdata value is incremented at end of FontForWebCompareUtil.addAnother(). Therefore, current number of displayed compare items is one less than addanothercountdata value.
  var count = (addAnotherBtn.dataset.addanothercounter - 1);
  for (var i = 1; i <= count; i++){
   var string = document.getElementById("stringId" + i);
   string.style.fontFamily = "Times New Roman";
   string.style.fontSize = "14px";
   string.style.fontWeight = "normal";
   string.style.fontStyle = "normal";
  }
 },
 // Method: CssFontCompareUtil.addAnother().
 // Purpose: Handler for CssFontCompareUtil.addAnotherBtn click event. Handler for click Add Another To Compare button. When click Add Another To Compare button, insert another set of CSS font property value form elements and another comparison string of text after existing ones.
 addAnother: function(){
  // Get reference to elements used with insertAdjacentHTML("beforeend", ).
  var form = document.getElementById("formId");
  var compare = document.getElementById("compareId");
  // Get reference to element used with HTML attribute data-abcxyz/JavaScript property dataset.abcxyz as Add Another counter.
  var addAnotherBtn = document.getElementById("addAnotherBtnId");
  // Get Add Another counter value.
  var n = addAnotherBtn.dataset.addanothercounter;
  // HTML to be inserted when click Add Another To Compare button.
  var insertFormItem = "<div id='selectFontId" + n + "' class=''>" +
  n + ".) font-family: " +
  "<select size='1' id='fontFamily_Id" + n + "'>" +
   "<option value='Arial'>Arial (sans-serif)</option>" +
   "<option value='Baskerville'>Baskerville (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Bodoni MT'\">Bodoni MT (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Book Antiqua'\">Book Antiqua (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Calibri'>Calibri (sans-serif)</option>" +
   "<option value=\"'Calisto MT'\">Calisto MT (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Cambria'>Cambria (serif)</option>" +
   "<option value='Candara'>Candara (sans-serif)</option>" +
   "<option value=\"'Century Gothic'\">Century Gothic (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Comic Sans MS'\">Comic Sans MS (cursive)</option>" +
   "<option value='Consolas'>Consolas (monospace)</option>" +
   "<option value='Constantia'>Constantia (serif)</option>" +
   "<option value='Copperplate'>Copperplate (fantacy)</option>" + // Not on Windows 10 v22H2.
   "<option value='Courier'>Courier (monospace)</option>" +
   "<option value=\"'Courier New'\">Courier New (monospace)</option>" +
   "<option value='cursive'>cursive (generic)</option>" +
   "<option value=\"'Dejavu Sans'\">Dejavu Sans (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Didot'>Didot (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Ebrima'>Ebrima (sans-serif)</option>" +
   "<option value='Euphemia'>Euphemia (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='fantasy'>fantasy (generic)</option>" +
   "<option value=\"'Franklin Gothic'\">Franklin Gothic (sans-serif)</option>" +
   "<option value='Garamond'>Garamond (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Geneva'>Geneva (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Georgia'>Georgia (serif)</option>" +
   "<option value=\"'Gill Sans'\">Gill Sans (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Goudy Old Style'\">Goudy Old Style (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Helvetica'>Helvetica (sans-serif)</option>" +
   "<option value=\"'Helvetica Neue'\">Helvetica Neue (sans-serif)</option>" + // Not on Windows 10 v22H2. AKA Neue Helvetica below.
   "<option value='Impact'>Impact (sans-serif)</option>" +
   "<option value='Latha'>Latha (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Lithos Regular'\">Lithos Regular (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Lithos Pro Regular'\">Lithos Pro Regular (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Lucida Console'\">Lucida Console (monospace)</option>" +
   "<option value=\"'Lucida Sans Unicode'\">Lucida Sans Unicode (sans-serif)</option>" +
   "<option value='Luminari'>Luminari (fantasy)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Merriweather Regular'\">Merriweather Regular (serif)</option>" + // Not on Windows 10 v22H2. Nor is Merriweather.
   "<option value=\"'Microsoft Sans Serif'\">Microsoft Sans Serif (sans-serif)</option>" +
   "<option value=\"'Minion Regular'\">Minion Regular (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Minion Pro Regular'\">Minion Pro Regular (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Monaco'>Monaco (monospace)</option>" +
   "<option value='monospace'>monospace (generic)</option>" +
   "<option value='Montserrat'>Montserrat (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'MS Sans Serif'\">MS Sans Serif (sans-serif)</option>" +
   "<option value=\"'Myriad Pro Regular'\">Myriad Pro Regular (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Myriad Web Pro'\">Myriad Web Pro (sans-serif)</option>" +
   "<option value=\"'Neue Helvetica'\">Neue Helvetica (sans-serif)</option>" + // Not on Windows 10 v22H2. AKA Helvetica Neue above.
   "<option value=\"'Nueva Std Regular'\">Nueva Std Regular (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Optima'>Optima (sans-serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Palatino'>Palatino (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Palatino Linotype'\">Palatino Linotype (serif)</option>" +
   "<option value='Papyrus'>Papyrus (fantasy)</option>" + // Not on Windows 10 v22H2.
   "<option value='Perpetua'>Perpetua (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='Rockwell'>Rockwell (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value='sans-serif'>sans-serif (generic)</option>" +
   "<option value=\"'Segoe Print'\">Segoe Print (cursive)</option>" +
   "<option value=\"'Segoe Script'\">Segoe Script (cursive)</option>" +
   "<option value=\"'Segoe UI'\">Segoe UI (sans-serif)</option>" +
   "<option value='serif'>serif (generic)</option>" +
   "<option value='Sylfaen'>Sylfaen (serif)</option>" +
   "<option value='Symbol'>Symbol (serif)</option>" +
   "<option value='Tahoma'>Tahoma (sans-serif)</option>" +
   "<option value=\"'Tekton Regular'\">Tekton Regular (cursive)</option>" + // Not on Windows 10 v22H2. Perhaps not cursive?
   "<option value=\"'Tekton Pro Regular'\">Tekton Pro Regular (cursive)</option>" + // Not on Windows 10 v22H2. Perhaps not cursive?
   "<option value='Times'>Times (serif)</option>" + // Not on Windows 10 v22H2, or identical to serif.
   "<option value=\"'Times New Roman'\" selected>Times New Roman (serif)</option>" + // Not on Windows 10 v22H2, or identical to serif.
   "<option value=\"'Trajan Regular'\">Trajan Regular (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Trajan Pro Regular'\">Trajan Pro Regular (serif)</option>" + // Not on Windows 10 v22H2.
   "<option value=\"'Trebuchet MS'\">Trebuchet MS (sans-serif)</option>" +
   "<option value='Verdana'>Verdana (sans-serif)</option>" +
   "<option value='Webdings'>Webdings (fantacy)</option>" +
  "</select>&nbsp;&nbsp; " +
  "font-size: " +
  "<select size='1' id='fontSizeAbs_Id" + n + "'>" +
   "<option value='1'>1</option>" +
   "<option value='2'>2</option>" +
   "<option value='3'>3</option>" +
   "<option value='4'>4</option>" +
   "<option value='5'>5</option>" +
   "<option value='6'>6</option>" +
   "<option value='7'>7</option>" +
   "<option value='8'>8</option>" +
   "<option value='9'>9</option>" +
   "<option value='10'>10</option>" +
   "<option value='11'>11</option>" +
   "<option value='12'>12</option>" +
   "<option value='13'>13</option>" +
   "<option value='14' selected>14</option>" +
   "<option value='15'>15</option>" +
   "<option value='16'>16</option>" +
   "<option value='17'>17</option>" +
   "<option value='18'>18</option>" +
   "<option value='19'>19</option>" +
   "<option value='20'>20</option>" +
   "<option value='21'>21</option>" +
   "<option value='22'>22</option>" +
   "<option value='23'>23</option>" +
   "<option value='24'>24</option>" +
   "<option value='25'>25</option>" +
   "<option value='26'>26</option>" +
   "<option value='27'>27</option>" +
   "<option value='28'>28</option>" +
   "<option value='29'>29</option>" +
   "<option value='30'>30&nbsp;</option>" +
   "<option value='31'>31</option>" +
   "<option value='32'>32</option>" +
  "</select>&nbsp;&nbsp; " +
  "px or pt: " +
  "<select size='1' id='fontSizePxPt_Id" + n + "'>" +
   "<option value='px' selected>px&nbsp;</option>" +
   "<option value='pt'>pt</option>" +
   "</select>&nbsp;&nbsp; " +
   "font-weight: " +
  "<select size='1' id='fontWeight_Id" + n + "'>" +
   "<option value='normal' selected>normal (400)</option>" +
   "<option value='bold'>bold (700)</option>" +
   "<option value='100'>100 (thin)</option>" +
   "<option value='200'>200 (extra/ultra light)</option>" +
   "<option value='300'>300 (light)</option>" +
   "<option value='400'>400 (normal)</option>" +
   "<option value='500'>500 (medium)</option>" +
   "<option value='600'>600 (semi/demi bold)&nbsp;</option>" +
   "<option value='700'>700 (bold)</option>" +
   "<option value='800'>800 (extra/ultra bold)</option>" +
   "<option value='900'>900 (black/heavy)</option>" +
  "</select>&nbsp;&nbsp; " +
  "font-style: " +
  "<select size='1' id='fontStyle_Id" + n + "'>" +
   "<option value='normal' selected>normal&nbsp;</option>" +
   "<option value='italic'>italic</option>" +
  "</select>" +
  "</div>";
  var insertCompareItem = "<span id='compareFontId" + n + "' class='line-height-normal'>" + n + ".) <span id='stringId" + n + "' style='font-family: &quot;Times New Roman&quot;'>The quick brown fox jumps over the lazy dog THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG 1234567890 `~!@#$%^&amp;*-_=+()\\/[]{}&lt;&gt;;:'|&quot;,.?</span><br /></span>";
  form.insertAdjacentHTML("beforeend", insertFormItem);
  compare.insertAdjacentHTML("beforeend", insertCompareItem);
  var incrementAddAnotherCounter = ++n;
  addAnotherBtn.dataset.addanothercounter = incrementAddAnotherCounter;
 },
 // Get reference to elements in order to register event handlers. Remember elements (including the form element) accept events from child elements (including child elements of the form element) via event bubbling.
 form: document.getElementById("formId"),
 resetBtn: document.getElementById("resetBtnId"),
 addAnotherBtn: document.getElementById("addAnotherBtnId")
};

// Register event handlers. EventUtil is in library_load_in_body.js.
EventUtil.registerEventHandler(CssFontCompareUtil.form, "change", CssFontCompareUtil.displayFont);
EventUtil.registerEventHandler(CssFontCompareUtil.resetBtn, "click", CssFontCompareUtil.reset);
EventUtil.registerEventHandler(CssFontCompareUtil.addAnotherBtn, "click", CssFontCompareUtil.addAnother);
