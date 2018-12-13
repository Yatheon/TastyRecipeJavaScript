<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/resources/CSS/reset.css">
    <link rel="stylesheet" type="text/css" href="/resources/CSS/main.css">
    <link rel="stylesheet" type="text/css" href="/resources/CSS/calendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="/resources/js/loginHandler.js"></script>
    <title>Calendar</title>
</head>
<body>

<div class="title">
    <form action = "redirect.php" method='post'>
        <input type="hidden" name="nextPage" value="frontPage.php">
        <input type="submit" value="Tasty Recipes">
    </form>
</div>
<div class="navbar">
    <form class="navbutton" action = "redirect.php" method='post'>
        <input type="hidden" name="nextPage" value="frontPage.php">
        <input  type="submit" value="Home">
    </form>
    <form class="navbutton" action = "redirect.php" method='post'>
        <input type="hidden" name="nextPage" value="calendar.php">
        <input class="active" type="submit" value="Calendar">
    </form>
    <div class="dropdown">
        <p class="dropbtn">Weekly Recipes
            <i class="fa fa-caret-down"></i>
        </p>
        <div class="dropdown-content">
            <form class="navbutton" action = "redirect.php" method='post'>
                <input type="hidden" name="nextPage" value="pancakes.php">
                <input type="submit" value="Pancakes">
            </form>
            <form class="navbutton" action = "redirect.php" method='post'>
                <input type="hidden" name="nextPage" value="meatballs.php">
                <input type="submit" value="Meatballs">
            </form>
        </div>
    </div>
    <div class="formgroup" id="loginBar">
    </div>
</div>

<div class="pagetitle">
    <ul>
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>
        <li>
            August<br>
            2018
        </li>
    </ul>
</div>

<ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>

<div class="week">
    <div class="not-current">
        <div class="content-day">30</div>
    </div>
    <div class="not-current">
        <div class="content-day">31</div>
    </div>
    <div class="day">
        <div class="content-day">1</div>
        <div class="content-image">
            <form action = "redirect.php" method='post'>
                <input type="hidden" name="nextPage" value="pancakes.php">
                <input  type="image" class="calendar" src="/resources/images/pancakes.jpg" alt="Pancakes">
            </form>
        </div>
    </div>
    <div class="day">
        <div class="content-day">2</div>
    </div>
    <div class="day">
        <div class="content-day">3</div>
    </div>
    <div class="day">
        <div class="content-day">4</div>
    </div>
    <div class="day">
        <div class="content-day">5</div>
    </div>
</div>
<div class="week">
    <div class="day">
        <div class="content-day">6</div>
        <div class="content-image">
            <form action = "redirect.php" method='post'>
                <input type="hidden" name="nextPage" value="meatballs.php">
                <input  type="image" class="calendar" src="/resources/images/meatballs.jpg" alt="Meatballs">
            </form>
        </div>
    </div>
    <div class="day">
        <div class="content-day">7</div>
    </div>
    <div class="day">
        <div class="content-day">8</div>
    </div>
    <div class="day">
        <div class="content-day">9</div>
    </div>
    <div class="day">
        <div class="content-day">10</div>
    </div>
    <div class="day">
        <div class="content-day">11</div>
    </div>
    <div class="day">
        <div class="content-day">12</div>
    </div>
</div>
<div class="week">
    <div class="day">
        <div class="content-day">13</div>
    </div>
    <div class="day">
        <div class="content-day">14</div>
    </div>
    <div class="day">
        <div class="content-day">15</div>
    </div>
    <div class="day">
        <div class="content-day">16</div>
    </div>
    <div class="day">
        <div class="content-day">17</div>
    </div>
    <div class="day">
        <div class="content-day">18</div>
    </div>
    <div class="day">
        <div class="content-day">19</div>
    </div>
</div>
<div class="week">
    <div class="day">
        <div class="content-day">20</div>
    </div>
    <div class="day">
        <div class="content-day">21</div>
    </div>
    <div class="day">
        <div class="content-day">22</div>
    </div>
    <div class="day">
        <div class="content-day">23</div>
    </div>
    <div class="day">
        <div class="content-day">24</div>
    </div>
    <div class="day">
        <div class="content-day">25</div>
    </div>
    <div class="day">
        <div class="content-day">26</div>
    </div>
</div>
<div class="week">
    <div class="day">
        <div class="content-day">27</div>
    </div>
    <div class="day">
        <div class="content-day">28</div>
    </div>
    <div class="day">
        <div class="content-day">29</div>
    </div>
    <div class="day">
        <div class="content-day">30</div>
    </div>
    <div class="day">
        <div class="content-day">31</div>
    </div>
    <div class="not-current">
        <div class="content-day">1</div>
    </div>
    <div class="not-current">
        <div class="content-day">2</div>
    </div>
</div>
<footer></footer>
</body>
</html>
