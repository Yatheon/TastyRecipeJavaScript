<?php
use \TastyRecipe\Model\Comment;
function showComments($comments, $username, $redirect, $recipeID){
    $x = 0;
    foreach($comments as $comment)
    {
        if ($x % 2 == 0) {
            echo('<div class="message-container">');
        } else {
            echo('<div class="message-container darker">');
        }
        $x++;
        echo('<p class="name">' .$comment->getUsername() . '</p>');
        if ($comment->getUsername() === $username) {
            echo("<form action='deleteComment.php' method='post'>");
            echo('<input type="hidden" name="recipeID" value="'.  $recipeID . '"/>');
            echo('<input type="hidden" name="redirect" value= "'.  $redirect .'"/>');
            echo('<input type="hidden" name="timestamp" value="' . $comment->getTimestamp(). '"/>');
            echo('<input class="delbutton" type="submit" value="X"/>');
            echo('</form>');
        }

        echo('<p class="comment">' . $comment->getComment() . '</p>');
        echo('<p class="time">' . $comment->getCreated() . '</p>');
        echo('</div>');

    }


    if (isset($_SESSION['loggedIn']) and $_SESSION['loggedIn'] == true) {
        echo(
        '<form action="storeNewComment.php" method="post">
            <input type="hidden" name="redirect" value= "'.  $redirect .'"/>
            <input type="hidden" name="recipeID" value= "'.  $recipeID . '" >
			<div class="textbox-wrapper">
				<textarea class="textField commentTextBox" name="comment" placeholder="Type message.."></textarea>
			</div>
			<div class="sendbutton-wrapper">
				 <input class="sendbutton" type="submit" value="Send"/>
			</div>
		</form>'
        );
    } else {
        echo('<p class="textbox-wrapper">Login to write comments!</P>');
    }
}

