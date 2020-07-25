<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/misc/glossary_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/misc/glossary.php.
 * Last reviewed/updated: 18 Oct 2018.
 * Published: 21 Sep 2016. */
return
   "<!-- This web page does not have an h2-h6 element in the section element. To avoid W3C Markup Validation Service (http://validator.w3.org/) warning, not error (Warning: Section lacks heading. Consider using h2-h6 elements to add identifying headings to all sections.), comment out the section element. Same for index.php, sitemap.php, glossary.php, and whats_new.php.
    <section>
-->
     <p><a id='A'></a><a id='ancestor'></a><b>ancestor</b></p>

     <ul>
      <li>An <a href='#element'>element</a> in the same branch as, and one or more levels above, another <a href='#element'>element</a> in the <a href='#html_document_tree'>HTML document tree</a>. Compare with <a href='#descendant'>descendant</a>.</li>
      <li>An <a href='#element'>element's</a> <a href='#parent'>parent</a>, its <a href='#parent'>parent's</a> <a href='#parent'>parent</a>, its <a href='#parent'>parent's</a> <a href='#parent'>parent's</a> <a href='#parent'>parent</a>, etc.</li>
     </ul>

     <p><a id='attribute'></a><b>attribute</b></p>

     <ul>
      <li>A characteristic of <a href='#content'>content</a> defined by <a href='#html_web_lang'>HTML</a>.</li>
      <li>Those related to <a href='#style_css'>style</a>, except for the <a href='#class'><code>class</code></a> and <a href='#style_html'><code>style</code></a> <a href='#attribute'>attributes</a>, are <a href='#deprecate'>deprecated</a> or <a href='#obsolete'>obsoleted</a> from <a href='#html_web_lang'>HTML</a> as being replaced by <a href='#css'>CSS</a>.</li>
      <li>Syntax: <code>&lt;element attribute=&quot;value&quot;&gt;content&lt;/element&gt;</code>.</li>
      <li>Examples: <code>face</code>, <code>color</code>, <code>size</code>, <a href='#class'><code>class</code></a>, and <a href='#style_html'><code>style</code></a>.</li>
      <li>A generic term referring to an <a href='#attribute'>attribute</a> and <a href='#value_html'>value</a> pair.</li>
     </ul>

     <p><a id='author'></a><b>author</b></p>

     <ul>
      <li>A person who writes (i.e., <a href='#author'>authors</a>) <a href='#web_document'>web documents</a>. Compare with <a href='#user'>user</a> and <a href='#user_agent'>user agent</a>.</li>
      <li>One of the three sources of <a href='#style_css'>style</a>. See <a href='#author_styles'>author styles</a>.</li>
     </ul>

     <p><a id='author_styles'></a><b>author styles</b></p>

     <ul>
      <li><a href='#style_css'>Styles</a> written by an <a href='#author'>author</a>. Compare with <a href='#user_styles'>user styles</a> and <a href='#user_agent_styles'>user agent styles</a>.</li>
      <li>Includes <a href='#embedded_style_sheet'>embedded style sheets</a>, <a href='#external_style_sheet'>external style sheets</a>, <a href='#imported_style_sheet'>imported style sheets</a>, and <a href='#inline_style'>inline styles</a>.</li>
     </ul>

     <p><a id='author_styles_list'></a><b>author styles list</b></p>

     <ul>
      <li>The list of <a href='#author'>author</a> <a href='#style_rule'>style rules</a> associated with a <a href='#web_page'>web page</a>, replacing any links to <a href='#external_style_sheet'>external style sheets</a> with the <a href='#external_style_sheet'>external style sheets</a>, themselves, and replacing any <code>@import</code> statements with the <a href='#external_style_sheet'>external style sheets</a> to be imported, themselves. Compare with <a href='#user_styles_list'>user styles list</a></li>
      <li>Created by the <a href='#cascade'>Cascade</a>.</li>
     </ul>

     <p><a id='B'></a><a id='block_level_element'></a><b>block-level element</b></p>

     <ul>
      <li>An <a href='#element'>element</a> type in which <a href='#content'>content</a> is physically separated (i.e., blocked off) from adjacent <a href='#content'>content</a> as if preceded and followed by a line break. Compare with <a href='#inline_element'>inline element</a>.</li>
      <li>Examples: <code>h1</code>, <code>p</code>, <code>ol</code>, <code>ul</code>, <code>table</code>, <code>form</code>, and <code>div</code>.</li>
     </ul>

     <p><a id='body'></a><b><code>body</code></b></p>

     <ul>
      <li>The <a href='#element'>element</a> that is the root (i.e., origin) and <a href='#ancestor'>ancestor</a> of <a href='#content'>content</a>. Compare with <a href='#html_element'><code>html</code>, element</a>.</li>
     </ul>

     <p><a id='C'></a><a id='cascade'></a><b>cascade</b></p>

     <ul>
      <li><q><i>Something arranged or occurring in a series or in a succession of stages so that each stage derives from or acts upon the product of the preceding.</i></q> - <cite>Merriam-Webster's Collegiate Dictionary, Tenth Edition, 2001</cite>.</li>
      <li>A component of a <a href='#user_agent'>user agent</a>.</li>
      <li>For each <a href='#web_page'>web page</a>: 1.) processes <a href='#author_styles'>author styles</a>, if present, into an <a href='#author_styles_list'>author styles list</a>, and <a href='#user_styles'>user styles</a>, if present, into a <a href='#user_styles_list'>user styles list</a>; 2.) merges the <a href='#user_agent_styles'>user agent styles</a>, <a href='#author_styles_list'>author styles list</a>, if present, and <a href='#user_styles_list'>user styles list</a>, if present; 3.) resolves <a href='#style_conflict'>style conflicts</a>; and 4.) creates a master <a href='#style_sheet'>style sheet</a> whose <a href='#style_css'>styles</a> the <a href='#user_agent'>user agent's</a> <a href='#rendering_engine'>rendering engine</a> applies to <a href='#content'>content</a> in the <a href='#web_browser_window'>web browser window</a>.</li>
      <li>Also: 1.) allows <a href='#user_agent_styles'>user agent styles</a>, <a href='#author_styles'>author styles</a>, and <a href='#user_styles'>user styles</a> to simultaneously <a href='#style_css'>style</a> <a href='#content'>content</a>; 2.) allows <a href='#author_styles'>author styles</a> and <a href='#user_styles'>user styles</a> to be partial <a href='#style_css'>styles</a> (i.e., <a href='#author_styles'>author styles</a> and <a href='#user_styles'>user styles</a> need only assign the <a href='#style_css'>styles</a> to add to, or change from, the <a href='#user_agent_styles'>user agent styles</a>); 3.) provides modularity (i.e., <a href='#author'>authors</a>, instead of needing to create a single large <a href='#style_sheet'>style sheet</a> encompassing an entire <a href='#web_page_site'>web page/site</a>, can think of their <a href='#web_page_site'>web pages/sites</a> as consisting of sections (i.e., modules) each getting its own module-specific <a href='#style_sheet'>style sheet</a>); and 4.) provides <a href='#author'>author</a>/<a href='#user'>user</a> balance (i.e., a mechanism for <a href='#author_styles'>author styles</a> to override <a href='#user_styles'>user styles</a> and, conversely, for <a href='#user_styles'>user styles</a> to override <a href='#author_styles'>author styles</a>).</li>
     </ul>

     <p><a id='child'></a><b>child</b></p>

     <ul>
      <li>An <a href='#element'>element</a> in the same branch as, and one level below, another <a href='#element'>element</a> in the <a href='#html_document_tree'>HTML document tree</a>.</li>
      <li>An <a href='#element'>element</a> that is contained within (i.e., enclosed by) another <a href='#element'>element</a>. Compare with <a href='#parent'>parent</a>.</li>
      <li>The <a href='#descendant'>descendant</a> that is only one level below another <a href='#element'>element</a> in the <a href='#html_document_tree'>HTML document tree</a>.</li>
     </ul>

     <p><a id='class'></a><b><code>class</code></b></p>

     <ul>
      <li>The <a href='#attribute'>attribute</a> for attaching <a href='#style_css'>style</a> to <a href='#content'>content</a> via the <a href='#class-name_html'>class-name</a> <a href='#value_html'>value</a> and the <a href='#class-name_css'>class-name</a> <a href='#selector'>selector</a>. Compare with <a href='#style_html'><code>style</code>, HTML</a>.</li>
      <li>A generic term referring to the <a href='#class'><code>class</code></a> <a href='#attribute'>attribute</a>, and/or the <a href='#class-name_html'>class-name</a> <a href='#value_html'>value</a>, and/or the <a href='#class-name_css'>class-name</a> <a href='#selector'>selector</a>.</li>
     </ul>

     <p><a id='classed_element'></a><b>classed element</b></p>

     <ul>
      <li>An <a href='#element'>element</a> with the <a href='#class'><code>class</code></a> <a href='#attribute'>attribute</a> assigned a <a href='#class-name_html'>class-name</a> in <a href='#markup'>markup</a>.</li>
      <li>Syntax: <code>&lt;element class=&quot;class-name&quot;&gt;content&lt;/element&gt;</code>.</li>
     </ul>

     <p><a id='class-name_css'></a><b>class-name, CSS</b></p>

     <ul>
      <li>An <a href='#author'>author</a> declared name that is used as a <a href='#selector'>selector</a>. Compare with <a href='#class-name_html'>class-name, HTML</a>.</li>
      <li>Syntax: <code>.class-name { declaration block }</code>.</li>
     </ul>
