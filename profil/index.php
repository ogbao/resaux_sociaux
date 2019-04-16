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
    <a class="navbar-brand" href="#"><img src="bcoin.ico" width="30" height="30" class="d-inline-block align-top"alt="" style="margin-right: -6px;margin-top: -1px;"/>on Serviteur</a>
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/tp1_/index.php"> Accueil</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/tp1_/cours"> Cours</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/tp1_/group"> Groupe</a>
        </li>
              <form class="form-inline col-auto">
        <div class="input-group">
    <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="width:500px;"/>
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
if (isset($_SESSION['user_name']) && isset($_SESSION['passw']))
{
    $temp = -1;
    for ($i = 0; $i < $Ubount_array; $i++)
        if ($_SESSION['user_name'] == $list_user['users'][$i]['username'] && md5($_SESSION['passw']) ==
            $list_user['users'][$i]['pass'])
            $temp = $i;
    if ($temp != -1)
    {
        echo '<div class="btn-group mr-0">
  <a href="#" class="btn btn-outline-light profile pr-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:none;"><span class="glyphicon glyphicon-name"><img src="https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.0-9/14908224_1075247312592517_8058790757912515162_n.jpg?oh=603d71f4c4acfe96d136cdd809e9c4b1&oe=5B020C46" width="30" height="30"alt="" style="border-radius: 100%;"/></span>&nbsp;&nbsp;' .
            $list_user['users'][$temp]['info']['0']['first_name'] . " " . $list_user['users'][$temp]['info']['0']['last_name'] .
            '
</a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/tp1_/profil">Votre profil(e)</a><hr/>
    <a class="dropdown-item" href="#amis" role="tab">Votre amis</a>
    <a class="dropdown-item" href="#">Votre cours</a><hr/>
    <a class="dropdown-item" href="#">Réglage</a><hr>
    <a class="dropdown-item" href="#">Se déconnecter</a>
  </div>
</div>';
    } else
    {
        header('Location: /tp1_/index.php');
    }
} else
{
    header('Location: /tp1_/index.php');
}

?>

</nav>
<div class="container-fluid text-center" style="margin-top: 20px;">
    <div class="row">
    
        <div class="col-sm-3">
        
            <div id='card-profil' class="card position-fixed" style="width: 18rem;">
            <img src="http://cafefcdn.com/thumb_w/650/2018/2/18/photo1518922864235-15189228642361784280444.jpeg" class="rounded float-left" width="100%">
            <div class="card-body">
            <h3 class="text-center card-title"><?php

echo $list_user['users'][$temp]['info']['0']['first_name'] . " " . $list_user['users'][$temp]['info']['0']['last_name'];

?></h3>
    <h6 class="card-subtitle mb-2 text-muted"><?php

echo '@' . $list_user['users'][$temp]['username'];

?></h6>

        <div class="nav flex-column nav-pills text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="journal-tab" data-toggle="pill" href="#journal" role="tab" aria-controls="v-pills-journal" aria-selected="true">Journal</a>
  <a class="nav-link " id="profil-tab" data-toggle="pill" href="#profil" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profil</a>
  <a class="nav-link" id="apropos-tab" data-toggle="pill" href="#apropos" role="tab" aria-controls="v-pills-propos" aria-selected="false">Photos-Vidéo</a>
  <a class="nav-link" id="amis-tab" data-toggle="pill" href="#amis" role="tab" aria-controls="v-pills-messages" aria-selected="false">Amis <span class="badge badge-light">4</span></a>
  <a class="nav-link" id="settings-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
