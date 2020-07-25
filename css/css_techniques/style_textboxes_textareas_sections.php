<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css_techniques/style_textboxes_textareas_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/css_techniques/style_textboxes_textareas.php.
 * Last reviewed/updated: 04 Apr 2019.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Compared to selectboxes, checkboxes, and radio buttons, styling textboxes and textareas with CSS is rather straight forward. However, to style textboxes and textareas identically cross-browser, there are some subtle cross-browser differences to take into consideration.</p>

<!-- Start same content block 1 in web_browser_support_placeholder.php. -->

     <p>Concerning HTML, textboxes use the <code>input</code> element with the <code>type=&quot;text&quot;</code> attribute and textareas use the <code>textarea</code> element. The textbox <code>input</code> element, the textbox <code>input</code> element with the <code>type=&quot;text&quot;</code> attribute, and the textarea <code>textarea</code> element are referred to as the textbox/textarea elements. Concerning CSS, the selectors for textboxes are the <code>input</code> type selector and, with more specificity, the <code>input[type=&quot;text&quot;]</code> attribute selector, and the selector for textareas is the <code>textarea</code> type selector. The textbox <code>input</code> selector, the textbox <code>input[type=&quot;text&quot;]</code> selector, and the textarea <code>textarea</code> selector are referred to as the textbox/textarea selectors.</p>

<!-- End same content block 1 in web_browser_support_placeholder.php. -->

     <h3><a id='uaStylesOnTextboxesTextareas'></a>1.1. User Agent Styles For The <code>font-family</code>, <code>font-size</code>, And <code>color</code> Properties On Textboxes And Textareas</h3>

     <p>The styles for the <code>font-family</code>, <code>font-size</code>, and <code>color</code> properties (and others) on textboxes and textareas are not inherited from the author <code>body</code> style rule. Instead, they come from the user agent styles. The user agent styles for the <code>font-family</code>, <code>font-size</code>, and <code>color</code> properties on textboxes and textareas:</p>

<!-- Test file: http://www.learnwebcoding.com/css/css_techniques/style_textboxes_textareas/zz_default_preentered_text_test.html file, which has textbox and textarea default/pre-entered text. -->

     <table>
      <caption>User Agent Styles For The <code>font-family</code>, <code>font-size</code>, And <code>color</code> Properties On Textboxes And Textareas</caption>
      <thead>
       <tr>
        <th>Textbox / Textarea</th>
        <th>IE11 <a id='1_uaStylesTextboxesTextareasText_return'></a><a href='#1_uaStylesTextboxesTextareasText'>(1)</a></th>
        <th>ED13 <a id='2_uaStylesTextboxesTextareasText_return'></a><a href='#2_uaStylesTextboxesTextareasText'>(2)</a></th>
        <th>FF47</th>
        <th>CH51</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Textbox</td>
        <td>
<pre>
font-family: arial;
font-size: 13.33px;
color: rgba(33,33,33);
</pre>
        </td>
        <td>
<pre>
font-family: arial;
font-size: 13.33px;
color: rgba(33,33,33);
</pre>
        </td>
        <td>
<pre>
input {
  font-family: &quot;ms shell dlg&quot;;
  font-size: 13.3333px;
  color: rgb(0,0,0);
}
</pre>
        </td>
        <td>
<pre>
input {
  font-family: arial;
  font-size: 13.3333px;
  color: rgb(0,0,0);
}
</pre>
        </td>
       </tr>
       <tr>
        <td>Textarea</td>
        <td>
<pre>
textarea {
  font-family: &quot;courier new&quot;;
  font-size: 13.33px;
  color: rgba(33,33,33);
}
</pre>
        </td>
        <td>
<pre>
textarea {
  font-family: &quot;courier new&quot;;
  font-size: 13.33px;
  color: rgba(33,33,33);
}
</pre>
        </td>
        <td>
<pre>
textarea {
  font-family: &quot;courier new&quot;;<!-- Actual style is font-family: monospace, which in FF Tools | Options | Content | Advanced maps to courier new. -->
  font-size: 13px;
  color: rgb(0,0,0);
}
</pre>
        </td>
        <td>
