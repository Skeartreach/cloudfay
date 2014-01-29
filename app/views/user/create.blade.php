<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Cloudfay - Nouveau profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

      <link rel="stylesheet" href="./Bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="./Bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" href="./Bootstrap/dist/css/custom.css">
      <link rel="icon" type="image/png" src="./images/icon.ico">

  </head>
  <div class='container'>
<img  class="margin-top-s img-responsive" style='padding-left: 8%; padding-right: 2%; display: inline; float:left; margin-bottom:2%;' src="./images/logoNewUser.png">
</div>
      @if(Session::has('message'))
      <div class="alert alert-dismissable alert-warning">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4>Attention</h4>
                <p>{{ Session::get('message') }}</p>
              </div>
      @endif
  <body>
  <div class='container'>
  <div class="well">
              {{ Form::open(array('url' => 'user/create', 'method' => 'put' ,'class' => 'bs-example form-horizontal')) }}
                <fieldset>
                  <legend>Nouveau Profil</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-5">
                      {{ Form::email('frm_lastName','', array('class' => 'form-control','required','autofocus', 'placeholder'=>"Email")) }}
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Mot de passe</label>
                    <div class="col-lg-5">
                    {{ Form::password('frm_password', array('class' => 'form-control','required', 'placeholder'=>"Mot de passe" )) }}
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Confirmation</label>
                    <div class="col-lg-5">
                    {{ Form::password('frm_passwordConfirm', array('class' => 'form-control','required', 'placeholder'=>"Confirmation" )) }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Nom</label>
                    <div class="col-lg-5">
                      {{ Form::text('frm_lastName','', array('class' => 'form-control','required','autofocus', 'placeholder'=>"Nom")) }}
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Prénom</label>
                    <div class="col-lg-5">
                      {{ Form::text('frm_firstName','', array('class' => 'form-control','required', 'placeholder'=>"Prénom")) }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="btnSubmit" class="col-lg-2 control-label"></label>
                    <div class="col-lg-5">
                      {{ Form::button('Inscription',array('class' => 'btn btn-warning form-control', 'type'=>'submit')) }}
                    </div>
                  </div>
                    </fieldset>
              {{ Form::close() }}
            </div>
            </div>
    
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