</div>
                </div>
            </div>
                </div>
        <div class="col-sm-7 " style="text-align: left;">
        <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="journal" role="tablist" aria-labelledby="v-pills-journal-tab">
            <form method="post" action="#" enctype="multipart/form-data">
            <div class="row">
            <div class="col-sm-12">
            <div class="card" style="margin-bottom: 20px;">
            <div class="card-body" >
            <div class="row">
            <div class="col-sm-1">
            <img src="http://cafefcdn.com/thumb_w/650/2018/2/18/photo1518922864235-15189228642361784280444.jpeg" class="rounded-circle" height="40" width="45"/>
            </div>
            <div class="col-sm-11">
            <div class="row">
                <textarea id="Stt" name="Stt" class="form-control col-sm-12" aria-label="With textarea" style="border: none;" onblur="text()" placeholder="Describe yourself here..." required></textarea>
            </div>
            <div class="row">
            <div class="col-sm-12 preview">
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="card-footer text-right" style="background-color: #EBEBEB;">

            <label for="image-upload" class="custom-file-upload btn btn-light" id="lb-img" style="float: left;margin-right: 8px;">
            <img src="icon/image.svg" height="16" style="margin-right: 3px;" />Les images / Les vidéo
            </label>
            <input id="image-upload" type="file" name="img-upload" class="form-control-file img-upload" value="" accept=".jpg, .jpeg, .png"/>
            
            <label for="file-upload" class="custom-file-upload btn btn-light" style="float: left;margin-right: 8px;">
            <img src="icon/file.svg" height="16" style="margin-right: 3px;" /> Attach le ficher
            </label>
            <input id="file-upload" type="file" name="file-upload"/>
            <button class="btn btn-light" style="float: left;margin-right: 8px;">Check in</button>
                        <select class="btn btn-light" style="margin-right: 8px;" name="option">
                <option>Publicité</option>
                <option>Privée</option>
            </select>
            <input class="btn btn-primary" href="#" type="submit" name="post" id="post" value="Post"/>
            </div>
            </div>
            </div>
            </div>
            </form>
            
            <?php

$read_file_post = file_get_contents('post.json');
$list_post = json_decode($read_file_post, true);
$Ubount_array_post = count($list_post['posts']);
if (isset($_POST['post']))
{
    if (isset($_POST['Stt']))
        $stt = $_POST['Stt'];
    else
        $stt = null;
    if (isset($_FILES['img-upload']))
    {
        $type = explode('/', $_FILES['img-upload']['type']);
        if (!$_FILES['img-upload']['errors'] && ($type[0] == 'image' || $type[0] ==
            'video') && $_FILES['img-upload']['size'] < 200000)
        {
            $img = $_FILES['img-upload']['name'];
            move_uploaded_file($_FILES['img-upload']['tmp_name'], 'media/' . $_FILES['img-upload']['name']);
        } 
    } else
        $img = null;
        if(isset($_POST['option']))
        {
            $opt = $_POST['option'];
        }
    $data = array(
        'stt' => $stt,
        'time' => time(),
        'img' => $img,
        'opt' => $opt
        );
    if ($list_post == null || $list_post == '')
        file_put_contents('post.json', json_encode(array('posts' => array($data))));
    else
        if ($list_post != '' || $list_post != null)
        {
            array_push($list_post['posts'], $data);
            file_put_contents('post.json', json_encode($list_post));
        }
}
$read_file_post = file_get_contents('post.json');
$list_post = json_decode($read_file_post, true);
$Ubount_array_post = count($list_post['posts']);
$progess = '<div class="progress" id="pro1">
  <div class="progress-bar progress-bar-striped progress-bar-animated" id="pro" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
</div>';
for ($i = $Ubount_array_post - 1; $i >= 0; $i--)
{
    echo '
    <div class="row">
    <div class="col-sm-12">
    <div class="card" style="margin-top: 10px;">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-1">
                    <img src="http://cafefcdn.com/thumb_w/650/2018/2/18/photo1518922864235-15189228642361784280444.jpeg" class="rounded-circle" height="40" width="45"/>
                </div>
                <div class="col-sm-6 text-left">
                <span><h6><a href="#">' . $list_user['users'][$temp]['info']['0']['first_name'] .
        " " . $list_user['users'][$temp]['info']['0']['last_name'] .'</a></h6>
                <div class="text-muted blockquote-footer" style="margin-top: -4px;">
                <small>'.date('l m D Y h:i:s',$list_post['posts'][$i]['time']);
                if($list_post['posts'][$i]['opt']=="Publicité") echo'<img src="icon/public.svg" height="11" class="ml-1" data-toggle="tooltip" data-placement="top" title="Publicité"/>';
                else echo'<img src="icon/private.svg" height="10" class="ml-1" data-toggle="tooltip" data-placement="top" title="Privée"/>';
                
                echo '</small>
                </div></span>
                </div>
    </div>
    <div class="row">
    <div class="col-sm-11"><p class="text-justify" style="color: black;margin-top:10px;">'.$list_post['posts'][$i]['stt'].'</p>
                <audio controls>
            <source src="speech.php?t='.$list_post['posts'][$i]['stt'].'" type="audio/mpeg"/>
            Your browser does not support the audio element.
            </audio>';
                if($list_post['posts'][$i]['img']!=null)
                echo '<img class="img-thumbnail" src="media/'.$list_post['posts'][$i]['img'].'"/>';
    echo '
    </div>
    <div class="col-sm-1"></div>
    </div><hr />
        <div class="row">
    <button class="btn btn-reaction col-sm-3" style="height: 40px;" onclick="like(event)"><img id="love" src="icon/love.svg" height="35"/> J'."'".'aime</button>
    <button class="col-sm-3 btn-reaction btn" style="height: 40px;"><img src="icon/comment.svg" height="23"/> Commentaire</button>
    <button class="col-sm-3 btn-reaction btn" style="height: 40px;"><img src="icon/shared.svg" height="24"/> Partager</button>
    <button class="offset-sm-2 col-sm-1 btn btn-sm btn-light float-left"><i class="fa fa-ellipsis-h"></i></button>
    </div>
    </div>
    <div class="card-footer" style="background-color: #F0F8FF;">
    <img src="http://cafefcdn.com/thumb_w/650/2018/2/18/photo1518922864235-15189228642361784280444.jpeg" class="rounded-circle mr-1" height="40" width="45"/>
    <input class="col-sm-11 rounded float-right" type="text"/>
    </div>
    </div>
    </div>
    </div>';
       
}

