$(document).ready(function () {

    var baseURL = "http://localhost/";
    var writeURL = baseURL +"storeNewComment.php";
    var authReqURL = baseURL + "authReq.php";
    var deleteURL = baseURL +"deleteComment.php";
    var readURL = baseURL + "getComments.php";

    reloadConversation();

    $("body").on("click", ".delbutton", function() {
        $.post(deleteURL, $(this).siblings("input").serialize());
        reloadConversation();
    });
    $("body").on("click", "#sendBTN", function() {
        $.post( writeURL, $(this).parent().siblings("form").children("div").children().serialize(),
            function() { reloadConversation();} );
        $("#commentBox").val("Type message..");
        }
    );
    $("body").on("click", "#loginBTN", function() {
        reloadConversation();
    });
    $("body").on("click", "#logoutBTN", function() {
        reloadConversation();
    });


    function reloadConversation() {
       let send = document.getElementById("recipe").innerHTML;
        $.getJSON(readURL, {"recipe": send},function (comments) {
            $.post(authReqURL, function (userStatus) {

                let status = JSON.parse(userStatus);

                $("#comments").html("");
                let $x = 0;
                for (var i = 0; i < comments.length; i++) {
                    showComment(comments[i], $x++, status);
                }
                commentBox(status);
            });
        });
    }
    function showComment(comment, $x, status) {
        let commentToShow = '';

        if ($x % 2 === 0) {
            commentToShow += ('<div class="message-container">');
        } else {
            commentToShow += ('<div class="message-container darker">');
        }

        commentToShow += ('<p class="name">' + removeQuotes(comment.username) +
            '</p>');
        if (removeQuotes(comment.username) === removeQuotes(status.username)) {
            commentToShow += (
                '<input type="hidden" name="timestamp" value="' + comment.timestamp +
                '"/>' +
                '<input type="hidden" name="recipeID" value="' +
                removeQuotes($("#recipe").text()) + '"/>' +
                '<button class="delbutton">X</button>'
            );
        }
        commentToShow += ('<p class="comment">' + removeQuotes(comment.comment)
            + '</p>' +
            '<p class="time">' + removeQuotes(comment.created) + '</p>' +
            '</div>'
        );
        $("#comments").append(commentToShow);
    }

    function commentBox(status) {

        if( removeQuotes(status.loginStatus) === "true") {
            $('<form id="sendForm">' +
                '<div class="textbox-wrapper">' +
                '<input type="hidden" name="recipeID" value="' + removeQuotes($("#recipe").text()) + '"/>' +
                '<textarea class="textField commentTextBox" id="commentBox" name="comment" placeholder="Type message.."></textarea>' +
                '</div>'+
                '</form>').appendTo("#comments");
            $('<div class="sendbutton-wrapper">' +
                '<button class="sendbutton" id="sendBTN">Send</button>' +
                '</div>').appendTo("#comments");
        }
    }
    /**
     * Removes double quotes from the specified string.
     *
     * @param {String} str The string from which to remove quotes.
     * @returns {String} 'str', without double quotes.
     */
    function removeQuotes(str) {
        return str.replace(/\"/g, "");
    }
});
