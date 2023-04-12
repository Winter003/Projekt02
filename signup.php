<?php include('site/header.php'); ?>
<?php
$error = array("", "", "", "", "", true);
if (isset($_POST['submit'])) {
    $imie = htmlspecialchars($_POST['imie']);
    if ($imie == "" || strlen($imie) < 3) {
        $error[0] = "Brak imienia.";
        // echo $error[0];
    }
    $nazwisko = htmlspecialchars($_POST['nazwisko']);
    if ($nazwisko == "" || strlen($nazwisko) < 3) {
        $error[1] = "Brak nazwiska.";
    }
    $mail = htmlspecialchars($_POST['mail']);
    if ($mail == "") {
        $error[2] = "Brak mail'a.";
    }
    $login = htmlspecialchars($_POST['login']);
    if ($login == "" || strlen($login) < 2) {
        $error[3] = "Brak loginu.";
    }
    $haslo1 = htmlspecialchars($_POST['haslo1']);
    $haslo2 = htmlspecialchars($_POST['haslo2']);
    if (
        !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $haslo1)
        || !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $haslo2)
        || $haslo1 != $haslo2
    )
        $error[4] = "Hasło musi posiadać min. 8 znaków i być identyczne.";
    // 1wwwdAw@dwaA!aa
    
    if (!empty($_POST['regulamin'])) {
        $error[5] = true;
    } else {
        $error[5] = false;
    }
}
?>

<!-- formularz -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- <form action="signup.php" method="post"> -->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <h2>Formularz</h2>
                <div class="mb-3">
                    <?php
                    if ($error[0] != "") {
                    ?>
                        <label for="" class="alert alert-warning"><?php echo $error[0]; ?></label>
                    <?php } ?>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Imię" name="imie">
                </div>
                <div class="mb-3">
                    <?php
                    if ($error[1] != "") {
                    ?>
                        <label for="" class="alert alert-warning"><?php echo $error[1]; ?></label>
                    <?php } ?>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nazwisko" name="nazwisko">
                </div>
                <div class="mb-3">
                    <?php
                    if ($error[3] != "") {
                    ?>
                        <label for="" class="alert alert-warning"><?php echo $error[3]; ?></label>
                    <?php } ?>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Login" name="login">
                </div>
                <div class="mb-3">
                    <?php
                    if ($error[2] != "") {
                    ?>
                        <label for="" class="alert alert-warning"><?php echo $error[2]; ?></label>
                    <?php } ?>
                    <input type="mail" class="form-control" id="exampleFormControlInput1" 
placeholder="nazwa@mail.com
" name="mail">
                </div>
                <div class="mb-3">
                    <?php
                    if ($error[4] != "") {
                    ?>
                        <label for="" class="alert alert-warning"><?php echo $error[4]; ?></label>
                    <?php } ?>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="hasło" name="haslo1">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="powtórz hasło" name="haslo2">
                </div>
                <div class="form-check">
                      <?php 
                      if (!$error[5]) {
                      ?>
                      <label for="" class="alert alert-warning">Musisz zaakceptować regulamin, aby korzystać z serwisu internetowego.</label>
                      <?php } ?>
                    <input class="form-check-input" type="checkbox" value="regulamin" id="flexCheckChecked" name="regulamin">
                    <label class="form-check-label" for="flexCheckChecked">
                        Akceptuje regulamin strony Internetowej.
                    </label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3" name="submit">Gotowe</button>
                    <button type="reset" class="btn btn-primary mb-3">Wyczyść</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- end - formularz -->
<?php

if($error[0] == "" && $error[1] == "" && $error[2] == "" && $error[3] == "" && $error[4] == "" && $error[5]) {
  $conn = mysql_connect('localhost','webPLA','123asd','portal');
  if ($conn) {
    echo "Połączono z bazą danych";
  }
}

?> 