<pre>
textarea {
  font-family: consolas;<!-- Actual style is font-family: monospace, which in CH Settings | Show advanced settings | Web content | Customize fonts | Fixed-width font maps to consolas. -->
  font-size: 13.3333px;
  color: rgb(0,0,0);
}
</pre>
        </td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='5'>
         <a id='1_uaStylesTextboxesTextareasText'></a><a href='#1_uaStylesTextboxesTextareasText_return'>(1)</a> <a id='2_uaStylesTextboxesTextareasText'></a><a href='#2_uaStylesTextboxesTextareasText_return'>(2)</a> The IE and ED DOM explorers list the user agent styles, not the user agent selectors. As there are two possible selectors for textboxes (<code>input</code> and <code>input[type=&quot;text&quot;]</code>), the IE and ED user agent selector for textbox styles cannot be determined. As there is only one possible selector for textareas (<code>textarea</code>), the IE and ED user agent selector for textarea styles is <code>textarea</code>.
        </td>
       </tr>
      </tfoot>
     </table>

     <p>The user agent styles for the <code>font-family</code>, <code>font-size</code>, and <code>color</code> properties on textboxes and textareas are different cross-browser. Therefore, to style textboxes and textareas identically cross-browser, it is necessary to style the <code>font-family</code>, <code>font-size</code>, and <code>color</code> properties of the textbox/textarea selectors.</p>

<!-- Start same content block 2 in web_browser_support_placeholder.php. -->

     <h3><a id='htmlPlaceholderAttribute'></a>1.2. The HTML <code>placeholder</code> Attribute</h3>

     <p>The HTML <code>placeholder</code> attribute is a commonly used optional attribute for textboxes and textareas. The textbox/textarea <code>placeholder</code> attribute value is displayed in the textbox/textarea as temporary placeholder text until, depending upon the web browser, the textbox/textarea receive focus or text is entered into the textbox/textarea.</p>

     <h4><a id='htmlPlaceholderAttributeSupportResultsTable'></a>1.2.1. Web Browser Support For The HTML <code>placeholder</code> Attribute On Textboxes And Textareas</h4>

     <table>
      <caption>Web Browser Support For The HTML <code>placeholder</code> Attribute On Textboxes And Textareas</caption>
      <thead>
       <tr>
        <th>Textbox / Textarea Element</th>
        <th>IE Support</th>
        <th>ED Support</th>
        <th>FF Support</th>
        <th>SF Support</th>
        <th>CH Support</th>
        <th>OP Support</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>
         <ul>
          <li>Textbox <code>input</code> element.</li>
          <li>Textbox <code>input</code> element with <code>type=&quot;text&quot;</code> attribute.</li>
         </ul>
        </td>
        <td>IE10+</td>
        <td>ED12+</td>
        <td>FF4+</td>
        <td>SF3.1+</td>
        <td>CH2+</td>
        <td>OP11+</td>
       </tr>
       <tr>
        <td>Textarea <code>textarea</code> element</td>
        <td>IE10+</td>
        <td>ED12+</td>
        <td>FF4+</td>
        <td>SF5+</td>
        <td>CH4+</td>
        <td>OP11.50+</td>
       </tr>
      </tbody>
     </table>

<!-- End same content block 2 in web_browser_support_placeholder.php. -->

     <p>Web browser support for the HTML <code>placeholder</code> attribute on textboxes and textareas is different cross-browser. Therefore, to style textboxes and textareas identically cross-browser, it is necessary to keep in mind the web browser support for the HTML <code>placeholder</code> attribute on textboxes and textareas.</p>

<!-- Start same content block 3 in web_browser_support_placeholder.php. -->

     <h3><a id='stylingPlaceholderText'></a>1.3. The CSS Selectors For Styling The Placeholder Text</h3>

     <p>The following CSS selectors can be used to style the placeholder text:</p>

      <ul>
       <li>The previously described textbox/textarea selectors (<code>input</code>, <code>input[type=&quot;text&quot;]</code>, and <code>textarea</code>).</li>
       <li>The textbox <code>input[placeholder]</code> attribute selector and the textarea <code>textarea[placeholder]</code> attribute selector. The textbox <code>input[placeholder]</code> selector and the textarea <code>textarea[placeholder]</code> selector are referred to as the textbox/textarea placeholder attribute selectors. The textbox/textarea placeholder attribute selectors are typically not used to style the placeholder text.</li>
       <li>The web browser vendor prefix pseudo-class selectors (<code>:-ms-input-placeholder</code> and <code>:-moz-placeholder</code>), the web browser vendor prefix pseudo-element selectors (<code>::-ms-input-placeholder</code>, <code>::-moz-placeholder</code>, and <code>::-webkit-input-placeholder</code>), and the W3C proposed web browser vendor independent pseudo-element selector (<code>::placeholder</code>). These selectors are referred to as the CSS <code>*placeholder</code> selectors.</li>
      </ul>

     <p>The styles of the CSS <code>*placeholder</code> selectors override the styles of the textbox/textarea selectors and the textbox/textarea placeholder attribute selectors.</p>

     <h3><a id='cssPlaceholderSelectors'></a>1.4. The CSS <code>*placeholder</code> Selectors</h3>

     <p>The CSS <code>*placeholder</code> selectors can be used to style the placeholder text in the following ways:</p>

     <ul>
      <li>With more specificity, appended to the textbox/textarea selectors. For example, the <code>::-ms-input-placeholder</code> selector appended to the textbox <code>input</code> selector:
