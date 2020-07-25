<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascript/javascript_reference/class_syntax_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/javascript/javascript_reference/class_syntax.php.
 * Last reviewed/updated: 14 Jul 2019.
 * Published: 07 Feb 2018. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>In this web page there is one web browser JavaScript feature support test: a feature implementation test. The implementation test determines if the web browser recognizes the JavaScript <code>class</code> syntax. The implementation test is a simple test for the presence of web browser support, and a definitive test for the absence of web browser support. If the web browser does not recognize the JavaScript <code>class</code> syntax, the implementation test reports: <q><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>class</code> syntax. The web browser does not support the JavaScript <code>class</code> syntax.</q> If the web browser recognizes the JavaScript <code>class</code> syntax, the implementation test reports: <q><b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>class</code> syntax. The web browser at least partially/possibly fully supports the JavaScript <code>class</code> syntax. Positive determination of full web browser support is beyond the scope of this test.</q></p>

     <p>The web browser support test source code is shown in Section 2.1. The web browser support test source code is run in Section 2.2, which shows the web browser support test result.</p>

     <h3><a id='support'></a>1.1. <code>class</code> Syntax Web Browser Support</h3>

     <ul>
      <li><q><b>Pass</b> (at least partial/possibly full support):</q> ED13+, FF45+, CH49+, OP36+.</li>
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

     <h2><a id='test'></a>2. <code>class</code> Syntax Web Browser Support Test</h2>

     <h3><a id='source'></a>2.1. Web Browser Support Test Source Code</h3>

<!-- In pre section below: 1.) HTML code: delimit HTML attribute values with apostrophes per template_explained.php, not quotation marks. Do NOT replace apostrophe with &apos;. Replace ampersand with &amp;, less-than sign with &lt;, greater-than sign with &gt;. There should not be any quotation marks. 2.) JavaScript code: delimit strings with quotation marks. Replace quotation mark with &quot;, ampersand with &amp;, less-than sign with &lt; greater-than sign with &gt;, dollar sign with &dollar;. Do NOT replace grave accent with &grave;. -->

