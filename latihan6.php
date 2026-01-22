<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="get">
        username:
        <input type="text" name="usrnm"><br>
        password:
        <input type="password" name="pwd"><br>
        user-type:
        <select name="userType">
            <option>admin</option>
            <option>finance</option>
            <option>logistik</option>
        </select><br>
        <button type="submit" name="login">Log in</button>
        <button type="reset">reset</button>
    </form>
</body>
</html>