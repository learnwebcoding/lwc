<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/module_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/module.php.
 * Last reviewed/updated: 14 Jul 2019.
 * Published: 05 Mar 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there are two web browser JavaScript feature support tests; 1.) a feature implementation test, and 2.) a feature capability test. First, the implementation test is run. The implementation test determines if the web browser recognizes JavaScript modules. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize JavaScript modules, the testing is stopped and the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize JavaScript modules. The web browser does not support JavaScript modules.</q></p>

     <p>If the web browser recognizes JavaScript modules, the capability test is run. The capability test determines if the web browser's implementation of JavaScript modules includes support for at least one JavaScript module capability. The capability test is a more definitive, albeit not an all inclusive, test for the presence of web browser support. If the web browser's implementation of JavaScript modules includes support for the tested capability, the capability test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes JavaScript modules, and supports at least one module capability. The web browser at least partially/possibly fully supports JavaScript modules. Positive determination of full web browser support is beyond the scope of this test.</q> If the web browser's implementation of JavaScript modules does not include support for the tested capability, the capability test reports: <q><b>Pass/Fail</b> (partial support): The web browser recognizes JavaScript modules, but does not support at least one module capability. The web browser partially supports JavaScript modules.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. Module Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED16+, FF60+*, CH61+, OP48+.</li>
      <li><q><b>Fail</b> (no support):</q> IE11-, SF5.1.7-.</li>
     </ul>

     <p>* By default, in FF60+, the about:config | dom.moduleScripts.enabled preference is set to true. By default, in FF54 - 59, the about:config | dom.moduleScripts.enabled preference is set to false. In FF53-, the about:config | dom.moduleScripts.enabled preference does not exist.</p>

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

     <h2><a id='test'></a>2. Module Web Browser Support Test</h2>

     <h3><a id='html'></a>2.1. Web Browser Support Test HTML Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize JavaScript modules. The web browser does not support JavaScript modules.&lt;/p&gt;<span class='comment'>&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;</span>
