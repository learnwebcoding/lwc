<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/style_object_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/style_object.php.
 * Last reviewed/updated: 20 Nov 2020.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>style</code> object. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>style</code> object, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>style</code> object. The web browser does not support the JavaScript <code>style</code> object.</q></p>

     <p>If the web browser recognizes the JavaScript <code>style</code> object, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>style</code> object includes support for at least one <code>style</code> object capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>style</code> object includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>style</code> object, and supports at least one <code>style</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>style</code> object. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>style</code> object does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>style</code> object, but does not support at least one <code>style</code> object capability. The web browser partially supports the JavaScript <code>style</code> object.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>style</code> Object Web Browser Support</h3>

<!-- style.display is earlier DOM. style.length is DOM level 2. -->

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> IE9+, ED12+, FF1.5+, SF3.1+, CH2+, OP7.50+.</li>
      <li><q><b>Pass/Fail</b> (partial support):</q> IE6 - 8.</li>
     </ul>

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

     <h2><a id='test'></a>2. <code>style</code> Object Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;p id='testId' style='font-family:arial;font-size:12px;background-color:#ffffff;color:#323232'&gt;&lt;/p&gt;
<span class='line-number-all line-number-justify-right-one'></span>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all line-number-justify-right-one'></span>if (element.style){
<span class='line-number-all line-number-justify-right-one'></span> if (element.style.length === 4){
<span class='line-number-all line-number-justify-right-one'></span>  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;style&lt;/code&gt; object, and supports at least one &lt;code&gt;style&lt;/code&gt; object capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;style&lt;/code&gt; object. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
<span class='line-number-all line-number-justify-right-one'></span> } else {
<span class='line-number-all line-number-justify-right-one'></span>  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;style&lt;/code&gt; object, but does not support at least one &lt;code&gt;style&lt;/code&gt; object capability. The web browser partially supports the JavaScript &lt;code&gt;style&lt;/code&gt; object.&lt;/p&gt;&quot;);
<span class='line-number-all'></span> }
<span class='line-number-all'></span>} else {
<span class='line-number-all'></span> document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;style&lt;/code&gt; object. The web browser does not support the JavaScript &lt;code&gt;style&lt;/code&gt; object.&lt;/p&gt;&quot;);
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId' style='font-family:arial;font-size:12px;background-color:#ffffff;color:#323232'></p>

     <script>
     var element = document.getElementById(\"testId\");
     if (element.style){
      if (element.style.length === 4){
       document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>style</code> object, and supports at least one <code>style</code> object capability. The web browser at least partially/possibly fully supports the JavaScript <code>style</code> object. Positive determination of full web browser support is beyond the scope of this test.</p>\");
      } else {
       document.write(\"<p><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>style</code> object, but does not support at least one <code>style</code> object capability. The web browser partially supports the JavaScript <code>style</code> object.</p>\");
      }
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>style</code> object. The web browser does not support the JavaScript <code>style</code> object.</p>\");
     }
     </script>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='/javascript/javascript_reference/index.php'>JavaScript Feature Reference (learnwebcoding.com)</a></li>
     </ul>

    </section>";
