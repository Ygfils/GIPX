<!DOCTYPE php>
<HTML lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/style.css">
  <title>Logoff</title>
</head>
<?php
if (isset($_COOKIE['admin'])and $_COOKIE['admin']=TRUE) {
  setcookie('admin', '', time() + 1, '/'); // empty value and old timestamp
  echo "Logoff efetuado<br>";
  header("Location:/archerx/public/login.php");
  }
if (isset($_COOKIE['login'])) {
    unset($_COOKIE['login']);
    setcookie('login', '', time() - 3600, '/'); // empty value and old timestamp
    echo "Logoff efetuado<br>";
    header("Location:/archerx/public/login.php");
} else {
    echo "Você não está logado<br>";
    header("Location:/archerx/public/login.php");
    return false;
}
die();

?>