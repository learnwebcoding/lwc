<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/keys_method_array_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/keys_method_array.php.
 * Last reviewed/updated: 20 Nov 2020.
 * Published: 12 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>keys()</code> method on arrays. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>keys()</code> method on arrays, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>keys()</code> method on arrays. The web browser does not support the JavaScript <code>keys()</code> method on arrays.</q></p>

     <p>If the web browser recognizes the JavaScript <code>keys()</code> method on arrays, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>keys()</code> method on arrays includes support for at least one <code>keys()</code> method on arrays capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>keys()</code> method on arrays includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>keys()</code> method on arrays, and supports at least one <code>keys()</code> method on arrays capability. The web browser at least partially/possibly fully supports the JavaScript <code>keys()</code> method on arrays. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>keys()</code> method on arrays does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>keys()</code> method on arrays, but does not support at least one <code>keys()</code> method on arrays capability. The web browser partially supports the JavaScript <code>keys()</code> method on arrays.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>keys()</code> Method On Arrays Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF28+, CH38+, OP25+.</li>
      <li><q><b>Fail</b> (no support):</q> IE11-, SF5.1.7-.</li>
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

     <h2><a id='test'></a>2. <code>keys()</code> Method On Arrays Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on arrays. The web browser does not support the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on arrays.&lt;/p&gt;<span class='comment'>&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;</span>
