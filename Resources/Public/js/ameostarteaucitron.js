/**
 * Dispatch an event on the document (bubbling, cancelable)
 *
 * @param {string} eventName
 */
function AmeosTacDispatch(eventName) {
    var event;
    if (typeof(Event) === 'function') {
        event = new Event(eventName, {bubbles: true, cancelable: true});
    } else {
        event = document.createEvent('Event');
        event.initEvent(eventName, true, true);
    }
    document.dispatchEvent(event);
}

function AmeosTacClickyMore() {
    AmeosTacDispatch('clicky-loaded');
}

function AmeosTacGajsMore() {
    AmeosTacDispatch('gajs-loaded');
}

function AmeosTacGtagMore() {
    AmeosTacDispatch('gtag-loaded');
}

function AmeosTacMapscallback() {
    AmeosTacDispatch('maps-loaded');
}

function AmeosTacAnalyticsPrepare() {
    AmeosTacDispatch('analytics-prepare');
}

function AmeosTacAnalyticsMore() {
    AmeosTacDispatch('analytics-loaded');
}

function AmeosTacGasMore() {
    AmeosTacDispatch('gas-loaded');
}

function AmeosTacXitiMore() {
    AmeosTacDispatch('xiti-loaded');
}

function AmeosTacFacebookPixelMore() {
    AmeosTacDispatch('facebookpixel-loaded');
}

function AmeosTacatMore() {
    AmeosTacDispatch('atinternet-loaded');
}

function tacRecaptchaOnLoad() {
    AmeosTacDispatch('recaptcha-loaded');
}

function AmeosTacCriteoonetagMore() {
    AmeosTacDispatch('criteoonetag-loaded');
}

function AmeosTiktokMore() {
    AmeosTacDispatch('tiktok-loaded');
}

function AmeosSnapchatMore() {
    AmeosTacDispatch('snapchat-loaded');
}

function AmeosTacSkazeMore() {
    AmeosTacDispatch('skaze-loaded');
}

function matomoMore() {
    AmeosTacDispatch('matomo-loaded');
}
