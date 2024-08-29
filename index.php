<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <form action="regist.php" method="post">
        <input type="text" placeholder="login" name="login"><br>
        <input type="password" placeholder="password" name="pass"><br>
        <input type="password" placeholder="repeat password" name="repeatpass"><br>
        <input type="email" placeholder="email" name="email"><br><br>
        <button type="submit">Registration</button><br><br>
    </form>

    <form action="login.php" method="post">
        <input type="text" placeholder="login" name="login"><br>
        <input type="password" placeholder="password" name="pass"><br><br>
        <button type="submit">Login</button><br><br>
    </form>


</body>
</html>
