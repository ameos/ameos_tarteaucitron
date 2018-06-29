Configuration
=============

.. only:: html

    **Table of content:**

    .. contents::
        :local:
        :depth: 1


Typoscript Configuration
------------------------

With the Typoscript configuration you can configure :

* Initialisation of the main Script
* Each Services provided by the API

Constants
^^^^^^^^^

=============================================  =====================================  ======================
Property                                       Description                            Default value         
---------------------------------------------  -------------------------------------  ----------------------
Init
============================================================================================================
hashtag                                        #hashtag that opens the                #cookie
                                               administration panel
highPrivacy                                    HighPrivacy : true/false               true
cookieDomain                                   Domain of the cookies : .example.com   .example.com
orientation                                    Position of the banner : top/bottom    bottom
adblocker                                      Display a message if an adblocker is   false
                                               found : true/false
showAlertSmall                                 Shows a small banner at the bottom     false
                                               right of the screen : true/false       
cookieslist                                    Shows the list of installed cookies :  false
                                               true/false
removeCredit                                   Removes credits of the script :        false
                                               true/false
handleBrowserDNTRequest                        Deny everything if DNT is on :         true
                                               true/false
---------------------------------------------  -------------------------------------  ----------------------
Services - APIs
------------------------------------------------------------------------------------------------------------
jsapi                                          Google jsapi true/false                false
gmaps                                          Google Maps true/false                 false
gmaps.googlemapsKey                            Google Maps (Key)                      
googlemapssearch                               Google Maps (search query) true/false  false
googletagmanager                               Google Tag Manager true/false          false
googletagmanager.googletagmanagerId            Google Tag Manager                     
recaptcha                                      reCAPTCHA true/false                   false
timelinejs                                     Timeline JS                            false
typekit                                        Typekit (adobe)                        false
typekit.typekitId                              Typekit (adobe) (Key)                  
---------------------------------------------  -------------------------------------  ----------------------
Services - Comments
------------------------------------------------------------------------------------------------------------
disqus                                         Disqus true/false                      false                  
disqus.disqusShortname                         Disqus short name                                        
facebookcomment                                Facebook (comments) true/false         false
---------------------------------------------  -------------------------------------  ----------------------
Services - Statistics
------------------------------------------------------------------------------------------------------------
alexa                                          Alexa true/false                       false                                        
alexa.alexaAccountID                           Alexa Account ID                       
clicky                                         Clicky true/false                      false
clicky.clickyId                                Clicky ID
crazyegg                                       Crazy Egg true/false                   false
crazyegg.crazyeggId                            Crazy Egg ID
etracker                                       eTracker true/false                    false
etracker.etracker                              etracker Secure Code
ferank                                         FERank true/false                      false 
getplus                                        Get+ true/false                        false
getplusId                                      Get+ ID                                
gajs                                           Google Analytics (ga.js) true/false    false
gasjs.gajsUa                                   Google Analytics Account (ga.js)
gtag                                           Google Analytics (gtag.js) true/false  false
gtag.gtagUa                                    Google Analytics Account (gtag.js)
analytics                                      Google Analytics (universal)           false
                                               true/false
analytics.analyticsUa                          Google Analytics Account (universal)
mautic                                         Mautic true/false                      false
mautic.mauticurl                               Mautic URL
microsoftcampaignanalytics                     Microsoft Campaign Analytics           false
                                               true/false
statcounter                                    Stat Counter true/false                false
visualrevenue                                  VisualRevenue true/false               false
visualrevenue.visualrevenueId                  VisualRevenue ID
webmecanik                                     Webmecanik true/false                  false
webmecanik.webmecanikurl                       Webmecanik URL
wysistat                                       Wysistat true/false                    false
xiti                                           XitiAdd This Pub ID true/false                        false
xiti.xitiId                                    Xiti ID
---------------------------------------------  -------------------------------------  ----------------------
Services - Ads
------------------------------------------------------------------------------------------------------------
aduptech_ads                                   Ad Up Technology (ads) true/false      false
aduptech_conversion                            Ad Up Technology (conversion)          false
                                               true/false