<pre>
input::-moz-placeholder {
  opacity: 0.54;
}
</pre>
      </li>
      <li>With less specificity, as standalone selectors. For example, the <code>::-webkit-input-placeholder</code> selector as a standalone selector:
<pre>
::-webkit-input-placeholder {
  color: rgb(169,169,169);
}
</pre>
       <div class='note normal'>The <code>*placeholder</code> selectors as standalone selectors are equivalent to the <code>*placeholder</code> selectors appended to the universal <code>*</code> selector. For example, the <code>::-webkit-input-placeholder</code> selector is equivalent to the <code>*::-webkit-input-placeholder</code> selector.</div>
      </li>
     </ul>

     <h4><a id='cssPlaceholderSelectorsSupportResultsTable'></a>1.4.1. Web Browser Support For The CSS <code>*placeholder</code> Selectors On Textboxes And Textareas</h4>

     <table>
      <caption>Web Browser Support For The CSS <code>*placeholder</code> Selectors On Textboxes And Textareas</caption>
      <thead>
       <tr>
        <th>How Used (Appended To / As Standalone)</th>
        <th>CSS <code>*placeholder</code> Selector</th>
        <th>IE Support</th>
        <th>ED Support</th>
        <th>FF Support</th>
        <th>SF Support</th>
        <th>CH Support</th>
        <th>OP Support</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td rowspan='6'>
         <ul>
          <li>Appended to textbox <code>input</code> selector.</li>
          <li>Appended to textbox <code>input[type=&quot;text&quot;]</code> selector.</li>
          <li>Standalone on textbox <code>input</code> element.</li>
          <li>Standalone on textbox <code>input</code> element with <code>type=&quot;text&quot;</code> attribute.</li>
         </ul>
        </td>
        <td><code>:-ms-input-placeholder</code></td>
        <td>IE10+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-ms-input-placeholder</code></td>
        <td>-</td>
        <td>ED12+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>:-moz-placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>FF4 - 18</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-moz-placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>FF19+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-webkit-input-placeholder</code></td>
        <td>-</td>
        <td>ED12+</td>
        <td>-</td>
        <td>SF4+</td>
        <td>CH2+</td>
        <td>OP15+</td>
       </tr>
       <tr>
        <td><code>::placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td rowspan='6'>
         <ul>
          <li>Appended to textarea <code>textarea</code> selector.</li>
          <li>Standalone on textarea <code>textarea</code> element.</li>
         </ul>
        </td>
        <td><code>:-ms-input-placeholder</code></td>
        <td>IE10+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-ms-input-placeholder</code></td>
        <td>-</td>
        <td>ED12+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>:-moz-placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>FF4 - 18</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-moz-placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>FF19+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
       <tr>
        <td><code>::-webkit-input-placeholder</code></td>
        <td>-</td>
        <td>ED12+</td>
        <td>-</td>
        <td>SF5+</td>
        <td>CH4+</td>
        <td>OP15+</td>
       </tr>
       <tr>
        <td><code>::placeholder</code></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
      </tbody>
     </table>

