<?php include('site/header.php');?>


<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

<form action="">
<div class="container">
    <div class="row justify content start formularz">
        <div class="col-xl-2  col-md-4">
            <label for="exampleFormControlInput1" class="form-label center">Imię i nazwisko</label>
        </div>
        <div class="col-xl-4 col-md-8">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jan Kowalski">
</div>
</div>
<div class="row justify content start formularz">
        <div class="col-xl-2  col-md-4">
            <label for="exampleFormControlInput1" class="form-label center">E-mail:</label>
        </div>
        <div class="col-xl-4 col-md-8">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="jan@kowalski.pl">
</div>
</div>
<div class="row justify content start formularz">
        <div class="col-xl-2  col-md-4">
            <label for="exampleFormControlInput1" class="form-label center">Temat wiadomości</label>
        </div>
        <div class="col-xl-4 col-md-8">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Wpisz temat wiadomości">
</div>
</div>
<div class="row justify content start formularz">
        <div class="col-xl-2 col-md-4">
            <label for="exampleFormControlTextarea1" class="form-label">Wiadomość:</label>
</div>
            <div class="col-xl-4 col-md-8">
           
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Wpisz treść wiadomości"></textarea>
</div>
</div>
<div class="row justify content start formularz">
        <div class="col-xl-2  col-md-4">
            Dodać zabezpieczenie do wiadomości.
        </div>
      
        <div class="col-xl-2  col-md-4">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Wpisz kod do wysłania">
        </div>
</div>
         <div class="row justify content start formularz">
        <div class="col-xl-2  col-md-4">
    <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
    <button type="submit" class="btn btn-primary">Reset</button>
        </div>
    </div>
</div>
</form>







