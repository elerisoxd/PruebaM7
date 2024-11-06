<?php
session_start();

$users=[
    [
        "username"=>"user1",
        "password"=>"pass1"
    ],
    [
        "username"=>"user2",
        "password"=>"pass2"
    ],
    [
        "username"=>"user3",
        "password"=>"pass3"
    ]
    ];
$username= $_POST['username'];
$password= $_POST['password'];

foreach($users as $user){
    if($user['username']== $username && $user['password']==$password){
        $_SESSION['username']=$username;
        header('Location: bienvenida.php');
        exit;
    }else{
        echo "Usuario o contraseña incorrectos";
        header('Location: index.html');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Inicio de sesion</h2>
    <form action="login.php" method="POST">
        <label for="username">Usuario: </label>
        <input type="text" name="username" required>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </form>
</body>
</html>
