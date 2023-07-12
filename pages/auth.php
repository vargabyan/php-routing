<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body>
    <h1>login</h1>

    <form action="login" method="post">
        <label>login
            <br>
            <input name="login" type="text" placeholder="your login">
        </label>
        <br>
        <br>
        <label>password
            <br>
            <input name="password" type="password" placeholder="your password">
        </label>
        <br>
        <br>
        <input type="submit" value="login" >
    </form>

    <br>

    <?php
        include 'navbar.php';
    ?>

    <br>
    <br>
    <?php
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];

        echo '<p>login: ' . $data['login'] . '</p><p>password: ' . $data['password'] . '</p>';
    ?>
</body>
</html>