Configuration
=============

.. only:: html

    **Table of content:**

    .. contents::
        :local:
        :depth: 2


Typoscript Configuration
------------------------

With the Typoscript configuration you can configure :

* Initialisation of the main Script
* Each Services provided by the API

Constants
^^^^^^^^^

All the constants can be edited with the Constant Editor (category *plugin.ameos_tarteaucitron*).

* Init constants are located under ``ameos.tarteaucitron``, e.g. ``ameos.tarteaucitron.hashtag``.
* Service constants are located under ``ameos.tarteaucitron.services``, e.g. ``ameos.tarteaucitron.services.youtube``.
  A service is enabled with ``1`` and disabled with ``0`` (default). Its sub-properties (IDs, keys, ...)
  are located under the service key, e.g. ``ameos.tarteaucitron.services.gtag.gtagUa``.

Example::

    ameos.tarteaucitron {
        privacyPid = 12
        services {
            youtube = 1
            gtag = 1
            gtag.gtagUa = G-XXXXXXXXXX
        }
    }

Init
""""

==========================  ============================================================  =============
Property                    Description                                                   Default value
==========================  ============================================================  =============
privacyPid                  Privacy Page Id
cookieName                  Name of the cookie                                            tarteaucitron
hashtag                     hashtag that opens the administration panel                   #cookies
highPrivacy                 HighPrivacy : true/false                                      true
cookieDomain                Domain of the cookies : .example.com                          .example.com
orientation                 Position of the banner : top/bottom                           bottom
bodyPosition                Position of the generated HTML : top/bottom of the HTML body  bottom
groupServices               Group services by category : true/false                       false
showDetailsOnClick          Show service detail on click : true/false                     true
serviceDefaultState         Default state for services : Default state for services       wait
                            (true - wait - false)
adblocker                   Display a message if an adblocker is found : true/false       false
showAlertSmall              Shows a small banner at the bottom right of the screen :      false
                            true/false
showTitleBanner             Show the title in the banner top/bottom : true/false          false
cookieslist                 Shows the list of installed cookies : true/false              false
cookieslistEmbed            Display the cookie list in the control panel : true/false     false
closePopup                  Show a close X on the banner : true/false                     false
showIcon                    Show cookie icon to manage cookies : true/false               true
iconSrc                     Optionnal: URL or base64 encoded image
iconPosition                BottomRight, BottomLeft, TopRight and TopLeft                 BottomRight
DenyAllCta                  Show the deny all button : true/false                         true
AcceptAllCta                Show the accept all button when highPrivacy on : true/false   true
removeCredit                Removes credits of the script : true/false                    false
handleBrowserDNTRequest     Deny everything if DNT is on : true/false                     true
moreInfoLink                Show more info link : true/false                              true
useExternalCss              If false, the tarteaucitron.css file will be loaded :         false
                            true/false
useExternalJs               If false, the tarteaucitron.js file will be loaded :          false
                            true/false
mandatory                   Show a message about mandatory cookies : true/false           true
mandatoryCta                Show the disabled accept button when mandatory on :           true
                            true/false
customCloserId              Optionnal A11y: Personnalised id to open the panel
googleConsentMode           Enable Google Consent Mode v2 for Google ads and GA4 :        false
                            true/false
bingConsentMode             Enable Bing Consent Mode for Clarity & Bing Ads : true/false  false
piwikConsentMode            Enable Piwik Pro Consent Mode : true/false                    false
softConsentMode             Soft consent mode (consent is required to load the services)  false
                            : true/false
dataLayer                   Send an event on the Datalayer with the service status :      false
                            true/false
serverSide                  Enable ServerSide side only, tags aren't loaded in client     false
                            side : true/false
serverSideExclude           Services excluded from the ServerSide mode (still loaded in
                            client side) : comma separated list of service keys (ex:
                            youtube,vimeo)
partnersList                Details the number of partners on the popup and middle        false
                            banner : true/false
readmoreLinkPageId          Read more Page Id
minified                    Minified Version of main script                               0
tarteaucitronForceLanguage  Force language (one of ar, bg, ca, cn, cs, da, de, et, el,
                            en, es, fi, fr, hu, it, ja, lb, lt, lv, nl, no, oc, pl, pt,
                            ro, ru, se, sk, sv, tr, uk, vi, zh)
alwaysNeedConsent           Ask the consent for "Privacy by design" services :            false
                            true/false
==========================  ============================================================  =============

Services - APIs
"""""""""""""""

