<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/forEach_method_map_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/forEach_method_map.php.
 * Last reviewed/updated: 20 Nov 2020.
 * Published: 23 Dec 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>forEach()</code> method on maps. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>forEach()</code> method on maps, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>forEach()</code> method on maps. The web browser does not support the JavaScript <code>forEach()</code> method on maps.</q></p>

     <p>If the web browser recognizes the JavaScript <code>forEach()</code> method on maps, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>forEach()</code> method on maps includes support for at least one <code>forEach()</code> method on maps capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>forEach()</code> method on maps includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>forEach()</code> method on maps, and supports at least one <code>forEach()</code> method on maps capability. The web browser at least partially/possibly fully supports the JavaScript <code>forEach()</code> method on maps. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>forEach()</code> method on maps does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>forEach()</code> method on maps, but does not support at least one <code>forEach()</code> method on maps capability. The web browser partially supports the JavaScript <code>forEach()</code> method on maps.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>forEach()</code> Method On Maps Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> IE11+, ED12+, FF25+, CH38+, OP25+.</li>
      <li><q><b>Fail</b> (no support):</q> SF5.1.7-.</li>
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

     <h2><a id='test'></a>2. <code>forEach()</code> Method On Maps Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on maps. The web browser does not support the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on maps.&lt;/p&gt;<span class='comment'>&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;</span>
<span class='line-number-all line-number-justify-right-one'></span>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>var testMap = new Map(); <span class='comment'>// IE11 does not support maps initialized with an iterable. Therefore, create testMap using Map constructor and set() method.</span>
<span class='line-number-all line-number-justify-right-one'></span>testMap.set(&quot;one&quot;, 1);
<span class='line-number-all line-number-justify-right-one'></span>testMap.set(&quot;two&quot;, 2);
<span class='line-number-all line-number-justify-right-one'></span>testMap.set(&quot;three&quot;, 3); <span class='comment'>// testMap is Map(3) {&quot;one&quot; =&gt; 1, &quot;two&quot; =&gt; 2, &quot;three&quot; =&gt; 3}.</span>
<span class='line-number-all line-number-justify-right-one'></span>var keyString = &quot;&quot;,
<span class='line-number-all line-number-justify-right-one'></span> valueString = &quot;&quot;,
<span class='line-number-all'></span> mapArgument = null;
<span class='line-number-all'></span>propertyOne = &quot;window object propertyOne value&quot;; <span class='comment'>// Identical to window.propertyOne = &quot;window object propertyOne value&quot;;.</span>
<span class='line-number-all'></span>var objectLiteral = {
<span class='line-number-all'></span> propertyOne: &quot;objectLiteral propertyOne value&quot;
<span class='line-number-all'></span>},
<span class='line-number-all'></span> thisValue = null,
<span class='line-number-all'></span> thisPropertyOne = &quot;&quot;;
<span class='line-number-all'></span>if (testMap.forEach){
<span class='line-number-all'></span> var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all'></span> testMap.forEach(function(value, key, map){
<span class='line-number-all'></span>  valueString += value; <span class='comment'>// After final iteration: &quot;123&quot;.</span>
<span class='line-number-all'></span>  keyString += key; <span class='comment'>// After final iteration: &quot;onetwothree&quot;.</span>
<span class='line-number-all'></span>  mapArgument = map; <span class='comment'>// testMap.</span>
<span class='line-number-all'></span>  thisValue = this; <span class='comment'>// objectLiteral.</span>
<span class='line-number-all'></span>  thisPropertyOne = this.propertyOne; <span class='comment'>// &quot;objectLiteral propertyOne value&quot;.</span>
<span class='line-number-all'></span> }, objectLiteral); <span class='comment'>// Set this to objectLiteral.</span>
<span class='line-number-all'></span> if ((valueString === &quot;123&quot;) &amp;&amp; (keyString === &quot;onetwothree&quot;) &amp;&amp; (mapArgument === testMap) &amp;&amp; (thisValue === objectLiteral) &amp;&amp; (thisPropertyOne === &quot;objectLiteral propertyOne value&quot;)){
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on maps, and supports at least one &lt;code&gt;forEach()&lt;/code&gt; method on maps capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on maps. Positive determination of full web browser support is beyond the scope of this test.&quot;;
<span class='line-number-all'></span> } else {
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on maps, but does not support at least one &lt;code&gt;forEach()&lt;/code&gt; method on maps capability. The web browser partially supports the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on maps.&quot;;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>forEach()</code> method on maps. The web browser does not support the JavaScript <code>forEach()</code> method on maps.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var testMap = new Map(); // IE11 does not support maps initialized with an iterable. Therefore, create testMap using Map constructor and set() method.
     testMap.set(\"one\", 1);
     testMap.set(\"two\", 2);
     testMap.set(\"three\", 3); // testMap is Map(3) {\"one\" =&gt; 1, \"two\" =&gt; 2, \"three\" =&gt; 3}.
     var keyString = \"\",
      valueString = \"\",
      mapArgument = null;
     propertyOne = \"window object propertyOne value\"; // Identical to window.propertyOne = \"window object propertyOne value\";.
     var objectLiteral = {
      propertyOne: \"objectLiteral propertyOne value\"
     },
      thisValue = null,
      thisPropertyOne = \"\";
     if (testMap.forEach){
      var element = document.getElementById(\"testId\");
      testMap.forEach(function(value, key, map){
       valueString += value; // After final iteration: \"123\".
       keyString += key; // After final iteration: \"onetwothree\".
       mapArgument = map; // testMap.
       thisValue = this; // objectLiteral.
       thisPropertyOne = this.propertyOne; // \"objectLiteral propertyOne value\".
      }, objectLiteral); // Set this to objectLiteral.
      if ((valueString === \"123\") && (keyString === \"onetwothree\") && (mapArgument === testMap) && (thisValue === objectLiteral) && (thisPropertyOne === \"objectLiteral propertyOne value\")){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>forEach()</code> method on maps, and supports at least one <code>forEach()</code> method on maps capability. The web browser at least partially/possibly fully supports the JavaScript <code>forEach()</code> method on maps. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>forEach()</code> method on maps, but does not support at least one <code>forEach()</code> method on maps capability. The web browser partially supports the JavaScript <code>forEach()</code> method on maps.\";
      }
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
