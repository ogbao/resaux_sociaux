<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
    <link href="code/style.css" rel="stylesheet"/>
    <link href="code/function.js" rel="stylesheet"/>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
   	<title>Bcoin Free</title>
</head>
<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="navbar-header">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Menu" aria-controls="Menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <a class="navbar-brand" href="#"><img src="bcoin.ico" width="30" height="30" class="d-inline-block align-top"alt=""/>Coin</a>
    <div class="collapse navbar-collapse" id="Menu">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#"> Accueill</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#"> Forum</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#"> Cours</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#"> Groupe</a>
        </li>
        </ul>
    
    </div>
</nav>&nbsp;

<div class="modal fade" id="Signup" tabindex="-1" role="dialog" aria-labelledby="Signup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <span><img src="account.svg"/> </span>
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
            <span><img src="login.ico"/> </span>
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
                    <input type="checkbox" name="remember" id="remember" class=""/> Gardez-moi connecté sur cet ordinateur.
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

<div class="container-fluid text-center" style="margin-top: 20px;">
<div id="stt">

</div>
    <div class="row">
        <div class="col-sm-2">
        
        </div>
        <div class="col-sm-8 " style="text-align: left;">
        <h3> Nouveau Post </h3>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E" alt="First slide"style="width: 800px; height: 354.355px;">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        </div>
                    </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E" alt="Second slide"style="width: 800px; height: 354.355px;">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E" alt="Third slide"style="width: 800px; height: 354.355px;">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E" alt="Third slide"style="width: 800px; height: 354.355px;">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                         </div>
                    </div>
                    <div class="carousel-item">
                         <img class="d-block w-100" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E" alt="Third slide"style="width: 800px; height: 354.355px;">
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
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

   <div class="row">
        <div class="col-sm-2">
        
        </div>
   <div class="col-sm-8 " style="text-align: left;">
    <h3>Nouveau Course</h3>
    </div>
  </div>
  <div class='row'>
  <div class="col-sm-2">
        
        </div>
    <div class='col-sm-8'>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E"></a>
              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E"></a>
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E"></a>
              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E"></a>
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E"></a>
              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.18173-12/30785097_584551435232993_1125986146_n.jpg?_nc_cat=0&oh=c8d77dd4b6a8c1c6f46d2496c89eff4a&oe=5AE5885E"></a>
              </div>      
            </div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>                          
    </div>
  </div>
</div>


        <div class="col-sm-2">
        <h3>Trend</h3>
        </div>
    </div>
</div>



<footer class="container-fluid text-center bg-dark" style="padding: 10px;">
  <p>&copy; Ông Gia Bảo</p>
</footer>
</body>
</html>