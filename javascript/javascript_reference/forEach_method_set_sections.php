<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/forEach_method_set_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/forEach_method_set.php.
 * Last reviewed/updated: 14 Jul 2019.
 * Published: 23 Dec 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>forEach()</code> method on sets. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>forEach()</code> method on sets, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>forEach()</code> method on sets. The web browser does not support the JavaScript <code>forEach()</code> method on sets.</q></p>

     <p>If the web browser recognizes the JavaScript <code>forEach()</code> method on sets, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>forEach()</code> method on sets includes support for at least one <code>forEach()</code> method on sets capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>forEach()</code> method on sets includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>forEach()</code> method on sets, and supports at least one <code>forEach()</code> method on sets capability. The web browser at least partially/possibly fully supports the JavaScript <code>forEach()</code> method on sets. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>forEach()</code> method on sets does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>forEach()</code> method on sets, but does not support at least one <code>forEach()</code> method on sets capability. The web browser partially supports the JavaScript <code>forEach()</code> method on sets.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>forEach()</code> Method On Sets Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> IE11+, ED12+, FF25+, CH38+, OP25+.</li>
      <li><q><b>Fail</b> (no support):</q> SF5.1.7-.</li>
     </ul>

     <h3><a id='abbreviations'></a>1.2. Abbreviations</h3>

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

     <h2><a id='test'></a>2. <code>forEach()</code> Method On Sets Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on sets. The web browser does not support the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on sets.&lt;/p&gt;<span class='comment'>&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;</span>
<span class='line-number-all line-number-justify-right-one'></span>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>var testSet = new Set(); <span class='comment'>// IE11 does not support sets initialized with an iterable. Therefore, create testSet using Set constructor and add() method.</span>
<span class='line-number-all line-number-justify-right-one'></span>testSet.add(&quot;a&quot;);
<span class='line-number-all line-number-justify-right-one'></span>testSet.add(&quot;b&quot;);
<span class='line-number-all line-number-justify-right-one'></span>testSet.add(&quot;c&quot;); <span class='comment'>// testSet is Set(3) {&quot;a&quot;, &quot;b&quot;, &quot;c&quot;}.</span>
<span class='line-number-all line-number-justify-right-one'></span>var valueString = &quot;&quot;,
<span class='line-number-all line-number-justify-right-one'></span> valueRepeatedString = &quot;&quot;,
<span class='line-number-all'></span> setArgument = null;
<span class='line-number-all'></span>propertyOne = &quot;window object propertyOne value&quot;; <span class='comment'>// Identical to window.propertyOne = &quot;window object propertyOne value&quot;;.</span>
<span class='line-number-all'></span>var objectLiteral = {
<span class='line-number-all'></span> propertyOne: &quot;objectLiteral propertyOne value&quot;
<span class='line-number-all'></span>},
<span class='line-number-all'></span> thisValue = null,
<span class='line-number-all'></span> thisPropertyOne = &quot;&quot;;
<span class='line-number-all'></span>if (testSet.forEach){
<span class='line-number-all'></span> var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all'></span> testSet.forEach(function(value, valueRepeated, set){
<span class='line-number-all'></span>  valueString += value; <span class='comment'>// After final iteration: &quot;abc&quot;.</span>
<span class='line-number-all'></span>  valueRepeatedString += valueRepeated; <span class='comment'>// After final iteration: &quot;abc&quot;.</span>
<span class='line-number-all'></span>  setArgument = set; <span class='comment'>// testSet.</span>
<span class='line-number-all'></span>  thisValue = this; <span class='comment'>// objectLiteral.</span>
<span class='line-number-all'></span>  thisPropertyOne = this.propertyOne; <span class='comment'>// &quot;objectLiteral propertyOne value&quot;.</span>
<span class='line-number-all'></span> }, objectLiteral); <span class='comment'>// Set this to objectLiteral.</span>
<span class='line-number-all'></span> if ((valueString === &quot;abc&quot;) &amp;&amp; (valueRepeatedString === &quot;abc&quot;) &amp;&amp; (setArgument === testSet) &amp;&amp; (thisValue === objectLiteral) &amp;&amp; (thisPropertyOne === &quot;objectLiteral propertyOne value&quot;)){
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on sets, and supports at least one &lt;code&gt;forEach()&lt;/code&gt; method on sets capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on sets. Positive determination of full web browser support is beyond the scope of this test.&quot;;
<span class='line-number-all'></span> } else {
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on sets, but does not support at least one &lt;code&gt;forEach()&lt;/code&gt; method on sets capability. The web browser partially supports the JavaScript &lt;code&gt;forEach()&lt;/code&gt; method on sets.&quot;;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>forEach()</code> method on sets. The web browser does not support the JavaScript <code>forEach()</code> method on sets.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var testSet = new Set(); // IE11 does not support sets initialized with an iterable. Therefore, create testSet using Set constructor and add() method.
     testSet.add(\"a\");
     testSet.add(\"b\");
     testSet.add(\"c\"); // testSet is Set(3) {\"a\", \"b\", \"c\"}.
     var valueString = \"\",
      valueRepeatedString = \"\",
      setArgument = null;
     propertyOne = \"window object propertyOne value\"; // Identical to window.propertyOne = \"window object propertyOne value\";.
     var objectLiteral = {
      propertyOne: \"objectLiteral propertyOne value\"
     },
      thisValue = null,
      thisPropertyOne = \"\";
     if (testSet.forEach){
      var element = document.getElementById(\"testId\");
      testSet.forEach(function(value, valueRepeated, set){
       valueString += value; // After final iteration: \"abc\".
       valueRepeatedString += valueRepeated; // After final iteration: \"abc\".
       setArgument = set; // testSet.
       thisValue = this; // objectLiteral.
       thisPropertyOne = this.propertyOne; // \"objectLiteral propertyOne value\".
      }, objectLiteral); // Set this to objectLiteral.
      if ((valueString === \"abc\") && (valueRepeatedString === \"abc\") && (setArgument === testSet) && (thisValue === objectLiteral) && (thisPropertyOne === \"objectLiteral propertyOne value\")){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>forEach()</code> method on sets, and supports at least one <code>forEach()</code> method on sets capability. The web browser at least partially/possibly fully supports the JavaScript <code>forEach()</code> method on sets. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>forEach()</code> method on sets, but does not support at least one <code>forEach()</code> method on sets capability. The web browser partially supports the JavaScript <code>forEach()</code> method on sets.\";
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
