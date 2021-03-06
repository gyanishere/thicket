<?php

/* config for specific Thicket properties */

define("name","Thicket demo site");
define("url","http://gyan.biz/thicketdemo");
define("thicketToken","OtydHVLTLXq3FMCLFbEf"); // DO NOT CHANGE THIS
define("staticPath","/includes");
define("cdn",false);
define("tagline","A great tagline for a great <b class='regular'>Thicket demo site</b>"); // html allowed
define("taglineVisible",false);
define("description","Thicket site used as a demonstration.");
define("database","thicket_fake_db"); // replace this with your database name
define("databasePort","localhost");
define("databaseUser","thicket_fake_user"); // replace this with your database user
define("databasePassword","thicket_fake_password"); // replace this with your database password
define("defaultView","list");
define("accentColor","#13918B");
define("accentContrastColor","white");
define("secondaryColor","");
define("secondaryContrastColor","");
define("selectionBackgroundColor","lightgray"); // replaces the standard browser text selection color
define("selectionTextColor","black");
define("adminEmail","email@example.com"); // email with administrative privilege on the site, will double-check with database
define("defaultEmail","email@example.com");
define("mailURL",url);
define("emailFooter","mail address required by law...");
define("twitter","mytwitter"); // no @
define("embedly","");
define("htmlInjectAtBeginning",""); // placed after opening <body> tag
define("htmlInjectAtEnd",""); // placed before closing </body> tag
define("jsInject",""); // script resource placed before closing </body> tag
define("customStyles",""); // instead of changing the defaults, we recommend that you layer on top of Thicket with your own CSS -- just enter the stylesheet URL or relative path here
define("fontUrl","http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300"); // like this one, from Google Fonts, myFonts, etc.
define("fontFamilyDefinition","'Open Sans', arial, sans-serif");
define("defaultFontWeight","300");
define("defaultTextColor","black");
define("cssOverride",""); // inline CSS-string applied to *, which will override styles of all elements (not great for performance, so not recommend) -- don't forget to put a semicolon at the end of each line
define("fontScale","1.1em"); // increase or decrease overall font size
define("siteBackground","white"); // use background CSS shorthand
define("siteNestedBackground","white"); // for content inside of main site (use background CSS shorthand)
define("sitePostNestedBackground","whitesmoke"); // for content inside of main site (use background CSS shorthand) on POST pages
define("siteTheme","light"); // choose between light or dark
define("logoVisible",true);
define("logoType","text"); // choose between 'text' or 'image'
define("logoText",name); // visible if logoType set to 'plaintext'
define("logoTextColor","white"); 
define("logoTextSize","1.2em"); 
define("logoFontWeight","600"); 
define("logo",url.staticPath."/img/thicket-logo.png");
define("logoHeight","25px");
define("logoFrameWidth","200px"); // defines the size of the logo frame, doesn't actually alter the image
define("logoMarginTop","20px"); // margin top for logo
define("logoMarginBottom","20px"); // margin bottom for logo
define("headerPosition","absolute"); // either 'fixed' or 'absolute'
define("headerBackgroundColor","#13918B");
define("headerTextColor","white"); // color of header nav links
define("headerTextHoverColor","white"); // color of header nav links on hover
define("navHorizontalPosition","25px"); // space on the left and right for navigation
define("navHorizontalSpacing","25px"); // spacing between navigation links
define("navHorizontalSpacingNoPx","25");
define("navPositionCorrection","3px"); // controls vertical positioning on the right navigation
define("navDropdownHorizontalSpacing","5px"); // spacing on the right and left for special dropdown navs
define("navDropdownHorizontalSpacingNoPx","5"); 
define("navDropdownHorizontalPosition","100px"); // abs. position for dropdown (top)
define("navDropdownVerticalPosition","66px"); // abs. position for dropdown (left)
define("logoVerticalPosition","-".(17 + logoHeight)."px"); // margin bottom for logo
define("logoVerticalPositionNoPx",(17 + logoHeight)); // margin bottom for logo without px
define("submitButtonHoverColor","#10736E"); // hover color on contact form submit button
define("dropdownMobileClick","yellow"); // hover color on contact form submit button
define("iconFont","https://fonts.googleapis.com/icon?family=Material+Icons"); // a stylesheet linking to an icon font (e.g Material Icons, Font Awesome)
define("logo2x","");
define("favicon","");
define("favicon2x","");
define("commentingEnabled",true);
define("disqusShortcode",'thicket');
define("pageLoader",false);
define("dynamicStyles",true); // if set to false, Thicket will look for /includes/engine/modules/style.css. Visit /includes/engine/modules/cache_stylesheet.php in your browser to create the stylesheet.
define("postingEnabled",true);
define("cookiesEnabled",true);
define("upvotesEnabled",true);
define("chatEnabled",false); // keep it off, it's not yet ready :(
define("chatArchitecture",false); // ditto, options are: default OR sockets
define("responsiveEnabled",true);
define("robots",false);
define("googleAnalytics",false);
define("googleSignIn","XXXXXX_X_X_X_X_X_X_X.website.com"); // in order to enable Google+ login on your website
define("gaTrackingID","XA-XXXXXXX");
define("errorMessage","Sorry, but the content you are looking could not be found. Why don't you go back <a href='".url."'>home</a>?");
define("titleSeparator","/");



?>