<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/resources/CSS/reset.css">
    <link rel="stylesheet" type="text/css" href="/resources/CSS/main.css">
    <link rel="stylesheet" type="text/css" href="/resources/CSS/recipe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="/resources/js/loginHandler.js"></script>
    <script type="text/javascript" src="/resources/js/commentHandler.js"></script>
    <title>Pancakes</title>
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
        <input type="submit" value="Home">
    </form>
    <form class="navbutton" action="redirect.php" method='post'>
        <input type="hidden" name="nextPage" value="calendar.php">
        <input type="submit" value="Calendar">
    </form>
    <div class="dropdown">
        <p class="dropbtn-active">Weekly Recipes
            <i class="fa fa-caret-down"></i>
        </p>
        <div class="dropdown-content">
            <form class="navbutton" action="redirect.php" method='post'>
                <input type="hidden" name="nextPage" value="pancakes.php">
                <input class="active" type="submit" value="Pancakes">
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
    <h1 id="recipe">Pancakes</h1>
</div>
<div class="foodPresent">
    <img src="/resources/images/pancakes-recipe.jpg" alt="Pancakes">
</div>
<div class="header-recipe">
    <h2>
        ingredients
    </h2>
</div>
<div class="list-wrapper">
    <ul class="ingredients-list">
        <li class="ingredients-list-item">
            <div class="item-nr">
                3/2
            </div>
            <div class="text">
                cups all-purpose flour
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                2
            </div>
            <div class="text">
                tablespoons sugar
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                2
            </div>
            <div class="text">
                teaspoons baking powder
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                1
            </div>
            <div class="text">
                teaspoon baking soda
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                1/2
            </div>
            <div class="text">
                teaspoon salt
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                1
            </div>
            <div class="text">
                cup milk or buttermilk
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                2
            </div>
            <div class="text">
                large eggs
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                1/4
            </div>
            <div class="text">
                cup melted butter
            </div>
        </li>
    </ul>
</div>
<div class="header-recipe">
    <h2>
        How To
    </h2>
</div>
<div class="list-wrapper">
    <ul class="ingredients-list">
        <li class="ingredients-list-item">
            <div class="item-nr">
                1.
            </div>
            <div class="text">
                In a large mixing bowl, sift together flour, sugar baking powder, baking soda, and salt.
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                2.
            </div>
            <div class="text">
                Whisk in milk, eggs, and melted butter just until combined.
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                3.
            </div>
            <div class="text">
                Preheat a flat griddle over medium-high heat.
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                4.
            </div>
            <div class="text">
                Scoop 1/4 cup of pancake batter onto griddle. Let pancakes cook until bubbles form before flipping.
            </div>
        </li>
        <li class="ingredients-list-item">
            <div class="item-nr">
                5.
            </div>
            <div class="text">
                Cook other side until golden brown. Serve hot with syrup and fruit.
            </div>
        </li>
    </ul>
</div>
<div class="header-recipe">
    <h2>Comments</h2>
</div>
<div id="comments"> </div>


<footer></footer>
</body>
</html>
