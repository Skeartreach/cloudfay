<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Skemo - Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

      <link rel="stylesheet" href="./Bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="./Bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" href="./Bootstrap/dist/css/custom.css">
      <link rel="icon" type="image/png" src="./images/icon.ico">

  </head>
<img  class="container margin-top-s img-responsive" src="./images/logo2.png">

      @if(Session::has('message'))
      <div class="alert alert-dismissable alert-warning">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4>Attention</h4>
                <p>{{ Session::get('message') }}</p>
              </div>
      @endif
  <body>

<div class="container margin-top-s">
    {{ Form::open(array('url' => 'login/check', 'method' => 'put' ,'class' => 'form-signin')) }}
      <legend class="form-signin-heading">Connexion</legend> 
        {{ Form::text('frm_username','', array('class' => 'form-control','required','autofocus', 'placeholder'=>"Identifiant")) }}
        {{ Form::password('frm_password', array('class' => 'form-control','required', 'placeholder'=>"Mot de passe" )) }}
        {{ Form::submit('Connexion',array('class' => 'btn btn-lg-3 btn-warning btn-block')) }}
        <a class='no-underline' href='./signup' ><input type='button' class='btn btn-lg-3 btn-default btn-block' value="S'inscrire"></input></a>
    {{ Form::close() }}
    
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="./Bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./Bootstrap/assets/js/bootswatch.js"></script>
<script src="libraries/jquery-2.0.3.js" type="text/javascript"></script>
<script src="./Bootstrap/Scripts/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
        <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
        <![endif]-->
  </body>
</html>