<span class='line-number-all line-number-justify-right-one'></span>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script type=&quot;module&quot;&gt; <span class='comment'>// HTML document embedded JavaScript module. Capability test eight: DOM manipulation. For DOM manipulation, no exporting/importing of DOM manipulating code, and no special DOM manipulating code, required. Instead, load module with imports and regular DOM manipulating code into HTML document either: 1.) explicitly via script element with type=&quot;module&quot; attribute, as in this example; 2.) explicitly via script element with type=&quot;module&quot; and src=&quot;path_to_external_javascript_module.js&quot; attributes; or 3.) implicitly via import {foo} from &quot;path_to_external_javascript_module.js&quot;; statement.</span>
<span class='line-number-all line-number-justify-right-one'></span>import {passImplementationTest, passCapabilityTest} from &quot;./module_external_main.js&quot;;
<span class='line-number-all line-number-justify-right-one'></span>if (passImplementationTest){
<span class='line-number-all line-number-justify-right-one'></span> var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all line-number-justify-right-one'></span> if (passCapabilityTest){
<span class='line-number-all line-number-justify-right-one'></span>  element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes JavaScript modules, and supports at least one module capability. The web browser at least partially/possibly fully supports JavaScript modules. Positive determination of full web browser support is beyond the scope of this test.&quot;;
<span class='line-number-all line-number-justify-right-one'></span> } else {
<span class='line-number-all'></span>  element.innerHTML = &quot;&lt;b&gt;Pass/Fail&lt;/b&gt; (partial support): The web browser recognizes JavaScript modules, but does not support at least one module capability. The web browser partially supports JavaScript modules.&quot;;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='javascript'></a>2.2. Web Browser Support Test JavaScript Source Code</h3>

     <p>JavaScript source code: <span class='filename'>module_external_main.js</span>:</p>

<pre>
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Central location for all imports (ie, import module_external_1.js and module_external_2.js exports here). Resolve any identifier naming conflicts. Perform web browser support implementation test and capability tests. Export anything required by HTML document embedded JavaScript module.</span>
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Implementation test. There is no good implementation test. Cannot test if (window.export/import) (window.export/import does not exist), if (this.export/import) (TypeError FF57 and CH64) (this, which is undefined, has no properties), and if (export/import) (SyntaxError FF57 and CH64). Therefore, for implementation test, simply check for presence of objectName object from capability test two: namespace import below.</span>
<span class='line-number-all line-number-justify-right-one'></span>var passImplementationTest = false;
<span class='line-number-all line-number-justify-right-one'></span>if (objectName){ <span class='comment'>// For objectName object, see capability test two: namespace import below. A test of import statement hoisting.</span>
<span class='line-number-all line-number-justify-right-one'></span> passImplementationTest = true;
<span class='line-number-all line-number-justify-right-one'></span>}
<span class='line-number-all line-number-justify-right-one'></span>export {passImplementationTest}; <span class='comment'>// Imported by HTML document embedded JavaScript module.</span>
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Capability test one: named exports/imports.</span>
<span class='line-number-all line-number-justify-right-one'></span>import {booleanLiteral} from &quot;./module_external_1.js&quot;; <span class='comment'>// Import single export.</span>
<span class='line-number-all'></span>import {numberLiteral, stringLiteral, nullLiteral, undefinedLiteral, undefinedVariable, functionDeclaration, functionExpression, arrayLiteral, objectLiteral, ClassDeclaration} from &quot;./module_external_1.js&quot;; <span class='comment'>// Import multiple exports. numberLiteral and stringLiteral variable identifiers also imported below; however, to avoid web browser JavaScript console SyntaxError: FF57 redeclaration of import/CH64 identifier already declared, import statements below rename numberLiteral to numberLiteralFoo and stringLiteral to stringLiteralFoo.</span>
<span class='line-number-all'></span>var objectOneViaClassDeclaration = new ClassDeclaration(); <span class='comment'>// Instantiate object via imported class definition.</span>
<span class='line-number-all'></span>var passNamedExportsImportsCapabilityTest = false;
<span class='line-number-all'></span>if (booleanLiteral &amp;&amp; (numberLiteral === 1) &amp;&amp; (stringLiteral === &quot;abc&quot;) &amp;&amp; (nullLiteral === null) &amp;&amp; (undefinedLiteral === undefined) &amp;&amp; (undefinedVariable === undefined) &amp;&amp; (functionDeclaration() === &quot;functionDeclaration return value&quot;) &amp;&amp; (functionExpression() === &quot;functionExpression return value&quot;) &amp;&amp; (arrayLiteral[0] === &quot;a&quot;) &amp;&amp; (objectLiteral.property === &quot;property value&quot;) &amp;&amp; (objectLiteral[&quot;property&quot;] === &quot;property value&quot;) &amp;&amp; (objectOneViaClassDeclaration.ownProperty === &quot;ownProperty value&quot;) &amp;&amp; (objectOneViaClassDeclaration[&quot;ownProperty&quot;] === &quot;ownProperty value&quot;) &amp;&amp; (objectOneViaClassDeclaration.prototypeProperty === &quot;prototypeProperty value&quot;) &amp;&amp; (objectOneViaClassDeclaration[&quot;prototypeProperty&quot;] === &quot;prototypeProperty value&quot;)){
<span class='line-number-all'></span> passNamedExportsImportsCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span><span class='comment'>// Capability test two: namespace import.</span>
<span class='line-number-all'></span>import * as objectName from &quot;./module_external_1.js&quot;; <span class='comment'>// Import all exports as properties of objectName object. objectName object is atypical object in that it does not inherit from Object and has no prototype. However, like typical object, objectName object supports use of object property dot notation and bracket notation.</span>
<span class='line-number-all'></span>var objectTwoViaClassDeclaration = new objectName.ClassDeclaration(); <span class='comment'>// Instantiate object via imported class definition.</span>
<span class='line-number-all'></span>var passNamespaceImportCapabilityTest = false;
<span class='line-number-all'></span>if ((typeof objectName === &quot;object&quot;) &amp;&amp; !(objectName instanceof Object) &amp;&amp; !Object.prototype.isPrototypeOf(objectName) &amp;&amp; (Object.getPrototypeOf(objectName) === null) &amp;&amp; objectName.booleanLiteral &amp;&amp; objectName[&quot;booleanLiteral&quot;] &amp;&amp; (objectName.numberLiteral === 1) &amp;&amp; (objectName[&quot;numberLiteral&quot;] === 1) &amp;&amp; (objectName.stringLiteral === &quot;abc&quot;) &amp;&amp; (objectName[&quot;stringLiteral&quot;] === &quot;abc&quot;) &amp;&amp; (objectName.nullLiteral === null) &amp;&amp; (objectName[&quot;nullLiteral&quot;] === null) &amp;&amp; (objectName.undefinedLiteral === undefined) &amp;&amp; (objectName[&quot;undefinedLiteral&quot;] === undefined) &amp;&amp; (objectName.undefinedVariable === undefined) &amp;&amp; (objectName[&quot;undefinedVariable&quot;] === undefined) &amp;&amp; (objectName.functionDeclaration() === &quot;functionDeclaration return value&quot;) &amp;&amp; (objectName.functionExpression() === &quot;functionExpression return value&quot;) &amp;&amp; (objectName.arrayLiteral[0] === &quot;a&quot;) &amp;&amp; (objectName.objectLiteral.property === &quot;property value&quot;) &amp;&amp; (objectName.objectLiteral[&quot;property&quot;] === &quot;property value&quot;) &amp;&amp; (objectTwoViaClassDeclaration.ownProperty === &quot;ownProperty value&quot;) &amp;&amp; (objectTwoViaClassDeclaration[&quot;ownProperty&quot;] === &quot;ownProperty value&quot;) &amp;&amp; (objectTwoViaClassDeclaration.prototypeProperty === &quot;prototypeProperty value&quot;) &amp;&amp; (objectTwoViaClassDeclaration[&quot;prototypeProperty&quot;] === &quot;prototypeProperty value&quot;)){
<span class='line-number-all'></span> passNamespaceImportCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span><span class='comment'>// Capability test three: rename exports/imports.</span>
<span class='line-number-all'></span>var passRenameExportsImportsCapabilityTest = false;
<span class='line-number-all'></span>import {numberLiteralOneRenamed} from &quot;./module_external_2.js&quot;; <span class='comment'>// Import variable renamed in export statement.</span>
<span class='line-number-all'></span>import {numberLiteralTwo as numberLiteralTwoRenamed} from &quot;./module_external_2.js&quot;; <span class='comment'>// Rename variable in import statement.</span>
<span class='line-number-all'></span>if ((numberLiteralOneRenamed === 1) &amp;&amp; (numberLiteralTwoRenamed === 2)){
<span class='line-number-all'></span> passRenameExportsImportsCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span><span class='comment'>// Capability test four: module default export.</span>
<span class='line-number-all'></span>import defaultExport from &quot;./module_external_2.js&quot;; <span class='comment'>// Module default export assigned to defaultExport, which can be any identifier. Implicit rename. Unlike import single/multiple exports above, identifier not in curly brackets ({}).</span>
<span class='line-number-all'></span>var passModuleDefaultExportCapabilityTest = false;
<span class='line-number-all'></span>if (defaultExport() === &quot;functionDeclaration return value&quot;){
<span class='line-number-all'></span> passModuleDefaultExportCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span><span class='comment'>// Capability test five: imports are live connections.</span>
<span class='line-number-all'></span>import {numberLiteral as numberLiteralFoo, incrementNumberLiteral} from &quot;./module_external_2.js&quot;; <span class='comment'>// numberLiteral variable identifier also imported above; however, to avoid web browser JavaScript console SyntaxError: FF57 redeclaration of import/CH64 identifier already declared, import statement rename numberLiteral to numberLiteralFoo.</span>
<span class='line-number-all'></span>var numberLiteralFooInitial = numberLiteralFoo;
<span class='line-number-all'></span>incrementNumberLiteral();
<span class='line-number-all'></span>var numberLiteralFooFinal = numberLiteralFoo;
<span class='line-number-all'></span>var passImportsAreLiveConnectionsCapabilitTest = false;
<span class='line-number-all'></span>if ((numberLiteralFooInitial === 10) &amp;&amp; (numberLiteralFooFinal === 11)){
<span class='line-number-all'></span> passImportsAreLiveConnectionsCapabilitTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span><span class='comment'>// Capability test six: import statements are hoisted.</span>
<span class='line-number-all'></span>var passImportStatementsAreHoistedCapabilityTest = false;
<span class='line-number-all'></span>if (stringLiteralFoo === &quot;stringLiteral value&quot;){ <span class='comment'>// stringLiteral evaluated in line before import stringLiteral statement. If import statement hoisted, passImportStatementsAreHoistedCapabilityTest set to boolean true. If import statement not hoisted, passImportStatementsAreHoistedCapabilityTest remains boolean false.</span>
<span class='line-number-all'></span> passImportStatementsAreHoistedCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>import {stringLiteral as stringLiteralFoo} from &quot;./module_external_2.js&quot;; <span class='comment'>// stringLiteral variable identifier also imported above; however, to avoid web browser JavaScript console SyntaxError: FF57 redeclaration of import/CH64 identifier already declared, import statement rename stringLiteral to stringLiteralFoo.</span>
<span class='line-number-all'></span><span class='comment'>// Capability test seven: module this value is undefined.</span>
<span class='line-number-all'></span>import {externalModuleThisValue} from &quot;./module_external_2.js&quot;; <span class='comment'>// External JavaScript module this value inside the external JavaScript module.</span>
<span class='line-number-all'></span>var passModuleThisValueIsUndefinedCapabilityTest = false;
<span class='line-number-all'></span>if ((this === undefined) &amp;&amp; (externalModuleThisValue === undefined)){ <span class='comment'>// Test this module this value and external module this value.</span>
<span class='line-number-all'></span> passModuleThisValueIsUndefinedCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>var passCapabilityTest = false;
<span class='line-number-all'></span>if (passNamedExportsImportsCapabilityTest &amp;&amp; passNamespaceImportCapabilityTest &amp;&amp; passRenameExportsImportsCapabilityTest &amp;&amp; passModuleDefaultExportCapabilityTest &amp;&amp; passImportsAreLiveConnectionsCapabilitTest &amp;&amp; passImportStatementsAreHoistedCapabilityTest &amp;&amp; passModuleThisValueIsUndefinedCapabilityTest){
<span class='line-number-all'></span> passCapabilityTest = true;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>export {passCapabilityTest}; <span class='comment'>// Imported by HTML document embedded JavaScript module.</span>
<span class='line-number-all'></span>
</pre>

     <p>JavaScript source code: <span class='filename'>module_external_1.js</span>:</p>

<pre>
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Exports are imported by module_external_main.js, not by HTML document embedded JavaScript module.</span>
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Capability test one: named exports/imports and capability test two: namespace import.</span>
<span class='line-number-all line-number-justify-right-one'></span>var booleanLiteral = true; <span class='comment'>// Variable declaration.</span>
<span class='line-number-all line-number-justify-right-one'></span>export {booleanLiteral}; <span class='comment'>// Export statement. Variable declaration and export statement on separate lines.</span>
<span class='line-number-all line-number-justify-right-one'></span>export var numberLiteral = 1; <span class='comment'>// Export statement and variable declaration combined in same line. var numberLiteral also in module_external_2.js.</span>
<span class='line-number-all line-number-justify-right-one'></span>export var stringLiteral = &quot;abc&quot;; <span class='comment'>// var stringLiteral also in module_external_2.js.</span>
<span class='line-number-all line-number-justify-right-one'></span>export var nullLiteral = null;
<span class='line-number-all line-number-justify-right-one'></span>export var undefinedLiteral = undefined;
<span class='line-number-all line-number-justify-right-one'></span>export var undefinedVariable;
<span class='line-number-all'></span>export function functionDeclaration(){ <span class='comment'>// function functionDeclaration() also in module_external_2.js.</span>
<span class='line-number-all'></span> return &quot;functionDeclaration return value&quot;;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>export var functionExpression = function(){
<span class='line-number-all'></span> return &quot;functionExpression return value&quot;;
<span class='line-number-all'></span>};
<span class='line-number-all'></span>export var arrayLiteral = [&quot;a&quot;, &quot;b&quot;, &quot;c&quot;];
<span class='line-number-all'></span>export var objectLiteral = {
<span class='line-number-all'></span> property: &quot;property value&quot;
<span class='line-number-all'></span>};
<span class='line-number-all'></span>export class ClassDeclaration {
<span class='line-number-all'></span> constructor(){
<span class='line-number-all'></span>  this.ownProperty = &quot;ownProperty value&quot;;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>};
<span class='line-number-all'></span>ClassDeclaration.prototype.prototypeProperty = &quot;prototypeProperty value&quot;;
<span class='line-number-all'></span>
</pre>

     <p>JavaScript source code: <span class='filename'>module_external_2.js</span>:</p>

<pre>
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Exports are imported by module_external_main.js, not by HTML document embedded JavaScript module.</span>
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Capability test three: rename exports/imports.</span>
<span class='line-number-all line-number-justify-right-one'></span>var numberLiteralOne = 1;
<span class='line-number-all line-number-justify-right-one'></span>export {numberLiteralOne as numberLiteralOneRenamed}; <span class='comment'>// Rename variable in export statement.</span>
<span class='line-number-all line-number-justify-right-one'></span>export var numberLiteralTwo = 2; <span class='comment'>// To be renamed in import statement.</span>
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Capability test four: module default export.</span>
<span class='line-number-all line-number-justify-right-one'></span>function functionDeclaration(){return &quot;functionDeclaration return value&quot;;} <span class='comment'>// function functionDeclaration() also in module_external_1.js.</span>
<span class='line-number-all line-number-justify-right-one'></span>export default functionDeclaration; <span class='comment'>// Identical to: 1.) export default function functionDeclaration(){return &quot;functionDeclaration return value&quot;;}. Export default function declaration itself, not variable. No trailing semicolon (;).; and 2.) export default function(){return &quot;functionDeclaration return value&quot;;}. Export default anonymous function declaration. Since only one export default per module is allowed, and export default import statement assigns name implicitly, can export default anonymous function declaration. No trailing semicolon (;). Also can export default anonymous class declarations and literals (eg, export default &quot;stringLiteral value&quot;;).</span>
<span class='line-number-all line-number-justify-right-one'></span><span class='comment'>// Capability test five: imports are live connections.</span>
<span class='line-number-all'></span>export var numberLiteral = 10; <span class='comment'>// var numberLiteral also in module_external_1.js.</span>
<span class='line-number-all'></span>export function incrementNumberLiteral(){
<span class='line-number-all'></span> numberLiteral++;
<span class='line-number-all'></span>}
<span class='line-number-all'></span><span class='comment'>// Capability test six: import statements are hoisted.</span>
<span class='line-number-all'></span>export var stringLiteral = &quot;stringLiteral value&quot;; <span class='comment'>// var stringLiteral also in module_external_1.js.</span>
<span class='line-number-all'></span><span class='comment'>// Capability test seven: module this value is undefined.</span>
<span class='line-number-all'></span>export var externalModuleThisValue = this; <span class='comment'>// External JavaScript module this value.</span>
<span class='line-number-all'></span>
</pre>

     <h3><a id='result'></a>2.3. Web Browser Support Test Result</h3>

<!-- ED, CH, and OP, not FF, support requires web page served by web server (ie, fails if web page opened directly in web browser). -->
<!-- FF support requires setting FF about:config | dom.moduleScripts.enabled to true. FF53- does not have about:config | dom.moduleScripts.enabled. -->
<!-- Per LWC web browser support testing, getPrototypeOf() method supported by IE9+, ED12+, FF3.5+, SF5+, CH5+, OP11.60+ and module supported by ED16+, FF54+, CH61+, OP48+, no IE11-, SF5.1.7-. Therefore, in web browser support test below, getPrototypeOf() method does not skew test result. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize JavaScript modules. The web browser does not support JavaScript modules.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script type=\"module\"> // HTML document embedded JavaScript module. Capability test eight: DOM manipulation. For DOM manipulation, no exporting/importing of DOM manipulating code, and no special DOM manipulating code, required. Instead, load module with imports and regular DOM manipulating code into HTML document either: 1.) explicitly via script element with type=\"module\" attribute, as in this example; 2.) explicitly via script element with type=\"module\" and src=\"path_to_external_javascript_module.js\" attributes; or 3.) implicitly via import {foo} from \"path_to_external_javascript_module.js\"; statement.
import {passImplementationTest, passCapabilityTest} from \"./module_external_main.js\";
     if (passImplementationTest){
      var element = document.getElementById(\"testId\");
      if (passCapabilityTest){
       element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes JavaScript modules, and supports at least one module capability. The web browser at least partially/possibly fully supports JavaScript modules. Positive determination of full web browser support is beyond the scope of this test.\";
      } else {
       element.innerHTML = \"<b>Pass/Fail</b> (partial support): The web browser recognizes JavaScript modules, but does not support at least one module capability. The web browser partially supports JavaScript modules.\";
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
