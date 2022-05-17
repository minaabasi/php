



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
        <input type="text" name="name" placeholder="your name"><br>
        <input type="email" name="mail" placeholder="your mail"><br>
        <label>gender:</label><br>
        mail:<input type="radio" name="gender"><br>
        femail<input type="radio" name="gender"><br>
        <input type="submit" >
        
    </form>
</body>
</html>