aduptech_retargeting                           Ad Up Technology (retargeting)         false
                                               true/false
amazon                                         Amazon true/false                      false
clicmanager                                    Clicmanager true/false                 false
criteo                                         Criteo true/false                      false
datingaffiliation                              Dating Affiliation true/false          false
datingaffiliationpopup                         Dating Affiliation (popup) true/false  false
ferankpub                                      FERank (pub) true/false                false
adsense                                        Google Adsense true/false              false
adsensesearchform                              Google Adsense Search (Result)         false
                                               true/false
adsensesearchresult                            Google Adsense Search (Result)         false
                                               true/false
adsensesearchresult.adsensesearchresultCx      Google Adsense Search (Result)
                                               Partner pub
googleadwordsconversion                        Google Adwords (conversion)            false
                                               true/false
googleadwordsremarketing                       Google Adwords (remarketing)           false
                                               true/false
googleadwordsremarketing.adwordsremarketingId  Google Adwords (remarketing) ID        
googlepartners                                 Google Partners Badge true/false       false
prelinker                                      Prelinker true/false                   false
pubdirecte                                     Pubdirecte  true/false                 false
shareasale                                     ShareASale true/false                  false
twenga                                         Twenga true/false                      false
vshop                                          VShop true/false                       false
---------------------------------------------  -------------------------------------  ----------------------
Services - Social
------------------------------------------------------------------------------------------------------------
addthis                                        Add This true/false                    false
addthis.addthisPubId                           Add This Pub ID
addtoanyfeed                                   AddToAny (feed) true/false             false
addtoanyfeed.addtoanyfeedUri                   AddToAny (feed) URI
ekomi                                          Ekomi true/false                       false
ekomi.ekomiCertId                              Ekomi CertID
facebook                                       Facebook true/false                    false
facebooklikebox                                Facebook (likebox) true/false          false
facebookpixel                                  Facebook Pixel true/false              false
facebookpixel.facebookpixelId                  Facebook Pixel ID
gplus                                          Google+ true/false                     false
gplusbadge                                     Google+ (badge) true/false             false
linkedin                                       Linkedin true/false                    false
pinterest                                      Pinterest true/false                   false
shareaholic                                    Shareaholic true/false                 false
shareaholic.shareaholicSiteId                  Shareaholic Site ID
sharethis                                      ShareThis true/false                   false
sharethis.sharethisPublisher                   ShareThis Publisher
twitter                                        Twitter true/false                     false
twitterembed                                   Twitter (cards) true/false             false
twittertimeline                                Twitter (timelines) true/false         false
---------------------------------------------  -------------------------------------  ----------------------
Services - Support
------------------------------------------------------------------------------------------------------------
purechat                                       PureChat true/false                    false
purechat.purechatId                            PureChat ID
uservoice                                      UserVoice true/false                   false
zopim                                          Zopim true/false                       false
---------------------------------------------  -------------------------------------  ----------------------
Services - video
------------------------------------------------------------------------------------------------------------
calameo                                        Calameo true/false                     false
dailymotion                                    Dailymotion true/false                 false
issuu                                          Issuu true/false                       false
prezi                                          Prezi true/false                       false
slideshare                                     Slideshare true/false                  false
vimeo                                          Vimeo true/false                       false
youtube                                        Youtube true/false                     false
=============================================  =====================================  ======================

Setup
^^^^^

The setup works automatically regarding the constants enabled.
It sets up some Javascript at the footer of the page and initialises TarteAuCitronApi.

Extension Configuration
-----------------------

In the extension manager you can configure if you want to XClass the core to render Youtube and Vimeo Media to be compliant with TarteAuCitron HTML Markers.