<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
    <link href="/tp1_/code/style.css" rel="stylesheet"/>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <link href="/tp1_/icon/icon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
   	<title>Bcoin Free</title>
</head>
<body class="bg-light">

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="navbar-header">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Menu" aria-controls="Menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    
    <div class="collapse navbar-collapse" id="Menu">
    <a class="navbar-brand" href="#"><img src="/tp1_/icon/bcoin.ico" width="30" height="30" class="d-inline-block align-top" alt="Bon Serviteurs" style="margin-right: -6px;margin-top: -1px;"/>on Serviteur</a>
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#"> Accueil</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/tp1_/cours"> Cours</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/tp1_/group"> Groupe</a>
        </li>
                <form class="form-inline col-auto">
        <div class="input-group">
    <input class="form-control " type="search" placeholder="Rechecher" aria-label="Search" style="width:500px;"/>
    <div class="input-group-prepend">
    <button class="btn btn-light rounded"><img src="/tp1_/icon/search.svg" height="16"></button>
    </div>
    </div>
    </form>
        </ul>

           </div>
    <?php

session_start();
$username = $_POST["user"];
$pass = $_POST["pass"];
$list_user = json_decode(file_get_contents('../user.json'), true);
$Ubount_array = count($list_user['users']);
if (isset($username) && isset($pass)||isset($_SESSION['user_name'])&&isset($_SESSION['passw']))
{
    $temp=-1;
    $login=0;
    for($i=0;$i<$Ubount_array;$i++)
    if($list_user['users'][$i]['username']==$username&&$list_user['users'][$i]['pass']==md5($pass)||$list_user['users'][$i]['username']==$_SESSION['user_name']&&$list_user['users'][$i]['pass']==md5($_SESSION['passw']))
    $temp=$i;
    if($temp!=-1||isset($_SESSION['user_name'])&&isset($_SESSION['passw']))
    {
        $login=1;
        /*$_SESSION['user_name'] = $username;
        $_SESSION['passw'] = $pass;*/
        echo '<div class="btn-group mr-0">
  <a href="#" id="avatar" class="btn btn-outline-light profile pr-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:none;"><span class="glyphicon glyphicon-name"><img src="https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.0-9/14908224_1075247312592517_8058790757912515162_n.jpg?oh=603d71f4c4acfe96d136cdd809e9c4b1&oe=5B020C46" width="30" height="30"alt="" style="border-radius: 100%;"/></span>&nbsp;&nbsp;' .
            $list_user['users'][$temp]['info']['0']['first_name'] . " " . $list_user['users'][$temp]['info']['0']['last_name'] .
            '
</a>
  <div class="dropdown-menu" aria-labelledby="avatar">
    <a class="dropdown-item" href="profil">Votre profil(e)</a><hr/>
    <a class="dropdown-item" href="profil#amis">Votre amis</a>
    <a class="dropdown-item" href="#">Votre cours</a><hr/>
    <a class="dropdown-item" href="#">Réglage</a><hr/>
    <a class="dropdown-item" href="#">Se déconnecter</a>
  </div>
</div>';
}
    else
        echo "    
        <a href='#Signin' class='btn btn-login' style='border: none;' data-target='#Signin' data-toggle='modal'>Se connecter</a>
        <a class='btn btn-login' href='#signup' data-target='#Signup' data-toggle='modal'>S'incrire</a>";
    
} else
{
    echo "    
        <a  href='#Signin' class='btn btn-login' style='border: nonel' data-target='#Signin' data-toggle='modal'>Se connecter</a>
        <a class='btn btn-outline-login' href='#signup' data-target='#Signup' data-toggle='modal'>S'incrire</a>";
}

?>

</nav>

