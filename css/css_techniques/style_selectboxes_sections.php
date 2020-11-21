<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/css/css_techniques/style_selectboxes_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/css/css_techniques/style_selectboxes.php.
 * Last reviewed/updated: 20 Nov 2020.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Selectboxes (a.k.a., dropdowns) present style conscious web developers with three primary problems. First, web browsers differ with respect to how they style selectboxes. Second, certain properties of the selectboxes and the dropdowns, themselves, cannot be styled with CSS. Third, the popular techniques/workarounds for styling checkboxes and radio buttons with CSS do not work on selectboxes. Lastly, when mouse click to select a selectbox, in IE and ED the dropdown is displayed superimposed on top of the currently selected option, and in FF and CH the dropdown is displayed below the selectbox. So, for a number of reasons, it is impossible to style selectboxes identically cross-browser. This has prompted style conscious web developers to develop a clever CSS based technique/workaround for styling selectboxes a little bit more identically cross-browser. This technique uses CSS to overflow and hide the web browser selectbox dropdown arrow and then uses CSS to prove a substitute selectbox dropdown arrow. A second technique uses style rules that are invalid per the W3C CSS Validation Service to hide the web browser selectbox dropdown arrow and then uses CSS to prove a substitute selectbox dropdown arrow. In contrast, a third technique does not hide the web browser selectbox dropdown arrow at all and simply styles the selectbox <code>select</code> type selector. Unfortunately, as discussed and demonstrated below, none of these techniques style selectboxes identically cross-browser.</p>

     <h3><a id='try'></a>1.1. How To Try These Examples On Your Computer</h3>

     <p>To try these examples on your computer:</p>

     <ol>
      <li>Download the following source files to the same drive or folder on your computer:
       <ul class='link-list'>
        <li><a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_1.html'><span class='filename'>style_selectboxes_technique_1.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_1.css'><span class='filename'>style_selectboxes_technique_1.css</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_2.html'><span class='filename'>style_selectboxes_technique_2.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_2.css'><span class='filename'>style_selectboxes_technique_2.css</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_3.html'><span class='filename'>style_selectboxes_technique_3.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_3.css'><span class='filename'>style_selectboxes_technique_3.css</span> (learnwebcoding.com)</a></li>
        <li><a href='/css/css_techniques/style_selectboxes/dn_pnt_tri_8x4.gif'><span class='filename'>dn_pnt_tri_8x4.gif</span> (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li>Double click the <span class='filename'>.html</span> files.</li>
     </ol>

     <h3><a id='abbreviations'></a>1.2. Abbreviations</h3>

     <ul>
      <li>IE = Internet Explorer.</li>
      <li>ED = Edge Legacy 12 - 18 (EdgeHTML based) and Edge 79+ (Chromium based).</li>
      <li>FF = Firefox.</li>
      <li>SF = Safari.</li>
      <li>CH = Chrome.</li>
      <li>OP = Opera.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='tech1'></a>2. Technique 1 Overflow And Hide</h2>

     <p>In short, technique 1 overflow and hide:</p>

     <ol>
      <li>Creates traditional selectboxes using the HTML <code>select</code> and <code>option</code> elements with or without the <code>label</code> element.</li>
      <li>Wraps the selectboxes in a <code>&lt;span&gt;&lt;/span&gt;</code> tags.</li>
      <li>Hides the web browser selectbox dropdown arrow. This is accomplished by using the <code>width</code> property to overflow the selectbox content in the selectbox wrapper, and by using the <code>overflow: hidden</code> style to hide the overflow content, which is the web browser selectbox dropdown arrow.</li>
      <li>Provides a substitute selectbox dropdown arrow by means of an image file that you create to look exactly as you want.</li>
     </ol>

     <p>The most popular method for wrapping the selectboxes uses <code>&lt;div&gt;&lt;/div&gt;</code> tags. In this example, the selectboxes are wrapped in <code>&lt;span&gt;&lt;/span&gt;</code> tags, which; 1.) allows the selectboxes to be inline with any surrounding text (including the <code>&lt;label&gt;&lt;/label&gt;</code> tag content), and 2.) allows the use of implicit (i.e., by nesting) labels, which reduces the amount of HTML code and do not work if the selectboxes are wrapped in a <code>div</code> element.</p>

     <p>Technique 1 overflow and hide appearance notes:</p>

     <ul>
      <li>All web browsers: The currently selected option of a selectbox with focus is styled differently cross-browser. For example, in IE11 and ED14 it has a blue background that overlaps/covers your selectbox dropdown arrow until the focus is removed, in FF48 it has a 1px dotted black outline, and in CH52 it is not styled.</li>
      <li>All web browsers: The selectbox dropdown is wider than the selectbox.</li>
      <li>FF: For some selectboxes the selectbox dropdown right border is missing.</li>
      <li>All web browsers: There is no satisfactory way to apply a focus border style to the selectboxes. First, overflowing and hiding the web browser selectbox dropdown arrow also hides the right border of the selectbox, which makes the selectboxes look odd and necessitates hiding the entire selectbox border via the <code>select</code> type selector <code>border</code> property. Second, in this example, the selectboxes are wrapped in a <code>span</code> element, and apparently web browsers do not support the <code>:focus</code> pseudo-class selector on the <code>span</code> element.</li>
      <li>ED: If tab to select a selectbox and use arrow keys to select a selectbox option<!-- (i.e., if mouse click not involved in selecting a selectbox and mouse click not involved in selecting a selectbox option) -->, hover works as expected. If mouse click to select a selectbox and/or mouse click to select a selectbox option<!-- (i.e., if mouse click involved in selecting a selectbox, or mouse click involved in selecting a selectbox option, or mouse click involved in both selecting a selectbox and selecting a selectbox option) -->, and the mouse cursor is hovering the selectbox when/after the selectbox option is selected, hover works as expected in that the selectbox loses hover status/styles when the mouse cursor leaves the selectbox. However, if mouse click to select a selectbox and/or mouse click to select a selectbox option<!-- (i.e., if mouse click involved in selecting a selectbox, or mouse click involved in selecting a selectbox option, or mouse click involved in both selecting a selectbox and selecting a selectbox option) -->, and the mouse cursor is not hovering the selectbox when/after the selectbox option is selected, hover does not work as expected in that the selectbox retains hover status/styles (including upon clicking on/selecting other web page content, including other selectboxes) until the mouse cursor hovers and leaves the selectbox. This apparent ED improperly retains selectbox hover status/styles bug applies to all selectboxes in ED.</li>
     </ul>

     <h3><a id='tech1Demo'></a>2.1. Technique 1 Overflow And Hide Demonstration And CodePen</h3>

     <ul>
      <li>Demonstration: <a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_1.html'>CSS Technique: Style Selectboxes Technique 1 Overflow And Hide (learnwebcoding.com)</a>.</li>
      <li>CodePen: <a href='https://codepen.io/learnwebcoding/pen/yOQgRm'>CSS Technique: Style Selectboxes Technique 1 Overflow And Hide (codepen.io/learnwebcoding/)</a>.</li>
     </ul>

     <h3><a id='tech1Support'></a>2.2. Technique 1 Overflow And Hide Web Browser Support</h3>

     <p>Web browser support*: IE8+, ED12+, FF3+, SF4+, CH28+, OP15+.</p>

     <p>* Support everything except possibly the older web browsers not supporting the CSS <code>border-radius</code> property.</p>

     <h3><a id='tech1Html'></a>2.3. Technique 1 Overflow And Hide HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_1.html'><span class='filename'>style_selectboxes_technique_1.html</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='justify-right-one'></span>&lt;!DOCTYPE html&gt;
