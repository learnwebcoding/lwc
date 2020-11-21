<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/setPrototypeOf_method_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/setPrototypeOf_method.php.
 * Last reviewed/updated: 20 Nov 2020.
 * Published: 04 Dec 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>setPrototypeOf()</code> method. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>setPrototypeOf()</code> method, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>setPrototypeOf()</code> method. The web browser does not support the JavaScript <code>setPrototypeOf()</code> method.</q></p>

     <p>If the web browser recognizes the JavaScript <code>setPrototypeOf()</code> method, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>setPrototypeOf()</code> method includes support for at least one <code>setPrototypeOf()</code> method capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>setPrototypeOf()</code> method includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>setPrototypeOf()</code> method, and supports at least one <code>setPrototypeOf()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>setPrototypeOf()</code> method. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>setPrototypeOf()</code> method does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>setPrototypeOf()</code> method, but does not support at least one <code>setPrototypeOf()</code> method capability. The web browser partially supports the JavaScript <code>setPrototypeOf()</code> method.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>setPrototypeOf()</code> Method Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> IE11+, ED12+, FF31+, CH34+, OP21+.</li>
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

     <h2><a id='test'></a>2. <code>setPrototypeOf()</code> Method Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>if (Object.setPrototypeOf){
<span class='line-number-all line-number-justify-right-one'></span> function CustomConstructorOne(){} <span class='comment'>// CustomConstructorOne constructor.</span>
<span class='line-number-all line-number-justify-right-one'></span> function CustomConstructorTwo(){} <span class='comment'>// CustomConstructorTwo constructor.</span>
<span class='line-number-all line-number-justify-right-one'></span> CustomConstructorOne.prototype.propertyOne = &quot;CustomConstructorOne prototype propertyOne value&quot;; <span class='comment'>// Set property on CustomConstructorOne prototype.</span>
<span class='line-number-all line-number-justify-right-one'></span> CustomConstructorTwo.prototype.propertyOne = &quot;CustomConstructorTwo prototype propertyOne value&quot;; <span class='comment'>// Set property on CustomConstructorTwo prototype.</span>
<span class='line-number-all line-number-justify-right-one'></span> var objectViaCustomConstructorOne = new CustomConstructorOne(); <span class='comment'>// Instantiate instance of CustomConstructorOne as objectViaCustomConstructorOne.</span>
<span class='line-number-all line-number-justify-right-one'></span> var objectViaCustomConstructorTwo = new CustomConstructorTwo(); <span class='comment'>// Instantiate instance of CustomConstructorTwo as objectViaCustomConstructorTwo.</span>
<span class='line-number-all line-number-justify-right-one'></span> Object.setPrototypeOf(objectViaCustomConstructorOne, objectViaCustomConstructorTwo); <span class='comment'>// Set objectViaCustomConstructorOne prototype to objectViaCustomConstructorTwo prototype.</span>
<span class='line-number-all'></span> if (objectViaCustomConstructorOne.propertyOne === &quot;CustomConstructorTwo prototype propertyOne value&quot;){
<span class='line-number-all'></span>  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;setPrototypeOf()&lt;/code&gt; method, and supports at least one &lt;code&gt;setPrototypeOf()&lt;/code&gt; method capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;setPrototypeOf()&lt;/code&gt; method. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;);
<span class='line-number-all'></span> } else {
<span class='line-number-all'></span>  document.write(&quot;&lt;p&gt;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;setPrototypeOf()&lt;/code&gt; method, but does not support at least one &lt;code&gt;setPrototypeOf()&lt;/code&gt; method capability. The web browser partially supports the JavaScript &lt;code&gt;setPrototypeOf()&lt;/code&gt; method.&lt;/p&gt;&quot;);
<span class='line-number-all'></span> }
<span class='line-number-all'></span>} else {
<span class='line-number-all'></span> document.write(&quot;&lt;p&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;setPrototypeOf()&lt;/code&gt; method. The web browser does not support the JavaScript &lt;code&gt;setPrototypeOf()&lt;/code&gt; method.&lt;/p&gt;&quot;);
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Similar comments getPrototypeOf() method, isPrototypeOf() method, and setPrototypeOf() method. -->
<!-- CustomConstructorOne.setPrototypeOf(objectViaCustomConstructorTwo, null) does not work. FF57 reports: TypeError: CustomConstructorOne.setPrototypeOf is not a function. This implies setPrototypeOf() is a method of Object constructor, not AnyObject constructor. -->

     <script>
     if (Object.setPrototypeOf){
      function CustomConstructorOne(){} // CustomConstructorOne constructor.
      function CustomConstructorTwo(){} // CustomConstructorTwo constructor.
      CustomConstructorOne.prototype.propertyOne = \"CustomConstructorOne prototype propertyOne value\"; // Set property on CustomConstructorOne prototype.
      CustomConstructorTwo.prototype.propertyOne = \"CustomConstructorTwo prototype propertyOne value\"; // Set property on CustomConstructorTwo prototype.
      var objectViaCustomConstructorOne = new CustomConstructorOne(); // Instantiate instance of CustomConstructorOne as objectViaCustomConstructorOne.
      var objectViaCustomConstructorTwo = new CustomConstructorTwo(); // Instantiate instance of CustomConstructorTwo as objectViaCustomConstructorTwo.
      Object.setPrototypeOf(objectViaCustomConstructorOne, objectViaCustomConstructorTwo); // Set objectViaCustomConstructorOne prototype to objectViaCustomConstructorTwo prototype.
      if (objectViaCustomConstructorOne.propertyOne === \"CustomConstructorTwo prototype propertyOne value\"){
       document.write(\"<p><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>setPrototypeOf()</code> method, and supports at least one <code>setPrototypeOf()</code> method capability. The web browser at least partially/possibly fully supports the JavaScript <code>setPrototypeOf()</code> method. Positive determination of full web browser support is beyond the scope of this test.</p>\");
      } else {
       document.write(\"<p><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>setPrototypeOf()</code> method, but does not support at least one <code>setPrototypeOf()</code> method capability. The web browser partially supports the JavaScript <code>setPrototypeOf()</code> method.</p>\");
      }
     } else {
      document.write(\"<p><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>setPrototypeOf()</code> method. The web browser does not support the JavaScript <code>setPrototypeOf()</code> method.</p>\");
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
