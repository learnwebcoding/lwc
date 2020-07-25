<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/let_declaration_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/let_declaration.php.
 * Last reviewed/updated: 14 Jul 2019.
 * Published: 08 Nov 2017. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes the JavaScript <code>let</code> declaration. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>let</code> declaration, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>let</code> declaration. The web browser does not support the JavaScript <code>let</code> declaration.</q></p>

     <p>If the web browser recognizes the JavaScript <code>let</code> declaration, the capability test is run. The capability test determines if the web browser's implementation of the JavaScript <code>let</code> declaration includes support for at least one <code>let</code> declaration capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of the JavaScript <code>let</code> declaration includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>let</code> declaration, and supports at least one <code>let</code> declaration capability. The web browser at least partially/possibly fully supports the JavaScript <code>let</code> declaration. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of the JavaScript <code>let</code> declaration does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>let</code> declaration, but does not support at least one <code>let</code> declaration capability. The web browser partially supports the JavaScript <code>let</code> declaration.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>let</code> Declaration Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> IE11+, ED12+, FF44+, CH49+, OP36+.</li>
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

     <h2><a id='test'></a>2. <code>let</code> Declaration Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

     <div class='note normal'>For the web browser test source code with additional comments, see <a href='/javascript/javascript_reference/javascript_reference_test_only/let_declaration_test_only_with_additional_comments.html'><code>let</code> Declaration Web Browser Support Test With Additional Comments (learnwebcoding.com)</a>.</div>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;let&lt;/code&gt; declaration. The web browser does not support the JavaScript &lt;code&gt;let&lt;/code&gt; declaration.&lt;/p&gt;<span class='comment'>&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;</span>