<span class='justify-right-one'></span>&lt;html lang=&quot;en&quot;&gt;
<span class='justify-right-one'></span> &lt;head&gt;
<span class='justify-right-one'></span>  &lt;title&gt;CSS Technique: Style Selectboxes Technique 1 Overflow And Hide&lt;/title&gt;
<span class='justify-right-one'></span>  &lt;meta charset=&quot;UTF-8&quot; /&gt;
<span class='justify-right-one'></span>  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;style_selectboxes_technique_1.css&quot; /&gt;
<span class='justify-right-one'></span> &lt;/head&gt;
<span class='justify-right-one'></span> &lt;body&gt;
<span class='justify-right-one'></span>  &lt;h2&gt;CSS Technique: Style Selectboxes Technique 1 Overflow And Hide&lt;/h2&gt;
<span></span>  &lt;p&gt;
<span></span>   Selectbox without label:
<span></span>   &lt;span class=&quot;selectboxWrapper&quot;&gt;
<span></span>    &lt;select name=&quot;unique to indicate selectbox1 when form submitted&quot;&gt;
<span></span>     &lt;option&gt;option one&lt;/option&gt;
<span></span>     &lt;option&gt;option two&lt;/option&gt;
<span></span>     &lt;option&gt;option three&lt;/option&gt;
<span></span>    &lt;/select&gt;
<span></span>   &lt;/span&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;
<span></span>   &lt;label&gt;Selectbox with label:
<span></span>    &lt;span class=&quot;selectboxWrapper&quot;&gt;
<span></span>     &lt;select name=&quot;unique to indicate selectbox2 when form submitted&quot;&gt;
<span></span>      &lt;option&gt;option one&lt;/option&gt;
<span></span>      &lt;option&gt;option two&lt;/option&gt;
<span></span>      &lt;option&gt;option three&lt;/option&gt;
<span></span>     &lt;/select&gt;
<span></span>    &lt;/span&gt;
<span></span>   &lt;/label&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;
<span></span>   &lt;label&gt;Selectbox with label and option three default selected/pre-selected:
<span></span>    &lt;span class=&quot;selectboxWrapper&quot;&gt;
<span></span>     &lt;select name=&quot;unique to indicate selectbox3 when form submitted&quot;&gt;
<span></span>      &lt;option&gt;option one&lt;/option&gt;
<span></span>      &lt;option&gt;option two&lt;/option&gt;
<span></span>      &lt;option selected=&quot;selected&quot;&gt;option three&lt;/option&gt;
<span></span>     &lt;/select&gt;
<span></span>    &lt;/span&gt;
<span></span>   &lt;/label&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;
<span></span>   &lt;label&gt;
<span></span>    &lt;span class=&quot;selectboxWrapper&quot;&gt;
<span></span>     &lt;select name=&quot;unique to indicate selectbox4 when form submitted&quot;&gt;
<span></span>      &lt;option&gt;option one&lt;/option&gt;
<span></span>      &lt;option&gt;option two&lt;/option&gt;
<span></span>      &lt;option&gt;option three&lt;/option&gt;
<span></span>     &lt;/select&gt;
<span></span>    &lt;/span&gt;
<span></span>   Selectbox with label.&lt;/label&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;Web browser support*: IE8+, ED12+, FF3+, SF4+, CH28+, OP15+.&lt;/p&gt;
<span></span>  &lt;p&gt;* Support everything except possibly the older web browsers not supporting the CSS &lt;code&gt;border-radius&lt;/code&gt; property.&lt;/p&gt;
<span></span> &lt;/body&gt;
<span></span>&lt;/html&gt;
</pre>

     <p>Technique 1 overflow and hide HTML source code notes:</p>

     <ul>
      <li>Selectboxes use the <code>select</code> and <code>option</code> elements and the <code>span</code> element with the <code>type=&quot;selectboxWrapper&quot;</code> attribute. The <code>label</code> element is a commonly used optional element. The selectbox HTML is nested in <code>&lt;span class=&quot;selectboxWrapper&quot;&gt;&lt;/span&gt;</code> tags. If the selectbox data is to be sent when a form is submitted, use the <code>select</code> element with the <code>name</code> attribute and the <code>option</code> element with or without the <code>value</code> attribute. To default select/pre-select an option, use the <code>option</code> element with the <code>selected=&quot;selected&quot;</code> attribute.</li>
     </ul>

     <h3><a id='tech1Css'></a>2.4. Technique 1 Overflow And Hide CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_1.css'><span class='filename'>style_selectboxes_technique_1.css</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='justify-right-one'></span>.selectboxWrapper {
