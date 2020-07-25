<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/entries_method_map_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/entries_method_map.php.
 * Last reviewed/updated: 14 Jul 2019.
 * Published: 12 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>entries()</code> method on maps. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>entries()</code> method on maps, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>entries()</code> method on maps. The web browser does not support the JavaScript <code>entries()</code> method on maps.</q></p>

     <p>If the web browser recognizes the JavaScript <code>entries()</code> method on maps, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>entries()</code> method on maps includes support for at least one <code>entries()</code> method on maps capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>entries()</code> method on maps includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>entries()</code> method on maps, and supports at least one <code>entries()</code> method on maps capability. The web browser at least partially/possibly fully supports the JavaScript <code>entries()</code> method on maps. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>entries()</code> method on maps does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>entries()</code> method on maps, but does not support at least one <code>entries()</code> method on maps capability. The web browser partially supports the JavaScript <code>entries()</code> method on maps.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>entries()</code> Method On Maps Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF27+, CH38+, OP25+.</li>
      <li><q><b>Pass/Fail</b> (partial support):</q> FF20 - 26.</li>
      <li><q><b>Fail</b> (no support):</q> IE11-, SF5.1.7-.</li>
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

     <h2><a id='test'></a>2. <code>entries()</code> Method On Maps Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on maps. The web browser does not support the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on maps.&lt;/p&gt;<span class='comment'>&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;</span>
