<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/spread_operator_function_call_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/spread_operator_function_call.php.
 * Last reviewed/updated: 20 Nov 2020.
 * Published: 28 Nov 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there is one web browser JavaScript feature support test: a feature implementation test. The implementation test determines if the web browser recognizes the JavaScript spread operator in function calls. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript spread operator in function calls, the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript spread operator in function calls. The web browser does not support the JavaScript spread operator in function calls.</q> If the web browser recognizes the JavaScript spread operator in function calls, the implementation test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript spread operator in function calls. The web browser at least partially/possibly fully supports the JavaScript spread operator in function calls. Positive determination of full web browser support is beyond the scope of this test.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Spread Operator In Function Calls Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED12+, FF27+, CH46+, OP33+.</li>
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

     <h2><a id='test'></a>2. Spread Operator In Function Calls Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript spread operator in function calls. The web browser does not support the JavaScript spread operator in function calls.&lt;/p&gt;<span class='comment'>&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;</span>
<span class='line-number-all line-number-justify-right-one'></span>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>var array = [2, 3, 1];
<span class='line-number-all line-number-justify-right-one'></span>function test(paramOne, paramTwo, paramThree){
<span class='line-number-all line-number-justify-right-one'></span> if (paramOne + paramTwo + paramThree === 6){
<span class='line-number-all line-number-justify-right-one'></span>  var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all line-number-justify-right-one'></span>  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript spread operator in function calls. The web browser at least partially/possibly fully supports the JavaScript spread operator in function calls. Positive determination of full web browser support is beyond the scope of this test.&quot;;
<span class='line-number-all line-number-justify-right-one'></span> }
<span class='line-number-all'></span>}
<span class='line-number-all'></span>test(...array);
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript spread operator in function calls. The web browser does not support the JavaScript spread operator in function calls.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var array = [2, 3, 1];
     function test(paramOne, paramTwo, paramThree){
      if (paramOne + paramTwo + paramThree === 6){
       var element = document.getElementById(\"testId\");
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript spread operator in function calls. The web browser at least partially/possibly fully supports the JavaScript spread operator in function calls. Positive determination of full web browser support is beyond the scope of this test.\";
      }
     }
     test(...array);
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