<span class='justify-right-one'></span>  display: inline-block;
<span class='justify-right-one'></span>  vertical-align: middle;
<span class='justify-right-one'></span>  overflow: hidden;
<span class='justify-right-one'></span>  background: url(&quot;/images/style_selectboxes/dn_pnt_tri_8x4.gif&quot;) no-repeat 95%;
<span class='justify-right-one'></span>  border: 2px solid #999;
<span class='justify-right-one'></span>  border-radius: 3px;
<span class='justify-right-one'></span>}
<span class='justify-right-one'></span>.selectboxWrapper select {
<span></span>  width: 125%;
<span></span>  background: transparent;
<span></span>  border: 0;
<span></span>  padding: 4px 6px;
<span></span>}
<span></span>.selectboxWrapper:hover, label:hover .selectboxWrapper {
<span></span>  border-color: #666;
<span></span>}
<span></span>.selectboxWrapper select:focus {
<span></span>  outline: 0;
<span></span>}
</pre>

     <p>Technique 1 overflow and hide CSS source code notes:</p>

     <ul>
      <li>Lines 1 - 8: Styles the selectbox wrapper.</li>
      <li>Line 4: Hides the selectbox content that overflows the selectbox wrapper. The overflow content is the web browser selectbox dropdown arrow. In other words, hides the web browser selectbox dropdown arrow.
       <div class='note normal'>To display both your selectbox dropdown arrow image and the web browser selectbox dropdown arrow, delete or comment out line 7.</div>
      </li>
      <li>Line 5: Provides a substitute selectbox dropdown arrow by means of an image file that you create to look exactly as you want. The background image relative horizontal offset property <code>95%</code> value specifies how far from the left edge of the background image container to place the image relative to the overall width of the background image container. In other words, changing <code>95%</code> to a smaller value moves the image to the left, and changing <code>95%</code> to a larger value moves the image to the right. Make sure the offset is large enough to accommodate the longest string of <code>&lt;option&gt;&lt;/option&gt;</code> tag content.</li>
      <li>Lines 9 - 14: Styles the selectboxes.</li>
      <li>Line 10: Sets the width of selectbox to be 125% the inherited width, which is the width of the selectbox wrapper. This causes the selectbox content to overflow the selectbox wrapper.
       <div class='note normal'>
        <ul>
         <li>Depending upon the length of the longest string of <code>&lt;option&gt;&lt;/option&gt;</code> tag content, you may need to increase the <code>width</code> value, or you may be able to decrease the <code>width</code> value.</li>
         <li>Instead of setting the width of the selectbox to be a percentage relative to the width of the selectbox wrapper, the selectbox and selectbox wrapper can be assigned fixed widths. Assigning the selectbox a width 30px greater than the selectbox wrapper width should be enough to overflow/hide the web browser selectbox dropdown arrow.</li>
        </ul>
       </div>
      </li>
      <li>Line 11: Allows your selectbox dropdown arrow to be displayed/show through. The selectbox overlays the selectbox wrapper. Therefore, in order for your selectbox dropdown arrow to be displayed, the selectbox must allow it to show through. This is accomplished by setting the selectbox <code>background</code> property to <code>background: transparent</code>. The selectbox background must be/remain transparent. Therefore, apply any desired background styles to the selectbox wrapper, not the selectbox.</li>
      <li>Line 12: Hides the selectbox border. Overflowing and hiding the web browser selectbox dropdown arrow also hides the right border of the selectbox, which makes the selectboxes look odd and necessitates hiding the entire selectbox border via the <code>select</code> type selector <code>border</code> property.</li>
      <li>Lines 15 - 17: Optional. Styles the selectboxes without labels (<code>.selectboxWrapper:hover</code>) and with labels (<code>label:hover .selectboxWrapper</code>) with a hover style.</li>
      <li>Lines 18 - 20: Removes the blue outline that recent versions of CH applies to a selectbox with focus.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='tech2'></a>3. Technique 2 Invalid Style Rules</h2>

     <p>In short, technique 2 invalid style rules:</p>

     <ol>
      <li>Creates traditional selectboxes using the HTML <code>select</code> and <code>option</code> elements with or without the <code>label</code> element.</li>
      <li>Hides the web browser selectbox dropdown arrow using styles that are invalid per the W3C CSS Validation Service.</li>
      <li>Provides a substitute selectbox dropdown arrow by means of an image file that you create to look exactly as you want.</li>
     </ol>

     <p>Technique 2 invalid style rules appearance notes:</p>

     <ul>
      <li>All web browsers: The currently selected option of a selectbox with focus is styled differently cross-browser. For example, in IE11 it has a blue background that, contrary to technique 1, does not overlap/cover your selectbox dropdown arrow, in FF48 it has a 1px dotted black outline, and in ED14, contrary to technique 1, and CH52 it is not styled.</li>
      <li>All web browsers: Contrary to technique 1, the selectbox dropdown is the same width as the selectbox.</li>
      <li>FF: Contrary to technique 1, for all selectboxes the selectbox dropdown right border is present.</li>
      <li>All web browsers: Contrary to technique 1, there is a satisfactory way to apply a focus border style to the selectboxes.</li>
      <li>ED: If tab to select a selectbox and use arrow keys to select a selectbox option<!-- (i.e., if mouse click not involved in selecting a selectbox and mouse click not involved in selecting a selectbox option) -->, hover works as expected. If mouse click to select a selectbox and/or mouse click to select a selectbox option<!-- (i.e., if mouse click involved in selecting a selectbox, or mouse click involved in selecting a selectbox option, or mouse click involved in both selecting a selectbox and selecting a selectbox option) -->, and the mouse cursor is hovering the selectbox when/after the selectbox option is selected, hover works as expected in that the selectbox loses hover status/styles when the mouse cursor leaves the selectbox. However, if mouse click to select a selectbox and/or mouse click to select a selectbox option<!-- (i.e., if mouse click involved in selecting a selectbox, or mouse click involved in selecting a selectbox option, or mouse click involved in both selecting a selectbox and selecting a selectbox option) -->, and the mouse cursor is not hovering the selectbox when/after the selectbox option is selected, hover does not work as expected in that the selectbox retains hover status/styles (including upon clicking on/selecting other web page content, including other selectboxes) until the mouse cursor hovers and leaves the selectbox. This apparent ED improperly retains selectbox hover status/styles bug applies to all selectboxes in ED.</li>
     </ul>

     <h3><a id='tech2Demo'></a>3.1. Technique 2 Invalid Style Rules Demonstration And CodePen</h3>

     <ul>
      <li>Demonstration: <a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_2.html'>CSS Technique: Style Selectboxes Technique 2 Invalid Style Rules (learnwebcoding.com)</a>.</li>
      <li>CodePen: <a href='https://codepen.io/learnwebcoding/pen/EKOZGy'>CSS Technique: Style Selectboxes Technique 2 Invalid Style Rules (codepen.io/learnwebcoding/)</a>.</li>
     </ul>

     <h3><a id='tech2Support'></a>3.2. Technique 2 Invalid Style Rules Web Browser Support</h3>

     <p>Web browser support*: IE10+, ED12+, FF35+, SF3.1+, CH2+, OP15+.</p>

     <p>* Support everything except possibly the older web browsers not supporting the CSS <code>border-radius</code> property.</p>

     <h3><a id='tech2Html'></a>3.3. Technique 2 Invalid Style Rules HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_2.html'><span class='filename'>style_selectboxes_technique_2.html</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='justify-right-one'></span>&lt;!DOCTYPE html&gt;
