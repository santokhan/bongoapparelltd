/** My App Id : 860961217809631 */
window.fbAsyncInit = function () {
    FB.init({
        appId: '860961217809631',
        cookie: true,
        xfbml: true,
        version: '{api-version}'
    });

    FB.AppEvents.logPageView();

};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


/** call this function onlogin="checkLoginState()" attribute of button tag */
function checkLoginState() {
    FB.getLoginStatus(function (response) {
        statusChangeCallback(response);
    });
}