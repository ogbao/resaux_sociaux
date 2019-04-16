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
  <a href="#" id="avatar" class="btn btn-outline-light profile pr-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:none;"><span class="glyphicon glyphicon-name"><img src="https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.0-9/14908224_1075247312592517_8058790757912515162_n.jpg?oh=603d71f4c4acfe96d136cdd809e9c4b1&oe=5B020C46" width="30" height="30"alt="" style="border-radius: 100%;"/></span>&nbsp;&nbsp;' .
            $list_user['users'][$temp]['info']['0']['first_name'] . " " . $list_user['users'][$temp]['info']['0']['last_name'] .
            '
</a>
  <div class="dropdown-menu" aria-labelledby="avatar">
    <a class="dropdown-item" href="../profil">Votre profil(e)</a><hr/>
    <a class="dropdown-item" href="../profil#amis">Votre amis</a>
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
    
      <?php
	if($login==1)
    echo '<li class="nav-item active">
        <a class="nav-link-2" href="#">Mes Cours</a>
      </li>';
?>
      </ul>
        
          </div>
          
      </nav>
    </div>
    <p class="alert-1"></p>
    <div class="container">
    <div class="row card">
    <div class="col-sm-12">
    <h3>Creér le cours</h3><hr />
    </div>
    <form class="needs-validation ml-3" novalidate>
  <div class="form-row">
    <div class="col-md-8 mb-3">
      <label for="validationTooltip01">Nom du cours</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Nom du cours" value="" required>
      <div class="valid-tooltip">
        Valide!
      </div>
      <div class="invalid-tooltip">
        invalide!
      </div>
    </div>

  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3">
      <label for="validationTooltip03">Cible</label>
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
    <input type="radio" aria-label="Radio button for following text input" checked/>
    </div>
    <span class="input-group-text" id="">Élèves</span>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>
</div>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationTooltip04">State</label>
      <div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
    <input type="radio" aria-label="Radio button for following text input"/>
    </div>
    <span class="input-group-text" id="">Étudiants</span>
  </div>
  <input type="text" class="form-control disable" aria-label="Text input with radio button" disabled/>
</div>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
  </div>
  <div class="form-row">
  <div class="col-4 mb-3">
  <label >Téléverser la photo de couverture</label>
  <label for="image-upload" class="custom-file-upload btn btn-outline-secondary w-75" id="lb-img" style="float: left;margin-right: 8px;">
            <img src="/tp1_/profil/icon/image.svg" height="16" style="margin-right: 3px;" />La photo de couverture
            </label>
            <input id="image-upload" type="file" name="img-upload" class="form-control-file img-upload" value="" accept=".jpg, .jpeg, .png"/>
      <p class="preview"></p>
      </div> 
      <div class="col-6 mb-3">
      <label >Téléverser la vidéo</label>
            <label for="file-upload" class="video-upload btn btn-outline-secondary w-100" style="float: left;margin-right: 8px;">
            <img src="/tp1_/profil/icon/video.svg" height="16" style="margin-right: 3px;" /> Les vidéos
            </label>
            <input id="file-upload" type="file" name="file-upload"/>
            <p class="priview2"></p>
  </div>
  
  </div>
  <div class="form-row">
  <div class="col-5 mb-3">
  <label>Pris</label>
  <div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
    <input type="radio" aria-label="Radio button for following text input" checked/>
    </div>
    <span class="input-group-text" id="">$</span>
  </div>
<input type="number" class="form-control"/>
</div>
      <div class="invalid-tooltip">
        Invalide!
      </div>
            <div class="valid-tooltip">
        Valide!
      </div>
  
  </div>
  <div class="col-5 mb-3">
  <label style="color: transparent;">null</label>
    <div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
    <input type="radio" aria-label="Radio button for following text input"/>
    </div>
    <span class="input-group-text" id="">$</span>
  </div>
<input type="text" class="form-control" value="Gratuit" readonly/>
</div>
  </div>

  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    var i =4;
    var aler = document.querySelector('.alert-1');
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
            i--; 
          event.preventDefault();
          event.stopPropagation();
          
        }

        form.classList.add('was-validated');
                       if(i==4) {
        
        aler.innerHTML = '<div class="alert alert-success" role="alert">A Créé votre cours</div>';
        sleep(2000);
        } 
      }, false);

    });      
  }, false);

})();

var input = document.querySelector(".img-upload");
    var preview = document.querySelector(".preview")
    input.addEventListener('change', updateImageDisplay);
    
    function updateImageDisplay() {
  while(preview.firstChild) {
    preview.removeChild(preview.firstChild);
  }

  var curFiles = input.files[0];
  if(curFiles.length === 0) {
    var para = document.createElement('p');
    para.textContent = 'No files currently selected for upload';
    preview.appendChild(para);
  } else {
    var list = document.createElement('ol');
    preview.appendChild(list);
      var listItem = document.createElement('li');
      var para = document.createElement('p');
      if(validFileType(curFiles)) {
        para.textContent = curFiles.name;
        var image = document.createElement('img');
        image.src = window.URL.createObjectURL(curFiles);
        image.classList.add("img-thumbnail");

        listItem.appendChild(image);
        listItem.appendChild(para);

      } else {
        para.textContent = 'File name ' + curFiles.name + ': Not a valid file type. Update your selection.';
        listItem.appendChild(para);
      }

      list.appendChild(listItem);
  }
}

var fileTypes = [
  'image/jpeg',
  'image/pjpeg',
  'image/png'
]

function validFileType(file) {
  for(var i = 0; i < fileTypes.length; i++) {
    if(file.type === fileTypes[i]) {
      return true;
    }
  }

  return false;
}

var input1 = document.querySelector('.video-upload');
var preview1 = document.querySelector('.preview2');

input1.addEventListener('change', updateImageDisplay1);function updateImageDisplay1() {
  while(preview1.firstChild) {
    preview1.removeChild(preview.firstChild);
  }

  var curFiles1 = input1.files;
  if(curFiles1.length === 0) {
    var para1 = document.createElement('p');
    para1.textContent = 'No files currently selected for upload';
    preview1.appendChild(para1);
  } else {
    var list1 = document.createElement('ol');
    preview1.appendChild(list);
    for(var i = 0; i < curFiles1.length; i++) {
      var listItem1 = document.createElement('li');
      var para1 = document.createElement('p');
      if(validFileType1(curFiles1[i])) {
        para1.textContent = 'File name ' + curFiles1[i].name;
        var video = document.createElement('video');
        var source = document.createElement('source');
        source.src = window.URL.createObjectURL(curFiles[i]);
        video.appendChild(source);
        listItem1.appendChild(video);
        listItem1.appendChild(para1);

      } else {
        para1.textContent = 'File name ' + curFiles1[i].name + ': Not a valid file type. Update your selection.';
        listItem1.appendChild(para);
      }

      list1.appendChild(listItem1);
    }
  }
}
var fileTypes2 = [
  'video/mp4'
];

function validFileType1(file) {
  for(var i = 0; i < fileTypes2.length; i++) {
    if(file.type === fileTypes2[i]) {
      return true;
    }
  }

  return false;
}

function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}
</script>
    </div>
    </div>
    
    <style type="text/css">
    input[type="file"] {
    display: none;
}

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
    </html>