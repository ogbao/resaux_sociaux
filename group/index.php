<!DOCTYPE HTML>
<html>
<head>
    <title>Bon Serviteur</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
     <link href="code/style3.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="icon/icon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
<body class="bg-white">

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
    <div class="navbar-header">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Menu" aria-controls="Menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    
    <div class="collapse navbar-collapse" id="Menu">
    <a class="navbar-brand" href="#"><img src="bcoin.ico" width="30" height="30" class="d-inline-block align-top" alt="Bon Serviteurs" style="margin-right: -6px;margin-top: -1px;"/>on Serviteur</a>
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/tp1_/"> Accueil</a>
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
<div class="box" style="margin-left:120px;">
<button style="border-radius:5px;" data-toggle="collapse" data-target="#demo" id="group">Groupes</button>
<button style="border-radius:5px;" data-toggle="collapse" data-target="#demo1" id="discouver">Découvrir</button>
</div>
<div id="demo" class="collapse">
       <div class="container-fluid text-left" style="background:white"style="height: 600px" style="margin-top: 20px;">
                            <div class="bigbox" style="margin-top: 20px;">
                                <h1>Votre groupes</h1>
                                <div class="row">
                                <div class="colum">
                               <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                               <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                               </div>
                            <div class="colum">
                              <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                               <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                               <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                              </div>
                               <div class="colum">
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                               <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                </div>
                                 </div>
                    </div>
  </div>
</div>
<div id="demo1" class="collapse">
       <div class="container-fluid text-left" style="background:white"style="height: 600px" style="margin-top: 20px;">
                            <div class="bigbox" style="margin-top: 20px;">
                                <h1>Recommendés</h1>
                                <div class="row">
                                <div class="colum">
                               <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                               <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                               </div>
                            <div class="colum">
                              <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                               <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                               <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                              </div>
                               <div class="colum">
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                               <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                <div class="minibox">
                                    <div class="chat friend">
                                         <a  style="color: black;" href="" target="_top">Nom de groupe</a>
                                         <div class="user-photo"><img src=""></div>
                                         
                                    </div>
                                </div>
                                </div>
                                 </div>
                    </div>
  </div>
</div>
 </div>       
 </div>        
<style type="text/css">
<!--
	*{
    margin: 0;
    padding: 0;
    font-family: tahoma, sans-serif;
    box-sizing: border-box;
    
}

body {
    background: #1ddced;
}

a:link{
    color:blue;
    text-decoration:none;
}

a:hover {
    color: blue;
    text-decoration:underline;
}

.minibox:hover{
    background:#cccccc;
    text-decoration:none;
}

.smallbox{
    width:500px;
    min-width:200px;
    height:200px;
    margin-left:20px;
    margin-top:20px;
    background: #ffffff;
    margin-top:15px;
}

.box{
    width:90%;
    min-width:10px;
    height:28px;
    background: white;
    margin-top:15px;
}

.bigbox{
    width:85%;
    min-width:250px;
    height:600px;
    margin-top:15px;
    margin-left: 105px;
    margin-right: 15px;
    border-radius:5px;
    background: #f0f0f0;
    margin-top:15px;
}


.minibox{
    width:280px;
    min-width:50px;
    height:100px;
    margin-left:75px;
    margin-top:30px;
    border-radius:5px;
    background: #ffffff;
    margin-top:5px;
}


.chat .user-photo{
    width: 60px;
    height: 60px;
    background: #ccc;
    border-radius: 50%;
    overflow: hidden;
}

.chat .user-photo img{
    width: 100%;
}


p.alignLeft {
    text-align: left;
}

.column {
    float:left;
    width: 33%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

-->
</style>
</body>

</html>