<pre>
<span class='line-number-all line-number-justify-right-one'></span>&lt;p id='testId'&gt;&lt;b&gt;Fail&lt;/b&gt; (no support): The web browser does not recognize the JavaScript &lt;code&gt;class&lt;/code&gt; syntax. The web browser does not support the JavaScript &lt;code&gt;class&lt;/code&gt; syntax.&lt;/p&gt;<span class='comment'>&lt;!-- Hard code Fail because web browser no support error stops JavaScript execution. --&gt;</span>
<span class='line-number-all line-number-justify-right-one'></span>
<span class='line-number-all line-number-justify-right-one'></span>&lt;script&gt;
<span class='line-number-all line-number-justify-right-one'></span>class ClassDeclaration { <span class='comment'>// Class definition (not hoisted) using class declaration syntax.</span>
<span class='line-number-all line-number-justify-right-one'></span> constructor(param){ <span class='comment'>// Class constructor() method (optional). Recommend define all own properties inside class constructor() method.</span>
<span class='line-number-all line-number-justify-right-one'></span>  this.ownPropertyOne = param; <span class='comment'>// objectViaClassDeclaration ownPropertyOne.</span>
<span class='line-number-all line-number-justify-right-one'></span> }
<span class='line-number-all line-number-justify-right-one'></span> conciseMethod(){ <span class='comment'>// objectViaClassDeclaration prototype property. Class methods use concise method syntax and are not enumerable (ie, propertyIsEnumerable() method returns false).</span>
<span class='line-number-all line-number-justify-right-one'></span>  return this.ownPropertyOne;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>}
<span class='line-number-all'></span>ClassDeclaration.prototype.prototypePropertyOne = &quot;prototypePropertyOne value&quot;; <span class='comment'>// ClassDeclaration prototypePropertyOne.</span>
<span class='line-number-all'></span>ClassDeclaration.prototype.prototypePropertyTwo = function(){ <span class='comment'>// ClassDeclaration prototypePropertyTwo.</span>
<span class='line-number-all'></span> return &quot;prototypePropertyTwo return value&quot;;
<span class='line-number-all'></span>};
<span class='line-number-all'></span>var objectViaClassDeclaration = new ClassDeclaration(&quot;argument&quot;); <span class='comment'>// Instantiate object by calling class definition with new operator (required). Arguments are passed to class constructor() method.</span>
<span class='line-number-all'></span>var callObjectViaClassDeclarationConciseMethod = objectViaClassDeclaration.conciseMethod();
<span class='line-number-all'></span>var callObjectViaClassDeclarationPrototypePropertyTwo = objectViaClassDeclaration.prototypePropertyTwo();
<span class='line-number-all'></span>var ClassExpression = class { <span class='comment'>// Class definition (not hoisted) using class expression syntax.</span>
<span class='line-number-all'></span> constructor(param){ <span class='comment'>// Class constructor() method (optional). Recommend define all own properties inside class constructor() method.</span>
<span class='line-number-all'></span>  this.ownPropertyOne = param; <span class='comment'>// objectViaClassExpression ownPropertyOne.</span>
<span class='line-number-all'></span> }
<span class='line-number-all'></span> conciseMethod(){ <span class='comment'>// objectViaClassExpression prototype property. Class methods use concise method syntax and are not enumerable (ie, propertyIsEnumerable() method returns false).</span>
<span class='line-number-all'></span>  return this.ownPropertyOne;
<span class='line-number-all'></span> }
<span class='line-number-all'></span>}
<span class='line-number-all'></span>ClassExpression.prototype.prototypePropertyOne = &quot;prototypePropertyOne value&quot;; <span class='comment'>// ClassExpression prototypePropertyOne.</span>
<span class='line-number-all'></span>ClassExpression.prototype.prototypePropertyTwo = function(){ <span class='comment'>// ClassExpression prototypePropertyTwo.</span>
<span class='line-number-all'></span> return &quot;prototypePropertyTwo return value&quot;;
<span class='line-number-all'></span>};
<span class='line-number-all'></span>var objectViaClassExpression = new ClassExpression(&quot;argument&quot;); <span class='comment'>// Instantiate object by calling class definition with new operator (required). Arguments are passed to class constructor() method.</span>
<span class='line-number-all'></span>var callObjectViaClassExpressionConciseMethod = objectViaClassExpression.conciseMethod();
<span class='line-number-all'></span>var callObjectViaClassExpressionPrototypePropertyTwo = objectViaClassExpression.prototypePropertyTwo();
<span class='line-number-all'></span>if ((typeof ClassDeclaration === &quot;function&quot;) &amp;&amp; ClassDeclaration instanceof Function &amp;&amp; ClassDeclaration instanceof Object &amp;&amp; (typeof objectViaClassDeclaration === &quot;object&quot;) &amp;&amp; objectViaClassDeclaration instanceof ClassDeclaration &amp;&amp; !(objectViaClassDeclaration instanceof Function) &amp;&amp; objectViaClassDeclaration instanceof Object &amp;&amp; (objectViaClassDeclaration.ownPropertyOne === &quot;argument&quot;) &amp;&amp; (callObjectViaClassDeclarationConciseMethod === &quot;argument&quot;) &amp;&amp; (objectViaClassDeclaration.prototypePropertyOne === &quot;prototypePropertyOne value&quot;) &amp;&amp; (callObjectViaClassDeclarationPrototypePropertyTwo === &quot;prototypePropertyTwo return value&quot;) &amp;&amp; objectViaClassDeclaration.hasOwnProperty(&quot;ownPropertyOne&quot;) &amp;&amp; !objectViaClassDeclaration.hasOwnProperty(&quot;conciseMethod&quot;) &amp;&amp; !objectViaClassDeclaration.hasOwnProperty(&quot;prototypePropertyOne&quot;) &amp;&amp; !objectViaClassDeclaration.hasOwnProperty(&quot;prototypePropertyTwo&quot;) &amp;&amp; (Object.getPrototypeOf(objectViaClassDeclaration).ownPropertyOne === undefined) &amp;&amp; (typeof ClassDeclaration.prototype.ownPropertyOne === &quot;undefined&quot;) &amp;&amp; (typeof ClassDeclaration.prototype.conciseMethod === &quot;function&quot;) &amp;&amp; (typeof ClassDeclaration.prototype.prototypePropertyOne === &quot;string&quot;) &amp;&amp; (typeof ClassDeclaration.prototype.prototypePropertyTwo === &quot;function&quot;) &amp;&amp; objectViaClassDeclaration.propertyIsEnumerable(&quot;ownPropertyOne&quot;) &amp;&amp; !objectViaClassDeclaration.propertyIsEnumerable(&quot;conciseMethod&quot;) &amp;&amp; !objectViaClassDeclaration.propertyIsEnumerable(&quot;prototypePropertyOne&quot;) &amp;&amp; !objectViaClassDeclaration.propertyIsEnumerable(&quot;prototypePropertyTwo&quot;) &amp;&amp; (typeof ClassExpression === &quot;function&quot;) &amp;&amp; ClassExpression instanceof Function &amp;&amp; ClassExpression instanceof Object &amp;&amp; (typeof objectViaClassExpression === &quot;object&quot;) &amp;&amp; objectViaClassExpression instanceof ClassExpression &amp;&amp; !(objectViaClassExpression instanceof Function) &amp;&amp; objectViaClassExpression instanceof Object &amp;&amp; (objectViaClassExpression.ownPropertyOne === &quot;argument&quot;) &amp;&amp; (callObjectViaClassExpressionConciseMethod === &quot;argument&quot;) &amp;&amp; (objectViaClassExpression.prototypePropertyOne === &quot;prototypePropertyOne value&quot;) &amp;&amp; (callObjectViaClassExpressionPrototypePropertyTwo === &quot;prototypePropertyTwo return value&quot;) &amp;&amp; objectViaClassExpression.hasOwnProperty(&quot;ownPropertyOne&quot;) &amp;&amp; !objectViaClassExpression.hasOwnProperty(&quot;conciseMethod&quot;) &amp;&amp; !objectViaClassExpression.hasOwnProperty(&quot;prototypePropertyOne&quot;) &amp;&amp; !objectViaClassExpression.hasOwnProperty(&quot;prototypePropertyTwo&quot;) &amp;&amp; (Object.getPrototypeOf(objectViaClassExpression).ownPropertyOne === undefined) &amp;&amp; (typeof ClassExpression.prototype.ownPropertyOne === &quot;undefined&quot;) &amp;&amp; (typeof ClassExpression.prototype.conciseMethod === &quot;function&quot;) &amp;&amp; (typeof ClassExpression.prototype.prototypePropertyOne === &quot;string&quot;) &amp;&amp; (typeof ClassExpression.prototype.prototypePropertyTwo === &quot;function&quot;) &amp;&amp; objectViaClassExpression.propertyIsEnumerable(&quot;ownPropertyOne&quot;) &amp;&amp; !objectViaClassExpression.propertyIsEnumerable(&quot;conciseMethod&quot;) &amp;&amp; !objectViaClassExpression.propertyIsEnumerable(&quot;prototypePropertyOne&quot;) &amp;&amp; !objectViaClassExpression.propertyIsEnumerable(&quot;prototypePropertyTwo&quot;)){
<span class='line-number-all'></span> var element = document.getElementById(&quot;testId&quot;);
<span class='line-number-all'></span> element.innerHTML = &quot;&lt;b&gt;Pass&lt;/b&gt; (at least partial/possibly full support): The web browser recognizes the JavaScript &lt;code&gt;class&lt;/code&gt; syntax. The web browser at least partially/possibly fully supports the JavaScript &lt;code&gt;class&lt;/code&gt; syntax. Positive determination of full web browser support is beyond the scope of this test.&quot;;
<span class='line-number-all'></span>}
<span class='line-number-all'></span>&lt;/script&gt;
</pre>

     <h3><a id='result'></a>2.2. Web Browser Support Test Result</h3>

<!-- Per LWC web browser support testing, getPrototypeOf() method supported by IE9+, ED12+, FF3.5+, SF5+, CH5+, OP11.60+ and class syntax supported by ED13+, FF45+, CH49+, OP36+, no IE11-, SF5.1.7-. Therefore, in web browser support test below, getPrototypeOf() method does not skew test result. -->

     <p id='testId'><b>Fail</b> (no support): The web browser does not recognize the JavaScript <code>class</code> syntax. The web browser does not support the JavaScript <code>class</code> syntax.</p><!-- Hard code Fail because web browser no support error stops JavaScript execution. -->

     <script>
     class ClassDeclaration { // Class definition (not hoisted) using class declaration syntax.
      constructor(param){ // Class constructor() method (optional). Recommend define all own properties inside class constructor() method.
       this.ownPropertyOne = param; // objectViaClassDeclaration ownPropertyOne.
      }
      conciseMethod(){ // objectViaClassDeclaration prototype property. Class methods use concise method syntax and are not enumerable (ie, propertyIsEnumerable() method returns false).
       return this.ownPropertyOne;
      }
     }
     ClassDeclaration.prototype.prototypePropertyOne = \"prototypePropertyOne value\"; // ClassDeclaration prototypePropertyOne.
     ClassDeclaration.prototype.prototypePropertyTwo = function(){ // ClassDeclaration prototypePropertyTwo.
      return \"prototypePropertyTwo return value\";
     };
     var objectViaClassDeclaration = new ClassDeclaration(\"argument\"); // Instantiate object by calling class definition with new operator (required). Arguments are passed to class constructor() method.
     var callObjectViaClassDeclarationConciseMethod = objectViaClassDeclaration.conciseMethod();
     var callObjectViaClassDeclarationPrototypePropertyTwo = objectViaClassDeclaration.prototypePropertyTwo();
     var ClassExpression = class { // Class definition (not hoisted) using class expression syntax.
      constructor(param){ // Class constructor() method (optional). Recommend define all own properties inside class constructor() method.
       this.ownPropertyOne = param; // objectViaClassExpression ownPropertyOne.
      }
      conciseMethod(){ // objectViaClassExpression prototype property. Class methods use concise method syntax and are not enumerable (ie, propertyIsEnumerable() method returns false).
       return this.ownPropertyOne;
      }
     }
     ClassExpression.prototype.prototypePropertyOne = \"prototypePropertyOne value\"; // ClassExpression prototypePropertyOne.
     ClassExpression.prototype.prototypePropertyTwo = function(){ // ClassExpression prototypePropertyTwo.
      return \"prototypePropertyTwo return value\";
     };
     var objectViaClassExpression = new ClassExpression(\"argument\"); // Instantiate object by calling class definition with new operator (required). Arguments are passed to class constructor() method.
     var callObjectViaClassExpressionConciseMethod = objectViaClassExpression.conciseMethod();
     var callObjectViaClassExpressionPrototypePropertyTwo = objectViaClassExpression.prototypePropertyTwo();
     if ((typeof ClassDeclaration === \"function\") && ClassDeclaration instanceof Function && ClassDeclaration instanceof Object && (typeof objectViaClassDeclaration === \"object\") && objectViaClassDeclaration instanceof ClassDeclaration && !(objectViaClassDeclaration instanceof Function) && objectViaClassDeclaration instanceof Object && (objectViaClassDeclaration.ownPropertyOne === \"argument\") && (callObjectViaClassDeclarationConciseMethod === \"argument\") && (objectViaClassDeclaration.prototypePropertyOne === \"prototypePropertyOne value\") && (callObjectViaClassDeclarationPrototypePropertyTwo === \"prototypePropertyTwo return value\") && objectViaClassDeclaration.hasOwnProperty(\"ownPropertyOne\") && !objectViaClassDeclaration.hasOwnProperty(\"conciseMethod\") && !objectViaClassDeclaration.hasOwnProperty(\"prototypePropertyOne\") && !objectViaClassDeclaration.hasOwnProperty(\"prototypePropertyTwo\") && (Object.getPrototypeOf(objectViaClassDeclaration).ownPropertyOne === undefined) && (typeof ClassDeclaration.prototype.ownPropertyOne === \"undefined\") && (typeof ClassDeclaration.prototype.conciseMethod === \"function\") && (typeof ClassDeclaration.prototype.prototypePropertyOne === \"string\") && (typeof ClassDeclaration.prototype.prototypePropertyTwo === \"function\") && objectViaClassDeclaration.propertyIsEnumerable(\"ownPropertyOne\") && !objectViaClassDeclaration.propertyIsEnumerable(\"conciseMethod\") && !objectViaClassDeclaration.propertyIsEnumerable(\"prototypePropertyOne\") && !objectViaClassDeclaration.propertyIsEnumerable(\"prototypePropertyTwo\") && (typeof ClassExpression === \"function\") && ClassExpression instanceof Function && ClassExpression instanceof Object && (typeof objectViaClassExpression === \"object\") && objectViaClassExpression instanceof ClassExpression && !(objectViaClassExpression instanceof Function) && objectViaClassExpression instanceof Object && (objectViaClassExpression.ownPropertyOne === \"argument\") && (callObjectViaClassExpressionConciseMethod === \"argument\") && (objectViaClassExpression.prototypePropertyOne === \"prototypePropertyOne value\") && (callObjectViaClassExpressionPrototypePropertyTwo === \"prototypePropertyTwo return value\") && objectViaClassExpression.hasOwnProperty(\"ownPropertyOne\") && !objectViaClassExpression.hasOwnProperty(\"conciseMethod\") && !objectViaClassExpression.hasOwnProperty(\"prototypePropertyOne\") && !objectViaClassExpression.hasOwnProperty(\"prototypePropertyTwo\") && (Object.getPrototypeOf(objectViaClassExpression).ownPropertyOne === undefined) && (typeof ClassExpression.prototype.ownPropertyOne === \"undefined\") && (typeof ClassExpression.prototype.conciseMethod === \"function\") && (typeof ClassExpression.prototype.prototypePropertyOne === \"string\") && (typeof ClassExpression.prototype.prototypePropertyTwo === \"function\") && objectViaClassExpression.propertyIsEnumerable(\"ownPropertyOne\") && !objectViaClassExpression.propertyIsEnumerable(\"conciseMethod\") && !objectViaClassExpression.propertyIsEnumerable(\"prototypePropertyOne\") && !objectViaClassExpression.propertyIsEnumerable(\"prototypePropertyTwo\")){
      var element = document.getElementById(\"testId\");
      element.innerHTML = \"<b>Pass</b> (at least partial/possibly full support): The web browser recognizes the JavaScript <code>class</code> syntax. The web browser at least partially/possibly fully supports the JavaScript <code>class</code> syntax. Positive determination of full web browser support is beyond the scope of this test.\";
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