<span class='justify-right-one'></span>&lt;html lang=&quot;en&quot;&gt;
<span class='justify-right-one'></span> &lt;head&gt;
<span class='justify-right-one'></span>  &lt;title&gt;CSS Technique: Style Selectboxes Technique 2 Invalid Style Rules&lt;/title&gt;
<span class='justify-right-one'></span>  &lt;meta charset=&quot;UTF-8&quot; /&gt;
<span class='justify-right-one'></span>  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;style_selectboxes_technique_2.css&quot; /&gt;
<span class='justify-right-one'></span> &lt;/head&gt;
<span class='justify-right-one'></span> &lt;body&gt;
<span class='justify-right-one'></span>  &lt;h2&gt;CSS Technique: Style Selectboxes Technique 2 Invalid Style Rules&lt;/h2&gt;
<span></span>  &lt;p&gt;
<span></span>   Selectbox without label:
<span></span>   &lt;select name=&quot;unique to indicate selectbox1 when form submitted&quot;&gt;
<span></span>    &lt;option&gt;option one&lt;/option&gt;
<span></span>    &lt;option&gt;option two&lt;/option&gt;
<span></span>    &lt;option&gt;option three&lt;/option&gt;
<span></span>   &lt;/select&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;
<span></span>   &lt;label&gt;Selectbox with label:
<span></span>    &lt;select name=&quot;unique to indicate selectbox2 when form submitted&quot;&gt;
<span></span>     &lt;option&gt;option one&lt;/option&gt;
<span></span>     &lt;option&gt;option two&lt;/option&gt;
<span></span>     &lt;option&gt;option three&lt;/option&gt;
<span></span>    &lt;/select&gt;
<span></span>   &lt;/label&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;
<span></span>   &lt;label&gt;Selectbox with label and option three default selected/pre-selected:
<span></span>    &lt;select name=&quot;unique to indicate selectbox3 when form submitted&quot;&gt;
<span></span>     &lt;option&gt;option one&lt;/option&gt;
<span></span>     &lt;option&gt;option two&lt;/option&gt;
<span></span>     &lt;option selected=&quot;selected&quot;&gt;option three&lt;/option&gt;
<span></span>    &lt;/select&gt;
<span></span>   &lt;/label&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;
<span></span>   &lt;label&gt;
<span></span>    &lt;select name=&quot;unique to indicate selectbox4 when form submitted&quot;&gt;
<span></span>     &lt;option&gt;option one&lt;/option&gt;
<span></span>     &lt;option&gt;option two&lt;/option&gt;
<span></span>     &lt;option&gt;option three&lt;/option&gt;
<span></span>    &lt;/select&gt;
<span></span>   Selectbox with label.&lt;/label&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;Web browser support*: IE10+, ED12+, FF35+, SF3.1+, CH2+, OP15+.&lt;/p&gt;
<span></span>  &lt;p&gt;* Support everything except possibly the older web browsers not supporting the CSS &lt;code&gt;border-radius&lt;/code&gt; property.&lt;/p&gt;
<span></span> &lt;/body&gt;
<span></span>&lt;/html&gt;
</pre>

     <p>Technique 2 invalid style rules HTML source code notes:</p>

     <ul>
      <li>Selectboxes use the <code>select</code> and <code>option</code> elements. The <code>label</code> element is a commonly used optional element. If the selectbox data is to be sent when a form is submitted, use the <code>select</code> element with the <code>name</code> attribute and the <code>option</code> element with or without the <code>value</code> attribute. To default select/pre-select an option, use the <code>option</code> element with the <code>selected=&quot;selected&quot;</code> attribute.</li>
     </ul>

     <h3><a id='tech2Css'></a>3.4. Technique 2 Invalid Style Rules CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_2.css'><span class='filename'>style_selectboxes_technique_2.css</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='justify-right-one'></span>select::-ms-expand {
