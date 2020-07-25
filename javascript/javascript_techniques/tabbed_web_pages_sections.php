<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_techniques/tabbed_web_pages_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_techniques/tabbed_web_pages.php.
 * Last reviewed/updated: 14 Jul 2019.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Tabbed web pages with JavaScript is a technique for providing the tab HTML and for dynamically changing the style of the selected/unselected tabs. Some notes on this example:</p>

     <ul>
      <li>Each tab is a traditional hyperlink with an <code>a</code> element and <code>href</code> attribute.</li>
      <li>Each tab hyperlink loads a different HTML document.</li>
      <li>The tab HTML is located in an external <span class='filename'>.js</span> JavaScript file, not in the .html HTML documents. Placing sitewide content in a single location, such as in an external <span class='filename'>.js</span> JavaScript file, facilitates coding, particularly code editing, and is well suited for sitewide header, navigational, and/or footer content. The tabs can be considered both sitewide header and navigational content. Additional sitewide header and navigational content, such as the web site name/logo, search box, and additional tabs, can be added to the external <span class='filename'>.js</span> JavaScript file.</li>
      <li>There are three tabs. To add tabs, simply follow the established patterns and, for each tab; 1.) add a tab hyperlink to the <span class='filename'>tabbed_web_pages_header_html.js</span> file, and 2.) create a different HTML document.</li>
      <li>The tabs are floated left. To float the tabs right; 1.) change the CSS source code lines 1 - 8 to <code>.tab-hyperlink { float: right; background-color: #888; color: #fff; text-decoration: none; margin-left: 5px; padding: 10px; }</code>, and 2.) reverse the order of the tab hyperlinks in the <span class='filename'>tabbed_web_pages_header_html.js</span> file.</li>
      <li>The tabs, including the highlighted tab, are styled using CSS. However, because the tab HTML is located in a single file, tab highlighting cannot be hard coded into the HTML and, therefore, must be done dynamically. A simple JavaScript method dynamically highlights the appropriate tab.</li>
      <li>The HTML element <code>style</code> attribute is exposed on the DOM as the JavaScript <code>style</code> object. The JavaScript <code>style</code> object gets/sets the HTML element <code>style</code> attribute value from/on the DOM. Specifically, assigning the JavaScript <code>style</code> object to a JavaScript variable gets the HTML element <code>style</code> attribute value from the DOM, and assigning a value to the JavaScript <code>style</code> object sets the HTML element <code>style</code> attribute value on the DOM.</li>
      <li>The loading of an HTML document, not the clicking of a tab, calls the JavaScript method that highlights the appropriate tab. Associating the JavaScript call with the loading of an HTML document means the HTML documents can link to one another directly, thereby bypassing the tabs, and the appropriate tab is highlighted.</li>
     </ul>

     <h3><a id='demo'></a>1.1. Demonstration</h3>

     <p>Demonstration: <a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_page_1.html'>JavaScript Technique: Tabbed Web Pages (learnwebcoding.com)</a>.</p>

     <h3><a id='support'></a>1.2. Web Browser Support</h3>

     <p>Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.</p>

     <h3><a id='try'></a>1.3. How To Try This Example On Your Computer</h3>

     <p>To try this example on your computer:</p>

     <ol>
      <li>Download the following source files to the same drive or folder on your computer:
       <ul class='link-list'>
        <li><a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_page_1.html'><span class='filename'>tabbed_web_page_1.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_page_2.html'><span class='filename'>tabbed_web_page_2.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_page_3.html'><span class='filename'>tabbed_web_page_3.html</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_pages.css'><span class='filename'>tabbed_web_pages.css</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_pages_javascript.js'><span class='filename'>tabbed_web_pages_javascript.js</span> (learnwebcoding.com)</a></li>
        <li><a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_pages_header_html.js'><span class='filename'>tabbed_web_pages_header_html.js</span> (learnwebcoding.com)</a></li>
       </ul>
      </li>
      <li>Double click any of the <span class='filename'>.html</span> files.</li>
     </ol>

     <h3><a id='abbreviations'></a>1.4. Abbreviations</h3>

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

     <h2><a id='technique'></a>2. Tabbed Web Pages</h2>

     <h3><a id='html'></a>2.1. HTML Source Code And Notes</h3>

     <p>HTML source code: <a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_page_1.html'><span class='filename'>tabbed_web_page_1.html</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;!DOCTYPE html&gt;
<span class='line-number-all line-number-justify-right-one'></span>&lt;html lang=&quot;en&quot;&gt;
<span class='line-number-all line-number-justify-right-one'></span> &lt;head&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;title&gt;JavaScript Technique: Tabbed Web Pages&lt;/title&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;meta charset=&quot;UTF-8&quot; /&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;tabbed_web_pages.css&quot; /&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;script src=&quot;tabbed_web_pages_javascript.js&quot;&gt;&lt;/script&gt;
<span class='line-number-all line-number-justify-right-one'></span> &lt;/head&gt;
<span class='line-number-all line-number-justify-right-one'></span> &lt;body&gt;
<span class='line-number-all'></span>  &lt;header&gt;
<span class='line-number-all'></span>   &lt;script src=&quot;tabbed_web_pages_header_html.js&quot;&gt;&lt;/script&gt;
<span class='line-number-all'></span>   &lt;script&gt;TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab(&quot;1&quot;);&lt;/script&gt;
<span class='line-number-all'></span>  &lt;/header&gt;
<span class='line-number-all'></span>  &lt;div class=&quot;wrapper&quot;&gt;
<span class='line-number-all'></span>   &lt;p&gt;Tabbed web page 1 content.&lt;/p&gt;
<span class='line-number-all'></span>   &lt;p&gt;Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.&lt;/p&gt;
<span class='line-number-all'></span>  &lt;/div&gt;
<span class='line-number-all'></span> &lt;/body&gt;
<span class='line-number-all'></span>&lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>Does not provide the tab HTML.</li>
      <li>Loaded when the Tabbed Web Page 1 tab is clicked.</li>
      <li>Line 11: Loads the <span class='filename'>tabbed_web_pages_header_html.js</span> Javascript file, which provides the header HTML on the DOM. The header HTML is an <code>h2</code> heading and the tab HTML.</li>
      <li>Line 12: Calls the <code>TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab()</code> method and passes it a value. The value passed into the <code>TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab()</code> method indicates which HTML document is currently loaded/tab was clicked and, therefore, indicates the tab that needs to be highlighted. When <span class='filename'>tabbed_web_page_1.html</span> is loaded, the Tabbed Web Page 1 tab needs to be highlighted, and, therefore, the <code>&quot;1&quot;</code> value (as in <code>id=&quot;tab1&quot;</code>) is passed.</li>
      <li>Lines 14 - 17: Optional content. Substitute your own content here.</li>
      <li>Identical to <span class='filename'>tabbed_web_page_2.html</span> and <span class='filename'>tabbed_web_page_3.html</span> with the following exceptions:
       <ul>
        <li>Line 12: Passes the <code>&quot;1&quot;</code> value.</li>
        <li>Line 15: Displays <b>Tabbed Web Page 1</b>.</li>
       </ul>
      </li>
     </ul>

     <p>HTML source code: <a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_page_2.html'><span class='filename'>tabbed_web_page_2.html</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;!DOCTYPE html&gt;
<span class='line-number-all line-number-justify-right-one'></span>&lt;html lang=&quot;en&quot;&gt;
<span class='line-number-all line-number-justify-right-one'></span> &lt;head&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;title&gt;JavaScript Technique: Tabbed Web Pages&lt;/title&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;meta charset=&quot;UTF-8&quot; /&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;tabbed_web_pages.css&quot; /&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;script src=&quot;tabbed_web_pages_javascript.js&quot;&gt;&lt;/script&gt;
<span class='line-number-all line-number-justify-right-one'></span> &lt;/head&gt;
<span class='line-number-all line-number-justify-right-one'></span> &lt;body&gt;
<span class='line-number-all'></span>  &lt;header&gt;
<span class='line-number-all'></span>   &lt;script src=&quot;tabbed_web_pages_header_html.js&quot;&gt;&lt;/script&gt;
<span class='line-number-all'></span>   &lt;script&gt;TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab(&quot;2&quot;);&lt;/script&gt;
<span class='line-number-all'></span>  &lt;/header&gt;
<span class='line-number-all'></span>  &lt;div class=&quot;wrapper&quot;&gt;
<span class='line-number-all'></span>   &lt;p&gt;Tabbed web page 2 content.&lt;/p&gt;
<span class='line-number-all'></span>   &lt;p&gt;Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.&lt;/p&gt;
<span class='line-number-all'></span>  &lt;/div&gt;
<span class='line-number-all'></span> &lt;/body&gt;
<span class='line-number-all'></span>&lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>Does not provide the tab HTML.</li>
      <li>Loaded when the Tabbed Web Page 2 tab is clicked.</li>
      <li>Line 11: Loads the <span class='filename'>tabbed_web_pages_header_html.js</span> file, which provides the header HTML on the DOM. The header HTML is an <code>h2</code> heading and the tab HTML.</li>
      <li>Line 12: Calls the <code>TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab()</code> method and passes it a value. The value passed into the <code>TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab()</code> method indicates which HTML document is currently loaded/tab was clicked and, therefore, indicates the tab that needs to be highlighted. When <span class='filename'>tabbed_web_page_2.html</span> is loaded, the Tabbed Web Page 2 tab needs to be highlighted, and, therefore, the <code>&quot;2&quot;</code> value (as in <code>id=&quot;tab2&quot;</code>) is passed.</li>
      <li>Lines 14 - 17: Optional content. Substitute your own content here.</li>
      <li>Identical to <span class='filename'>tabbed_web_page_1.html</span> and <span class='filename'>tabbed_web_page_3.html</span> with the following exceptions:
       <ul>
        <li>Line 12: Passes the <code>&quot;2&quot;</code> value.</li>
        <li>Line 15: Displays <b>Tabbed Web Page 2</b>.</li>
       </ul>
      </li>
     </ul>

     <p>HTML source code: <a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_page_3.html'><span class='filename'>tabbed_web_page_3.html</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;!DOCTYPE html&gt;
<span class='line-number-all line-number-justify-right-one'></span>&lt;html lang=&quot;en&quot;&gt;
<span class='line-number-all line-number-justify-right-one'></span> &lt;head&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;title&gt;JavaScript Technique: Tabbed Web Pages&lt;/title&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;meta charset=&quot;UTF-8&quot; /&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;tabbed_web_pages.css&quot; /&gt;
<span class='line-number-all line-number-justify-right-one'></span>  &lt;script src=&quot;tabbed_web_pages_javascript.js&quot;&gt;&lt;/script&gt;
<span class='line-number-all line-number-justify-right-one'></span> &lt;/head&gt;
<span class='line-number-all line-number-justify-right-one'></span> &lt;body&gt;
<span class='line-number-all'></span>  &lt;header&gt;
<span class='line-number-all'></span>   &lt;script src=&quot;tabbed_web_pages_header_html.js&quot;&gt;&lt;/script&gt;
<span class='line-number-all'></span>   &lt;script&gt;TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab(&quot;3&quot;);&lt;/script&gt;
<span class='line-number-all'></span>  &lt;/header&gt;
<span class='line-number-all'></span>  &lt;div class=&quot;wrapper&quot;&gt;
<span class='line-number-all'></span>   &lt;p&gt;Tabbed web page 3 content.&lt;/p&gt;
<span class='line-number-all'></span>   &lt;p&gt;Web browser support: IE6+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.&lt;/p&gt;
<span class='line-number-all'></span>  &lt;/div&gt;
<span class='line-number-all'></span> &lt;/body&gt;
<span class='line-number-all'></span>&lt;/html&gt;
</pre>

     <p>HTML source code notes:</p>

     <ul>
      <li>Does not provide the tab HTML.</li>
      <li>Loaded when the Tabbed Web Page 3 tab is clicked.</li>
      <li>Line 11: Loads the <span class='filename'>tabbed_web_pages_header_html.js</span> file, which provides the header HTML on the DOM. The header HTML is an <code>h2</code> heading and the tab HTML.</li>
      <li>Line 12: Calls the <code>TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab()</code> method and passes it a value. The value passed into the <code>TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab()</code> method indicates which HTML document is currently loaded/tab was clicked and, therefore, indicates the tab that needs to be highlighted. When <span class='filename'>tabbed_web_page_3.html</span> is loaded, the Tabbed Web Page 3 tab needs to be highlighted, and, therefore, the <code>&quot;3&quot;</code> value (as in <code>id=&quot;tab3&quot;</code>) is passed.</li>
      <li>Lines 14 - 17: Optional content. Substitute your own content here.</li>
      <li>Identical to <span class='filename'>tabbed_web_page_1.html</span> and <span class='filename'>tabbed_web_page_2.html</span> with the following exceptions:
       <ul>
        <li>Line 12: Passes the <code>&quot;3&quot;</code> value.</li>
        <li>Line 15: Displays <b>Tabbed Web Page 3</b>.</li>
       </ul>
      </li>
     </ul>

     <h3><a id='css'></a>2.2. CSS Source Code And Notes</h3>

     <p>CSS source code: <a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_pages.css'><span class='filename'>tabbed_web_pages.css</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='line-number-all line-number-justify-right-one'></span>.tab-hyperlink {
<span class='line-number-all line-number-justify-right-one'></span>  float: left;
<span class='line-number-all line-number-justify-right-one'></span>  background-color: #888;
<span class='line-number-all line-number-justify-right-one'></span>  color: #fff;
<span class='line-number-all line-number-justify-right-one'></span>  text-decoration: none;
<span class='line-number-all line-number-justify-right-one'></span>  margin-right: 5px;
<span class='line-number-all line-number-justify-right-one'></span>  padding: 10px;
<span class='line-number-all line-number-justify-right-one'></span>}
<span class='line-number-all line-number-justify-right-one'></span>.tab-hyperlink:hover {
<span class='line-number-all'></span>  text-decoration: underline;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>.wrapper {
<span class='line-number-all'></span>  clear: both;
<span class='line-number-all'></span>  border: 1px solid #ccc;
<span class='line-number-all'></span>  padding: 0 10px;
<span class='line-number-all'></span>}
</pre>

     <p>CSS source code notes:</p>

     <ul>
      <li>Line 6: Creates the space between the tabs.</li>
     </ul>

     <h3><a id='javascript'></a>2.3. JavaScript Source Code And Notes</h3>

     <p>JavaScript source code: <a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_pages_javascript.js'><span class='filename'>tabbed_web_pages_javascript.js</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='line-number-all'></span>var TabbedWebPagesHighlightTabUtil = {
<span class='line-number-all'></span> tabbedWebPagesHighlightTab: function(tabToHighlight){
<span class='line-number-all'></span>  var tabAnchorElementReference = document.getElementById(&quot;tab&quot; + tabToHighlight);
<span class='line-number-all'></span>  tabAnchorElementReference.style.backgroundColor = &quot;#00f&quot;;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>};
</pre>

     <p>JavaScript source code notes:</p>

     <ul>
      <li>Line 1: Defines <code>TabbedWebPagesHighlightTabUtil</code> as an object literal.</li>
      <li>Line 2: Defines the <code>tabbedWebPagesHighlightTab()</code> function as a method of the <code>TabbedWebPagesHighlightTabUtil</code> object.</li>
      <li>Line 2: Defines <code>tabToHighlight</code> as an argument of the <code>TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab()</code> method. The value passed into the <code>TabbedWebPagesHighlightTabUtil.tabbedWebPagesHighlightTab()</code> method is assigned to <code>tabToHighlight</code>. <code>tabToHighlight</code> is a local variable.</li>
      <li>Line 3: Gets a reference to the element with the <code>id=&quot;tab&quot; + tabToHighlight</code> attribute, and assigns the reference to <code>tabAnchorElementReference</code>. <code>tabAnchorElementReference</code> is a local variable.</li>
      <li>Line 4: Assigns <code>backgroundColor = &quot;#00f&quot;</code> to the JavaScript <code>tabAnchorElementReference.style</code> object, which sets <code>style=&quot;background-color:#00f&quot;</code> on the DOM for the HTML element with the <code>id=&quot;tab&quot; + tabToHighlight</code> attribute. This constitutes a CSS inline style and makes the background color blue (#00f) for the HTML element with the <code>id=&quot;tab&quot; + tabToHighlight</code> attribute.</li>
     </ul>

     <p>JavaScript source code: <a href='/javascript/javascript_techniques/tabbed_web_pages/tabbed_web_pages_header_html.js'><span class='filename'>tabbed_web_pages_header_html.js</span> (learnwebcoding.com)</a>:</p>

<pre>
<span class='line-number-all'></span>document.write(
<span class='line-number-all'></span> '&lt;h2&gt;JavaScript Technique: Tabbed Web Pages&lt;/h2&gt;' +
<span class='line-number-all'></span> '&lt;div&gt;' +
<span class='line-number-all'></span>  '&lt;a href=&quot;tabbed_web_page_1.html&quot; id=&quot;tab1&quot; class=&quot;tab-hyperlink&quot;>Tabbed Web Page 1&lt;/a&gt;' +
<span class='line-number-all'></span>  '&lt;a href=&quot;tabbed_web_page_2.html&quot; id=&quot;tab2&quot; class=&quot;tab-hyperlink&quot;>Tabbed Web Page 2&lt;/a&gt;' +
<span class='line-number-all'></span>  '&lt;a href=&quot;tabbed_web_page_3.html&quot; id=&quot;tab3&quot; class=&quot;tab-hyperlink&quot;>Tabbed Web Page 3&lt;/a&gt;' +
<span class='line-number-all'></span> '&lt;/div&gt;'
<span class='line-number-all'></span>);
</pre>

    <p>JavaScript source code notes:</p>

     <ul>
      <li>Line 1: Uses the JavaScript <code>document.write()</code> method to provide the header HTML on the DOM, The header HTML is an <code>h2</code> heading and the tab HTML.</li>
      <li>Lines 3 - 7: Provides the tab HTML. Each tab is a traditional hyperlink using the <code>a</code> element with the <code>href</code> attribute. Each tab hyperlink loads a different HTML document.</li>
      <li>Lines 4 - 6: An element <code>id</code> attribute specifies a selector that serves as a unique identifier for the element. Specifically, the value assigned to the element <code>id</code> attribute is the element unique identifier. In this example, each <code>a</code> element <code>id</code> attribute is assigned a unique value. Therefore, the unique values are the <code>a</code> element unique identifiers.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_techniques/index.php'>JavaScript Techniques (learnwebcoding.com)</a></li>
     </ul>

    </section>";