<span class='line-number-all line-number-justify-right-one'></span>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Implementation test.</span>
<span class='line-number-all line-number-justify-right-one'></span>var passImplementationTest = false;
<span class='line-number-all line-number-justify-right-one'></span>let implementationVariable = &quot;value&quot;;
<span class='line-number-all line-number-justify-right-one'></span>if (implementationVariable){
<span class='line-number-all line-number-justify-right-one'></span> passImplementationTest = true;
<span class='line-number-all line-number-justify-right-one'></span>}
<span class='line-number-all'></span><span class='comment'>// Capability test one: global abatement.</span>
<span class='line-number-all'></span>var passGlobalAbatementCapabilityTest = false;
<span class='line-number-all'></span>let globalAbatementVariableOne = &quot;valueOne&quot;;
<span class='line-number-all'></span>window.globalAbatementVariableTwo = &quot;let globalAbatementVariableTwo assignment below does not overwrite me&quot;;
<span class='line-number-all'></span>let globalAbatementVariableTwo = &quot;valueTwo&quot;;
<span class='line-number-all'></span>if ((window.globalAbatementVariableOne === undefined) &amp;&amp; (window.globalAbatementVariableTwo === &quot;let globalAbatementVariableTwo assignment below does not overwrite me&quot;)){
<span class='line-number-all'></span> passGlobalAbatementCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span><span class='comment'>// Capability test two: no hoisting.</span>
<span class='line-number-all'></span>var passNoHoistingCapabilityTest = false;
<span class='line-number-all'></span>try {
<span class='line-number-all'></span> noHoistingVariable;
<span class='line-number-all'></span>} catch (error){
<span class='line-number-all'></span> passNoHoistingCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>let noHoistingVariable = &quot;value&quot;;
<span class='line-number-all'></span><span class='comment'>// Capability test three: block scope.</span>
<span class='line-number-all'></span>var passBlockScopeCapabilityTest = false,
<span class='line-number-all'></span> passBlockScopeCapabilityTestOne = false,
<span class='line-number-all'></span> passBlockScopeCapabilityTestTwo = false,
<span class='line-number-all'></span> passBlockScopeCapabilityTestThree = false,
<span class='line-number-all'></span> passBlockScopeCapabilityTestFour = false,
<span class='line-number-all'></span> passBlockScopeCapabilityTestFive = false,
<span class='line-number-all'></span> passBlockScopeCapabilityTestSix = false;
<span class='line-number-all'></span>function blockScopeCapabilityTest(){
<span class='line-number-all'></span> let blockScopeVariableOne = &quot;valueOne&quot;; <span class='comment'>// let inside function.</span>
<span class='line-number-all'></span> if (true){
<span class='line-number-all'></span>  if (blockScopeVariableOne){ <span class='comment'>// Determine if let inside function accessible inside if inside function.</span>
<span class='line-number-all'></span>   passBlockScopeCapabilityTestThree = true;
<span class='line-number-all'></span>  }
<span class='line-number-all'></span>  let blockScopeVariableTwo = &quot;valueTwo&quot;; <span class='comment'>// let inside if.</span>
<span class='line-number-all'></span>  if (blockScopeVariableTwo){ <span class='comment'>// Determine if let inside if accessible inside if.</span>
<span class='line-number-all'></span>   passBlockScopeCapabilityTestFour = true;
<span class='line-number-all'></span>  }
<span class='line-number-all'></span> }
<span class='line-number-all'></span> if (blockScopeVariableOne){ <span class='comment'>// Determine if let inside function accessible inside function.</span>
<span class='line-number-all'></span>  passBlockScopeCapabilityTestFive = true;
<span class='line-number-all'></span> }
<span class='line-number-all'></span> if (typeof blockScopeVariableTwo === &quot;undefined&quot;){ <span class='comment'>// Determine if let inside if not accessible outside if.</span>
<span class='line-number-all'></span>  passBlockScopeCapabilityTestSix = true;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>}
<span class='line-number-all'></span>if (typeof blockScopeVariableOne === &quot;undefined&quot;){ <span class='comment'>// Determine if let inside function not accessible outside function.</span>
<span class='line-number-all'></span> passBlockScopeCapabilityTestOne = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>if (typeof blockScopeVariableTwo === &quot;undefined&quot;){ <span class='comment'>// Determine if let inside if inside function not accessible outside function.</span>
<span class='line-number-all'></span> passBlockScopeCapabilityTestTwo = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>blockScopeCapabilityTest();
<span class='line-number-all'></span>if (passBlockScopeCapabilityTestOne &amp;&amp; passBlockScopeCapabilityTestTwo &amp;&amp; passBlockScopeCapabilityTestThree &amp;&amp; passBlockScopeCapabilityTestFour &amp;&amp; passBlockScopeCapabilityTestFive &amp;&amp; passBlockScopeCapabilityTestSix){
<span class='line-number-all'></span> passBlockScopeCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span><span class='comment'>// Capability test four: for loop iterator variable block scope.</span>
<span class='line-number-all'></span>var passForLoopIteratorCapabilityTest = false;
<span class='line-number-all'></span>for (let i = 0; i &lt; 3; i++){
<span class='line-number-all'></span>}
<span class='line-number-all'></span>if (typeof i === &quot;undefined&quot;){
<span class='line-number-all'></span> passForLoopIteratorCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>var passCapabilityTest = false;
<span class='line-number-all'></span>if (passGlobalAbatementCapabilityTest &amp;&amp; passNoHoistingCapabilityTest &amp;&amp; passBlockScopeCapabilityTest &amp;&amp; passForLoopIteratorCapabilityTest){
<span class='line-number-all'></span> passCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>if (passImplementationTest){
<span class='line-number-all'></span> var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all'></span> if (passCapabilityTest){
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;let&lt;/code&gt; declaration, and supports at least one &lt;code&gt;let&lt;/code&gt; declaration capability. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;let&lt;/code&gt; declaration. Positive determination of full web browser support is beyond the scope of this test.&lt;/p&gt;&quot;;
<span class='line-number-all'></span> } else {
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes the JavaScript &lt;code&gt;let&lt;/code&gt; declaration, but does not support at least one &lt;code&gt;let&lt;/code&gt; declaration capability. The web browser partially supports the JavaScript &lt;code&gt;let&lt;/code&gt; declaration.&quot;;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- In this example, nesting functions would greatly reduce readability/maintainability. Therefore, did not nest functions below. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>let</code> declaration. The web browser does not support the JavaScript <code>let</code> declaration.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     var passImplementationTest = false;
     // Implementation test.
     let implementationVariable = \"value\";
     if (implementationVariable){
      passImplementationTest = true;
     }
     var passCapabilityTest = false;
     // Capability test one: global abatement.
     var passGlobalAbatementCapabilityTest = false;
     let globalAbatementVariableOne = \"valueOne\";
     window.globalAbatementVariableTwo = \"let globalAbatementVariableTwo assignment below does not overwrite me\";
     let globalAbatementVariableTwo = \"valueTwo\";
     if ((window.globalAbatementVariableOne === undefined) && (window.globalAbatementVariableTwo === \"let globalAbatementVariableTwo assignment below does not overwrite me\")){
      passGlobalAbatementCapabilityTest = true;
     }
     // Capability test two: no hoisting.
     var passNoHoistingCapabilityTest = false;
     try {
      noHoistingVariable;
     } catch (error){
      passNoHoistingCapabilityTest = true;
     }
     let noHoistingVariable = \"value\";
     // Capability test three: block scope.
     var passBlockScopeCapabilityTest = false,
      passBlockScopeCapabilityTestOne = false,
      passBlockScopeCapabilityTestTwo = false,
      passBlockScopeCapabilityTestThree = false,
      passBlockScopeCapabilityTestFour = false,
      passBlockScopeCapabilityTestFive =  false,
      passBlockScopeCapabilityTestSix = false;
     function blockScopeCapabilityTest(){
      let blockScopeVariableOne = \"valueOne\"; // let inside function.
      if (true){
       if (blockScopeVariableOne){ // Determine if let inside function accessible inside if inside function.
        passBlockScopeCapabilityTestThree = true;
       }
       let blockScopeVariableTwo = \"valueTwo\"; // let inside if.
       if (blockScopeVariableTwo){ // Determine if let inside if accessible inside if.
        passBlockScopeCapabilityTestFour = true;
       }
      }
      if (blockScopeVariableOne){ // Determine if let inside function accessible inside function.
       passBlockScopeCapabilityTestFive = true;
      }
      if (typeof blockScopeVariableTwo === \"undefined\"){ // Determine if let inside if not accessible outside if.
       passBlockScopeCapabilityTestSix = true;
      }
     }
     if (typeof blockScopeVariableOne === \"undefined\"){ // Determine if let inside function not accessible outside function.
      passBlockScopeCapabilityTestOne = true;
     }
     if (typeof blockScopeVariableTwo === \"undefined\"){ // Determine if let inside if inside function not accessible outside function.
      passBlockScopeCapabilityTestTwo = true;
     }
     blockScopeCapabilityTest();
     if (passBlockScopeCapabilityTestOne && passBlockScopeCapabilityTestTwo && passBlockScopeCapabilityTestThree && passBlockScopeCapabilityTestFour && passBlockScopeCapabilityTestFive && passBlockScopeCapabilityTestSix){
      passBlockScopeCapabilityTest = true;
     }
     // Capability test four: for loop iterator variable block scope.
     var passForLoopIteratorCapabilityTest = false;
     for (let i = 0; i < 3; i++){
     }
     if (typeof i === \"undefined\"){
      passForLoopIteratorCapabilityTest = true;
     }
     if (passGlobalAbatementCapabilityTest && passNoHoistingCapabilityTest && passBlockScopeCapabilityTest && passForLoopIteratorCapabilityTest){
      passCapabilityTest = true;
     }
     if (passImplementationTest){
      var element = document.getElementById(\"testId\");
      if (passCapabilityTest){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>let</code> declaration, and supports at least one <code>let</code> declaration capability. The web browser at least partially/possibly fully supports the JavaScript <code>let</code> declaration. Positive determination of full web browser support is beyond the scope of this test.</p>\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes the JavaScript <code>let</code> declaration, but does not support at least one <code>let</code> declaration capability. The web browser partially supports the JavaScript <code>let</code> declaration.\";
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