<div class="nav-scroller bg-white box-shadow container-fluid mb-3">
      <nav class="nav navbar-expand-sm navbar-light nav-underline">
        <a class="navbar-brand" href="#">Tableau de bord</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link-2" href="#new cours">Nouveaux cours <span class="sr-only">(current)</span>
        <span class="badge badge-pill bg-light align-text-bottom" style="color: red;">99+</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link-2" href="#">Explorer</a>
      </li>
            <li class="nav-item active">
        <a class="nav-link-2" href="#">Proposer</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link-2 ropdown-toggle dropdown-toggle-split" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Categories
      <img src="icon/drop.svg" height="10"/>
  </a>
        <div class="collapse" id="collapseExample">
          <a class="dropdown-item" href="#informatiqueR" data-target="#informatiqueR">Informaique</a>
          <a class="dropdown-item" href="#physiqueR">Physique</a>
        </div>
      </li>
      <?php
	if($login==1)
    echo '<li class="nav-item active">
        <a class="nav-link-2" href="#">Mes Cours</a>
      </li>';
?>
      </ul>
        
          </div>
          <?php
          if($login==1)
	echo '<a class="btn btn-sm btn-outline-info" href="creer.php">Creér le cours</a>';
?>
          
      </nav>
    </div>

<div class="modal fade" id="Signup" tabindex="-1" role="dialog" aria-labelledby="Signup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <span><img src="icon/account.svg"/> </span>
                <h4 class="modal-title font-weight-bold" id="myModalLabel">&nbsp; S'incrire</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
            <form method="post" action="" id="signup-form">
            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">
                    <label for="Name" class="font-weight-bold">Prénom</label>
                    <input onblur="check(event)" oninvalid="check(event)" minlength="3" placeholder="Prénom"  type="text" name="prenom" id="prenom" class="form-control" required />
                    </div>
                    <div class="col-6">
                    <label for="Name" class="font-weight-bold">Nom</label>
                    <input onblur="check(event)" oninvalid="check(event)" minlength="3" placeholder="Nom"  type="text" name="nom" id="nom" class="form-control" required  />
                    </div>
                </div>
                </div> 
                <div class="form-group">
                <label for="Sex" class="font-weight-bold">Sexe</label>
                    <select name="sexe" name="sexe" id="sexe" class="form-control">
                        <option>Femme</option>
                        <option>Homme</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="email" class="font-weight-bold">E-Mail</label>
                    <div class="input-group">
                        <input onblur="check(event)" placeholder="E-Mail" name="email1" id="email1" type="text" class="form-control" required/>
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input onblur="check(event)"  placeholder="exemple.com" name="email2" id="email2" type="text" class="form-control" required/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="font-weight-bold">Nom d'utilisateur</label>
                    <input class="form-control" oninvalid="check(event)" minlength="5 placeholder="Nom d'utilisateur" type="text" id="usr" name="usr" onblur="check(event)" placeholder="Nom d'utilisateur" oninvalid="check(event)" required/>
                </div>
                
                <div class="form-group">
                <label for="psw" class="font-weight-bold">Passe</label>
                <input onblur="check(event)" minlength="3" oninvalid="check(event)" placeholder="Choisir un mot de passe" type="password" name="psw" id="psw" class="form-control" required/>
                </div>
                <div class="form-check">
                <input onblur="check(event)" type="checkbox" class="form-check-input" required/><label class="form-check-label" for=""> J'accepte les <a href="#">Contrat d'utilisateur</a> et la <a href="#">Politique de confidentialité</a></label>
                </div>
            </div>
            <input type="submit" class="btn btn-primary form-control" value="Créer un compte" id="signup" name="signup"/>
            </form>
            <div class="modal-footer">
            <a href="#" data-target="#Signin" data-dismiss="modal" data-toggle="modal" style="margin-right: 120px;">Vous avez déjà un compte ?</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Signin" tabindex="-1" role="dialog" aria-labelledby="Signin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <span><img src="icon/login.ico"/> </span>
                <h4 class="modal-title" id="myModalLabel">&nbsp; Se connecter</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
            <form method="post" action="" id="signin-form">
                <div class="form-group">
                    <label for="Username" class="font-weight-bold">Nom d'utilisateur</label>
                    <input id="user" name="user" type="text" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="Passe" class="font-weight-bold">Mot de passe</label>
                    <input id="pass" name="pass" type="password" class="form-control" required />
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember" class=""/>  Gardez-moi connecté sur cet ordinateur.
                </div>
                <input type="submit" class="btn btn-primary form-control" value="Se connecter" id="login" name="login" class="form-control"/>
            </form>
            </div>
            
            <div class="modal-footer">
            
            <a href="#">Mot de passe oublié ?</a>&nbsp;&nbsp;<a href="#Signup" data-target="#Signup" data-dismiss="modal" data-toggle="modal" >Pas encore de compte ? Inscrivez-vous</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-center" style="">
    <div class="row">

            <div class="col-sm-12 card" style="text-align: left;" id="new cours">
        <div class="row" style="background-color: #C1C1C1;">
        <div class="offset-1 col-sm-10 bg-dark">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="crop" src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t1.0-9/13924929_993651310752118_6581195814438915053_n.jpg?_nc_cat=0&oh=c1391b64d765ae717ee30a90feea163d&oe=5B5DD73B" alt="First slide"style="width: 800px; height: 354.355px;">
                        <div class="carousel-caption d-none d-md-block">
                        <h5 class="">Nouvelle Course</h5>
                        </div>
                    </div>
                     <div class="carousel-item">
                        <img class="crop" src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t35.18174-12/s2048x2048/30825813_1605306812919895_363498154_o.jpg?_nc_cat=0&oh=daa3fab8ad55b17454a90326a3f3c211&oe=5AEAAE52" alt="Second slide"style="width: 800px; height: 354.355px;">
                     </div>
                     <div class="carousel-item">
                        <img class="crop" src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t1.0-9/13924929_993651310752118_6581195814438915053_n.jpg?_nc_cat=0&oh=c1391b64d765ae717ee30a90feea163d&oe=5B5DD73B" alt="Third slide"style="width: 800px; height: 354.355px;">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="crop" src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t1.0-9/13924929_993651310752118_6581195814438915053_n.jpg?_nc_cat=0&oh=c1391b64d765ae717ee30a90feea163d&oe=5B5DD73B" alt="Third slide"style="width: 800px; height: 354.355px;">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                         </div>
                    </div>
                    <div class="carousel-item">
                         <img class="crop" src="https://scontent.fsgn5-2.fna.fbcdn.net/v/t1.0-9/13924929_993651310752118_6581195814438915053_n.jpg?_nc_cat=0&oh=c1391b64d765ae717ee30a90feea163d&oe=5B5DD73B" alt="Third slide"style="width: 800px; height: 354.355px;">
                         <div class="carousel-caption d-none d-md-block">
                         <h5>...</h5>
                         </div>
                    </div>
                </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" ></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