=============================================  =============================================  =============
Property                                       Description                                    Default value
=============================================  =============================================  =============
abtasty                                        ABTasty                                        0
abtasty.abtastyID                              ABTasty ID
arcio                                          Arc.io                                         0
contentsquare                                  ContentSquare                                  0
contentsquare.contentsquareID                  ContentSquare ID
dynatrace                                      Dynatrace                                      0
dynatrace.dynatraceJSPath                      Dynatrace JS Path
dynatrace.dynatraceConfig                      Dynatrace Config
freshsalescrm                                  FreshSales (CRM)                               0
freshsalescrm.freshsalescrmId                  FreshSales (CRM)
genially                                       Genial.ly                                      0
geoportail                                     Geoportail maps Embed                          0
gmaps                                          Google Maps                                    0
gmaps.googlemapsKey                            Google Maps (Key)
gmaps.googlemapsLibraries                      Google Maps Libraries (optional, e.g. places)
googleads                                      Google Ads                                     0
googlefonts                                    Google Fonts                                   0
googlefonts.families                           Google Fonts Families (CSV)
googlemapsembed                                Goolemap Embed                                 0
googlemapssearch                               Google Maps (search query)                     0
googletagmanager                               Google Tag Manager                             0
googletagmanager.googletagmanagerId            Google Tag Manager (Key)
googletagmanager.googletagmanagerCustomDomain  Google Tag Manager Custom Domain (optional)
helloasso                                      HelloAsso                                      0
hubspot                                        Hubspot                                        0
hubspot.hubspotId                              Hubspot API Key
hubspot.hubspotBusinessUnitId                  Hubspot Business Unit Id (optional)
jsapi                                          Google jsapi                                   0
m6meteo                                        M6 Météo                                       0
meteofrance                                    Météo France                                   0
mixpanel                                       Mixpanel                                       0
mtcaptcha                                      MT Captcha                                     0
mtcaptcha.mtcaptchaSitekey                     MT Captcha Sitekey
myfeelback                                     MyFeelBack (Skeepers)                          0
myfeelback.myfeelbackId                        MyFeelBack (Skeepers) ID
onesignal                                      OneSignal                                      0
onesignal.onesignalAppId                       OneSignal App Id
openstreetmap                                  Openstreetmap Embed                            0
pingdom                                        Pingdom                                        0
pingdom.pingdomId                              Pingdom ID
recaptcha                                      reCAPTCHA                                      0
recaptcha.recaptchaapi                         reCAPTCHA API
recaptcha.recaptcha_hl                         reCAPTCHA language (optional)
seamlessaccess                                 Seamlessaccess                                 0
seamlessaccess.seamlessaccessInitiator         Seamlessaccess Login Initiator Url
stonly                                         Stonly                                         0
stonly.stonlyId                                Stonly ID
tagcommander                                   TagCommander                                   0
tagcommander.tagcommanderid                    TagCommander Id
timelinejs                                     Timeline JS                                    0
twitterwidgetsapi                              Twitter Widgets AP                             0
typekit                                        Typekit (adobe)                                0
typekit.typekitId                              Typekit (adobe) (Key)
youtubeapi                                     Youtube (Js API)                               0
=============================================  =============================================  =============

Services - Ads
""""""""""""""

