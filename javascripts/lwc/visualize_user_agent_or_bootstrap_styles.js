/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/javascripts/lwc/visualize_user_agent_or_bootstrap_styles.js
 * Purpose: Change external style sheet when click form selectbox (dropdown) option.
 * Used in: visualize_user_agent_or_bootstrap_styles.html.
 * Last reviewed/updated: 12 Jul 2020.
 * Published: 27 Nov 2018.
 * Unobtrusive: 1.) decouple HTML/JavaScript: a.) no register JavaScript event handlers in HTML via HTML attributes (eg, onload and onclick), and b.) no embed JavaScripts in HTML via HTML script element; 2.) as reasonable, decouple CSS/JavaScript. Eg, as reasonable, use JavaScript to change HTML class attribute value assignments (loose coupling), not use JavaScript to change JavaScript style object CSS property value assignments (tight coupling); and 3.) no define JavaScript variables and functions on JavaScript global scope.
 * Web browser support: IE11+, ED12+, FF19+, CH38+, OP25+, which corresponds to Map object support.
 * Object: ChangeExtSSUtil. */

/* -------------------- JAVASCRIPT OBJECT DEFINITIONS -------------------- */

/* ---------- NEW JAVASCRIPT OBJECT DEFINITION ---------- */

var ChangeExtSSUtil = {
 changeExtSS: function(event){
  // Create mapOptionValueToSsUri map.
  // NOTE: IE11 mistakenly represents maps initialized with an iterable as [object Object] {size: 0}. Therefore, to support IE11, first create empty map, and then use set() method to set key-value pairs on map.
  var mapOptionValueToSsUri = new Map(); // Empty map.
  // Set key-value pairs on mapOptionValueToSsUri map. Keys are form selectbox option element value attribute values. Values are style sheet URIs.
  mapOptionValueToSsUri.set("userAgent", "/stylesheets/lwc/dummy_external_style_sheet.min.css");
  mapOptionValueToSsUri.set("bs337", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"); // Per https://getbootstrap.com/docs/3.3/getting-started/.
  mapOptionValueToSsUri.set("bs341", "https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"); // Per https://getbootstrap.com/docs/3.4/getting-started/.
  mapOptionValueToSsUri.set("bs400", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"); // Per https://getbootstrap.com/docs/4.0/getting-started/introduction/.
  mapOptionValueToSsUri.set("bs413", "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"); // Per https://getbootstrap.com/docs/4.1/getting-started/introduction/.
  mapOptionValueToSsUri.set("bs421", "https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"); // Per https://getbootstrap.com/docs/4.2/getting-started/introduction/.
  mapOptionValueToSsUri.set("bs431", "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"); // Per https://getbootstrap.com/docs/4.3/getting-started/introduction/.
  mapOptionValueToSsUri.set("bs441", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"); // Per https://getbootstrap.com/docs/4.4/getting-started/introduction/.
  mapOptionValueToSsUri.set("bs450", "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"); // Per https://getbootstrap.com/docs/4.5/getting-started/introduction/.
  // Get reference to link element.
  var linkElement = document.getElementById("linkElementId");
  // For when a selectbox option is selected, get reference to selectbox.
  var eventTarget = event.target; // <select>...</select>.
  // For the selected selectbox option, get value attribute value.
  var selectedOption = eventTarget.value; // "userAgent", "bs337", "bs341", "bs400", "bs413", "bs421", "bs431", "bs441", or "bs450".
  // Using selected option as key, get mapOptionValueToSsUri map value and set on link element href property. This changes the external style sheet, which changes the web page styles.
  linkElement.href = mapOptionValueToSsUri.get(selectedOption);
 },
 // Get reference to element in order to register event handler. Remember elements (including the form element) accept events from child elements (including child elements of the form element) via event bubbling.
 form: document.getElementById("formId")
};

// Register event handler.
ChangeExtSSUtil.form.addEventListener("change", ChangeExtSSUtil.changeExtSS, false);