</div>
    </div>
    <div class="row my-2">
    <div class="col-sm-12">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background-color: silver;">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="row">
      <div class="offset-2 card col-sm-2 mr-3 text-left" >
      <img src="https://udemy-images.udemy.com/course/240x135/1289478_5831_8.jpg" class="card-img-top pt-2" />
        <h6>IOS 11 & Switch 4 - Professionnel</h6>
        <blockquote class="blockquote-footer text-center">Pro. Jean</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      </div>
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1587718_8fdf.jpg" class="card-img-top pt-2" />
        <h6>Node JS - Advanced</h6>
        <blockquote class="blockquote-footer text-center">Pro. Jean</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
      <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1561458_7f3b.jpg" class="card-img-top pt-2" />
        <h6>CSS - Pour les débutants</h6>
        <blockquote class="blockquote-footer text-center">Pro. Johann</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$23 </s> <strong style="font-size: 15px;"> $15</strong></p>
      
      </div>
      
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1187016_51b3.jpg" class="card-img-top pt-2" />
        <h6 class="text-left">L'ultime Bootcamp MySQL</h6>
        <blockquote class="blockquote-footer text-center">Pro. Vinh</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
    </div>
    </div>
    <div class="carousel-item">
          <div class="row">
      <div class="offset-2 card col-sm-2 mr-3 text-left" >
      <img src="https://udemy-images.udemy.com/course/240x135/1289478_5831_8.jpg" class="card-img-top pt-2" />
        <h6>IOS 11 & Switch 4 - Professionnel</h6>
        <blockquote class="blockquote-footer text-center">Pro. Jean</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      </div>
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1587718_8fdf.jpg" class="card-img-top pt-2" />
        <h6>Node JS - Advanced</h6>
        <blockquote class="blockquote-footer text-center">Pro. Adam</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
      <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1561458_7f3b.jpg" class="card-img-top pt-2" />
        <h6>CSS - Pour les débutants</h6>
        <blockquote class="blockquote-footer text-center">Pro. Johann</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$23 </s> <strong style="font-size: 15px;"> $15</strong></p>
      
      </div>
      
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/713104_d4cb.jpg" class="card-img-top pt-2" />
        <h6>Deep learning in python</h6>
        <blockquote class="blockquote-footer text-center">Pro. Bach</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only rounded">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only rounded">Next</span>
  </a>
