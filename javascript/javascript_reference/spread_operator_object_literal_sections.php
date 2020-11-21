<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/spread_operator_object_literal_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/spread_operator_object_literal.php.
 * Last reviewed/updated: 20 Nov 2020.
 * Published: 28 Nov 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there is one web browser JavaScript feature support test: a feature implementation test. The implementation test determines if the web browser recognizes the JavaScript spread operator in object literals. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript spread operator in object literals, the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript spread operator in object literals. The web browser does not support the JavaScript spread operator in object literals.</q> If the web browser recognizes the JavaScript spread operator in object literals, the implementation test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript spread operator in object literals. The web browser at least partially/possibly fully supports the JavaScript spread operator in object literals. Positive determination of full web browser support is beyond the scope of this test.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Spread Operator In Object Literals Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> FF55+, CH60+, OP47+.</li>
      <li><q><b>Fail</b> (no support):</q> IE11-, ED16-, SF5.1.7-.</li>
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

     <h2><a id='test'></a>2. Spread Operator In Object Literals Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript spread operator in object literals. The web browser does not support the JavaScript spread operator in object literals.&lt;/p&gt;<span class='comment'>&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;</span>
<span class='line-number-all line-number-justify-right-one'></span>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>var objectLiteralOne = {propertyOne: &quot;propertyOne value&quot;, propertyTwo: &quot;propertyTwo value&quot;, propertyThree: &quot;propertyThree value&quot;};
<span class='line-number-all line-number-justify-right-one'></span>var objectLiteralTwo = {propertySeven: &quot;propertySeven value&quot;, propertyEight: &quot;propertyEight value&quot;, propertyNine: &quot;propertyNine value&quot;};
<span class='line-number-all line-number-justify-right-one'></span>var objectLiteralTest = {propertyZero: &quot;propertyZero value&quot;, ...objectLiteralOne, propertyFour: &quot;propertyFour value&quot;, propertyFive: &quot;propertyFive value&quot;, propertySix: &quot;propertySix value&quot;, ...objectLiteralTwo, propertyTen: &quot;propertyTen value&quot;};
<span class='line-number-all line-number-justify-right-one'></span>if ((objectLiteralTest.propertyZero === &quot;propertyZero value&quot;) &amp;&amp; (objectLiteralTest.propertyTwo === &quot;propertyTwo value&quot;) &amp;&amp; (objectLiteralTest.propertyFive === &quot;propertyFive value&quot;) &amp;&amp; (objectLiteralTest.propertyEight === &quot;propertyEight value&quot;) &amp;&amp; (objectLiteralTest.propertyTen === &quot;propertyTen value&quot;)){
<span class='line-number-all line-number-justify-right-one'></span> var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all line-number-justify-right-one'></span> element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript spread operator in object literals. The web browser at least partially/possibly fully supports the JavaScript spread operator in object literals. Positive determination of full web browser support is beyond the scope of this test.&quot;;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript spread operator in object literals. The web browser does not support the JavaScript spread operator in object literals.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var objectLiteralOne = {propertyOne: \"propertyOne value\", propertyTwo: \"propertyTwo value\", propertyThree: \"propertyThree value\"};
     var objectLiteralTwo = {propertySeven: \"propertySeven value\", propertyEight: \"propertyEight value\", propertyNine: \"propertyNine value\"};
     var objectLiteralTest = {propertyZero: \"propertyZero value\", ...objectLiteralOne, propertyFour: \"propertyFour value\", propertyFive: \"propertyFive value\", propertySix: \"propertySix value\", ...objectLiteralTwo, propertyTen: \"propertyTen value\"};
     if ((objectLiteralTest.propertyZero === \"propertyZero value\") && (objectLiteralTest.propertyTwo === \"propertyTwo value\") && (objectLiteralTest.propertyFive === \"propertyFive value\") && (objectLiteralTest.propertyEight === \"propertyEight value\") && (objectLiteralTest.propertyTen === \"propertyTen value\")){
      var element = document.getElementById(\"testId\");
      element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript spread operator in object literals. The web browser at least partially/possibly fully supports the JavaScript spread operator in object literals. Positive determination of full web browser support is beyond the scope of this test.\";
     }
     </script>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>3. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_operator'>Spread Syntax (developer.mozilla.org)</a></li>
      <li><a href='/javascript/javascript_reference/index.php'>JavaScript Feature Reference (learnwebcoding.com)</a></li>
     </ul>

    </section>";
