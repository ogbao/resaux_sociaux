<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
    <link href="code/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="icon/icon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
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
    <a class="navbar-brand" href="#"><img src="icon/bcoin.ico" width="30" height="30" class="d-inline-block align-top" alt="Bon Serviteurs" style="margin-right: -6px;margin-top: -1px;"/>on Serviteur</a>
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#"> Accueil</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="cours"> Cours</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="group"> Groupe</a>
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
//session_start();
$username = $_POST["user"];
$pass = $_POST["pass"];
$list_user = json_decode(file_get_contents('user.json'), true);
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
  <a href="#" class="btn btn-outline-light profile pr-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:none;"><span class="glyphicon glyphicon-name"><img src="https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.0-9/14908224_1075247312592517_8058790757912515162_n.jpg?oh=603d71f4c4acfe96d136cdd809e9c4b1&oe=5B020C46" width="30" height="30"alt="" style="border-radius: 100%;"/></span>&nbsp;&nbsp;' .
            $list_user['users'][$temp]['info']['0']['first_name'] . " " . $list_user['users'][$temp]['info']['0']['last_name'] .
            '
</a>
  <div class="dropdown-menu">
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

</nav>&nbsp;

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

<div class="container-fluid text-center py-3">
<div id="stt">

<?php

$username = $_POST["user"];
$pass = $_POST["pass"];
$temp = 0;
$read_file = file_get_contents('user.json');
$list_user = json_decode($read_file, true);
$Ubount_array = count($list_user['users']);
if (isset($_POST['signup']))
{
    $list_user = json_decode($read_file, true);
    $Ubount_array = count($list_user['users']);
    if ($list_user == null || $list_user == '')
        $temp = 0;
    for ($i = 0; $i<$Ubount_array; $i++)
    {
        if ($list_user['users'][$i]['username'] == $_POST['usr'])
            $temp = 1;
    }

    if ($temp != 1)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Inscription réussie!</strong> Votre compte sera bientôt actif.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        $data = array(
            'username' => $_POST['usr'],
            'pass' => md5($_POST['psw']),
            'info' => array(array(
                    'first_name' => $_POST['prenom'],
                    'last_name' => $_POST['nom'],
                    'sex' => $_POST['sexe'],
                    'email' => $_POST['email1'] . '@' . $_POST['email2'])));
        $fileData = fopen("user.json", "w+") or die("Unable to open file!");
        if ($list_user == null || $list_user == '')
            file_put_contents('user.json', json_encode(array('users' => array($data))));
        else
            if ($list_user != '' || $list_user != null)
            {
              array_push($list_user['users'],$data);
              file_put_contents('user.json',json_encode($list_user));
            }
        fclose($fileData);
    }
    $Ubount_array = count($list_user['users']);
}

if (isset($_POST['login']))
{
    $temp = -1;
    for ($i = 0; $i<$Ubount_array;
        $i++)
        if($username == $list_user['users'][$i]['username'] && md5($pass) == $list_user['users'][$i]['pass']) 
        $temp = $i;
        if($temp == -1)
{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Votre <strong>nom d' .
            "'utilisateur ou mot de passe </strong>n'est pas vrai." .
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
 }   else
        {
            $_SESSION['user_name']=$username;
            $_SESSION['passw']=$pass;
        }
}
/*echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">Votre Nom d' .
"'utilisateur ou mot de passe n'est pas vrai." .
'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

*/