</div>
</div>
    
    </div>
    <div class="row mt-5"  id="informatiqueR">
    <h5 class="font-weight-light text-uppercase">Informatique</h5>
    <hr/>
    <div class="col-sm-12">
    <div id="informatique" class="carousel slide" data-ride="carousel" style="background-color: silver;">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="row">
      <div class="offset-2 card col-sm-2 mr-3 text-left" >
      <img src="https://udemy-images.udemy.com/course/240x135/1289478_5831_8.jpg" class="card-img-top pt-2" />
        <h6>IOS 11 & Switch 4 - Professionnel</h6>
        <blockquote class="blockquote-footer text-center">Pro. Jean</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      </div>
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1587718_8fdf.jpg" class="card-img-top pt-2" />
        <h6>Node JS - Advanced</h6>
        <blockquote class="blockquote-footer text-center">Pro. Jean</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
      <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1561458_7f3b.jpg" class="card-img-top pt-2" />
        <h6>CSS - Pour les débutants</h6>
        <blockquote class="blockquote-footer text-center">Pro. Johann</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$23 </s> <strong style="font-size: 15px;"> $15</strong></p>
      
      </div>
      
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1187016_51b3.jpg" class="card-img-top pt-2" />
        <h6 class="text-left">L'ultime Bootcamp MySQL</h6>
        <blockquote class="blockquote-footer text-center">Pro. Vinh</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
    </div>
    </div>
    <div class="carousel-item">
          <div class="row">
      <div class="offset-2 card col-sm-2 mr-3 text-left" >
      <img src="https://udemy-images.udemy.com/course/240x135/1289478_5831_8.jpg" class="card-img-top pt-2" />
        <h6>IOS 11 & Switch 4 - Professionnel</h6>
        <blockquote class="blockquote-footer text-center">Pro. Jean</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      </div>
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1587718_8fdf.jpg" class="card-img-top pt-2" />
        <h6>Node JS - Advanced</h6>
        <blockquote class="blockquote-footer text-center">Pro. Adam</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
      <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1561458_7f3b.jpg" class="card-img-top pt-2" />
        <h6>CSS - Pour les débutants</h6>
        <blockquote class="blockquote-footer text-center">Pro. Johann</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$23 </s> <strong style="font-size: 15px;"> $15</strong></p>
      
      </div>
      
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/713104_d4cb.jpg" class="card-img-top pt-2" />
        <h6>Deep learning in python</h6>
        <blockquote class="blockquote-footer text-center">Pro. Bach</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#informatique" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only rounded">Previous</span>
  </a>
  <a class="carousel-control-next" href="#informatique" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only rounded">Next</span>
  </a>
