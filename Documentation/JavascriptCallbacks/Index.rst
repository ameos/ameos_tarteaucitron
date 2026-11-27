Javascript Callbacks
====================

There are some Javascript Callbacks that allow you to perform some actions after third parties JS libraries are loaded on the pages.
Those callbacks trigger events on the document.
Thus you can register your own javascript to perform actions after those events are triggered in the browser.

Example
^^^^^^^

::

	document.addEventListener('gtag-loaded', function () {
		// gtag.js is loaded and consent has been given
	});

Available callbacks
^^^^^^^^^^^^^^^^^^^

=============================  ===================  ========================
Callback                       Service              Event
=============================  ===================  ========================
AmeosTacMapscallback           gmaps                'maps-loaded'
AmeosTacClickyMore             clicky               'clicky-loaded'
AmeosTacGajsMore               gajs                 'gajs-loaded'
AmeosTacGtagMore               gtag                 'gtag-loaded'
AmeosTacAnalyticsPrepare       analytics            'analytics-prepare'
AmeosTacAnalyticsMore          analytics            'analytics-loaded'
AmeosTacXitiMore               xiti                 'xiti-loaded'
AmeosTacFacebookPixelMore      facebookpixel        'facebookpixel-loaded'
AmeosTacatMore                 atinternet,          'atinternet-loaded'
                               atinternethightrack
AmeosTacCriteoonetagMore       criteoonetag         'criteoonetag-loaded'
AmeosTiktokMore                tiktok               'tiktok-loaded'
AmeosSnapchatMore              snapchat             'snapchat-loaded'
AmeosTacSkazeMore              skaze                'skaze-loaded'
tacRecaptchaOnLoad             recaptcha            'recaptcha-loaded'
matomoMore                     matomo               'matomo-loaded'
=============================  ===================  ========================