?>
</div>
    <div class="row">
    
        <div class="col-sm-12 card" style="text-align: left;">
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
                        <img class="crop" src="https://scontent-hkg3-2.xx.fbcdn.net/v/t1.0-9/55853789_2061679013949337_346148388095393792_n.jpg?_nc_cat=105&_nc_oc=AQklGhQ3P7EFiU4qfAuv6-1Lm7Akv3ewMuRtTVxlKbKuJGP46SvUxeiWrWOiKFGcsMQ&_nc_ht=scontent-hkg3-2.xx&oh=dece4297a6a5cc6bb03ab8f5cbae062a&oe=5D0C8907" alt="First slide"style="width: 800px; height: 354.355px;">
                        <div class="carousel-caption d-none d-md-block">
                        <h5 class="">Nouvelle Course</h5>
                        </div>
                    </div>
                     <div class="carousel-item">
                        <img class="crop" src="https://scontent-hkg3-2.xx.fbcdn.net/v/t1.0-9/55853789_2061679013949337_346148388095393792_n.jpg?_nc_cat=105&_nc_oc=AQklGhQ3P7EFiU4qfAuv6-1Lm7Akv3ewMuRtTVxlKbKuJGP46SvUxeiWrWOiKFGcsMQ&_nc_ht=scontent-hkg3-2.xx&oh=dece4297a6a5cc6bb03ab8f5cbae062a&oe=5D0C8907" alt="Second slide"style="width: 800px; height: 354.355px;">
                     </div>
                     <div class="carousel-item">
                        <img class="crop" src="https://scontent-hkg3-2.xx.fbcdn.net/v/t1.0-9/55853789_2061679013949337_346148388095393792_n.jpg?_nc_cat=105&_nc_oc=AQklGhQ3P7EFiU4qfAuv6-1Lm7Akv3ewMuRtTVxlKbKuJGP46SvUxeiWrWOiKFGcsMQ&_nc_ht=scontent-hkg3-2.xx&oh=dece4297a6a5cc6bb03ab8f5cbae062a&oe=5D0C8907" alt="Third slide"style="width: 800px; height: 354.355px;">
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
    <?php
	if($login==1) echo '

<div class="row pt-3 text-center">
<div class="col-sm-2 text-left py-3 ml-4 card rounded">
    <a class="btn-title " data-toggle="collapse" href="#votregroup" role="button" aria-expanded="false" aria-controls="votregroup">VOTRE GROUPES</a>
    
    <div class="collapse mb-3" id="votregroup">
    <div class="row" >
    <a href="#" class="btn-gr w-100 text-truncate" data-toggle="tooltip" data-placement="bottom" title="Groupe VienNamien-Fraçais"><img src="icon/group.svg" height="20" class="img-gr pl-3"/>Groupe VienNamien-Fraçais</a>
    <a href="#" class="btn-gr w-100 text-truncate" ><img src="icon/group.svg" height="20" class="img-gr pl-3"/> Toán-Lý-Hóa</a>
    <a href="#" class="btn-gr w-100 text-truncate"> <img src="icon/group.svg" height="20" class="img-gr pl-3"/> Aimez le C++</a>
    <a href="#" class="btn-gr w-100 text-truncate"><img src="icon/group.svg" height="20" class="img-gr pl-3"/> Aimez JAVA</a>  
    </div>
    </div>
    <a class="btn-title" data-toggle="collapse" href="#votrecourse" role="button" aria-expanded="false" aria-controls="votrecourse">VOTRE COURSES</a>
    <div class="collapse mb-3" id="votrecourse">
    <div class="row">
    <a class="btn-gr w-100 text-truncate" data-toggle="tooltip" data-placement="bottom" title=""><img src="icon/course.svg" height="20" class="pl-3 img-gr"/>Aprendre Fraçais</a>
        <a class="btn-gr w-100 text-truncate"><img src="icon/course.svg" height="20" class="img-gr pl-3"/>HTML/CSS/JS</a>
         </div>  
    </div>
    <a class="btn-title" data-toggle="collapse" href="#manager" role="button" aria-expanded="false" aria-controls="manager">MANAGER</a>
    <div class="collapse mb-3" id="manager">
    <div class="row">
    <a class="btn-gr w-100 text-truncate" data-toggle="tooltip" data-placement="bottom" title=""><img src="icon/course.svg" height="20" class="pl-3 img-gr"/>Aprendre Fraçais</a>
        <a class="btn-gr w-100 text-truncate"><img src="icon/course.svg" height="20" class="img-gr pl-3"/>HTML/CSS/JS</a>
    <a class="btn-gr w-100 text-truncate"><img src="icon/group.svg" height="20" class="img-gr pl-3"/>Partager C++/C/JAVA</a>
    </div>  
    </div>
    <a class="btn-title" data-toggle="collapse" href="#explorer" role="button" aria-expanded="false" aria-controls="explorer">EXPLORER</a>
    <div class="collapse mb-3" id="explorer">
    <div class="row">
    <a class="btn-gr w-100 text-truncate"><img src="icon/mark.svg" height="20" class="img-gr pl-3"/>Sauvé</a>
    <a class="btn-gr w-100 text-truncate"><img src="icon/event.svg" height="20" class="img-gr pl-3"/>Événement</a>
    <a class="btn-gr w-100 text-truncate"><img src="icon/videolive.svg" height="20" class="img-gr pl-3"/>Vidéo en direct</a>
    </div>
    </div>
    </div>