<span class='line-number-all line-number-justify-right-one'></span>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>var testMap = new Map(); <span class='comment'>// IE11 does not support maps initialized with an iterable. Hence, use Map constructor and set() method.</span>
<span class='line-number-all line-number-justify-right-one'></span>testMap.set(&quot;keyOne&quot;, &quot;a&quot;);
<span class='line-number-all line-number-justify-right-one'></span>testMap.set(&quot;keyTwo&quot;, &quot;b&quot;);
<span class='line-number-all line-number-justify-right-one'></span>testMap.set(&quot;keyThree&quot;, &quot;c&quot;); <span class='comment'>// testMap is {&quot;keyOne&quot; =&gt; &quot;a&quot;, &quot;keyTwo&quot; =&gt; &quot;b&quot;, &quot;keyThree&quot; =&gt; &quot;c&quot;}.</span>
<span class='line-number-all line-number-justify-right-one'></span>var testMapIteratorEntries = testMap.entries(); <span class='comment'>// Get reference to map built-in map iterator object called by entries() method. NOTE: entries() method can be considered a generator function. Call entries() generator function. Call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property. Called by entries(), map iterator object next() method return object value property is set to two element array with first element set to map element key and second element set to map element value.</span>
<span class='line-number-all line-number-justify-right-one'></span>var testMapIteratorEntriesNextValues = [];
<span class='line-number-all'></span>for (var i = 0; i &lt; testMap.size; i++){ <span class='comment'>// Identical to for (var entry of testMap.entries()){console.log(entry);}. 1.) [&quot;keyOne&quot;, &quot;a&quot;], 2.) [&quot;keyTwo&quot;, &quot;b&quot;], 3.) [&quot;keyThree&quot;, &quot;c&quot;].</span>
<span class='line-number-all'></span> testMapIteratorEntriesNextValues[i] = testMapIteratorEntries.next().value;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>if (testMap.entries){
<span class='line-number-all'></span> var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all'></span> if ((typeof testMapIteratorEntries === &quot;object&quot;) &amp;&amp; testMapIteratorEntries instanceof Object &amp;&amp; Object.prototype.isPrototypeOf(testMapIteratorEntries) &amp;&amp; Array.isArray(testMapIteratorEntriesNextValues[0]) &amp;&amp; (testMapIteratorEntriesNextValues[0][0] === &quot;keyOne&quot;) &amp;&amp; (testMapIteratorEntriesNextValues[0][1] === &quot;a&quot;) &amp;&amp; (testMapIteratorEntriesNextValues[1][0] === &quot;keyTwo&quot;) &amp;&amp; (testMapIteratorEntriesNextValues[1][1] === &quot;b&quot;) &amp;&amp; (testMapIteratorEntriesNextValues[2][0] === &quot;keyThree&quot;) &amp;&amp; (testMapIteratorEntriesNextValues[2][1] === &quot;c&quot;)){
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on maps, and supports at least one &lt;code&gt;entries()&lt;/code&gt; method on maps capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on maps. Positive determination of full web browser support is beyond the scope of this test.&quot;;
<span class='line-number-all'></span> } else {
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on maps, but does not support at least one &lt;code&gt;entries()&lt;/code&gt; method on maps capability. The web browser partially supports the JavaScript &lt;code&gt;entries()&lt;/code&gt; method on maps.&quot;;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Similar test code in Generator object, entries() method on maps, keys() method on maps, and values() method on maps. -->
<!-- Use for statement/loop instead of ECMAScript 2015 for...of statement/loop to avoid for...of statement/loop possibly skewing test result. -->
<!-- Per LWC web browser support testing, entries() method on maps supported by ED12+, FF27+, CH38+, OP25+, partial FF20 - 26, no IE11-, SF5.1.7- and [Symbol.iterator] property supported by ED12+, FF36+, CH38+, OP25+, no IE11-, SF5.1.7-. Therefore, in web browser support test below, did not test if (mapIteratorEntries[Symbol.iterator]) to avoid skewing test result to newer version FF. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>entries()</code> method on maps. The web browser does not support the JavaScript <code>entries()</code> method on maps.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var testMap = new Map(); // IE11 does not support maps initialized with an iterable. Hence, use Map constructor and set() method.
     testMap.set(\"keyOne\", \"a\");
     testMap.set(\"keyTwo\", \"b\");
     testMap.set(\"keyThree\", \"c\"); // testMap is {\"keyOne\" =&gt; \"a\", \"keyTwo\" =&gt; \"b\", \"keyThree\" =&gt; \"c\"}.
     var testMapIteratorEntries = testMap.entries(); // Get reference to map built-in map iterator object called by entries() method. NOTE: entries() method can be considered a generator function. Call entries() generator function. Call returns a Generator object which inherits prototype from Object (window.Generator property does not exist) and is an iterator. Generator object has next() method property. Called by entries(), map iterator object next() method return object value property is set to two element array with first element set to map element key and second element set to map element value.
     var testMapIteratorEntriesNextValues = [];
     for (var i = 0; i < testMap.size; i++){ // Identical to for (var entry of testMap.entries()){console.log(entry);}. 1.) [\"keyOne\", \"a\"], 2.) [\"keyTwo\", \"b\"], 3.) [\"keyThree\", \"c\"].
      testMapIteratorEntriesNextValues[i] = testMapIteratorEntries.next().value;
     }
     if (testMap.entries){
      var element = document.getElementById(\"testId\");
      if ((typeof testMapIteratorEntries === \"object\") && testMapIteratorEntries instanceof Object && Object.prototype.isPrototypeOf(testMapIteratorEntries) && Array.isArray(testMapIteratorEntriesNextValues[0]) && (testMapIteratorEntriesNextValues[0][0] === \"keyOne\") && (testMapIteratorEntriesNextValues[0][1] === \"a\") && (testMapIteratorEntriesNextValues[1][0] === \"keyTwo\") && (testMapIteratorEntriesNextValues[1][1] === \"b\") && (testMapIteratorEntriesNextValues[2][0] === \"keyThree\") && (testMapIteratorEntriesNextValues[2][1] === \"c\")){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>entries()</code> method on maps, and supports at least one <code>entries()</code> method on maps capability. The web browser at least partially/possibly fully supports the JavaScript <code>entries()</code> method on maps. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>entries()</code> method on maps, but does not support at least one <code>entries()</code> method on maps capability. The web browser partially supports the JavaScript <code>entries()</code> method on maps.\";
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