?>  
        </div>
  <div class="tab-pane fade show card px-3 py-3" id="profil" role="tablist" aria-labelledby="v-pills-profile-tab" style="background-color: white;">
  <h1>Votre profil</h1><hr />
  <span><label class="font-weight-bold">Nom:</label>
   <?php

echo $list_user['users'][$temp]['info']['0']['first_name'] . " " . $list_user['users'][$temp]['info']['0']['last_name'];

?></span>
    <span style="position: relative;left:50%">
  <label class=" font-weight-bold"> Sexe: </label> <?php

echo $list_user['users'][$temp]['info']['0']['sex'];

?></span>
<p>
<span style="">
<label class="font-weight-bold">
Nom d'utiliseur: 
</label>
<?php

echo '@' . $list_user['users'][$temp]['username'];

?>
</span>
</p>
  </div>
  <div class="tab-pane fade " id="apropos" role="tabpanel" aria-labelledby="v-pills-propos-tab">
  <div class="border bg-white rounded py-3 px-3 ">
  <h3>PHOTOS</h3>
  <hr />
  <?php
	$dir = count(scandir('media'));
    $file = scandir('media');
    for($j = $dir-1;$j >= 0;$j--)
    {
        $type = explode(".",$file[$j]);
        if($type[1]=="jpg" || $type[1]=="png" || $type[1]=="jpeg")
        echo '<img src="media\\'.$file[$j].'" width="190" class="img-thumbnail mx-2 mt-2"  />';
    }
?>
</div>

<div class="border bg-white rounded my-3 py-3 px-3">
  <h3>VIDÉOS</h3>
  <hr />
  <?php
	$dir = count(scandir('media'));
    $file = scandir('media');
    for($j = $dir-1;$j >= 0;$j--)
    {
        $type = explode(".",$file[$j]);
        if($type[1]=="mp4" || $type[1]=="mov")
        echo '<video width="320" height="240" controls>
  <source src="media\\'.$file[$j].'" type="video/mp4">
  Your browser does not support the video tag.
</video>';
    }