<!-- End same content block 3 in web_browser_support_placeholder.php. -->

     <p>Web browser support for the CSS <code>*placeholder</code> selectors on textboxes and textareas is different cross-browser. Therefore, to style the placeholder text identically cross-browser, it is necessary to keep in mind the web browser support for the CSS <code>*placeholder</code> selectors on textboxes and textareas.</p>

     <h3><a id='uaStylesPlaceholderTextOnTextboxesTextareas'></a>1.5. User Agent Styles For The <code>font-family</code>, <code>font-size</code>, <code>color</code>, And <code>opacity</code> Properties For The Placeholder Text On Textboxes And Textareas</h3>

     <p>The styles for the <code>font-family</code>, <code>font-size</code>, <code>color</code>, and <code>opacity</code> properties (and others) for the placeholder text on the textbox/textarea selectors are not inherited from the author <code>body</code> style rule. Instead, they come from the user agent styles. The user agent styles for the <code>font-family</code>, <code>font-size</code>, <code>color</code>, and <code>opacity</code> properties for the placeholder text on textboxes and textareas:</p>

<!-- Test files: 1.) http://www.learnwebcoding.com/css/css_techniques/style_textboxes_textareas/zz_default_preentered_text_test.html, which has textbox and textarea default/pre-entered text; 2.) http://www.learnwebcoding.com/css/css_techniques/style_textboxes_textareas/zz_placeholder_attribute_text_test.html, which has examples of placeholder text not styled; 3.) http://www.learnwebcoding.com/css/css_techniques/style_textboxes_textareas/zz_placeholder_attribute_text_styled_with_ms_input_placeholder_pseudo_class_test.html, which has examples of placeholder text styled with the ::-ms-input-placeholder selector; and 4.) http://www.learnwebcoding.com/css/css_techniques/style_textboxes_textareas/zz_placeholder_attribute_text_styled_with_webkit_input_placeholder_pseudo_class_test.html, which has examples of placeholder text styled with the ::-webkit-input-placeholder selector. -->

<!-- To display FF user agent ::-moz-placeholder selector styles, in DOM explorer Rules pane, click arrow next to Pseudo-elements to expand | Styles for ::-moz-placeholder appear in Rules pane. Also, point FF40 - 47 to resource://gre-resources/forms.css and/or FF47 to view-source:resource://gre-resources/forms.css and then look for the ::-moz-placeholder selector styles. -->

<!-- To display CH user agent ::webkit-input-placeholder selector styles: Open Developer tools | Customize and control DevTools | Settings | Under Elements check Show user agent shadow DOM | In DOM explorer, arrow now appears next to node | click on arrow next to node to expand and repeat as needed to fully expand | click on line to select div pseudo='webkit-input-placeholder' | Styles for ::webkit-input-placeholder appear in Styles pane. -->

     <table>
      <caption>User Agent Styles For The <code>font-family</code>, <code>font-size</code>, <code>color</code>, And <code>opacity</code> Properties For The Placeholder Text On Textboxes And Textareas</caption>
      <thead>
       <tr>
        <th>Textbox / Textarea</th>
        <th>IE11 <a id='1_uaStylesPlaceholderText_return'></a><a href='#1_uaStylesPlaceholderText'>(1)</a></th>
        <th>ED13 <a id='2_uaStylesPlaceholderText_return'></a><a href='#2_uaStylesPlaceholderText'>(2)</a></th>
        <th>FF47</th>
        <th>CH51</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td>Textbox</td>
        <td>
<pre>
font-family: arial;
font-size: 13.33px;
color: rgba(0,0,0,0.6);
</pre>
        </td>
        <td>
<pre>
font-family: arial;
font-size: 13.33px;
color: rgba(0,0,0,0.6); <a id='3_uaStylesPlaceholderText_return'></a><a href='#3_uaStylesPlaceholderText'>(3)</a>
</pre>
        </td>
        <td>
<pre>
input {
  font-family: &quot;ms shell dlg&quot;;
  font-size: 13.3333px;
  color: rgb(0,0,0);
}
input::-moz-placeholder {
  opacity: 0.54;
}
</pre>
        </td>
        <td>
<pre>
input {
  font-family: arial;
  font-size: 13.3333px;
  <s>color: rgb(0,0,0);</s>
}
::webkit-input-placeholder {
  color: rgb(169,169,169);
}
</pre>
        </td>
       </tr>
       <tr>
        <td>Textarea</td>
        <td>
<pre>
textarea }
  font-family: &quot;courier new&quot;;
  font-size: 13.33px;
  color: rgba(0,0,0,0.6);
}
</pre>
        </td>
        <td>
<pre>
textarea {
  font-family: &quot;courier new&quot;;
  font-size: 13.33px;
  color: rgba(0,0,0,0.6); <a id='4_uaStylesPlaceholderText_return'></a><a href='#4_uaStylesPlaceholderText'>(4)</a>
}
</pre>
        </td>
        <td>