<!-- Changed from className to class-name, CSS and class-name, HTML 09 Jun 2015. -->
<!-- Because class-name is not a proper HTML/CSS term, and, therefore, will never appear in code, do not place class-name in code tags as if it were representative of code, and this includes language such as: &quot;assigned the value, class-name, in markup.&quot; Only exception is the following example, where .class-name could be an actual selector. It is OK to capitalize as Class-name if first word of a sentence, or as Class-Name if used in web page title, toc section title, or web page section title. -->

     <p><a id='class-name_html'></a><b>class-name, HTML</b></p>

     <ul>
      <li>An <a href='#author'>author</a> declared name that is assigned as the <a href='#value_html'>value</a> to a <a href='#class'><code>class</code></a> <a href='#attribute'>attribute</a>. Compare with <a href='#class-name_css'>class-name, CSS</a></li>
      <li>Syntax: <code>&lt;element class=&quot;class-name&quot;&gt;content&lt;/element&gt;</code>.</li>
     </ul>
<!-- Changed from className to class-name, CSS and class-name, HTML 09 Jun 2015. -->
<!-- Because class-name is not a proper HTML/CSS term, and, therefore, will never appear in code, do not place class-name in code tags as if it were representative of code, and this includes language such as: &quot;assigned the value, class-name, in markup.&quot; Only exception is the following example, where class-name could be an actual class attribute value. It is OK to capitalize as Class-name if first word of a sentence, or as Class-Name if used in web page title, toc section title, or web page section title. -->
<!--  Alternate wording: <li>An <a href='#author'>author</a> declared name that is assigned as an HTML <a href='#element'>element</a> <a href='#class'><code>class</code></a> <a href='#attribute'>attribute</a> <a href='#value_html'>value</a>. Compare with <a href='#class-name_css'>class-name, CSS</a></li> -->

     <p><a id='code'></a><b>code</b></p>

     <ul>
      <li>See <a href='#source_code'>source code</a>.</li>
      <li>To write <a href='#source_code'>source code</a>.</li>
     </ul>

     <p><a id='comment'></a><b>comment, CSS</b></p>

     <ul>
      <li>Text in a <a href='#style_sheet'>style sheet</a> that is not interpreted by, and, therefore, is ignored by, a <a href='#user_agent'>user agent</a>.</li>
      <li>Typically serve as a note/reminder (i.e., <a href='#comment'>comment</a>) about the surrounding, interpreted <a href='#code'>code</a>.</li>
      <li>Preceded by forward slash and asterisk (/*) characters and followed by asterisk and forward slash (*/) characters.</li>
      <li>Are single line; meaning, they can wrap, but cannot span multiple lines.</li>
     <li>Syntax:<br />
       <code>selector { declaration block } /* CSS comment at the end of a line. */<br />
       /* CSS comment at the start of a line. */</code>
      </li>
     </ul>

     <p><a id='content'></a><b>content</b></p>

     <ul>
      <li>The text, links, images, etc. that appear in the <a href='#web_browser_window'>web browser window</a> upon which <a href='#html_web_lang'>HTML</a> <a href='#structure'>structure</a> and <a href='#css'>CSS</a> <a href='#style_css'>style</a> is applied.</li>
      <li>That between an <a href='#html_document'>HTML document's</a> <code>&lt;<a href='#body'>body</a>&gt;&lt;/<a href='#body'>body</a>&gt;</code> <a href='#tag'>tags</a> apart from the <a href='#markup'>markup</a>.</li>
     </ul>

     <p><a id='cross_browser'></a><b>cross-browser</b></p>

     <ul>
      <li>Across <a href='#web_browser'>web browsers</a>.</li>
      <li>Of or pertaining to various <a href='#web_browser'>web browsers</a>.</li>
     </ul>

     <p><a id='cross_browser_compatibility'></a><b>cross-browser compatibility</b></p>

     <ul>
      <li>That which allows <a href='#web_page'>web pages</a> to appear and function identically, or without significant difference, in various <a href='#web_browser'>web browsers</a>.</li>
      <li>Related to; 1.) the capabilities of various <a href='#web_browser'>web browsers</a>, 2.) the <a href='#author'>author's</a> knowledge of the capabilities of various <a href='#web_browser'>web browsers</a>, and 3.) the <a href='#author'>author's</a> ability to write <a href='#html_document'>HTML documents</a> and <a href='#style_sheet'>style sheets</a> that appear and function identically, or without significant difference, in various <a href='#web_browser'>web browsers</a>.</li>
     </ul>

     <p><a id='css'></a><b>CSS</b></p>

     <ul>
      <li><a href='#cascade'><b>C</b>ascading</a> <a href='#style_sheet'><b>S</b>tyle <b>S</b>heets</a>.</li>
      <li>The <a href='#web_language'>web language</a> for <a href='#style_css'>styling</a> (i.e., changing the presentation of) <a href='#content'>content</a>.</li>
      <li>The <a href='#web_language'>web language</a> that defines <a href='#style_css'>style</a> and the syntax for attaching <a href='#style_css'>style</a> to <a href='#content'>content</a>.</li>
      <li>The <a href='#web_language'>web language</a> in which <a href='#style_css'>style</a> is attached to <a href='#content'>content</a> for the purpose of refining the presentation of <a href='#content'>content</a>.</li>
      <li>The <a href='#web_page'>web page</a> <a href='#content'>content</a> presentation language.</li>
     </ul>

     <p><a id='css_document'></a><b>CSS document</b></p>

     <ul>
      <li>See <a href='#external_style_sheet'>external style sheet</a>.</li>
     </ul>

     <p><a id='D'></a><a id='declaration'></a><b>declaration</b></p>

     <ul>
      <li>A <a href='#style_css'>style</a>.</li>
      <li>Consists of a <a href='#property'>property</a> and <a href='#value_css'>value</a> pair. Compare with <a href='#attribute'>attribute</a>.</li>
      <li>Syntax: <code>selector { property-one: value-one; property-two: value-two; property-three: value-three } /* <a href='#style_rule'>Style rule</a> with three <a href='#declaration'>declarations</a> (i.e., <a href='#style_css'>styles</a>). */</code></li>
     </ul>

     <p><a id='declaration_block'></a><b>declaration block</b></p>

     <ul>
      <li>One of the two parts of a <a href='#style_rule'>style rule</a>. Compare with <a href='#selector'>selector</a>.</li>
      <li>Assigns one or more <a href='#style_css'>styles</a> to a <a href='#selector'>selector</a>.</li>
      <li>Consists of one or more <a href='#declaration'>declarations</a>, each <a href='#declaration'>declaration</a> representing a <a href='#style_css'>style</a>.</li>
      <li>Syntax: <code>selector { declaration-one; declaration-two; declaration-three } /* <a href='#declaration_block'>Declaration block</a> with three <a href='#declaration'>declarations</a>. */</code></li>
     </ul>

     <p><a id='deprecate'></a><b>deprecated</b></p>

     <ul>
      <li><a href='#element'>Elements</a> and <a href='#attribute'>attributes</a> defined by a <a href='#w3c'>W3C</a> <a href='#html_web_lang'>HTML</a> <a href='#recommendation'>Recommendation</a> that are designated to be <a href='#obsolete'>obsoleted</a> from future <a href='#w3c'>W3C</a> <a href='#html_web_lang'>HTML</a> <a href='#recommendation'>Recommendations</a> as being replaced by <a href='#css'>CSS</a>. Compare with <a href='#obsolete'>obsolete</a>.</li>
      <li><a href='#element'>Elements</a> and <a href='#attribute'>attributes</a> that <a href='#user_agent'>user agents</a> are encouraged to support until they become <a href='#obsolete'>obsoleted</a>.</li>
     </ul>

     <p><a id='descendant'></a><b>descendant</b></p>

     <ul>
      <li>An <a href='#element'>element</a> in the same branch as, and one or more levels below, another <a href='#element'>element</a> in the <a href='#html_document_tree'>HTML document tree</a>. Compare with <a href='#ancestor'>ancestor</a>.</li>
      <li>An <a href='#element'>element's</a> <a href='#child'>children</a>, its <a href='#child'>children's</a> <a href='#child'>children</a>, its <a href='#child'>children's</a> <a href='#child'>children's</a> <a href='#child'>children</a>, etc.</li>
     </ul>

     <p><a id='dtd'></a><b>DTD</b></p>

     <ul>
      <li><b>D</b>ocument <b>T</b>ype <b>D</b>efinition.</li>
      <li>The part of a <a href='#w3c'>W3C</a> <a href='#html_web_lang'>HTML</a> <a href='#recommendation'>Recommendation</a> that defines the language's proper usage, including, but not limited to, the <a href='#valid'>valid</a> <a href='#element'>elements</a>, <a href='#attribute'>attributes</a>, and <a href='#value_html'>value</a> types.</li>
     </ul>

     <p><a id='dynamic_pseudo_class'></a><b>dynamic pseudo-class</b></p>

     <ul>
      <li>The <a href='#pseudo_class'>pseudo-class</a> type for attaching <a href='#style_css'>style</a> to <a href='#content'>content</a> (which, by default, includes links) based on the <a href='#content'>content's</a> state with respect to <a href='#user'>user</a> interaction with the <a href='#content'>content</a>. Compare with <a href='#link_pseudo_class'>link pseudo-class</a>.</li>
      <li>States include: 1.) <code>:hover</code>, for attaching <a href='#style_css'>style</a> to <a href='#content'>content</a> with the mouse cursor placed over it; 2.) <code>:active</code>, for attaching <a href='#style_css'>style</a> to <a href='#content'>content</a> between the mouse down click and the mouse up click; and 3.) <code>:focus</code>, for attaching <a href='#style_css'>style</a> to <a href='#content'>content</a> ready to accept input.</li>
     </ul>

     <p><a id='E'></a><a id='element'></a><b>element</b></p>

     <ul>
      <li>An <a href='#html_web_lang'>HTML</a> <a href='#structure'>structure</a> type attached to <a href='#content'>content</a> through the use of <a href='#markup'>markup</a>.</li>
      <li>A <a href='#selector'>selector</a>. Compare with <a href='#class-name_css'>class-name, CSS</a> and <a href='#pseudo_class'>pseudo-class</a>.</li>
      <li>Divided into two types; 1.) <a href='#block_level_element'>block-level elements</a>, and 2.) <a href='#inline_element'>inline elements</a>.</li>
      <li>Examples: <a href='#body'><code>body</code></a>, <code>h1</code>, <code>p</code>, <code>ol</code>, <code>ul</code>, <code>table</code>, <code>form</code>, <code>div</code>, <code>a</code>, <code>em</code>, <code>i</code>, <code>strong</code>, <code>b</code>, <code>img</code>, and <code>span</code>.</li>
     </ul>

     <p><a id='embedded_style_sheet'></a><b>embedded style sheet</b></p>

     <ul>
      <li>A.k.a., inline <a href='#style_sheet'>style sheet</a>.</li>
      <li>A <a href='#style_sheet'>style sheet</a> located inside (i.e., embedded within) an <a href='#html_document'>HTML document</a>. Compare with <a href='#external_style_sheet'>external style sheet</a> and <a href='#imported_style_sheet'>imported style sheet</a>.</li>
      <li><a href='#style_rule'>Style rules</a> inside <code>&lt;style type=&quot;text/css&quot;&gt;&lt;/style&gt;</code> <a href='#tag'>tags</a> placed in the <code>&lt;head&gt;&lt;/head&gt;</code> section of an <a href='#html_document'>HTML document</a>.</li>
      <li>Written by <a href='#author'>authors</a>.</li>
     </ul>

     <p><a id='external_style_sheet'></a><b>external style sheet</b></p>

     <ul>
      <li>A <a href='#style_sheet'>style sheet</a> located outside (i.e., external to) an <a href='#html_document'>HTML document</a>. Compare with <a href='#embedded_style_sheet'>embedded style sheet</a> and <a href='#imported_style_sheet'>imported style sheet</a>.</li>
      <li><a href='#style_rule'>Style rules</a> in a text file having a <span class='filename'>.css</span> file extension.</li>
      <li>A <a href='#style_sheet'>style sheet</a> associated with (i.e., linked to) an <a href='#html_document'>HTML document</a> by adding the line, <code>&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;anyFileName.css&quot; /&gt;</code>, where the <a href='#value_html'>value</a> assigned to the <code>href</code> <a href='#attribute'>attribute</a> is an absolute or relative path to an <a href='#external_style_sheet'>external style sheet</a>, <span class='filename'>anyFileName.css</span>, to the <code>&lt;head&gt;&lt;/head&gt;</code> section of an <a href='#html_document'>HTML document</a>. Written by <a href='#author'>authors</a>.</li>
      <li>A <a href='#style_sheet'>style sheet</a> attached to <a href='#content'>content</a> via a <a href='#user_agent'>user agent's</a> Options/Preferences. Written by <a href='#user'>users</a>.</li>
     </ul>

     <p><a id='H'></a><a id='html_element'></a><b><code>html</code>, element</b></p>

     <ul>
      <li>The <a href='#element'>element</a> that is the root (i.e., origin) and <a href='#ancestor'>ancestor</a> of all other <a href='#element'>elements</a> in an <a href='#html_document'>HTML document</a>. Compare with <a href='#body'><code>body</code></a>.</li>
     </ul>

     <p><a id='html_web_lang'></a><b>HTML, web language</b></p>

     <ul>
      <li><b>H</b>yper<b>T</b>ext <b>M</b>arkup <b>L</b>anguage.</li>
      <li>The <a href='#web_language'>web language</a> for adding <a href='#content'>content</a> to <a href='#web_page'>web pages</a>.</li>
      <li>The <a href='#web_language'>web language</a> that defines <a href='#content'>content</a> types, a basic <a href='#structure'>structure</a> for each <a href='#content'>content</a> type, and the syntax for adding <a href='#content'>content</a> to a <a href='#web_page'>web page</a>.</li>
      <li>The <a href='#web_language'>web language</a> in which <a href='#markup'>markup</a> is used to; 1.) add <a href='#content'>content</a> to a <a href='#web_page'>web page</a>, and 2.) impart <a href='#structure'>structural</a> information upon the <a href='#content'>content</a>. The <a href='#structure'>structural</a> information that <a href='#markup'>markup</a> imparts upon <a href='#content'>content</a> includes; 1.) a <a href='#structure'>structure</a> type (e.g., heading, paragraph, etc.), and 2.) the demarcation of the starting and ending points for the application of the <a href='#structure'>structure</a> type.</li>
      <li>The <a href='#web_page'>web page</a> <a href='#content'>content</a> and <a href='#content'>content</a> <a href='#structure'>structure</a> language.</li>
     </ul>

     <p><a id='html_document'></a><b>HTML document</b></p>

     <ul>
      <li>A text file written in <a href='#html_web_lang'>HTML</a> or <a href='#xhtml'>XHTML</a> having a <span class='filename'>.htm</span> or <span class='filename'>.html</span> file extension.</li>
     </ul>

     <p><a id='html_document_tree'></a><b>HTML document tree</b></p>

     <ul>
      <li class='list item'>A.k.a., document tree.</li>
      <li>A diagram of the <a href='#element'>elements</a> that constitute an <a href='#html_document'>HTML document</a>. The diagram is similar in shape to a tree in that it has a root and branches. By convention, though, the root is placed at the top of the diagram.</li>
      <li>Depicts and is frequently used to define the terms, <a href='#parent'>parent</a>, <a href='#child'>child</a>, <a href='#sibling'>sibling</a>, <a href='#ancestor'>ancestor</a>, <a href='#descendant'>descendant</a>, and <a href='#inheritance'>inheritance</a>.</li>
     </ul>

     <p><a id='I'></a><a id='imported_style_sheet'></a><b>imported style sheet</b></p>

     <ul>
      <li>An <a href='#external_style_sheet'>external style sheet</a> inserted (i.e., imported) into an <a href='#embedded_style_sheet'>embedded style sheet</a>, <a href='#external_style_sheet'>external style sheet</a>, or <a href='#imported_style_sheet'>imported style sheet</a>. Compare with <a href='#embedded_style_sheet'>embedded style sheet</a> and <a href='#external_style_sheet'>external style sheet</a>.</li>
      <li>Written by <a href='#author'>authors</a> and <a href='#user'>users</a>.</li>
     </ul>

     <p><a id='inheritance'></a><b>inheritance</b></p>

     <ul>
      <li>The transferring of <a href='#style_css'>style</a> from <a href='#ancestor'>ancestors</a> to <a href='#descendant'>descendants</a> and the receiving of <a href='#style_css'>style</a> by <a href='#descendant'>descendants</a> from <a href='#ancestor'>ancestors</a>.</li>
     </ul>

     <p><a id='inline_element'></a><b>inline element</b></p>

     <div class='note normal'>Some <a href='#inline_element'>inline elements</a> (e.g., <code>em</code>, <code>i</code>, <code>strong</code>, and <code>b</code>) are more related to <a href='#style_css'>style</a> than <a href='#structure'>structure</a>, which contradicts the definition of an <a href='#element'>element</a> as an <a href='#html_web_lang'>HTML</a> <a href='#structure'>structure</a> type. It makes sense, though, that the <a href='#w3c'>W3C</a> has retained these old, <a href='#style_css'>stylistically</a> simple, frequently used, and easy to deploy <a href='#element'>elements</a> instead of <a href='#obsolete'>obsoleting</a> them as being replaced by <a href='#css'>CSS</a>.</div>

     <ul>
      <li>A.k.a., text-level <a href='#element'>element</a>.</li>
      <li>An <a href='#element'>element</a> type in which <a href='#content'>content</a> remains besides (i.e., inline with) adjacent <a href='#content'>content</a>. Compare with <a href='#block_level_element'>block-level element</a>.</li>
      <li>Examples: <code>a</code>, <code>em</code>, <code>i</code>, <code>strong</code>, <code>b</code>, <code>img</code>, and <code>span</code>.</li>
     </ul>

     <p><a id='inline_style'></a><b>inline style</b></p>

     <ul>
      <li>A <a href='#style_css'>style</a> attached to <a href='#content'>content</a> via the <a href='#style_html'><code>style</code></a> <a href='#attribute'>attribute</a> assigned a <a href='#value_html'>value</a> whose syntax mimics that of a <a href='#declaration_block'>declaration block</a>, minus the braces.</li>
      <li>Syntax: <code>&lt;element style=&quot;property: value&quot;&gt;content&lt;/element&gt;</code>.</li>
     </ul>

     <p><a id='internet'></a><b>Internet</b></p>

     <ul>
      <li>The collection of servers, clients, connections between them, and any additional hardware and software that forms the global internetwork over which various types of data, including that which constitutes <a href='#web_page'>web pages</a>, travel.</li>
     </ul>

     <p><a id='L'></a><a id='link_pseudo_class'></a><b>link pseudo-class</b></p>

     <ul>
      <li>The <a href='#pseudo_class'>pseudo-class</a> type for attaching <a href='#style_css'>style</a> to links based on the link's state with respect to <a href='#user'>user</a> interaction with the links. Compare with <a href='#dynamic_pseudo_class'>dynamic pseudo-class</a>.</li>
      <li>States include: 1.) <code>:link</code>, for attaching <a href='#style_css'>style</a> to unvisited links; and 2.) <code>:visited</code>, for attaching <a href='#style_css'>style</a> to visited links.</li>
     </ul>

     <p><a id='M'></a><a id='markup'></a><b>markup</b></p>

     <ul>
      <li>A.k.a., <a href='#tag'>tags</a>.</li>
      <li>An <a href='#html_web_lang'>HTML</a> construct through which two types of <a href='#structure'>structural</a> information are attached to <a href='#content'>content</a>; 1.) a <a href='#structure'>structure</a> type (e.g., heading, paragraph, etc.), and 2.) the demarcation of the starting and ending points for the application of the <a href='#structure'>structure</a> type.</li>
      <li>Typically consists of a less-than sign (&lt;) character, an <a href='#element'>element</a>, optional <a href='#attribute'>attributes</a>, and a greater-than sign (&gt;) character to form an opening <a href='#tag'>tag</a> that demarcates the starting point for the application of the <a href='#element'>element's</a> <a href='#structure'>structure</a> type and optional <a href='#attribute'>attributes</a> to <a href='#content'>content</a>, and a less-than sign (&lt;) character, a forward slash (/) character, an <a href='#element'>element</a>, and a greater-than sign (&gt;) character to form a closing <a href='#tag'>tag</a> that demarcates the ending point for the application of the <a href='#element'>element's</a> <a href='#structure'>structure</a> type and optional <a href='#attribute'>attributes</a> to <a href='#content'>content</a>.</li>
      <li>Syntax: 1.) <code>&lt;element&gt;content&lt;/element&gt;</code>, without an <a href='#attribute'>attribute</a>, and 2.) <code>&lt;element attribute=&quot;value&quot;&gt;content&lt;/element&gt;</code>, with an <a href='#attribute'>attribute</a>.</li>
     </ul>

     <p><a id='N'></a><a id='non_standard_html_extension'></a><b>nonstandard HTML extension</b></p>

     <ul>
      <li><a href='#element'>Elements</a> and <a href='#attribute'>attributes</a>, typically created by <a href='#web_browser'>web browser</a> vendors, that are not defined by a <a href='#w3c'>W3C</a> <a href='#html_web_lang'>HTML</a> <a href='#recommendation'>Recommendation</a>.</li>
     </ul>

     <p><a id='O'></a><a id='obsolete'></a><b>obsoleted</b></p>

     <ul>
      <li><a href='#element'>Elements</a> and <a href='#attribute'>attributes</a> that are no longer defined by a <a href='#w3c'>W3C</a> <a href='#html_web_lang'>HTML</a> <a href='#recommendation'>Recommendation</a>. Compare with <a href='#deprecate'>deprecated</a>.</li>
      <li><a href='#element'>Elements</a> and <a href='#attribute'>attributes</a> that <a href='#user_agent'>user agents</a> might support, but are no longer encouraged to support.</li>
     </ul>

     <p><a id='P'></a><a id='parent'></a><b>parent</b></p>

     <ul>
      <li>An <a href='#element'>element</a> in the same branch as, and one level above, another <a href='#element'>element</a> in the <a href='#html_document_tree'>HTML document tree</a>.</li>
      <li>An <a href='#element'>element</a> that contains (i.e., encloses) one or more <a href='#element'>elements</a>. Compare with <a href='#child'>child</a>.</li>
      <li>The <a href='#ancestor'>ancestor</a> that is only one level above another <a href='#element'>element</a> in the <a href='#html_document_tree'>HTML document tree</a>.</li>
     </ul>

     <p><a id='property'></a><b>property</b></p>

     <ul>
      <li>One of the two parts of a <a href='#declaration'>declaration</a>. Compare with <a href='#value_css'>value, CSS</a>.</li>
      <li>A characteristic of <a href='#content'>content</a> defined by <a href='#css'>CSS</a>.</li>
      <li>Examples: <code>font-family</code>, <code>color</code>, and <code>font-size</code>.</li>
     </ul>

     <p><a id='pseudo_class'></a><b>pseudo-class</b></p>

     <ul>
      <li>A <a href='#selector'>selector</a>. Compare with <a href='#class-name_css'>class-name, CSS</a> and <a href='#element'>element</a>.</li>
      <li>A mechanism defined by the <a href='#w3c'>W3C</a> <a href='#css'>CSS</a> <a href='#recommendation'>Recommendations</a>, reminiscent of the <a href='#class'><code>class</code></a> <a href='#attribute'>attribute</a>, but <a href='#html_web_lang'>HTML</a> independent (hence, <q>pseudo</q>-class), for attaching <a href='#style_css'>style</a> to <a href='#content'>content</a> based on the <a href='#content'>content's</a> state with respect to <a href='#user'>user</a> interaction with the <a href='#content'>content</a>.</li>
      <li>Divided into two types; 1.) <a href='#link_pseudo_class'>link pseudo-classes</a>, and 2.) <a href='#dynamic_pseudo_class'>dynamic pseudo-classes</a>.</li>
     </ul>

     <p><a id='R'></a><a id='recommendation'></a><b>Recommendation</b></p>

     <ul>
      <li>Short for <a href='#w3c'>W3C</a> <a href='#recommendation'>Recommendation</a>.</li>
      <li><q><i>...a specification or set of guidelines that, after extensive consensus building, has received the endorsement of <a href='#w3c'>W3C</a> Members and the Director. <a href='#w3c'>W3C</a> recommends the wide deployment of its <a href='#recommendation'>Recommendations</a>. Note: <a href='#w3c'>W3C</a> <a href='#recommendation'>Recommendations</a> are similar to the <a href='#standard'>standards</a> published by other organizations.</i></q> - <a href='#w3c'><cite>W3C</cite></a>.</li>
      <li>A document published by the <a href='#w3c'>W3C</a> that defines a <a href='#web_language'>web language</a> and its proper usage.</li>
     </ul>

     <p><a id='render'></a><b>render</b></p>

     <ul>
      <li>To display the result of the application of <a href='#html_web_lang'>HTML</a> <a href='#structure'>structure</a> and <a href='#css'>CSS</a> <a href='#style_css'>style</a> upon <a href='#content'>content</a>.</li>
     </ul>

     <p><a id='rendering_engine'></a><b>rendering engine</b></p>

     <ul>
      <li>A.k.a., layout engine.</li>
      <li>The component of a <a href='#user_agent'>user agent</a> that <a href='#render'>renders</a>.</li>
     </ul>

     <p><a id='root_element'></a><b>root element</b></p>

     <ul>
      <li>The <a href='#element'>element</a> that is the root (i.e., origin) and <a href='#ancestor'>ancestor</a> of all other <a href='#element'>elements</a> in a <a href='#web_document'>web document</a>.</li>
      <li>In <a href='#html_document'>HTML documents</a>, the <a href='#html_element'><code>html</code></a> element.</li>
     </ul>

     <p><a id='S'></a><a id='selector'></a><b>selector</b></p>

     <ul>
      <li>One of the two parts of a <a href='#style_rule'>style rule</a>. Compare with <a href='#declaration_block'>declaration block</a>.</li>
      <li>The <a href='#element'>element(s)</a>, and/or <a href='#class-name_css'>class-name(s)</a>, and/or <a href='#pseudo_class'>pseudo-class(es)</a> to which a <a href='#style_rule'>style rule</a> applies.</li>
      <li>The bridge (i.e., common denominator or link) between a <a href='#style_rule'>style rule</a> and an <a href='#html_document'>HTML document</a> via which <a href='#style_css'>style</a> is attached to <a href='#content'>content</a>.</li>
     </ul>

     <p><a id='sibling'></a><b>sibling</b></p>

     <ul>
      <li>One of two or more <a href='#element'>elements</a> one level below the same <a href='#element'>element</a> in the <a href='#html_document_tree'>HTML document tree</a>.</li>
      <li>One of two or more <a href='#element'>elements</a> contained within (i.e., enclosed by) the same <a href='#element'>element</a>.</li>
      <li>One of two or more <a href='#child'>children</a> of the same <a href='#parent'>parent</a>.</li>
     </ul>

     <p><a id='source_code'></a><b>source code</b></p>

     <ul>
      <li>The text, itself, that constitutes a <a href='#web_document'>web document</a> or <a href='#web_page'>web page</a>.</li>
     </ul>

     <p><a id='standard'></a><b>standard</b></p>

     <ul>
      <li>A <a href='#w3c'>W3C</a> <a href='#recommendation'>Recommendation</a> or a document of a similar nature published by a different organization that defines a <a href='#web_language'>web language</a> and its proper usage.</li>
      <li>A <a href='#w3c'>W3C</a> <a href='#recommendation'>Recommendation</a> or a document of a similar nature published by a different organization that is widely implemented by <a href='#user_agent'>user agents</a>, <a href='#author'>authors</a>, and <a href='#user'>users</a>.</li>
     </ul>

     <p><a id='structure'></a><b>structure</b></p>

     <ul>
      <li>The coarse layout/presentation of <a href='#content'>content</a> as provided by <a href='#html_web_lang'>HTML</a>. Compare with <a href='#style_css'>style, CSS</a>.</li>
      <li>To coarsely layout/present <a href='#content'>content</a> via <a href='#html_web_lang'>HTML</a>.</li>
      <li>Includes headings, paragraphs, ordered lists, tables, forms, etc.</li>
      <li>A generic term referring to <a href='#html_web_lang'>HTML</a> and/or <a href='#element'>elements</a>.</li>
     </ul>

     <p><a id='style_css'></a><b>style, CSS</b></p>

     <ul>
      <li>The refined layout/presentation of <a href='#content'>content</a> as provided by <a href='#css'>CSS</a>. Compare with <a href='#structure'>structure</a>.</li>
      <li>To refine the layout/presentation of <a href='#content'>content</a> via <a href='#css'>CSS</a>.</li>
      <li>Includes fonts, colors, borders, margins, padding, etc.</li>
      <li>Consists of a <a href='#property'>property</a> and <a href='#value_css'>value</a> pair, each of which constitutes a <a href='#declaration'>declaration</a>.</li>
      <li>A generic term referring to <a href='#css'>CSS</a>, and/or one or more <a href='#style_sheet'>style sheets</a>, and/or one or more <a href='#style_rule'>style rules</a>, and/or one or more <a href='#selector'>selectors</a>, and/or one or more <a href='#declaration_block'>declaration blocks</a>, and/or one or more <a href='#declaration'>declarations</a>, and/or one or more <a href='#property'>properties</a>, and/or one or more <a href='#value_css'>values</a>.</li>
     </ul>

     <p><a id='style_html'></a><b><code>style</code>, HTML</b></p>

     <ul>
      <li>The <a href='#attribute'>attribute</a> for attaching an <a href='#inline_style'>inline style</a> to <a href='#content'>content</a>. Compare with <a href='#class'><code>class</code></a>.</li>
      <li>An <a href='#attribute'>attribute</a> added to the <a href='#w3c'>W3C</a> <a href='#html_web_lang'>HTML</a> 4.0 <a href='#recommendation'>Recommendation</a> as part of its support for the <a href='#w3c'>W3C</a> <a href='#css'>CSS</a>1 <a href='#recommendation'>Recommendation</a>.</li>
     </ul>

     <p><a id='style_conflict'></a><b>style conflict</b></p>

     <ul>
      <li>Two or more <a href='#style_css'>styles</a> attached to <a href='#content'>content</a> in the same <a href='#web_page'>web page</a> having the same <a href='#selector'>selector</a>, the same <a href='#property'>property</a>, but different <a href='#value_css'>values</a>.</li>
      <li>Can occur: 1.) between the <a href='#user_agent_styles'>user agent styles</a>, and/or <a href='#author_styles_list'>author styles list</a>, and/or <a href='#user_styles_list'>user styles list</a>; and 2.) within the <a href='#author_styles_list'>author styles list</a> and/or <a href='#user_styles_list'>user styles list</a>.</li>
     </ul>

     <p><a id='style_rule'></a><b>style rule</b></p>

     <ul>
      <li>A.k.a., rule.</li>
      <li>The basic <a href='#css'>CSS</a> unit attached to <a href='#content'>content</a> for the purpose of <a href='#style_css'>styling</a> <a href='#content'>content</a>.</li>
      <li>Consists of a <a href='#selector'>selector</a> and a <a href='#declaration_block'>declaration block</a>.</li>
      <li>Syntax: <code>selector { declaration block }</code>.</li>
     </ul>

     <p><a id='style_sheet'></a><b>style sheet</b></p>

     <ul>
      <li>A collection of <a href='#style_rule'>style rules</a>.</li>
      <li>Includes three types; 1.) <a href='#embedded_style_sheet'>embedded style sheets</a>, 2.) <a href='#external_style_sheet'>external style sheets</a>, and 3.) <a href='#imported_style_sheet'>imported style sheets</a>.</li>
     </ul>

     <p><a id='T'></a><a id='tag'></a><b>tag</b></p>

     <ul>
      <li>See <a href='#markup'>markup</a>.</li>
     </ul>

     <p><a id='U'></a><a id='uri'></a><b>URI</b></p>

     <ul>
      <li><b>U</b>niform <b>R</b>esource <b>I</b>dentifier</li>
      <li>A more technically correct term for URL (Uniform Resource Locator).</li>
      <li>A string that identifies a resource (i.e., <a href='#web_site'>web site</a>, <a href='#web_page'>web page</a>, image, downloadable file, service, etc.) accessible over the <a href='#internet'>Internet</a>.</li>
      <li>Example: http://www.learnwebcoding.com/.</li>
     </ul>

     <p><a id='user'></a><b>user</b></p>

     <ul>
      <li>A.k.a., reader.</li>
      <li>A person employing a <a href='#user_agent'>user agent</a> to interact with <a href='#web_page_site'>web pages/sites</a>. Compare with <a href='#author'>author</a> and <a href='#user_agent'>user agent</a>.</li>
      <li>One of the three sources of <a href='#style_css'>style</a>. See <a href='#user_styles'>user styles</a>.</li>
     </ul>

     <p><a id='user_agent'></a><b>user agent</b></p>

     <ul>
      <li>A.k.a., UA, <a href='#web_browser'>web browser</a>.</li>
      <li>An application (i.e., agent) employed by <a href='#user'>users</a> to interact with <a href='#web_page_site'>web pages/sites</a>.</li>
      <li>An application that <a href='#render'>renders</a> <a href='#web_page'>web pages</a>.</li>
      <li>One of the three sources of <a href='#style_css'>style</a>. See <a href='#user_agent_styles'>user agent styles</a>.</li>
      <li>Examples: Internet Explorer, Firefox, Safari, Chrome, and Opera.</li>
     </ul>

     <p><a id='user_agent_styles'></a><b>user agent styles</b></p>

     <ul>
      <li>A.k.a., user agent default styles.</li>
      <li><a href='#style_css'>Styles</a> built into a <a href='#user_agent'>user agent</a>. Compare with <a href='#author_styles'>author styles</a> and <a href='#user_styles'>user styles</a>.</li>
      <li>Define and provide the <a href='#structure'>structure</a> types associated with <a href='#html_web_lang'>HTML</a> <a href='#element'>elements</a>.</li>
      <li>Are merged with <a href='#author_styles'>author styles</a>, if present, and <a href='#user_styles'>user styles</a>, if present, in <a href='#style_css'>styling</a> <a href='#content'>content</a>.</li>
      <li>In the absence of <a href='#author_styles'>author styles</a> and <a href='#user_styles'>user styles</a>, the only (i.e., default) <a href='#style_css'>styles</a> applied to <a href='#content'>content</a>.</li>
      <li>Typically partially editable via the <a href='#user_agent'>user agent's</a> Options/Preferences.</li>
     </ul>

     <p><a id='user_styles'></a><b>user styles</b></p>

     <ul>
      <li><a href='#style_css'>Styles</a> written by a <a href='#user'>user</a>. Compare with <a href='#author_styles'>author styles</a> and <a href='#user_agent_styles'>user agent styles</a>.</li>
      <li>Allow <a href='#user'>users</a>, particularly those with accessibility requirements, to <a href='#style_css'>style</a> <a href='#content'>content</a>.</li>
      <li>Require a <a href='#user_agent'>user agent</a> whose Options/Preferences allow the <a href='#user'>user</a> to link their own <a href='#external_style_sheet'>external style sheet</a> to <a href='#content'>content</a>.</li>
      <li>Includes <a href='#external_style_sheet'>external style sheets</a> and <a href='#imported_style_sheet'>imported style sheets</a>.</li>
     </ul>

     <p><a id='user_styles_list'></a><b>user styles list</b></p>

     <ul>
      <li>The list of <a href='#user'>user</a> <a href='#style_rule'>style rules</a> associated with a <a href='#web_page'>web page</a>, replacing any <code>@import</code> statements with the <a href='#external_style_sheet'>external style sheets</a> to be imported, themselves. Compare with <a href='#author_styles_list'>author styles list</a>.</li>
      <li>Created by the <a href='#cascade'>Cascade</a>.</li>
     </ul>

     <p><a id='V'></a><a id='valid'></a><b>valid</b></p>

     <ul>
      <li>That which conforms with a <a href='#web_language'>web language's</a> proper usage as defined by a <a href='#w3c'>W3C</a> <a href='#recommendation'>Recommendation</a>.</li>
     </ul>

     <p><a id='value_css'></a><b>value, CSS</b></p>

     <ul>
      <li>One of the two parts of a <a href='#declaration'>declaration</a>. Compare with <a href='#property'>property</a>.</li>
      <li>A specific option of a characteristic of <a href='#content'>content</a> that can be assigned to a <a href='#property'>property</a>. Compare with <a href='#value_html'>value, HTML</a>.</li>
      <li>Examples: <code>arial</code>, <code>#000000</code>, <code>12px</code>.</li>
     </ul>

     <p><a id='value_html'></a><b>value, HTML</b></p>

     <ul>
      <li>One of the two parts of an <a href='#attribute'>attribute</a>.</li>
      <li>A specific option of a characteristic of <a href='#content'>content</a> that can be assigned to an <a href='#attribute'>attribute</a>. Compare with <a href='#value_css'>value, CSS</a>.</li>
      <li>Examples: <code>arial</code>, <code>#000000</code>, <code>12px</code>.</li>
     </ul>

     <p><a id='W'></a><a id='w3c'></a><b>W3C</b></p>

     <ul>
      <li>The World Wide Web Consortium.</li>
      <li><q><i>An international consortium where Member organizations, a full-time staff, and the public work together to develop <a href='#web'>web</a> <a href='#standard'>standards</a>.</i></q> - <a href='#w3c'><cite>W3C</cite></a>.</li>
      <li>Mission: <q><i>To lead the <a href='#www'>World Wide Web</a> to its full potential by developing protocols and guidelines that ensure long-term growth for the <a href='#web'>Web</a>.</i></q> - <a href='#w3c'><cite>W3C</cite></a>.</li>
     </ul>

     <p><a id='web'></a><b>web</b></p>

     <ul>
      <li>See <a href='#www'>WWW</a>.</li>
     </ul>

     <p><a id='web_browser'></a><b>web browser</b></p>

     <ul>
      <li>See <a href='#user_agent'>user agent</a>.</li>
     </ul>

     <p><a id='web_browser_window'></a><b>web browser window</b></p>

     <ul>
      <li>The part of a <a href='#user_agent'>user agent</a> where <a href='#render'>rendered</a> <a href='#web_page'>web pages</a> are displayed.</li>
     </ul>

     <p><a id='web_document'></a><b>web document</b></p>

     <ul>
      <li>A text file written in a one or more <a href='#web_language'>web languages</a> having a <a href='#web_language'>web language's</a> associated file extension.</li>
      <li>Examples: <a href='#html_document'>HTML documents</a> (<span class='filename'>.htm</span> or <span class='filename'>.html</span>) and <a href='#css_document'>CSS documents</a> (<span class='filename'>.css</span>).</li>
     </ul>

     <p><a id='web_language'></a><b>web language</b></p>

     <ul>
      <li>A language for writing/authoring <a href='#web_document'>web documents</a>.</li>
      <li>Examples: <a href='#css'>CSS</a>, <a href='#html_web_lang'>HTML</a>, <a href='#xhtml'>XHTML</a>, JavaScript, Perl, and PHP.</li>
     </ul>

     <p><a id='web_page'></a><b>web page</b></p>

     <ul>
      <li>That which is displayed in the <a href='#web_browser_window'>web browser window</a> when a <a href='#user_agent'>user agent</a> is directed to a <a href='#web_page_site'>web page/site</a>.</li>
      <li>Consists of one or more <a href='#web_document'>web documents</a>. For example, a <a href='#web_page'>web page</a> might consist of multiple <a href='#html_document'>HTML documents</a> and multiple <a href='#css_document'>CSS documents</a>.</li>
     </ul>

     <p><a id='web_page_site'></a><b>web page/site</b></p>

     <ul>
      <li>A <a href='#web_page'>web page</a> and/or <a href='#web_site'>web site</a>.</li>
     </ul>

     <p><a id='web_site'></a><b>web site</b></p>

     <ul>
      <li>A location (i.e., site) on the <a href='#www'>WWW</a> consisting of one or more <a href='#web_page'>web pages</a>.</li>
      <li>Example: www.learnwebcoding.com.</li>
     </ul>

     <p><a id='www'></a><b>WWW</b></p>

     <ul>
      <li><b>W</b>orld <b>W</b>ide <b>W</b>eb.</li>
      <li>A.k.a., web.</li>
      <li>The collection of <a href='#web_page'>web pages</a> and <a href='#web_site'>web sites</a> accessible over the <a href='#internet'>Internet</a>.</li>
     </ul>

     <p><a id='X'></a><a id='xhtml'></a><b>XHTML</b></p>

     <ul>
      <li>E<b>x</b>tensible <b>H</b>yper<b>T</b>ext <b>M</b>arkup <b>L</b>anguage.</li>
      <li>A reformulation of <a href='#html_web_lang'>HTML</a> as an XML application.</li>
      <li>In 2000, described by the <a href='#w3c'>W3C</a> as the successor to HTML 4.01. In the early-mid 2010s, described by the <a href='#w3c'>W3C</a> as being succeeded by HTML5.</li>
     </ul>

<!--
    </section>
-->";
