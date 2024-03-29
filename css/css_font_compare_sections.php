<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_font_compare_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/css/css_font_compare.php.
 * Last reviewed/updated: 18 Aug 2023.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>The choice of font is an important decision when designing a web page/site. Therefore, it is useful to be able to compare fonts side by side exactly as they would appear online. In this web page, user selected CSS <code>font</code> property values in Section 2.1 are applied to strings of text in Section 2.2, thereby allowing CSS <code>font</code> property values to be compared side by side online.</p>

     <p>Web browsers do not include fonts. Web browsers use the computer operating system fonts to display text. If an HTML snippet is assigned a CSS style rule that includes the <code>font-family</code> property and the computer operating system has the corresponding font, the web browser displays the HTML snippet using the computer operating system font as specified by the CSS. If an HTML snippet is assigned a CSS style rule that includes the <code>font-family</code> property and the computer operating system does not have the corresponding font, the HTML snippet gets <code>font-family</code> style from the user agent default styles Standard/Default font setting, which for Chrome 115 (see image below), Edge 115, Firefox 116, Opera 101, and Vivaldi 6.1 is set to Times New Roman. For Chrome, click <kbd>Menu (Customize and control Google Chrome) | Settings | Appearance | Customize fonts</kbd>:</p>

    <img src='/images/html_snippet/chrome115_customize_font_standard_font_arrow_680x354.gif' alt='Chrome 115 Standard font' class='box-shadow' />

     <p>Therefore, in the form below, when a <code>font-family</code> property value is selected and the string of text is styled Times New Roman (as shown in the image above), it is because the corresponding font is not installed on the computer operating system.</p>

     <p>Windows and macOS share many fonts, but they also have many different fonts. Therefore, it is a good idea to view this web page to test the fonts you want to use on both Windows and macOS.</p>

     </section>
    <hr />
    <section>

     <h2><a id='selectAndCompare'></a>2. Select And Compare CSS <code>font</code> Property Values Side By Side Online</h2>

     <h3><a id='select'></a>2.1. Select CSS <code>font</code> Property Values</h3>

     <form id='formId'>
      <p>
       <button type='reset' id='resetBtnId' class='btn-md'>Reset</button>
       <button type='button' id='addAnotherBtnId' data-addanothercounter='3' class='btn-md'>Add Another To Compare</button>
      </p>
      <div id='selectFontId1'>
       1.) font-family:
        <select size='1' id='fontFamily_Id1'>
         $reusableCode->fontFamilySelectboxOptions
        </select>&nbsp;&nbsp;
       font-size:
        <select size='1' id='fontSizeAbs_Id1'>
         $reusableCode->fontSizeAbsSelectboxOptions
        </select>&nbsp;&nbsp;
       px or pt:
        <select size='1' id='fontSizePxPt_Id1'>
         $reusableCode->fontSizePxPtSelectboxOptions
        </select>&nbsp;&nbsp;
       font-weight:
        <select size='1' id='fontWeight_Id1'>
         $reusableCode->fontWeightSelectboxOptions
        </select>&nbsp;&nbsp;
       font-style:
        <select size='1' id='fontStyle_Id1'>
         $reusableCode->fontStyleSelectboxOptions
        </select>
      </div>
      <div id='selectFontId2'>
       2.) font-family:
        <select size='1' id='fontFamily_Id2'>
         $reusableCode->fontFamilySelectboxOptions
        </select>&nbsp;&nbsp;
       font-size:
        <select size='1' id='fontSizeAbs_Id2'>
         $reusableCode->fontSizeAbsSelectboxOptions
        </select>&nbsp;&nbsp;
       px or pt:
        <select size='1' id='fontSizePxPt_Id2'>
         $reusableCode->fontSizePxPtSelectboxOptions
        </select>&nbsp;&nbsp;
       font-weight:
        <select size='1' id='fontWeight_Id2'>
         $reusableCode->fontWeightSelectboxOptions
        </select>&nbsp;&nbsp;
       font-style:
        <select size='1' id='fontStyle_Id2'>
         $reusableCode->fontStyleSelectboxOptions
        </select>
      </div>
     </form>
     <br />

     <h3><a id='compare'></a>2.2. Compare CSS <code>font</code> Property Values Side By Side Online</h3>

     <div class='note normal'>If the style of the text does not change when a <code>font-family</code> property value is selected, it is because the corresponding font is not installed on the computer operating system.</div>

     <p id='compareId'>
      <span id='compareFontId1' class='line-height-normal'>1.) <span id='stringId1' style='font-family: &quot;Times New Roman&quot;'>$reusableCode->allCharactersString</span><br /></span>
      <span id='compareFontId2' class='line-height-normal'>2.) <span id='stringId2' style='font-family: &quot;Times New Roman&quot;'>$reusableCode->allCharactersString</span><br /></span>
     </p>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='https://www.w3.org/TR/CSS2/fonts.html'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: 15 Fonts (w3.org)</a></li>
      <li><a href='https://www.w3.org/TR/CSS22/fonts.html'>Cascading Style Sheets Level 2 Revision 2 (CSS 2.2) Specification: 15 Fonts (w3.org)</a></li>
      <li><a href='https://www.w3.org/TR/css-fonts-3/'>CSS Fonts Module Level 3: W3C Recommendation 20 September 2018 (w3.org)</a></li>
      <li><a href='http://www.microsoft.com/typography/AboutFontsOverview.mspx'>Microsoft Typography (microsoft.com)</a></li>
      <li><a href='https://learn.microsoft.com/en-us/typography/fonts/windows_7_font_list'>Windows 7 Font List (learn.microsoft.com)</a></li>
      <li><a href='https://learn.microsoft.com/en-us/typography/fonts/windows_8_font_list'>Windows 8 Font List (learn.microsoft.com)</a></li>
      <li><a href='https://learn.microsoft.com/en-us/typography/fonts/windows_81_font_list'>Windows 8.1 Font List (learn.microsoft.com)</a></li>
      <li><a href='https://learn.microsoft.com/en-us/typography/fonts/windows_10_font_list'>Windows 10 Font List (learn.microsoft.com)</a></li>
      <li><a href='https://learn.microsoft.com/en-us/typography/fonts/windows_11_font_list'>Windows 11 Font List (learn.microsoft.com)</a></li>
     </ul>

    </section>";