<span class='line-number-all line-number-justify-right-one'></span>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>var arrayViaArrayConstructor = new Array();
<span class='line-number-all line-number-justify-right-one'></span>arrayViaArrayConstructor[0] = &quot;a&quot;;
<span class='line-number-all line-number-justify-right-one'></span>arrayViaArrayConstructor[1] = &quot;b&quot;;
<span class='line-number-all line-number-justify-right-one'></span>arrayViaArrayConstructor[2] = &quot;c&quot;;
<span class='line-number-all line-number-justify-right-one'></span>var arrayLiteral = [&quot;d&quot;, &quot;e&quot;, &quot;f&quot;];
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Get references to array built-in array iterator object called by keys() method. NOTE: keys() method can be considered a generator function. Call keys() generator functions. Each call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property. Called by keys(), array iterator object next() method return object value property is set to array element numeric index.</span>
<span class='line-number-all'></span>var arrayViaArrayConstructorIteratorKeys = arrayViaArrayConstructor.keys();
<span class='line-number-all'></span>var arrayLiteralIteratorKeys = arrayLiteral.keys();
<span class='line-number-all'></span>var arrayViaArrayConstructorIteratorKeysNextValues = [];
<span class='line-number-all'></span>var arrayLiteralIteratorKeysNextValues = [];
<span class='line-number-all'></span>for (var i = 0; i &lt; arrayViaArrayConstructor.length; i++){ <span class='comment'>// Identical to for (var key of arrayViaArrayConstructor.keys()){console.log(key);}. 1.) 0, 2.) 1, 3.) 2.</span>
<span class='line-number-all'></span> arrayViaArrayConstructorIteratorKeysNextValues[i] = arrayViaArrayConstructorIteratorKeys.next().value;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>for (var i = 0; i &lt; arrayLiteral.length; i++){ <span class='comment'>// Identical to for (var key of arrayLiteral.keys()){console.log(key);}. 1.) 0, 2.) 1, 3.) 2.</span>
<span class='line-number-all'></span> arrayLiteralIteratorKeysNextValues[i] = arrayLiteralIteratorKeys.next().value;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>if (arrayViaArrayConstructor.keys &amp;&amp; arrayLiteral.keys){
<span class='line-number-all'></span> var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all'></span> if ((typeof arrayViaArrayConstructorIteratorKeys === &quot;object&quot;) &amp;&amp; arrayViaArrayConstructorIteratorKeys instanceof Object &amp;&amp; Object.prototype.isPrototypeOf(arrayViaArrayConstructorIteratorKeys) &amp;&amp; (typeof arrayViaArrayConstructorIteratorKeysNextValues[0] === &quot;number&quot;) &amp;&amp; (arrayViaArrayConstructorIteratorKeysNextValues[0] === 0) &amp;&amp; (arrayViaArrayConstructorIteratorKeysNextValues[1] === 1) &amp;&amp; (arrayViaArrayConstructorIteratorKeysNextValues[2] === 2) &amp;&amp; (typeof arrayLiteralIteratorKeys === &quot;object&quot;) &amp;&amp; arrayLiteralIteratorKeys instanceof Object &amp;&amp; Object.prototype.isPrototypeOf(arrayLiteralIteratorKeys) &amp;&amp; (typeof arrayLiteralIteratorKeysNextValues[0] === &quot;number&quot;) &amp;&amp; (arrayLiteralIteratorKeysNextValues[0] === 0) &amp;&amp; (arrayLiteralIteratorKeysNextValues[1] === 1) &amp;&amp; (arrayLiteralIteratorKeysNextValues[2] === 2)){
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on arrays, and supports at least one &lt;code&gt;keys()&lt;/code&gt; method on arrays capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on arrays. Positive determination of full web browser support is beyond the scope of this test.&quot;;
<span class='line-number-all'></span> } else {
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on arrays, but does not support at least one &lt;code&gt;keys()&lt;/code&gt; method on arrays capability. The web browser partially supports the JavaScript &lt;code&gt;keys()&lt;/code&gt; method on arrays.&quot;;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Similar test code in Generator object, entries() method on arrays, keys() method on arrays, and values() method on arrays. -->
<!-- Use for statement/loop instead of ECMAScript 2015 for...of statement/loop to avoid for...of statement/loop possibly skewing test result. -->
<!-- Per LWC web browser support testing, keys() method on arrays supported by ED12+, FF28+, CH38+, OP25+, no IE11-, SF5.1.7- and [Symbol.iterator] property supported by ED12+, FF36+, CH38+, OP25+, no IE11-, SF5.1.7-. Therefore, in web browser support test below, did not test if (arrayIteratorKeys[Symbol.iterator]) to avoid skewing test result to newer version FF. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>keys()</code> method on arrays. The web browser does not support the JavaScript <code>keys()</code> method on arrays.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var arrayViaArrayConstructor = new Array();
     arrayViaArrayConstructor[0] = \"a\";
     arrayViaArrayConstructor[1] = \"b\";
     arrayViaArrayConstructor[2] = \"c\";
     var arrayLiteral = [\"d\", \"e\", \"f\"];
     // Get references to array built-in array iterator object called by keys() method. NOTE: keys() method can be considered a generator function. Call keys() generator functions. Each call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property. Called by keys(), array iterator object next() method return object value property is set to array element numeric index.
     var arrayViaArrayConstructorIteratorKeys = arrayViaArrayConstructor.keys();
     var arrayLiteralIteratorKeys = arrayLiteral.keys();
     var arrayViaArrayConstructorIteratorKeysNextValues = [];
     var arrayLiteralIteratorKeysNextValues = [];
     for (var i = 0; i < arrayViaArrayConstructor.length; i++){ // Identical to for (var key of arrayViaArrayConstructor.keys()){console.log(key);}. 1.) 0, 2.) 1, 3.) 2.
      arrayViaArrayConstructorIteratorKeysNextValues[i] = arrayViaArrayConstructorIteratorKeys.next().value;
     }
     for (var i = 0; i < arrayLiteral.length; i++){ // Identical to for (var key of arrayLiteral.keys()){console.log(key);}. 1.) 0, 2.) 1, 3.) 2.
      arrayLiteralIteratorKeysNextValues[i] = arrayLiteralIteratorKeys.next().value;
     }
     if (arrayViaArrayConstructor.keys && arrayLiteral.keys){
      var element = document.getElementById(\"testId\");
      if ((typeof arrayViaArrayConstructorIteratorKeys === \"object\") && arrayViaArrayConstructorIteratorKeys instanceof Object && Object.prototype.isPrototypeOf(arrayViaArrayConstructorIteratorKeys) && (typeof arrayViaArrayConstructorIteratorKeysNextValues[0] === \"number\") && (arrayViaArrayConstructorIteratorKeysNextValues[0] === 0) && (arrayViaArrayConstructorIteratorKeysNextValues[1] === 1) && (arrayViaArrayConstructorIteratorKeysNextValues[2] === 2) && (typeof arrayLiteralIteratorKeys === \"object\") && arrayLiteralIteratorKeys instanceof Object && Object.prototype.isPrototypeOf(arrayLiteralIteratorKeys) && (typeof arrayLiteralIteratorKeysNextValues[0] === \"number\") && (arrayLiteralIteratorKeysNextValues[0] === 0) && (arrayLiteralIteratorKeysNextValues[1] === 1) && (arrayLiteralIteratorKeysNextValues[2] === 2)){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>keys()</code> method on arrays, and supports at least one <code>keys()</code> method on arrays capability. The web browser at least partially/possibly fully supports the JavaScript <code>keys()</code> method on arrays. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>keys()</code> method on arrays, but does not support at least one <code>keys()</code> method on arrays capability. The web browser partially supports the JavaScript <code>keys()</code> method on arrays.\";
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
