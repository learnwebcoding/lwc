<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/isArray_method_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/isArray_method.php.
 * Last reviewed/updated: 14 Jul 2019.
 * Published: 05 Jan 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>isArray()</code> method. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>isArray()</code> method, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>isArray()</code> method. The web browser does not support the JavaScript <code>isArray()</code> method.</q></p>

     <p>If the web browser recognizes the JavaScript <code>isArray()</code> method, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>isArray()</code> method includes support for at least one <code>isArray()</code> method capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>isArray()</code> method includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>isArray()</code> method, and supports at least one <code>isArray()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>isArray()</code> method. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>isArray()</code> method does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>isArray()</code> method, but does not support at least one <code>isArray()</code> method capability. The web browser partially supports the JavaScript <code>isArray()</code> method.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>isArray()</code> Method Web Browser Support</h3>

     <p><q><b>Pass</b> (at least partial/possibly full support):</q> IE9+, ED12+, FF4+, SF5+, CH4+, OP10.50+.</p>

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

     <h2><a id='test'></a>2. <code>isArray()</code> Method Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>var booleanLiteral = true,
<span class='line-number-all line-number-justify-right-one'></span> numberLiteral = 1,
<span class='line-number-all line-number-justify-right-one'></span> stringLiteral = &quot;abc&quot;,
<span class='line-number-all line-number-justify-right-one'></span> nullLiteral = null,
<span class='line-number-all line-number-justify-right-one'></span> undefinedLiteral = undefined,
<span class='line-number-all line-number-justify-right-one'></span> undefinedVariable;
<span class='line-number-all line-number-justify-right-one'></span>function functionDeclaration(){}
<span class='line-number-all line-number-justify-right-one'></span>var functionExpression = function(){},
<span class='line-number-all'></span> functionViaFunctionConstructor = new Function(),
<span class='line-number-all'></span> objectLiteral = {},
<span class='line-number-all'></span> objectViaObjectConstructor = new Object();
<span class='line-number-all'></span>function CustomConstructor(){}
<span class='line-number-all'></span>var objectViaCustomConstructor = new CustomConstructor(),
<span class='line-number-all'></span> arrayLiteral = [],
<span class='line-number-all'></span> arrayViaArrayConstructor = new Array();
<span class='line-number-all'></span>if (Array.isArray){
<span class='line-number-all'></span> var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all'></span> if (!Array.isArray(booleanLiteral) &amp;&amp; !Array.isArray(numberLiteral) &amp;&amp; !Array.isArray(stringLiteral) &amp;&amp; !Array.isArray(nullLiteral) &amp;&amp; !Array.isArray(undefinedLiteral) &amp;&amp; !Array.isArray(undefinedVariable) &amp;&amp; !Array.isArray(functionDeclaration) &amp;&amp; !Array.isArray(functionExpression) &amp;&amp; !Array.isArray(functionViaFunctionConstructor) &amp;&amp; !Array.isArray(objectLiteral) &amp;&amp; !Array.isArray(objectViaObjectConstructor) &amp;&amp; !Array.isArray(objectViaCustomConstructor) &amp;&amp; Array.isArray(arrayLiteral) &amp;&amp; Array.isArray(arrayViaArrayConstructor)){
<span class='line-number-all'></span>  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;isArray()&lt;/code&gt; method, and supports at least one &lt;code&gt;isArray()&lt;/code&gt; method capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;isArray()&lt;/code&gt; method. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
<span class='line-number-all'></span> } else {
<span class='line-number-all'></span>  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;isArray()&lt;/code&gt; method, but does not support at least one &lt;code&gt;isArray()&lt;/code&gt; method capability. The web browser partially supports the JavaScript &lt;code&gt;isArray()&lt;/code&gt; method.&lt;/p&gt;&quot;);
<span class='line-number-all'></span> }
<span class='line-number-all'></span>} else {
<span class='line-number-all'></span> document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;isArray()&lt;/code&gt; method. The web browser does not support the JavaScript &lt;code&gt;isArray()&lt;/code&gt; method.&lt;/p&gt;&quot;);
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <script>
     var booleanLiteral = true,
      numberLiteral = 1,
      stringLiteral = \"abc\",
      nullLiteral = null,
      undefinedLiteral = undefined,
      undefinedVariable;
     function functionDeclaration(){}
     var functionExpression = function(){},
      functionViaFunctionConstructor = new Function(),
      objectLiteral = {},
      objectViaObjectConstructor = new Object();
     function CustomConstructor(){}
     var objectViaCustomConstructor = new CustomConstructor(),
      arrayLiteral = [],
      arrayViaArrayConstructor = new Array();
     if (Array.isArray){
      var element = document.getElementById(\"testId\");
      if (!Array.isArray(booleanLiteral) && !Array.isArray(numberLiteral) && !Array.isArray(stringLiteral) && !Array.isArray(nullLiteral) && !Array.isArray(undefinedLiteral) && !Array.isArray(undefinedVariable) && !Array.isArray(functionDeclaration) && !Array.isArray(functionExpression) && !Array.isArray(functionViaFunctionConstructor) && !Array.isArray(objectLiteral) && !Array.isArray(objectViaObjectConstructor) && !Array.isArray(objectViaCustomConstructor) && Array.isArray(arrayLiteral) && Array.isArray(arrayViaArrayConstructor)){
       document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>isArray()</code> method, and supports at least one <code>isArray()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>isArray()</code> method. Positive determination of full web browser support is beyond the scope of this test.</p>\");
      } else {
       document.write(\"<p><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>isArray()</code> method, but does not support at least one <code>isArray()</code> method capability. The web browser partially supports the JavaScript <code>isArray()</code> method.</p>\");
      }
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>isArray()</code> method. The web browser does not support the JavaScript <code>isArray()</code> method.</p>\");
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
