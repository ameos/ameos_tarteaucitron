Javascript Callbacks
============

There are some Javascript Callbacks that allows you to perform some actions after third parties JS libraries are loaded on the pages.
Thoses callbacks triggers events on the document.
Thus you can register you own javascript to perform after actions after those event are triggerd in the browser

Exemple
^^^^^^^

::

	function AmeosTacScriptcallback(){
		$(document).trigger('script-loaded');
	}

Available callbacks
^^^^^^^^^^^^^^^^^^^

* AmeosTacClickyMore triggers 'clicky-loaded'
* AmeosTacGajsMore triggers 'gajs-loaded'
* AmeosTacGtagMore triggers 'gtag-loaded'
* AmeosTacMapscallback triggers 'maps-loaded'
* AmeosTacAnalyticsMore triggers 'analytics-loaded'
* AmeosTacXitiMore triggers 'xiti-loaded'
* AmeosTacFacebookPixelMore triggers 'facebookpixel-loaded'