<span class='justify-right-one'></span>  display: none;
<span class='justify-right-one'></span>}
<span class='justify-right-one'></span>select {
<span class='justify-right-one'></span>  -moz-appearance: none;
<span class='justify-right-one'></span>  -webkit-appearance: none;
<span class='justify-right-one'></span>  appearance: none;
<span class='justify-right-one'></span>  background: url(&quot;/images/style_selectboxes/dn_pnt_tri_8x4.gif&quot;) no-repeat 95%;
<span class='justify-right-one'></span>  border: 2px solid #999;
<span></span>  border-radius: 3px;
<span></span>  padding: 4px 25px 4px 6px;
<span></span>}
<span></span>select:hover {
<span></span>  border-color: #666;
<span></span>}
<span></span>select:focus {
<span></span>  border-color: #666;
<span></span>  outline: 0;
<span></span>}
</pre>

     <p>Technique 2 invalid style rules CSS source code notes:</p>

     <ul>
      <li>Lines 1 - 3: In IE10+, hides the web browser selectbox dropdown arrow.
       <div class='note normal'>To display both your dropdown arrow and the web browser selectbox dropdown arrow in IE10+, delete or comment out line 2. If your dropdown arrow is not visible, change its position.</div>
      </li>
      <li>Line 1: The W3C CSS Validation Service throws a warning: <q><code>::-ms-expand</code> is an unknown vendor extended pseudo-element.</q>
      </li>
      <li>Lines 4 - 12: Styles the selectboxes.</li>
      <li>Line 5: In FF35+, hides the web browser selectbox dropdown arrow. The W3C CSS Validation Service throws a warning: <q>Property <code>-moz-appearance</code> is an unknown vendor extension.</q>
       <div class='note normal'>To display both your dropdown arrow and the web browser selectbox dropdown arrow in FF35+, delete or comment out line 5. If your dropdown arrow is not visible, change its position.</div>
      </li>
      <li>Line 6: In SF3.1+ and CH2+, hides the web browser selectbox dropdown arrow. The W3C CSS Validation Service throws a warning: <q>Property <code>-webkit-appearance</code> is an unknown vendor extension.</q>
       <div class='note normal'>To display both your dropdown arrow and the web browser selectbox dropdown arrow in SF3.1+ and CH2+, delete or comment out line 6. If your dropdown arrow is not visible, change its position.</div>
      </li>
      <li>Lines 1 - 3 and 6: In ED12+, hides the web browser selectbox dropdown arrow.
       <div class='note normal'>
        <ul>
         <li>Yes, it seems odd that apparently both lines 1 - 3 and line 6 are required to hide the web browser selectbox dropdown arrow in ED12+.</li>
         <li>To display both your dropdown arrow and the web browser selectbox dropdown arrow in ED12+, delete or comment out lines 2 and 6. If your dropdown arrow is not visible, change its position.</li>
        </ul>
       </div>
      </li>
      <li>Line 7: Proposed vendor independent property/style not incorporated into a W3C CSS Recommendation. Apparently ignored by all web browsers but provided as a fallback just in case. The W3C CSS Validation Service throws an error: <q>Property <code>appearance</code> doesn't exist.</q></li>
      <li>Line 8: Provides a substitute dropdown arrow by means of an image file that you create to look exactly as you want. The background image relative horizontal offset property <code>95%</code> value specifies how far from the left edge of the background image container to place the image relative to the overall width of the background image container. In other words, changing <code>95%</code> to a smaller value moves the image to the left, and changing <code>95%</code> to a larger value moves the image to the right. Make sure the offset is large enough to accommodate the longest string of <code>&lt;option&gt;&lt;/option&gt;</code> tag content.</li>
      <li>Line 11: Creates a pseudo-container for your dropdown arrow. In other words, as long as the background image relative horizontal offset property value in line 8 and the padding right property value in line 11 are such that your dropdown arrow is located in the padding right, then your dropdown arrow is guaranteed not to overlap the longest string of <code>&lt;option&gt;&lt;/option&gt;</code> tag content.
       <div class='note normal'>Instead of using the <code>padding</code> property to create a pseudo-container for your dropdown arrow and allowing the width of the selectbox to otherwise dynamically adjust to the length of the longest string of <code>&lt;option&gt;&lt;/option&gt;</code> tag content. The selectbox can be assigned a fixed width. Just make sure the width is large enough to accommodate the longest string of <code>&lt;option&gt;&lt;/option&gt;</code> tag content and your dropdown arrow.</div>
      </li>
      <li>Lines 13 - 15: Optional. Styles the selectboxes with a hover style.</li>
      <li>Lines 16 - 19: Optional. Styles the selectboxes with a focus style and removes the blue outline that recent versions of CH applies to a selectbox with focus.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='tech3'></a>4. Technique 3 Style The <code>select</code> Type Selector</h2>

     <p>In short, technique 3 style the <code>select</code> type selector:</p>

     <ol>
      <li>Creates traditional selectboxes using the HTML <code>select</code> and <code>option</code> elements with or without the <code>label</code> element.</li>
      <li>Styles the selectbox <code>select</code> type selector.</li>
     </ol>

     <p>Technique 3 style the <code>select</code> type selector appearance notes:</p>

     <ul>
      <li>All web browsers: Uses the web browser selectbox dropdown arrow, which is styled differently cross-browser.
       <div class='note normal'>Apparently <a href='http://getbootstrap.com/css/#selects'>Bootstrap selects (getbootstrap.com)</a> use the web browser selectbox dropdown arrow for ED, FF, and CH, not IE.</div></li>
      <li>IE and ED: There is only a couple of pixels separating the longest string of <code>&lt;option&gt;&lt;/option&gt;</code> tag content from the left edge of the web browser selectbox dropdown arrow. If this looks unsatisfactory, you might try some technique (e.g., adding <code>&amp;nbsp;</code> characters) to increase the separation.</li>
      <li>All web browsers: The currently selected option of a selectbox with focus is styled differently cross-browser. For example, in IE11 and ED14 it has a blue background that does not overlap/cover the web browser selectbox dropdown arrow, in FF48 it has a 1px dotted black outline, and in CH52 it is not styled.</li>
      <li>All web browsers: Contrary to technique 1, the selectbox dropdown is the same width as the selectbox.</li>
      <li>FF: Contrary to technique 1, for all selectboxes the selectbox dropdown border right is present.</li>
      <li>All web browsers: Contrary to technique 1, there is a satisfactory way to apply a focus border style to the selectboxes.</li>
      <li>ED: If tab to select a selectbox and use arrow keys to select a selectbox option<!-- (i.e., if mouse click not involved in selecting a selectbox and mouse click not involved in selecting a selectbox option) -->, hover works as expected. If mouse click to select a selectbox and/or mouse click to select a selectbox option<!-- (i.e., if mouse click involved in selecting a selectbox, or mouse click involved in selecting a selectbox option, or mouse click involved in both selecting a selectbox and selecting a selectbox option) -->, and the mouse cursor is hovering the selectbox when/after the selectbox option is selected, hover works as expected in that the selectbox loses hover status/styles when the mouse cursor leaves the selectbox. However, if mouse click to select a selectbox and/or mouse click to select a selectbox option<!-- (i.e., if mouse click involved in selecting a selectbox, or mouse click involved in selecting a selectbox option, or mouse click involved in both selecting a selectbox and selecting a selectbox option) -->, and the mouse cursor is not hovering the selectbox when/after the selectbox option is selected, hover does not work as expected in that the selectbox retains hover status/styles (including upon clicking on/selecting other web page content, including other selectboxes) until the mouse cursor hovers and leaves the selectbox. This apparent ED improperly retains selectbox hover status/styles bug applies to all selectboxes in ED.</li>
     </ul>

     <h3><a id='tech3Demo'></a>4.1. Technique 3 Style The <code>select</code> Type Selector Demonstration And CodePen</h3>

     <ul>
      <li>Demonstration: <a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_3.html'>CSS Technique: Style Selectboxes Technique 3 Style The <code>select</code> Type Selector (learnwebcoding.com)</a>.</li>
      <li>CodePen: <a href='https://codepen.io/learnwebcoding/pen/bpQgOO'>CSS Technique: Style Selectboxes Technique 3 Style The <code>select</code> Type Selector (codepen.io/learnwebcoding/)</a>.</li>
     </ul>

     <h3><a id='tech3Support'></a>4.2. Technique 3 Style The <code>select</code> Type Selector Web Browser Support</h3>

     <p>Web browser support*: IE8+, ED12+, FF1.5+, SF4+<!-- ** -->, CH2+, OP10+.</p>

     <p>* Support everything except possibly the older web browsers not supporting the CSS <code>border-radius</code> property.</p>
