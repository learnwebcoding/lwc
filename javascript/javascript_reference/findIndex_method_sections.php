<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/findIndex_method_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/findIndex_method.php.
 * Last reviewed/updated: 20 Nov 2020.
 * Published: 09 Feb 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>findIndex()</code> method. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>findIndex()</code> method, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>findIndex()</code> method. The web browser does not support the JavaScript <code>findIndex()</code> method.</q></p>

     <p>If the web browser recognizes the JavaScript <code>findIndex()</code> method, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>findIndex()</code> method includes support for at least one <code>findIndex()</code> method capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>findIndex()</code> method includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>findIndex()</code> method, and supports at least one <code>findIndex()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>findIndex()</code> method. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>findIndex()</code> method does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>findIndex()</code> method, but does not support at least one <code>findIndex()</code> method capability. The web browser partially supports the JavaScript <code>findIndex()</code> method.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>findIndex()</code> Method Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF25+, CH45+, OP32+.</li>
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

     <h2><a id='test'></a>2. <code>findIndex()</code> Method Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>var arrayLiteral = [10, 20, 30, 40];
<span class='line-number-all line-number-justify-right-one'></span>if (arrayLiteral.findIndex){
<span class='line-number-all line-number-justify-right-one'></span> var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all line-number-justify-right-one'></span> var arrayElement,
<span class='line-number-all line-number-justify-right-one'></span>  elementIndex,
<span class='line-number-all line-number-justify-right-one'></span>  arr;
<span class='line-number-all line-number-justify-right-one'></span> var objectLiteral = {propertyOne: 5};
<span class='line-number-all line-number-justify-right-one'></span> var callbackFunction = function(element, index, array){ <span class='comment'>// Callback function passed three arguments; 1.) array element value (required), 2.) array element numeric index (optional), and 3.) array that findIndex() method was called on (optional). The element, index, and array parameters are author-defined local variables; meaning, can use any valid identifier (eg, elementFoo, indexFoo, arrayFoo).</span>
<span class='line-number-all'></span>  arrayElement = element; <span class='comment'>// Set callback function arguments on outer scoped variables for use in if conditional below.</span>
<span class='line-number-all'></span>  elementIndex = index;
<span class='line-number-all'></span>  arr = array;
<span class='line-number-all'></span>  return (element + this.propertyOne) === 35; <span class='comment'>// Return statement can be any boolean expression; but, typically includes array element value. When callback function returns boolean true, findIndex() method returns array element numeric index. Otherwise, continue iterating over array elements. If no boolean expression evaluates to true, findIndex() method returns -1.</span>
<span class='line-number-all'></span> }
<span class='line-number-all'></span> var findIndexReturnValue = arrayLiteral.findIndex(callbackFunction, objectLiteral); <span class='comment'>// Call findIndex() method and set findIndex() method return value on variable. Callback function this value is objectLiteral.</span>
<span class='line-number-all'></span> if ((findIndexReturnValue === 2) &amp;&amp; (arrayElement === 30) &amp;&amp; (elementIndex === 2) &amp;&amp; (arr === arrayLiteral)){
<span class='line-number-all'></span>  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;findIndex()&lt;/code&gt; method, and supports at least one &lt;code&gt;findIndex()&lt;/code&gt; method capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;findIndex()&lt;/code&gt; method. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
<span class='line-number-all'></span> } else {
<span class='line-number-all'></span>  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;findIndex()&lt;/code&gt; method, but does not support at least one &lt;code&gt;findIndex()&lt;/code&gt; method capability. The web browser partially supports the JavaScript &lt;code&gt;findIndex()&lt;/code&gt; method.&lt;/p&gt;&quot;);
<span class='line-number-all'></span> }
<span class='line-number-all'></span>} else {
<span class='line-number-all'></span> document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;findIndex()&lt;/code&gt; method. The web browser does not support the JavaScript &lt;code&gt;findIndex()&lt;/code&gt; method.&lt;/p&gt;&quot;);
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <script>
     var arrayLiteral = [10, 20, 30, 40];
     if (arrayLiteral.findIndex){
      var element = document.getElementById(\"testId\");
      var arrayElement,
       elementIndex,
       arr;
      var objectLiteral = {propertyOne: 5};
      var callbackFunction = function(element, index, array){ // Callback function passed three arguments; 1.) array element value (required), 2.) array element numeric index (optional), and 3.) array that findIndex() method was called on (optional). The element, index, and array parameters are author-defined local variables; meaning, can use any valid identifier (eg, elementFoo, indexFoo, arrayFoo).
       arrayElement = element; // Set callback function arguments on outer scoped variables for use in if conditional below.
       elementIndex = index;
       arr = array;
       return (element + this.propertyOne) === 35; // Return statement can be any boolean expression; but, typically includes array element value. When callback function returns boolean true, findIndex() method returns array element numeric index. Otherwise, continue iterating over array elements. If no boolean expression evaluates to true, findIndex() method returns -1.
      }
      var findIndexReturnValue = arrayLiteral.findIndex(callbackFunction, objectLiteral); // Call findIndex() method and set findIndex() method return value on variable. Callback function this value is objectLiteral.
      if ((findIndexReturnValue === 2) && (arrayElement === 30) && (elementIndex === 2) && (arr === arrayLiteral)){
       document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>findIndex()</code> method, and supports at least one <code>findIndex()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>findIndex()</code> method. Positive determination of full web browser support is beyond the scope of this test.</p>\");
      } else {
       document.write(\"<p><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>findIndex()</code> method, but does not support at least one <code>findIndex()</code> method capability. The web browser partially supports the JavaScript <code>findIndex()</code> method.</p>\");
      }
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>findIndex()</code> method. The web browser does not support the JavaScript <code>findIndex()</code> method.</p>\");
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
