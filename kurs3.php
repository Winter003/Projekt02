<?php
session_start();
include('site/header.php');
?>
<?php
if (isset($_SESSION['loginSession'])) {
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

<div class="card">
  <div class="card-header">
    JavaScript
  </div>
  <div class="card-body">
    <h2 class="card-title">Kurs JavaScrpit</h2>
    <p class="card-text">Łatwa i przyjemna nauka języka JavaScrpit.</p>
    <a href="#" class="btn btn-primary">Rozpocznij</a>
  </div>
</div>
     
        <?php } else { ?>
        <div class="cointainer">
            <div class="row">
                <div class="col-12">
                    <h1>Brak dostępu do kursów </h1>
                    <p>Musisz się <a href="loginup.php">zalogować </a> lub <a href="signup.php">zarejestrować</a> do portalu.</p>
                </div>
            </div>
        </div>

        <?php } ?>
        <?php include('site/footer.php'); ?>