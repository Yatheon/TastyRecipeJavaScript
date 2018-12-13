<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="/resources/CSS/reset.css">
    <link rel="stylesheet" type="text/css" href="/resources/CSS/main.css">
    <link rel="stylesheet" type="text/css" href="/resources/CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="/resources/js/loginHandler.js"></script>
    <title>Home</title>
</head>
<body>

<div class="title">
    <form action="redirect.php" method='post'>
        <input type="hidden" name="nextPage" value="frontPage.php">
        <input type="submit" value="Tasty Recipes">
    </form>
</div>
<div class="navbar">
    <form class="navbutton" action="redirect.php" method='post'>
        <input type="hidden" name="nextPage" value="frontPage.php">
        <input class="active" type="submit" value="Home">
    </form>
    <form class="navbutton" action="redirect.php" method='post'>
        <input type="hidden" name="nextPage" value="calendar.php">
        <input type="submit" value="Calendar">
    </form>
    <div class="dropdown">
        <p class="dropbtn">Weekly Recipes
            <i class="fa fa-caret-down"></i>
        </p>
        <div class="dropdown-content">
            <form class="navbutton" action="redirect.php" method='post'>
                <input type="hidden" name="nextPage" value="pancakes.php">
                <input type="submit" value="Pancakes">
            </form>
            <form class="navbutton" action="redirect.php" method='post'>
                <input type="hidden" name="nextPage" value="meatballs.php">
                <input type="submit" value="Meatballs">
            </form>
        </div>
    </div>
    <div class="formgroup" id="loginBar">
    </div>
</div>

<div class="pagetitle">
    <h1>Welcome! </h1>
</div>

<div class="imagecontainer">
    <div class="left-pic">
        <img src="/resources/images/sallad-left.jpg" alt="Picture of sallad">
    </div>
    <div class="right-pic">
        <img src="/resources/images/steak-right.jpg" alt="Picture of steak">
    </div>
    <div class="textbox">
        <p>Press on the calendar below to find many tasty recipes for every day of the year!</p>
    </div>
    <form action="redirect.php" method='post'>
        <input type="hidden" name="nextPage" value="calendar.php">
        <input type="image" class="calendar" src="/resources/images/calendar.png" alt="Picture of calendar">
    </form>
</div>

<footer></footer>
</body>
</html>