=================================================  ===============================================  =============
Property                                           Description                                      Default value
=================================================  ===============================================  =============
activecampaign                                     Active Campaign                                  0
activecampaign.actid                               Active Campaign Id
adform                                             Adform                                           0
adform.adformpm                                    Adform
adform.adformpagename                              Adform Page Name
adsense                                            Google Adsense                                   0
adsenseauto                                        Google Adsense Automatic                         0
adsensesearch                                      Google Adsense                                   0
adsensesearchform                                  Google Adsense Search (form)                     0
adsensesearchresult                                Google Adsense Search (Result)                   0
adsensesearchresult.adsensesearchresultCx          Google Adsense Search (Result) Partner pub
aduptech_ads                                       Ad Up Technology (ads)                           0
aduptech_conversion                                Ad Up Technology (conversion)                    0
aduptech_retargeting                               Ad Up Technology (retargeting)                   0
affilae                                            Affilae                                          0
amazon                                             Amazon                                           0
antvoice                                           antvoice                                         0
antvoice.antvoiceId                                Antvoice ID
cjcom                                              Cj.com                                           0
cjcom.cjUserId                                     Cj.com User Id
clickdimensions                                    Click Dimensions                                 0
clickdimensions.clickdimensionsAccountKey          Click Dimensions Account Key
clickdimensions.clickdimensionsDomain              Click Dimensions Domain
clicmanager                                        Clicmanager                                      0
criteo                                             Criteo                                           0
criteoonetag                                       Criteo One Tag                                   0
criteoonetag.criteoonetagAccount                   Criteo One Tag Account
datingaffiliation                                  Dating Affiliation                               0
datingaffiliationpopup                             Dating Affiliation (popup)                       0
doubleclick                                        DoubleClick                                      0
equativ                                            Equativ                                          0
equativ.equativId                                  Equativ Id
eskimi                                             Eskimit                                          0
eskimi.eskimiInit                                  Eskimit Init
goldenbees                                         Golden Bees                                      0
goldenbees.goldenbeesId                            Golden Bees Id
googleads.googleadsCustomDomain                    Google Ads Custom Domain (optional)
googleadwordsconversion                            Google Adwords (conversion)                      0
googleadwordsconversion.adwordsconversionId        Google Adwords (conversion) ID
googleadwordsconversion.adwordsconversionLabel     Google Adwords (conversion) Label (optional)
googleadwordsconversion.adwordsconversionLanguage  Google Adwords (conversion) Language (optional)
googleadwordsconversion.adwordsconversionFormat    Google Adwords (conversion) Format (optional)
googleadwordsconversion.adwordsconversionColor     Google Adwords (conversion) Color (optional)
googleadwordsconversion.adwordsconversionValue     Google Adwords (conversion) Value (optional)
googleadwordsconversion.adwordsconversionCurrency  Google Adwords (conversion) Currency (optional)
googleadwordsconversion.adwordsconversionCustom1   Google Adwords (conversion) Custom 1 (optional)
googleadwordsconversion.adwordsconversionCustom2   Google Adwords (conversion) Custom 2 (optional)
googleadwordsremarketing                           Google Adwords (remarketing)                     0
googleadwordsremarketing.adwordsremarketingId      Google Adwords (remarketing) ID
googlepartners                                     Google Partners Badge                            0
kwanko                                             Kwanko                                           0
leadforensics                                      Lead Forensics                                   0
leadforensics.leadforensicsId                      Lead Forensics ID
linkedininsighttag                                 Linkedin Insight                                 0
linkedininsighttag.linkedin_partner_id             Linkedin Insight Partner Id
madmetrics                                         Mad Metrics                                      0
madmetrics.madmetricsHostname                      Mad Metrics Hostname
madmetrics.madmetricsClientId                      Mad Metrics Client Id
madmetrics.madmetricsSiteId                        Mad Metrics Site Id
madmetrics.madmetricsDirectId                      Mad Metrics Direct Id
madmetrics.madmetricsReferalId                     Mad Metrics Referal Id
madmetrics.madmetricsLlmId                         Mad Metrics LLM Id
openai                                             OpenAI (ads pixel)                               0
openai.openaiId                                    OpenAI Pixel Id
outbrain                                           Outbrain                                         0
outbrainamplify.outbrainamplifyId                  Outbrain Amplify Id
pinterestpixel                                     Pinterest Pixel                                  0
pinterestpixel.pinterestpixelId                    Pinterest Pixel Id
pipedrive                                          Pipedrive                                        0
piximedia                                          Piximedia                                        0
piximedia.piximediaName                            Piximedia Name
piximedia.piximediaTag                             Piximedia Tag
piximedia.piximediaType                            Piximedia Type
piximedia.piximediaId                              Piximedia Id
prelinker                                          Prelinker                                        0
pubdirecte                                         Pubdirecte                                       0
reddit                                             Reddit                                           0
reddit.redditInit                                  Reddit Init
reddit.redditAAID                                  Reddit redditAAID
reddit.redditExternalId                            Reddit redditExternalId
reddit.redditIDFA                                  Reddit redditIDFA
shareasale                                         ShareASale                                       0
sharethissticky                                    ShareThis Sticky                                 0
sharethissticky.sharethisStickyProperty            ShareThis Sticky Property
skaze                                              Skaze                                            0
skaze.skazeIdentifier                              Skaze SITE_IDENTIFIER
teads                                              Teads                                            0
teads.teadsBuyerPixelId                            Teads Buyer Pixel Id
thetradedesk                                       TheTradeDesk                                     0
thetradedesk.thetradedeskAdvertiserId              TheTradeDesk Advertiser Id
thetradedesk.thetradedeskUpixelId                  TheTradeDesk Universal Pixel Id
twenga                                             Twenga                                           0
twenga.twengaId                                    Twenga ID
twenga.twengaLocale                                Twenga Locale (fr, com, ...)                     fr
twitteruwt                                         Twitter Universal Website Tag                    0
twitteruwt.twitteruwtId                            Twitter Universal Website Tag ID
usercom                                            Users.com                                        0
usercom.userId                                     User.com User Id
usercom.userApiKey                                 User.com API Key
verizondottag                                      Verizon Dot Tag                                  0
verizondottag.verizondottagProjectId               Verizon Dot Tag Project Id
verizondottag.verizondottagPixelId                 Verizon Dot Tag Pixel Id
vshop                                              VShop                                            0
=================================================  ===============================================  =============

