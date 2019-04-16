<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
    <link href="/tp1_/code/style.css" rel="stylesheet"/>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <link href="/tp1_/icon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
   	<title>Bcoin Free</title>
</head>
<body>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-9">
<form method="post">
<input name="a" type="text"/>
<input name="submit" type="submit"/>

</form>

<?php
	echo '<div class="card" style="margin-top: 10px;">
    <div class="card-body">
    <div class="row">
    <div class="col-sm-1">
    <img src="http://cafefcdn.com/thumb_w/650/2018/2/18/photo1518922864235-15189228642361784280444.jpeg" class="rounded-circle" height="40" width="45"/></div><div class="col-sm-2 text-center">
    <span><h6><a href="#">Ông Gia Bảo</a></h6>
    <div class="text-muted blockquote-footer" style="margin-top: -4px;">
    <small>Il y a 1 minute</small></small></div></span></div></div>
    <div class="row"><div class="col-sm-11"><p class="text-justify" style="color: black;margin-top:10px;">'.$_POST['a'].'</p></div></div></div>
    <div class="card-footer text-right" style="background-color: #ebebe0;">
    <div class="row">
    <div class="col-sm-3 btn btn-light" style="float: left;margin-right:3px;"><img src="/tp1_/profil/image.svg" height="16"/> Like</div>
    <div class="col-sm-3 btn btn-light" style="float: left;margin-right:3px;">Comment</div>
    <div class="col-sm-3  btn btn-light" style="float: left;">Partager</div>
    <div class="offset-sm-1 col-sm-1 btn btn-light">...</div>
    </div></div></div>';

?>
</div>
</div>
</body>
</html>