<!-- ** SF3.1+ does not respect padding on the <code>select</code> selector unless the <code>-webkit-appearance: none</code> style is applied to the <code>select</code> selector. In this example, the <code>-webkit-appearance: none</code> style is not applied to the <code>select</code> selector. Therefore, in this example, SF3.1+ does not support the padding on the <code>select</code> selector. -->

     <h3><a id='tech3Html'></a>4.3. Technique 3 Style The <code>select</code> Type Selector HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_3.html'><span class='filename'>style_selectboxes_technique_3.html</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='justify-right-one'></span>&lt;!DOCTYPE html&gt;
<span class='justify-right-one'></span>&lt;html lang=&quot;en&quot;&gt;
<span class='justify-right-one'></span> &lt;head&gt;
<span class='justify-right-one'></span>  &lt;title&gt;CSS Technique: Style Selectboxes Technique 3 Style The select Type Selector&lt;/title&gt;
<span class='justify-right-one'></span>  &lt;meta charset=&quot;UTF-8&quot; /&gt;
<span class='justify-right-one'></span>  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;style_selectboxes_technique_3.css&quot; /&gt;
<span class='justify-right-one'></span> &lt;/head&gt;
<span class='justify-right-one'></span> &lt;body&gt;
<span class='justify-right-one'></span>  &lt;h2&gt;CSS Technique: Style Selectboxes Technique 3 Style The &lt;code&gt;select&lt;/code&gt; Type Selector&lt;/h2&gt;
<span></span>  &lt;p&gt;
<span></span>   Selectbox without label:
<span></span>   &lt;select name=&quot;unique to indicate selectbox1 when form submitted&quot;&gt;
<span></span>    &lt;option&gt;option one&lt;/option&gt;
<span></span>    &lt;option&gt;option two&lt;/option&gt;
<span></span>    &lt;option&gt;option three&lt;/option&gt;
<span></span>   &lt;/select&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;
<span></span>   &lt;label&gt;Selectbox with label:
<span></span>    &lt;select name=&quot;unique to indicate selectbox2 when form submitted&quot;&gt;
<span></span>     &lt;option&gt;option one&lt;/option&gt;
<span></span>     &lt;option&gt;option two&lt;/option&gt;
<span></span>     &lt;option&gt;option three&lt;/option&gt;
<span></span>    &lt;/select&gt;
<span></span>   &lt;/label&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;
<span></span>   &lt;label&gt;Selectbox with label and option three default selected/pre-selected:
<span></span>    &lt;select name=&quot;unique to indicate selectbox3 when form submitted&quot;&gt;
<span></span>     &lt;option&gt;option one&lt;/option&gt;
<span></span>     &lt;option&gt;option two&lt;/option&gt;
<span></span>     &lt;option selected=&quot;selected&quot;&gt;option three&lt;/option&gt;
<span></span>    &lt;/select&gt;
<span></span>   &lt;/label&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;
<span></span>   &lt;label&gt;
<span></span>    &lt;select name=&quot;unique to indicate selectbox4 when form submitted&quot;&gt;
<span></span>     &lt;option&gt;option one&lt;/option&gt;
<span></span>     &lt;option&gt;option two&lt;/option&gt;
<span></span>     &lt;option&gt;option three&lt;/option&gt;
<span></span>    &lt;/select&gt;
<span></span>   Selectbox with label.&lt;/label&gt;
<span></span>  &lt;/p&gt;
<span></span>  &lt;p&gt;Web browser support*: IE8+, ED12+, FF1.5+, SF4+, CH2+, OP10+.&lt;/p&gt;
<span></span>  &lt;p&gt;* Support everything except possibly the older web browsers not supporting the CSS &lt;code&gt;border-radius&lt;/code&gt; property.&lt;/p&gt;
<span></span> &lt;/body&gt;
<span></span>&lt;/html&gt;
</pre>

     <p>Technique 3 style the <code>select</code> type selector HTML source code notes:</p>

     <ul>
      <li>Selectboxes use the <code>select</code> and <code>option</code> elements. The <code>label</code> element is a commonly used optional element. If the selectbox data is to be sent when a form is submitted, use the <code>select</code> element with the <code>name</code> attribute and the <code>option</code> element with or without the <code>value</code> attribute. To default select/pre-select an option, use the <code>option</code> element with the <code>selected=&quot;selected&quot;</code> attribute.</li>
     </ul>

     <h3><a id='tech3Css'></a>4.4. Technique 3 Style The <code>select</code> Type Selector CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/css/css_techniques/style_selectboxes/style_selectboxes_technique_3.css'><span class='filename'>style_selectboxes_technique_3.css</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='justify-right-one'></span>select {