<div class="offset-1 col-sm-2 py-3 text-left card rounded">
    <h6 class="">HOT GROUPES</h6>
    <div class="row">
    <a href="#" class="btn-gr w-100 text-truncate" data-toggle="tooltip" data-placement="bottom" title="Groupe VienNamien-Fraçais"><img src="icon/group.svg" height="20" class="img-gr pl-3"/>Groupe VienNamien-Fraçais</a>
    <a href="#" class="btn-gr w-100 text-truncate"><img src="icon/group.svg" height="20" class="img-gr pl-3"/> Mathématiques</a>
        <a href="#" class="btn-gr w-100 text-truncate" data-toggle="tooltip" data-placement="bottom" title="programmation préférée"><img src="icon/group.svg" height="20" class="img-gr pl-3"/> Programmation préférée</a>
    <a href="#" class="btn-gr w-100 ml-3 text-truncate"><img src="icon/group.svg" height="20" class="img-gr"/> Aimez JAVA</a>
    </div>
    </div>
    <div class="offset-1 col-sm-2 py-3 text-left card rounded">
    <h6 class="">HOT COURSES</h6>
    <div class="row">
    <a href="#" class="btn-gr w-100 text-truncate"><img src="icon/course.svg" height="20" class="img-gr pl-3"/>Apprendre Fraçais</a>
    <a href="#" class="btn-gr w-100 text-truncate"><img src="icon/course.svg" height="20" class="img-gr pl-3"/> La langage C++</a>
    <a href="#" class="btn-gr w-100 text-truncate"> <img src="icon/course.svg" height="20" class="img-gr pl-3"/> La langage PHP</a>
    <a href="#" class="btn-gr w-100 text-truncate"><img src="icon/course.svg" height="20" class="img-gr pl-3"/> La langage HTML/CSS/JS</a>
    </div>
    </div>
    <div class="offset-1 col-sm-2 py-3 text-left card rounded">
    <h6>FRIEND</h6>
    <div class="row">
    <a href="chatbox.htm" class="btn-gr col-sm-12" data-toggle="tooltip" data-placement="top" title="Votre ami est en ligne,vous pouvez discuter avec lui"><img src="icon/acc-on.svg" height="20" class="img-gr pl-3"/> Johann Bach</a>
    <a href="chatbox.htm" class="btn-gr col-sm-12" data-toggle="tooltip" data-placement="top" title="Votre ami est en ligne,vous pouvez discuter avec lui"><img src="icon/acc-on.svg" height="20" class="img-gr pl-3"/>Trần Quốc Hào</a> 
    <a href="#" class="btn-gr col-sm-12" data-toggle="tooltip" data-placement="top" title="Oops désolé, votre ami n'."'est pas là, s'il vous plaît discuter plus tard".'"><img src="icon/acc-busy.svg" height="20" class="img-gr pl-3"/>Dương Gia Thịnh</a>
        <a href="chatbox.htm" class="btn-gr col-sm-12" data-toggle="tooltip" data-placement="top" title="Votre ami n'."est pas en ligne, Il y a 6 minutes".'"> <img src="icon/acc-off.svg" height="20" class="img-gr pl-3"/>Nguyễn Quốc Tảo</a>

    </div>
    </div>
    </div><!-- end-->';
        else echo '        <div class="row alert alert-warning alert-dismissible fade show my-2" role="alert">
  <strong>Participez maintenant </strong> &nbsp;pour créer les courses ou obtenir plus de cours gratuit
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <div class="row pt-3 text-center">
        <div class="offset-1 col-sm-4 py-3 text-left card rounded">
    <h6 class="text-center">HOT GROUPES</h6>
    <div class="row">
    <a href="#" class="btn-gr w-100 text-truncate" data-toggle="tooltip" data-placement="bottom" title="Groupe VienNamien-Fraçais"><img src="icon/group.svg" height="20" class="img-gr pl-3"/>Groupe VienNamien-Fraçais</a>
    <a href="#" class="btn-gr w-100 text-truncate"><img src="icon/group.svg" height="20" class="img-gr pl-3"/> Mathématiques</a>
        <a href="#" class="btn-gr w-100 text-truncate" data-toggle="tooltip" data-placement="bottom" title="programmation préférée"><img src="icon/group.svg" height="20" class="img-gr pl-3"/> Programmation préférée</a>
    <a href="#" class="btn-gr w-100 ml-3 text-truncate"><img src="icon/group.svg" height="20" class="img-gr"/> Aimez JAVA</a>
    </div>
    </div>
    
    <div class="offset-2 col-sm-4 py-3 text-left card rounded">
    <h6 class="text-center">HOT COURSES</h6>
    <div class="row">
    <a href="#" class="btn-gr w-100 text-truncate"><img src="icon/course.svg" height="20" class="img-gr pl-3"/>Apprendre Fraçais</a>
    <a href="#" class="btn-gr w-100 text-truncate"><img src="icon/course.svg" height="20" class="img-gr pl-3"/> La langage C++ (GRATUIT)</a>
    <a href="#" class="btn-gr w-100 text-truncate"> <img src="icon/course.svg" height="20" class="img-gr pl-3"/> La langage PHP</a>
    <a href="#" class="btn-gr w-100 text-truncate"><img src="icon/course.svg" height="20" class="img-gr pl-3"/> La langage HTML/CSS/JS</a>
    </div>
    </div>
    </div>';
