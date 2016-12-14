<?php
require "engine.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Testing arrays</h1>
</header>
<main>
    <form method="post">
        <input type="text" name="uString" placeholder="Type your number..."/>
        <input type="text" name="uDigit" placeholder="Enter digit to search..."/>
        <input type="submit" value="Calculate"/>
        <textarea rows="1"><?= $result ?></textarea>
    </form>
</main>
<footer>
    14.12.2016
</footer>
</body>
</html>