<span class='justify-right-one'></span>  border: 2px solid #999;
<span class='justify-right-one'></span>  border-radius: 3px;
<span class='justify-right-one'></span>  padding: 4px 6px;
<span class='justify-right-one'></span>}
<span class='justify-right-one'></span>select:hover {
<span class='justify-right-one'></span>  border-color: #666;
<span class='justify-right-one'></span>}
<span class='justify-right-one'></span>select:focus {
<span></span>  border-color: #666;
<span></span>  outline: 0;
<span></span>}
</pre>

     <p>Technique 3 style the <code>select</code> type selector CSS source code notes:</p>

     <ul>
      <li>Lines 1 - 5: Styles the selectboxes.</li>
      <li>Lines 6 - 8: Optional. Styles the selectboxes with a hover style.</li>
      <li>Lines 9 - 12: Optional. Styles the selectboxes with a focus style and removes the blue outline that recent versions of CH applies to a selectbox with focus.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>5. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://www.w3.org/TR/CSS2/'>Cascading Style Sheets Level 2 Revision 1 (CSS 2.1) Specification: W3C Recommendation 07 June 2011, Edited In Place 12 April 2016 To Point To New Work (w3.org)</a></li>
      <li><a href='http://www.w3.org/TR/css3-selectors/'>Selectors Level 3: W3C Recommendation 29 September 2011 (w3.org)</a></li>
      <li><a href='http://jigsaw.w3.org/css-validator/'>W3C CSS Validation Service (jigsaw.w3.org)</a></li>
      <li><a href='/css/css_techniques/index.php'>CSS Techniques (learnwebcoding.com)</a></li>
     </ul>

    </section>";