<pre>
textarea {
  font-family: &quot;courier new&quot;;<!-- Actual style is font-family: monospace, which in FF Tools | Options | Content | Advanced maps to courier new. -->
  font-size: 13px;
  color: rgb(0,0,0);
}
textarea::-moz-placeholder {
  opacity: 0.54;
}
</pre>
        </td>
        <td>
<pre>
textarea {
  font-family: consolas;<!-- Actual style is font-family: monospace, which in CH Settings | Show advanced settings | Web content | Customize fonts | Fixed-width font maps to consolas. -->
  font-size: 13.3333px;
  <s>color: rgb(0,0,0);</s>
}
::webkit-input-placeholder {
  color: rgb(169,169,169);
}
</pre>
        </td>
       </tr>
      </tbody>
      <tfoot>
       <tr>
        <td colspan='5'>
         <a id='1_uaStylesPlaceholderText'></a><a href='#1_uaStylesPlaceholderText_return'>(1)</a> <a id='2_uaStylesPlaceholderText'></a><a href='#2_uaStylesPlaceholderText_return'>(2)</a> The IE and ED DOM explorers list the user agent styles, not the user agent selectors. As there are two possible selectors for textboxes (<code>input</code> and <code>input[type=&quot;text&quot;]</code>), the IE and ED user agent selector for textbox styles cannot be determined. As there is only one possible selector for textareas (<code>textarea</code>), the IE and ED user agent selector for textarea styles is <code>textarea</code>.<br />
         <a id='3_uaStylesPlaceholderText'></a><a href='#3_uaStylesPlaceholderText_return'>(3)</a> <a id='4_uaStylesPlaceholderText'></a><a href='#4_uaStylesPlaceholderText_return'>(4)</a> The ED user agent style for the <code>color</code> property appears to be the same as IE, which is <code>color: rgba(0,0,0,0.6)</code>. However, the ED12+ DOM explorer lists the user agent style for the <code>color</code> property as <code>color: rgb(33,33,33)</code>, which is too dark, and it does not list the <code>::-ms-input-placeholder</code> and <code>::-webkit-input-placeholder</code> selectors, which seems odd. Therefore, instead of listing the known incorrect <code>color: rgb(33,33,33)</code> style, the likely correct <code>color: rgba(0,0,0,0.6)</code> style is listed.
        </td>
       </tr>
      </tfoot>
     </table>

     <p>The user agent styles for the <code>font-family</code>, <code>font-size</code>, <code>color</code>, and <code>opacity</code> properties for the placeholder text on textboxes and textareas are different cross-browser. Therefore, to style the placeholder text identically cross-browser, it is necessary to style the <code>font-family</code>, <code>font-size</code>, <code>color</code>, and <code>opacity</code> properties for the placeholder text on the textbox/textarea selectors and the CSS <code>*placeholder</code> selectors.</p>

     <h3><a id='demo'></a>1.6. Demonstration And CodePen</h3>

     <ul>
      <li>Demonstration: <a href='/css/css_techniques/style_textboxes_textareas/style_textboxes_textareas.html'>CSS Technique: Style Textboxes And Textareas (learnwebcoding.com)</a>.</li>
      <li>CodePen: <a href='https://codepen.io/learnwebcoding/pen/mPQOBe'>CSS Technique: Style Textboxes And Textareas (codepen.io/learnwebcoding/)</a>.</li>
     </ul>

     <h3><a id='support'></a>1.7. Web Browser Support</h3>

     <p>Web browser support*: IE8+, ED12+, FF1.5+, SF3.1+, CH2+, OP9+.</p>

     <p>* Support everything except possibly the older web browsers not supporting; 1.) the CSS <code>border-radius</code> property, 2.) the HTML <code>placeholder</code> attribute, and 3.) the CSS <code>*placeholder</code> selectors.</p>

     <h3><a id='try'></a>1.8. How To Try This Example On Your Computer</h3>

     <p>To try this example on your computer:</p>

     <ol>
      <li>Download the following source files to the same drive or folder on your computer:
       <ul class='link-list'>
        <li><a href='/css/css_techniques/style_textboxes_textareas/style_textboxes_textareas.html'><span class='filename'>style_textboxes_textareas.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/style_textboxes_textareas/style_textboxes_textareas.css'><span class='filename'>style_textboxes_textareas.css</span> (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li>Double click the <span class='filename'>.html</span> file.</li>
     </ol>

     <h3><a id='abbreviations'></a>1.9. Abbreviations</h3>

     <ul>
      <li>IE = Internet Explorer.</li>
      <li>ED = Edge Legacy (EdgeHTML 12 - 18) and Edge 79+ (Chromium).</li>
      <li>FF = Firefox.</li>
      <li>SF = Safari.</li>
      <li>CH = Chrome.</li>
      <li>OP = Opera.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='textboxesTextareas'></a>2. Style Textboxes And Textareas</h2>

     <h3><a id='textboxesTextareasHtml'></a>2.1. HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/css/css_techniques/style_textboxes_textareas/style_textboxes_textareas.html'><span class='filename'>style_textboxes_textareas.html</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='justify-right-one'></span>&lt;!DOCTYPE html&gt;
