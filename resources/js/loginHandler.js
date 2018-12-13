$(document).ready(function () {

    var baseURL = "http://localhost/";
    var authReqURL =  baseURL + "authReq.php";
    var loginURL = baseURL + "login.php";
    var logoutURL = baseURL +"logout.php";

    refreshLoginBar();
    function refreshLoginBar($failedLogin = false) {
        $.post(authReqURL, function (userStatus) {
            $("#loginBar").html("");
            let status = JSON.parse(userStatus);

            if( status.loginStatus !== "false") {
                $('  <button id="logoutBTN" class="formButton">logout</button>\n' +
                    '        <form id="logout">\n' +
                    '            <input type="hidden" name="redirect" value="frontPage.php"/>\n' +
                    '            <label id="user">User -  ' + removeQuotes(status.username) + ' </label>\n' +
                    '        </form>').appendTo($("#loginBar"));
            }
            else{
                $(' <button id="loginBTN" class="formButton">Login</button>\n' +
                    '        <form id="login">\n' +
                    '            <label for="username">Username:</label>\n' +
                    '            <input id = "username" autocomplete="username" name=\'username\' class="textField">\n' +
                    '            <label for="password">Password:</label>\n' +
                    '            <input name=\'password\' autocomplete="current-password" type="password" class="textField">\n' +
                    '            <input type="hidden" name="redirect" value="frontPage.php"/>\n' +
                    '        </form>').appendTo($("#loginBar"));
            }
            if($failedLogin) {
                $('<p class="accFieldError">Wrong username or password!</p>').appendTo($("#loginBar"));
            }
        });
    }

    $("body").on("click", "#loginBTN", function() {
        $.post(loginURL, $("#login").serialize(), function ($failedLogin){
            $failedLogin = ($failedLogin == 'true');
            refreshLoginBar($failedLogin);});
    });
    $("body").on("click", "#logoutBTN", function() {
        $.post(logoutURL, function () {
            refreshLoginBar();
        });
    });
    function removeQuotes(str) {
        return str.replace(/\"/g, "");
    }
});