Services - Audience measurement
"""""""""""""""""""""""""""""""

=============================================================  ============================================================  =============
Property                                                       Description                                                   Default value
=============================================================  ============================================================  =============
actistat                                                       ActiSTAT                                                      0
actistat.actistatId                                            ActiSTAT Id
adobeworkspace                                                 Adobe - Analysis Workspace                                    0
adobeworkspace.adobeworkspaceId1                               Adobe - Analysis Workspace ID1
adobeworkspace.adobeworkspaceId2                               Adobe - Analysis Workspace ID2
adobeworkspace.adobeworkspaceId3                               Adobe - Analysis Workspace ID3
amplitude                                                      Amplitude                                                     0
amplitude.id                                                   Amplitude ID
analytics                                                      Google Analytics (universal)                                  0
analytics.analyticsUa                                          Google Analytics Account (universal)
analytics.analyticsAnonymizeIp                                 Google Analytics Anonymize IP                                 true
atinternet                                                     AT Internet (privacy by design)                               0
atinternet.atLibUrl                                            AT Internet (privacy by design) Url
atinternethightrack                                            AT Internet                                                   0
atinternethightrack.atLibUrl                                   AT Internet Url
bingads                                                        Bing Ads Universal Event Tracking                             0
bingads.bingadsTag                                             Bing Ads Universal Event Tracking Tag ID
clarity                                                        Clarity                                                       0
clarity.id                                                     Clarity ID
clicky                                                         Clicky                                                        0
clicky.clickyId                                                Clicky ID
compteur                                                       Compteur.fr                                                   0
compteur.compteurID                                            Compteur.fr ID
crazyegg                                                       Crazy Egg                                                     0
crazyegg.crazyeggId                                            Crazy Egg ID
emolytics                                                      Emolytics                                                     0
emolytics.emolyticsID                                          Emolytics Id
etracker                                                       eTracker                                                      0
etracker.etracker                                              etracker Secure Code
eulerian                                                       Eulerian                                                      0
eulerian.eulerianHost                                          Eulerian (Host)
faciliti                                                       Facil'ITI                                                     0
faciliti.facilitiID                                            Facil'ITI Id
firebase                                                       Firebase                                                      0
firebase.firebaseApiKey                                        Firebase API Key
firebase.firebaseAuthDomain                                    Firebase Auth Domain
firebase.firebaseDatabaseUrl                                   Firebase Database URL
firebase.firebaseProjectId                                     Firebase Project Id
firebase.firebaseStorageBucket                                 Firebase Storage Bucket
firebase.firebaseAppId                                         Firebase App Id
firebase.firebaseMeasurementId                                 Firebase Measurement Id (G-XXXXXXX)
force24                                                        Force24                                                       0
force24.force24trackingId                                      Force24 Tracking Id
force24.force24clientId                                        Force24 Client Id
gajs                                                           Google Analytics (ga.js)                                      0
gajs.gajsUa                                                    Google Analytics Account (ga.js)
gcmadstorage                                                   Google Consent Mode v2 - AdvertisingInstaller                 0
gcmadsuserdata                                                 Google Consent Mode v2 - Personalized Advertising             0
gcmanalyticsstorage                                            Google Consent Mode v2 - Analytics                            0
gcmfunctionality                                               Google Consent Mode v2 - Functionality                        0
gcmpersonalization                                             Google Consent Mode v2 - Personalization                      0
gcmsecurity                                                    Google Consent Mode v2 - Security                             0
getplus                                                        Get+                                                          0
getplus.getplusId                                              Get+ ID
getquanty                                                      GetQuanty                                                     0
getquanty.getguantyId                                          GetQuanty Id
gtag                                                           Google Analytics (gtag.js)                                    0
gtag.gtagUa                                                    Google Analytics Account (gtag.js)
gtag.gtagCustomDomain                                          Google Analytics (gtag.js) Custom Domain (optional)
hotjar                                                         Hotjar                                                        0
hotjar.hotjarId                                                HotjarId
hotjar.HotjarSv                                                HotjarSv
kameleoon                                                      Kameleoon                                                     0
kameleoon.kameleoon_id                                         Kameleoon Id
koban                                                          Koban                                                         0
koban.kobanurl                                                 Koban Url
koban.kobanapi                                                 Koban Api
kompass                                                        Kompass                                                       0
kompass.kompassId                                              Kompass Id
leadforensicsold                                               Lead Forensics (old version)                                  0
leadforensicsold.leadforensicsSf14gv                           Lead Forensics (old version) Sf14gv
leadforensicsold.leadforensicsIidentifier                      Lead Forensics (old version) Identifier
leadinfo                                                       Leadinfo                                                      0
leadinfo.leadinfoId                                            Leadinfo ID
matomo                                                         Matomo (privacy by design)                                    0
matomo.matomoId                                                Matomo (privacy by design) Id
matomo.matomoHost                                              Matomo Hostname
matomocloud                                                    Matomo Cloud                                                  0
matomocloud.matomoId                                           Matomo Cloud Id
matomocloud.matomoHost                                         Matomo Cloud Hostname
matomocloud.matomoCustomJSPath                                 Matomo Cloud Custom Js Path
matomocloud.matomoDontTrackPageView                            Matomo Cloud Do Not Track Page Views : true to enable conf
matomocloud.matomoFullTracking                                 Matomo Cloud Full Tracking : true to enable conf
matomoheatmap                                                  Matomo Heatmap                                                0
matomohightrack                                                Matomo                                                        0
matomohightrack.matomoId                                       Matomo Id
matomohightrack.matomoHost                                     Matomo Hostname
matomotm                                                       Matomo Tag Manager                                            0
matomotm.matomotmUrl                                           Matomo Tag Manager Url
mautic                                                         Mautic                                                        0
mautic.mauticurl                                               Mautic URL
metrica                                                        Yandex Metrica                                                0
metrica.yandexmetrica                                          Yandex Metrica ID
microanalytics                                                 MicroAnalytics                                                0
microanalytics.microanalyticsID                                MicroAnalytics ID
microsoftcampaignanalytics                                     Microsoft Campaign Analytics                                  0
microsoftcampaignanalytics.microsoftcampaignanalyticsUUID      Microsoft Campaign Analytics UUID
microsoftcampaignanalytics.microsoftcampaignanalyticsdomainId  Microsoft Campaign Analytics Domain Id (optional)
microsoftcampaignanalytics.microsoftcampaignanalyticsactionId  Microsoft Campaign Analytics Action Id (optional)
multiplegoogletagmanager                                       Multiple Google Tag Manager                                   0
multiplegoogletagmanager.multiplegoogletagmanagerId            Multiple Google Tag Manager IDs ("G-123", "G-456", "G-789"
                                                               // Javascript Array Data)
multiplegoogletagmanager.multiplegoogletagmanagerCustomDomain  Multiple Google Tag Manager Custom Domain (optional)
multiplegtag                                                   Google Analytics (gtag.js) [for multiple UA]                  0
multiplegtag.multiplegtagUa                                    Google Analytics (gtag.js) [for multiple UA] UA
                                                               ('UA-XXXXXXXX-X', 'UA-XXXXXXXX-X', 'UA-XXXXXXXX-X')
multiplegtag.multiplegtagCustomDomain                          Multiple Google Analytics (gtag.js) Custom Domain (optional)
openwebanalytics                                               Open Web Analytics                                            0
openwebanalytics.openwebanalyticsId                            Open Web Analytics Id
openwebanalytics.openwebanalyticsHost                          Open Web Analytics Host
outbrainamplify                                                Outbrain Amplify                                              0
pardot                                                         Pardot                                                        0
pardot.piAId                                                   Pardot piAId
pardot.piCId                                                   Pardot piCId
pianoanalytics                                                 Piano Analytics                                               0
pianoanalytics.pianoSite                                       Piano Analytics Site (int)
pianoanalytics.pianoCollectDomain                              Piano Analytics Collect Domain
pianoanalytics.pianoSendData                                   Piano Analytics SendData (true/false)                         false
piwikpro                                                       Piwik Pro                                                     0
piwikpro.piwikProId                                            Piwik Pro ID
piwikpro.piwikProContainer                                     Piwik Pro Container (xxx in xxx.containers.piwik.pro)
plausible                                                      Plausible                                                     0
plausible.plausibleDomain                                      Plausible Domain
plausible.plausibleEndpoint                                    Plausible Endpoint                                            plausible.io
plezi                                                          Plezi                                                         0
plezi.pleziTenant                                              Plezi Tenant
plezi.pleziTw                                                  Plezi Tw
sharpspring                                                    Sharpspring                                                   0
sharpspring.sharpspringAccount                                 Sharpspring Account
sharpspring.sharpspringId                                      Sharpspring ID (xxxx.marketingautomation.services)
shinystat                                                      Shinystat                                                     0
shinystat.shinystatUser                                        Shinystat User
simpleanalytics                                                Simple Analytics (privacy by design)                          0
snapchat                                                       Snapchat                                                      0
snapchat.snapchatId                                            Snapchat Id
snapchat.snapchatEmail                                         Snapchat User Email (optional)
statable                                                       Statable                                                      0
statable.statableSiteId                                        Statable Site Id
statable.statableHost                                          Statable Host                                                 statable.com
statcounter                                                    Stat Counter                                                  0
teambrain                                                      Team Brain                                                    0
teambrain.teambrainUrl                                         Team Brain Url
teambrain.teambrainProxyUrl                                    Team Brain Proxy Url
tiktok                                                         Tiktok                                                        0
tiktok.tiktokId                                                Tiktok ID
tolkai                                                         tolk.ai                                                       0
tolkai.tolkaiBot                                               tolk.ai (Bot)
userpilot                                                      UserPilot                                                     0
userpilot.userpilotToken                                       UserPilot ID
visiblee                                                       Visiblee                                                      0
visiblee.visibleeclientid                                      Visiblee Client Id
visiblee.visibleedomain                                        Visiblee Domain
visualrevenue                                                  VisualRevenue                                                 0
visualrevenue.visualrevenueId                                  VisualRevenue ID
webmecanik                                                     Webmecanik                                                    0
webmecanik.webmecanikurl                                       Webmecanik URL
weborama                                                       Weborama                                                      0
woopra                                                         Woopra                                                        0
woopra.woopraDomain                                            Woopra Domain
wysistat                                                       Wysistat                                                      0
wysistat.cli                                                   Wysistat cli (client name)
wysistat.frm                                                   Wysistat frm
wysistat.prm                                                   Wysistat prm
wysistat.ce                                                    Wysistat ce
wysistat.page                                                  Wysistat page
wysistat.roi                                                   Wysistat roi
wysistat.prof                                                  Wysistat prof
wysistat.cpt                                                   Wysistat cpt
wysistathightrack                                              Wysistat (privacy by design)                                  0
wysistathightrack.wysistatNom                                  Wysistat Nom (privacy by design)
xandr                                                          Xandr (Universal)                                             0
xandr.xandrId                                                  Xandr ID (Universal)
xandrconversion                                                Xandr (Conversion)                                            0
xandrsegment                                                   Xandr (Segment)                                               0
xiti                                                           Xiti                                                          0
xiti.xitiId                                                    Witi ID
xiti_smarttag                                                  Xiti SmartTag                                                 0
xiti_smarttag.xiti_smarttagLocalPath                           Xiti SmartTag Local Path
xiti_smarttag.xiti_smarttagSiteId                              Xiti SmartTag Site Id
zohopagesense                                                  Zoho PageSense                                                0
zohopagesense.zohoPageSenseProjectId                           Zoho PageSense Project ID
zohopagesense.zohoPageSenseScriptHash                          Zoho PageSense Script Hash
=============================================================  ============================================================  =============

Services - Comments
"""""""""""""""""""

================================  ===================  =============
Property                          Description          Default value
================================  ===================  =============
adobeanalytics                    Adobe Analytics      0
adobeanalytics.adobeanalyticskey  Adobe Analytics Key
disqus                            Disqus               0
disqus.disqusShortname            Disqus short name
facebookcomment                   Facebook (comments)  0
================================  ===================  =============

Services - Social networks
""""""""""""""""""""""""""

=====================================  =======================================================  =============
Property                               Description                                              Default value
=====================================  =======================================================  =============
addthis                                Add This                                                 0
addthis.addthisPubId                   Add This Pub ID
addtoanyfeed                           AddToAny (feed)                                          0
addtoanyfeed.addtoanyfeedUri           AddToAny (feed) URI
addtoanyshare                          AddToAny (share)                                         0
discord                                Discord (Server Widget)                                  0
ekomi                                  Ekomi                                                    0
ekomi.ekomiCertId                      Ekomi CertID
facebook                               Facebook                                                 0
facebookcustomerchat                   Facebook (Customer Chat)                                 0
facebookcustomerchat.facebookChatID    Facebook (Customer Chat) ID
facebooklikebox                        Facebook (likebox)                                       0
facebookpixel                          Facebook Pixel                                           0
facebookpixel.facebookpixelId          Facebook Pixel ID
facebookpixel.facebookpixelOpenBridge  Facebook Pixel Conversions API Gateway (OpenBridge) URL
                                       (optional)
facebookpost                           Facebook (post)                                          0
gplus                                  Google+                                                  0
gplusbadge                             Google+ (badge)                                          0
instagram                              Instagram                                                0
linkedin                               Linkedin                                                 0
pinterest                              Pinterest                                                0
shareaholic                            Shareaholic                                              0
shareaholic.shareaholicSiteId          Shareaholic Site ID
sharethis                              ShareThis                                                0
sharethis.sharethisPublisher           ShareThis Publisher
twitter                                Twitter                                                  0
twitterembed                           Twitter (cards)                                          0
twittertimeline                        Twitter (timelines)                                      0
=====================================  =======================================================  =============

Services - Support
""""""""""""""""""

==============================  ============================================================  =============
Property                        Description                                                   Default value
==============================  ============================================================  =============
brevochat                       Brevo Conversations                                           0
brevochat.brevoConversationsId  Brevo Conversations Id
crisp                           Crisp Chat                                                    0
crisp.crispID                   Crisp Chat ID
dialoginsight                   Dialog Insight                                                0
dialoginsight.dialogInsightId   Dialog Insight ID
elfsight                        Elfsight                                                      0
intercomChat                    Intercom Chat                                                 0
intercomChat.intercomKey        Intercom Chat Key
markerio                        Marker.io                                                     0
markerio.markerioProjectId      Marker.io PROJECT_ID
pipedrive.pipedriveCompany      Pipedrive Company
pipedrive.pipedrivePlaybook     Pipedrive Playbook
purechat                        PureChat                                                      0
purechat.purechatId             PureChat ID
rumbletalk                      RumbleTalk                                                    0
rumbletalk.rumbletalkid         RumbleTalk Id
screeb                          Screeb                                                        0
screeb.screebId                 Screeb Id
screeb.screebDontInit           Do Not Initialise Screeb
slido                           Slido Event (needs a div with class tac_slido and slidoEvent  0
                                attribute in the content)
smartsupp                       Smartsupp                                                     0
smartsupp.smartsuppKey          Smartsupp Key
studizz                         Studizz                                                       0
studizz.token                   Studizz Token
tawkto                          Tawk.to chat                                                  0
tawkto.tawktoId                 Tawk.to chat ID
tawkto.tawktoWidgetId           Tawk.to Widget Id (optional, default: default)
tidycal                         TidyCal (needs a div with class tidycal-embed and data-path   0
                                attribute in the content)
tolkaigenii                     Tolk.ai Genii                                                 0
tolkaigenii.tolkaiGeniiProject  Tolk.ai Genii Project Id
userflow                        Userflow                                                      0
userflow.userflowId             Userflow Token
userlike                        Userlike                                                      0
userlike.userlikekey            Userlike Key
uservoice                       UserVoice                                                     0
uservoice.userVoiceApi          UserVoice API Key
userway                         Userway                                                       0
userway.userwayId               Userway Account Id
weply                           Weply                                                         0
weply.weplyId                   Weply
zoho                            Zoho                                                          0
zoho.zohoWidgetCode             Zoho Widget Code
zopim                           Zopim                                                         0
zopim.zopimID                   Zopim ID
==============================  ============================================================  =============

Services - Videos
"""""""""""""""""

===============  ==========================  =============
Property         Description                 Default value
===============  ==========================  =============
acast            A Cast                      0
archive          Archive.org                 0
artetv           Arte.tv                     0
ausha            Ausha                       0
bandcamp         Bandcamp                    0
calameo          Calameo                     0
calameolibrary   Calameo Library             0
canalu           Canal-U.tv                  0
dailymotion      Dailymotion                 0
deezer           Deezer                      0
fculture         France Culture              0
gallica          Gallica                     0
issuu            Issuu                       0
mixcloud         Mixcloud                    0
playplay         PlayPlay                    0
podcloud         podCloud                    0
prezi            Prezi                       0
slideshare       Slideshare                  0
soundcloud       SoundCloud                  0
spotify          Spotify                     0
tiktokvideo      Tiktok Video                0
twitch           Twitch                      0
videas           Videas                      0
vimeo            Vimeo                       0
webtvnu          WebTV Normandie Université  0
youtube          Youtube                     0
youtubeplaylist  Youtube Playlist            0
===============  ==========================  =============

Services - Other
""""""""""""""""

=======================================  ============================================  =============
Property                                 Description                                   Default value
=======================================  ============================================  =============
activecampaignvgo                        Active Campaign 2023                          0
activecampaignvgo.activecampaignAccount  Active Campaign 2023 Account
adsenseauto.adsensecapub                 Google Adsense Automatic Pub
affilae.pid                              Affilae Pid
arcio.arcId                              Klaviyo Company ID
calendly                                 Calendly                                      0
collectchat                              Collect Chat                                  0
collectchat.collectchatId                Collect Chat Id
fillout                                  fillout                                       0
gagenda                                  Google Agenda                                 0
gdocs                                    Google Document                               0
gforms                                   Google Form                                   0
googleads.googleadsId                    Google Ads ID
googlesignin                             Google Signin                                 0
goptimize                                Google Optimize                               0
goptimize.id                             Google Optimize ID
gsheets                                  Google Sheets                                 0
gslides                                  Google Slides                                 0
hcaptcha                                 hCaptcha                                      0
iframe                                   Iframe                                        0
klaviyo                                  Klaviyo                                       0
klaviyo.klaviyoCompanyId                 Klaviyo Company ID
maps_noapi                               Google Maps (no api)                          0
marketomunchkin                          Marketo munchkin                              0
marketomunchkin.marketomunchkinkey       Marketo munchkin Key
matterport                               Matterport                                    0
posthog                                  Posthog                                       0
posthog.posthogApiKey                    Posthog (Api Key)
posthog.posthogHost                      Posthog Host (e.g. https://eu.i.posthog.com)
robofabrica                              Robo Fabrica Chatbot                          0
robofabrica.robofabricaUuid              Robo Fabrica Chatbot Uuid
sendinblue                               sendinblue                                    0
sendinblue.sendinblueKey                 sendinblue Key
trustpilot                               Trustpilot                                    0
ubib                                     Ubib Chatbot                                  0
ubib.ubibId                              Ubib Chatbot Id
ubib.ubibHash                            Ubib Chatbot Hash
=======================================  ============================================  =============

Setup
^^^^^

The setup works automatically regarding the constants enabled.
It sets up some Javascript at the footer of the page and initialises TarteAuCitronApi.

Extension Configuration
-----------------------

In the extension configuration you can enable XClasses of the media renderers, so that the rendered
HTML is compliant with TarteAuCitron HTML markers :

========================  ===============================================================  =============
Property                  Description                                                      Default value
========================  ===============================================================  =============
xclass_youtube            Enable XClass of the TYPO3 Youtube renderer                      0
xclass_vimeo              Enable XClass of the TYPO3 Vimeo renderer                        0
xclass_dailymotion        Enable XClass of the ameos_dailymotion renderer (only if the     0
                          extension ameos_dailymotion is installed)
========================  ===============================================================  =============

If the extension ameos_form is installed, its ReCaptcha element is automatically XClassed
so that reCAPTCHA is loaded through TarteAuCitron (enable the ``recaptcha`` service).