<span class='justify-right-one'></span>&lt;html lang=&quot;en&quot;&gt;
<span class='justify-right-one'></span> &lt;head&gt;
<span class='justify-right-one'></span>  &lt;title&gt;CSS Technique: Style Textboxes And Textareas&lt;/title&gt;
<span class='justify-right-one'></span>  &lt;meta charset=&quot;UTF-8&quot; /&gt;
<span class='justify-right-one'></span>  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;style_textboxes_textareas.css&quot; /&gt;
<span class='justify-right-one'></span> &lt;/head&gt;
<span class='justify-right-one'></span> &lt;body&gt;
<span class='justify-right-one'></span>  &lt;h2&gt;CSS Technique: Style Textboxes And Textareas&lt;/h2&gt;
<span></span>  &lt;p&gt;Textbox without label: &lt;input type=&quot;text&quot; name=&quot;unique to indicate textbox1 when form submitted&quot; size=&quot;30&quot; maxlength=&quot;30&quot; /&gt;&lt;/p&gt;
<span></span>  &lt;p&gt;&lt;label&gt;Textbox with label: &lt;input type=&quot;text&quot; name=&quot;unique to indicate textbox2 when form submitted&quot; size=&quot;30&quot; maxlength=&quot;30&quot; /&gt;&lt;/label&gt;&lt;/p&gt;
<span></span>  &lt;p&gt;&lt;label&gt;Textbox with label and placeholder text: &lt;input type=&quot;text&quot; name=&quot;unique to indicate textbox3 when form submitted&quot; size=&quot;30&quot; maxlength=&quot;30&quot; placeholder=&quot;placeholder text&quot; /&gt;&lt;/label&gt;&lt;/p&gt;
<span></span>  &lt;p&gt;&lt;label&gt;Textbox with label and default/pre-entered text: &lt;input type=&quot;text&quot; name=&quot;unique to indicate textbox4 when form submitted&quot; size=&quot;30&quot; maxlength=&quot;30&quot; value=&quot;default/pre-entered text&quot; /&gt;&lt;/label&gt;&lt;/p&gt;
<span></span>  &lt;p&gt;&lt;label&gt;&lt;input type=&quot;text&quot; name=&quot;unique to indicate textbox5 when form submitted&quot; size=&quot;30&quot; maxlength=&quot;30&quot; /&gt; Textbox with label.&lt;/label&gt;&lt;/p&gt;
<span></span>  &lt;hr /&gt;
<span></span>  &lt;p&gt;Textarea without label: &lt;textarea name=&quot;unique to indicate textarea1 when form submitted&quot; cols=&quot;30&quot; rows=&quot;2&quot;&gt;&lt;/textarea&gt;&lt;/p&gt;
<span></span>  &lt;p&gt;&lt;label&gt;Textarea with label: &lt;textarea name=&quot;unique to indicate textarea2 when form submitted&quot; cols=&quot;30&quot; rows=&quot;2&quot;&gt;&lt;/textarea&gt;&lt;/label&gt;&lt;/p&gt;
<span></span>  &lt;p&gt;&lt;label&gt;Textarea with label and placeholder text: &lt;textarea name=&quot;unique to indicate textarea3 when form submitted&quot; cols=&quot;30&quot; rows=&quot;2&quot; placeholder=&quot;placeholder text&quot;&gt;&lt;/textarea&gt;&lt;/label&gt;&lt;/p&gt;
<span></span>  &lt;p&gt;&lt;label&gt;Textarea with label and default/pre-entered text: &lt;textarea name=&quot;unique to indicate textarea4 when form submitted&quot; cols=&quot;30&quot; rows=&quot;2&quot;&gt;default/pre-entered text&lt;/textarea&gt;&lt;/label&gt;&lt;/p&gt;
<span></span>  &lt;p&gt;&lt;label&gt;&lt;textarea name=&quot;unique to indicate textarea5 when form submitted&quot; cols=&quot;30&quot; rows=&quot;2&quot;&gt;&lt;/textarea&gt; Textarea with label.&lt;/label&gt;&lt;/p&gt;
<span></span>  &lt;p&gt;Web browser support*: IE8+, ED12+, FF1.5+, SF3.1+, CH2+, OP9+.&lt;/p&gt;
<span></span>  &lt;p&gt;* Support everything except possibly the older web browsers not supporting; 1.) the CSS &lt;code&gt;border-radius&lt;/code&gt; property, 2.) the HTML &lt;code&gt;placeholder&lt;/code&gt; attribute, and 3.) the CSS &lt;code&gt;*placeholder&lt;/code&gt; selectors.&lt;/p&gt;
<span></span> &lt;/body&gt;
<span></span>&lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>Textboxes use the <code>input</code> element with the <code>type=&quot;text&quot;</code> attribute. The <code>label</code> element is a commonly used optional element and the <code>size</code>, <code>maxlength</code>, and <code>placeholder</code> attributes are commonly used optional attributes. If the textbox data is to be sent when a form is submitted, use the <code>name</code> attribute and assign it a unique value. To specify default/pre-entered text (i.e., a default value), use the <code>value</code> attribute and assign it the default/pre-entered text.</li>
      <li>Textareas use the <code>textarea</code> element. The <code>label</code> element is a commonly used optional element and the <code>cols</code>, <code>rows</code>, and <code>placeholder</code> attributes are commonly used optional attributes. If the textarea data is to be sent when a form is submitted, use the <code>name</code> attribute and assign it a unique value. To specify default/pre-entered text (i.e., a default value), place the default/pre-entered text between the opening and closing <code>&lt;textarea&gt;&lt;/textarea&gt;</code> tags.</li>
     </ul>

     <h3><a id='textboxesTextareasCss'></a>2.2. CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/css/css_techniques/style_textboxes_textareas/style_textboxes_textareas.css'><span class='filename'>style_textboxes_textareas.css</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='justify-right-one'></span>input[type=&quot;text&quot;], textarea {
