<?php
include('site/header.php');
?>
 <?php 
 session_start();
    if(isset($_SESSION['loginSession'])){
        if(isset($_POST['logout'])) {
        unset ($_SESSION['loginSession']);
        header('location: loginup.php');
        } else {
    ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Wylogowywanie</h1>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 
                <button type="submit" class="btn btn-primary" name='logout'>Log Out</button>
                 </form>
            </div>
        </div>
    </div>
 <?php
        }
    } else {
    if(isset($_POST['submit'])) {
       $login = htmlspecialchars($_POST['login']);
       $pass = htmlspecialchars($_POST['password']);
       // echo $login . " " . $pass;
       $conn = mysqli_connect('localhost','webPLA','123asd','portal');
       if (!$conn) {
        echo 'Błąd połączenia z baża danych. Error : ' . mysqli_connect_error();
       }    else {
            $sqlSelect = 'SELECT login, haslo FROM users';
            $result = mysqli_query($conn, $sqlSelect);
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $flag = true;
            foreach ($users as $user) {
            // echo $user['login'] . " - " . $user['haslo'] . "<br>";
            if($user['login'] == $login && $user['haslo'] == $pass ){
             echo "Jestem zalogowany";
            $flag = false;
            $_SESSION['loginSession'] = $login;
            header('location: loginup.php');
         // break;  
        }
      } 
    if ($flag) echo "Błędnie podane hasło.";
       }
    }
    

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="mb-3">
            <label for="exampleInputlogin1" class="form-label">Login</label>
            <input type="login" class="form-control" id="exampleInputlogin1" aria-describedby="emailHelp" name="login">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Hasło</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name='submit'>Zaloguj</button>
        <button type="submit" class="btn btn-primary" name="cancel">Cancel</button>
    </form>
</div>
</div>
</div>
    
</body>
</html>
<?php } ?>
<?php include('site/footer.php'); ?>