?>
</div>
  </div>
  <div class="tab-pane fade" id="amis" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <div class="row">
  <div class="col-sm-5">
  <div class="row pb-2">
  <div class="card">
  <div class="row">
  <div class="col-sm-3"> 
  <img src="http://cafefcdn.com/thumb_w/650/2018/2/18/photo1518922864235-15189228642361784280444.jpeg" height="80"/>
  </div>
  <div class="col-sm-9 text-center">
  <h6 class="">Dương Gia Thịnh</h6>
  <small class="text-muted ml-5">Il y a 90 amis</small>
  <img src="/tp1_/icon/al-friend.svg" class="ml-5" height="15"/>
  </div>
  </div>
  </div>
  </div>
  
  <div class="row">
  <div class="card">
  <div class="row">
  <div class="col-sm-3"> 
  <img src="http://cafefcdn.com/thumb_w/650/2018/2/18/photo1518922864235-15189228642361784280444.jpeg" height="80"/>
  </div>
  <div class="col-sm-9 text-center">
  <h6 class="">Trần Quốc Hào</h6>
  <small class="text-muted ml-5">Il y a 90 amis</small>
  <img src="/tp1_/icon/al-friend.svg" class="ml-5" height="15"/>
  </div>
  </div>
  </div>
  </div>
  
  </div>
  
  <div class="offset-2 col-sm-5">
  <div class="row pb-2">
  <div class="card">
  <div class="row">
  <div class="col-sm-3"> 
  <img src="http://cafefcdn.com/thumb_w/650/2018/2/18/photo1518922864235-15189228642361784280444.jpeg" height="80"/>
  </div>
  <div class="col-sm-9 text-center">
  <h6 class="">Gia Bảo</h6>
  <small class="text-muted ml-5">Il y a 100 amis</small>
  <img src="/tp1_/icon/al-friend.svg" class="ml-5" height="15"/>
  </div>
  </div>
  </div>
  </div>
  <div class="row pb-2">
  <div class="card">
  <div class="row">
  <div class="col-sm-3"> 
  <img src="http://cafefcdn.com/thumb_w/650/2018/2/18/photo1518922864235-15189228642361784280444.jpeg" height="80"/>
  </div>
  <div class="col-sm-9 text-center">
  <h6 class="">Lý Tiểu Bảo</h6>
  <small class="text-muted ml-5">Il y a 100 amis</small>
  <img src="/tp1_/icon/al-friend.svg" class="ml-5" height="15"/>
  </div>
  </div>
  </div>
  </div>
  
  </div>
  
  </div>
  </div>
  
  <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
  <div class="card py-3 px-3">
  <h3>Paramètres</h3>
  <hr style="border-color: gray;"/>
  <div class="row">
  <div class="col-sm-3">
  <span class='font-weight-bold'>Nom </span>
    </div>
  <div class="col-sm-6 text-center">
  <?php
	echo "".$list_user['users'][$temp]['info']['0']['first_name'] . " " . $list_user['users'][$temp]['info']['0']['last_name'];
?>
</div>
<div class="offset-1 col-sm-2 text-center">
<a href="#">Modifier</a>
</div>
  </div>
  <hr />
  <div class="row">
  <div class="col-sm-3">
  <span class="font-weight-bold">Nom de compte</span>
  </div>
  <div class="col-sm-6 text-center">
  <?php
	echo '@' . $list_user['users'][$temp]['username'];
?>
  
  </div>
  <div class="offset-1 col-sm-2 text-center">
  <a href="#">Modifier</a>
  </div>
  </div>
  <hr />
    <div class="row">
  <div class="col-sm-3">
  <span class="font-weight-bold">Mot de passe</span>
  </div>
  <div class="col-sm-6 text-center">
<input type="password" class="input-control text-center" style="font-size: 20px; border: none;" readonly value="121231233123123"/> 
  </div>
  <div class="offset-1 col-sm-2 text-center">
  <a href="#">Modifier</a>
  </div>
  </div>
  <hr />
  <div class="row">
  <div class="col-sm-3">
  <span class="font-weight-bold">Email</span>
  </div>
  <div class="col-sm-6 text-center">
  <?php
	echo $list_user['users'][$temp]['info']['0']['email'];
?>
  
  </div>
  <div class="offset-1 col-sm-2 text-center">
  <a href="#">Modifier</a>
  </div>
  </div>
  </div>
  </div>
</div>
      </div>
        <div class="col-sm-3 " style="text-align: left;">
        </div>

    </div>
    </div>
    <style type="text/css">
<!--
    .nav-link:hover
{
        background-color: #0080C0;
        color: #E1E1E1;
}
    
    input[type="file"] {
    display: none;
}



    .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
    
	.btn-love{content: url(icon/love.svg);
    }
    .btn-love:hover{content: url(icon/loved.svg);}
    .btn-love:visited{content: url(icon/loved.svg);}
    .btn-love:active{content: url(icon/loved.svg);}
    
    .btn-cmt{content: url(icon/comment.svg);}
    .btn-cmt:hover{content: url(icon/comment.svg);}
    
    .btn-share{
        content: url(icon/shared.svg);}
    .btn-share:hover{content: url(icon/shared.svg);}
    
    .btn-reaction{
      color: #212529;
  background-color: transparent;
  border-color: transparent;
}

.btn-reaction:hover {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-reaction:focus, .btn-reaction.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-reaction:not(:disabled):not(.disabled):active:focus, .btn-reaction:not(:disabled):not(.disabled).active:focus,
.show > .btn-reaction.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
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
-->
</style>
    <script type="text/javascript">
<!--

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

    
-->
</script>
    </body>
    </html>
    
    
    <?php
	function getSslPage($url)
{
    //header('user-agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
?>