</div>    
    </div>
    </div>
    
        <div class="row mt-5" id="physiqueR">
    <h5 class="font-weight-light text-uppercase">Physique</h5>
    <hr/>
    <div class="col-sm-12">
    <div id="physique" class="carousel slide" data-ride="carousel" style="background-color: silver;">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="row">
      <div class="offset-2 card col-sm-2 mr-3 text-left" >
      <img src="https://udemy-images.udemy.com/course/240x135/382714_2a1b_2.jpg" class="card-img-top pt-2" />
        <h6>VSD - Flux de conception physique</h6>
        <blockquote class="blockquote-footer text-center">Pro. Jean</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      </div>
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1519886_3d63_3.jpg" class="card-img-top pt-2" />
        <h6 class="text-left">Webinaire sur la conception physique</h6>
        <blockquote class="blockquote-footer text-center">Pro. Jean</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
      <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/382714_2a1b_2.jpg" class="card-img-top pt-2" />
        <h6>CSS - Pour les débutants</h6>
        <blockquote class="blockquote-footer text-center">Pro. Johann</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$23 </s> <strong style="font-size: 15px;"> $15</strong></p>
      
      </div>
      
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1187016_51b3.jpg" class="card-img-top pt-2" />
        <h6 class="text-left">L'ultime Bootcamp MySQL</h6>
        <blockquote class="blockquote-footer text-center">Pro. Vinh</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
    </div>
    </div>
    <div class="carousel-item">
          <div class="row">
      <div class="offset-2 card col-sm-2 mr-3 text-left" >
      <img src="https://udemy-images.udemy.com/course/240x135/1519886_3d63_3.jpg" class="card-img-top pt-2" />
        <h6>Physique & IoT</h6>
        <blockquote class="blockquote-footer text-center">Pro. Jean</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      </div>
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/1587718_8fdf.jpg" class="card-img-top pt-2" />
        <h6>Apprendre le processus d'inventaire physique</h6>
        <blockquote class="blockquote-footer text-center">Pro. Adam</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
      <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/382714_2a1b_2.jpg" class="card-img-top pt-2" />
        <h6>CSS - Pour les débutants</h6>
        <blockquote class="blockquote-footer text-center">Pro. Johann</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$23 </s> <strong style="font-size: 15px;"> $15</strong></p>
      
      </div>
      
            <div class="card col-sm-2 mr-3">
<img src="https://udemy-images.udemy.com/course/240x135/713104_d4cb.jpg" class="card-img-top pt-2" />
        <h6>Deep learning in python</h6>
        <blockquote class="blockquote-footer text-center">Pro. Bach</blockquote>
        <div><img src="icon/star.svg" height="10" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /><img src="icon/star.svg" height="11" /> 4.7 (548)</div>
        <p class="text-right"><s>$13</s> <strong style="font-size: 15px;"> $10</strong></p>
      
      </div>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#physique" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only rounded">Previous</span>
  </a>
  <a class="carousel-control-next" href="#physique" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only rounded">Next</span>
  </a>
</div>    
    </div>
    </div>
    
    </div>
    
</div>
<style type="text/css">

.nav-link-2 {
    color: black;
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link-2:hover, .nav-link-2:focus {
  text-decoration: none;
}

.nav-link-2.disabled {
  color: #6c757d;
}

<!--    .nav-link:hover
{
        background-color: #0080C0;
        color: #E1E1E1;
}
	.crop {
    width: 100%;
    text-align: center;
    overflow: hidden;
}

.btn-login{color: white;}
  
  .btn-login:hover{color: #E1E1E1;
  }
  
  .btn-outline-login{
    color: white;
    border-color: white;
  }  
    .btn-outline-login:hover{
    color: #E1E1E1;
    border-color: #E1E1E1;
  } 

img.crop {
    position: relative;
    left: 50%;
    transform: translate(-50%,0)
}
-->
</style>
</body>
<footer class="page-footer font-small bg-primary text-white pt-4 mt-4">

    <!--Footer Links-->
    <div class="container-fluid text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-md-10">
                <h5 class="text-uppercase"> Bon Serviteur</h5>
                <p>Se Connectez avec les auter à tout le monde. Partagez et apprenez plus de connaissances ensemble.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled list-inline">
            <li class="list-inline-item bg-light rounded">
                <a href="#" class=" btn-floating btn-sm btn-fb mx-1">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item bg-light rounded">
                <a href="#"class="btn-floating btn-sm btn-tw mx-1">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item bg-light rounded">
                <a href="#" class="btn-floating btn-sm btn-gplus mx-1 ">
                    <i class="fa fa-google-plus"> </i>
                </a>
            </li>
        </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-2 text-center">
        © 2018 Copyright:
        <a href="https://fb.com/4" class="px-1" style="color: antiquewhite;"> Ông Gia Bảo - Trần Quốc Hào </a>
    </div>
    <!--/.Copyright-->

</footer>
</html>