?>
</div>
    </div>

<style type="text/css">
<!--

    .img-gr{
    margin-right: 30px !important;
    }
    
    .btn-title{
    color: #9A9A9A;
    cursor: pointer;
    font-size: 15px;
    text-transform: uppercase;
    font-weight: bold;
    padding: 10px 10px 10px 10px;
    text-align: center;
    }
    
    .btn-title:hover
    {
    cursor: pointer;
    background-color: #0082BF;
    color: whitesmoke;
    border-radius: 5px 5px 5px 5px;
    text-decoration: none;
    }
    .btn-title:focus{
        border-radius: 5px 5px 5px 5px;
        background-color: #208FFF;
    color: white;
    }
    
	.btn-gr{
    background-color: transparent;
    text-decoration: none;
    color:  #161616;
    padding: 5px 0px 5px 0px;
    white-space: nowrap;
    cursor: pointer;
    }
    .btn-gr:hover{
          background-color: #e2e6ea;
  border-color: whitesmoke;
  text-decoration: none;
    }
  
  .btn-login{color: white;}
  
  .btn-login:hover{color: #E1E1E1;
  }
  
  .btn-outline-login{
    color: white;
    border-color: white;
        box-shadow: 1px 1px 8px 2px white;
  }  
  
    .btn-outline-login:hover{
    color: #E1E1E1;
    border-color: #E1E1E1;
    box-shadow: 1px 1px 10px 5px white;
  }  
    .crop {
    width: 100%;
    text-align: center;
    overflow: hidden;
}

img.crop {
    position: relative;
    left: 50%;
    transform: translate(-50%,0)
}

.nav-link:hover
{
        background-color: #0080C0;
        color: #E1E1E1;
}

-->
</style>
<script type="text/javascript">
<!--
    /*if(document.getElementById("signup").submit())
        document.getElementById("stt").innerHTML='<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Inscription réussie!</strong> Votre compte sera bientôt actif.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
*/

	function check(event)
    {
        
        var kt = event.target;
        if(kt.value==""||kt.value==null||kt.value.length < 3) {
            kt.style.borderColor="red"; 
            //kt.classList.add('has-error');
            /*var icon_error = kt.createElement='span';
            icon_error.innerHTML='<span class="glyphicon glyphicon-remove form-control-feedback"></span>'; */  
            }
        else
             kt.style.borderColor="green";           
    }
      
-->
</script>

</body>

<!--Footer-->
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
<!--/.Footer-->
                      
</html>