<span class='justify-right-one'></span>  font-family: &quot;times new roman&quot;;
<span class='justify-right-one'></span>  font-size: 15.33px;
<span class='justify-right-one'></span>  color: #000;
<span class='justify-right-one'></span>  border: 2px solid #999;
<span class='justify-right-one'></span>  border-radius: 3px;
<span class='justify-right-one'></span>  padding: 4px 6px;
<span class='justify-right-one'></span>}
<span class='justify-right-one'></span>textarea {
<span></span>  vertical-align: middle;
<span></span>}
<span></span>input[type=&quot;text&quot;]:hover, textarea:hover {
<span></span>  border-color: #666;
<span></span>}
<span></span>input[type=&quot;text&quot;]:focus, textarea:focus {
<span></span>  outline: 0;
<span></span>  border-color: #666;
<span></span>}
<span></span>input[type=&quot;text&quot;]:-ms-input-placeholder, textarea:-ms-input-placeholder {
<span></span>  color: #888;
<span></span>}
<span></span>input[type=&quot;text&quot;]:-moz-placeholder, textarea:-moz-placeholder {
<span></span>  color: #888;
<span></span>}
<span></span>input[type=&quot;text&quot;]::-moz-placeholder, textarea::-moz-placeholder {
<span></span>  color: #888;
<span></span>  opacity: 1;
<span></span>}
<span></span>input[type=&quot;text&quot;]::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
<span></span>  color: #888;
<span></span>}
</pre>

     <p>CSS source code notes:</p>

     <ul>
      <li>Lines 1 - 11: Styles the textboxes/textareas.</li>
      <li>Line 2: Overrides the user agent style for the <code>font-family</code> property. In this example, sets the <code>font-family</code> style for the textbox/textarea text content to be the same as the web page text content.
       <div class='note normal'>The <code>font-family</code> style for the web page text content typically comes from the author <code>body</code> style rule. In this example, there is no author <code>body</code> style rule. Therefore, in this example, the <code>font-family</code> style for the web page text content comes from the user agent styles, which is typically <code>body { font-family: &quot;times new roman&quot;; }</code>.</div>
      </li>
      <li>Line 3: Overrides the user agent style for the <code>font-size</code> property. In this example, sets the <code>font-size</code> style for the textbox/textarea text content to be 2/3 of a pixel (0.67px) smaller than the web page text content.
       <div class='note normal'>The <code>font-size</code> style for the web page text content typically comes from the author <code>body</code> style rule. In this example, there is no author <code>body</code> style rule. Therefore, in this example, the <code>font-size</code> style for the web page text content comes from the user agent styles, which is typically <code>body { font-size: 16px; }</code>.</div>
      </li>
      <li>Line 4: Overrides the user agent style for the <code>color</code> property. In this example, sets the <code>color</code> style for the textbox/textarea text content to be the same as the web page text content.
       <div class='note normal'>The <code>color</code> style for the web page text content typically comes from the author <code>body</code> style rule. In this example, there is no author <code>body</code> style rule. Therefore, in this example, the <code>color</code> style for the web page text content comes from the user agent styles, which is typically <code>body { color: #000; }</code>.</div>
      </li>
      <li>Lines 12 - 14: Optional. Styles the textboxes/textareas with a hover style.</li>
      <li>Lines 15 - 18: Optional. Styles the textboxes/textareas with a focus style and removes the blue outline that recent versions of CH applies to a textbox/textarea with focus.</li>
      <li>Lines 19 - 21: Styles the placeholder text <code>color</code> property for textboxes/textareas in IE10+.</li>
      <li>Line 19: The W3C CSS Validation Service throws a warning: <q><code>:-ms-input-placeholder</code> is an unknown vendor extended pseudo-class.</q></li>
      <li>Lines 22 - 24: Styles the placeholder text <code>color</code> property for textboxes/textareas in FF4 - 18.</li>
      <li>Line 22: The W3C CSS Validation Service throws a warning: <q><code>:-moz-placeholder</code> is an unknown vendor extended pseudo-class.</q></li>
      <li>Lines 25 - 28: Styles the placeholder text <code>color</code> and <code>opacity</code> properties for textboxes/textareas in FF19+.</li>
      <li>Line 25: The W3C CSS Validation Service throws a warning: <q><code>::-moz-placeholder</code> is an unknown vendor extended pseudo-element.</q></li>
      <li>Lines 29 - 31: Styles the placeholder text <code>color</code> property for textboxes in ED12+, SF4+, CH2+, and OP15+ and for textareas in ED12+, SF5+, CH4+, and OP15+.</li>
      <li>Line 29: The W3C CSS Validation Service throws a warning: <q><code>::-webkit-input-placeholder</code> is an unknown vendor extended pseudo-element.</q></li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='https://msdn.microsoft.com/en-us/library/hh772745(v=vs.85).aspx'>:-ms-input-placeholder pseudo-class (msdn.microsoft.com)</a></li>
      <li><a href='https://developer.mozilla.org/en-US/docs/Web/CSS/:-moz-placeholder'>:-moz-placeholder (developer.mozilla.org)</a></li>
      <li><a href='https://developer.mozilla.org/en-US/docs/Web/CSS/::-moz-placeholder'>::-moz-placeholder (developer.mozilla.org)</a></li>
      <li><a href='http://www.w3.org/TR/css-pseudo-4/'>CSS Pseudo-Elements Module Level 4: W3C Working Draft, 7 June 2016 (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/CSS2/'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: W3C Recommendation 07 June 2011, Edited In Place 12 April 2016 To Point To New Work (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/css3-selectors/'>Selectors Level 3: W3C Recommendation 29 September 2011 (w3.org)</a></li>
      <li><a href='http://jigsaw.w3.org/css-validator/'>W3C CSS Validation Service (jigsaw.w3.org)</a></li>
      <li><a href='https://msdn.microsoft.com/en-us/library/windows/desktop/dd374112(v=vs.85).aspx'>Using MS Shell Dlg and MS Shell Dlg 2 (msdn.microsoft.com)</a></li>
      <li><a href='/css/css_techniques/index.php'>CSS Techniques (learnwebcoding.com)</a></li>
     </ul>

    </section>";
