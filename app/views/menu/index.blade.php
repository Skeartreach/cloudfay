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
              <form class="bs-example form-horizontal">
                <fieldset>
                  <legend>Nouveau Profil</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Checkbox
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" rows="3" id="textArea"></textarea>
                      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Radios</label>
                    <div class="col-lg-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Option one is this
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Option two can be something else
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button class="btn btn-default">Cancel</button> 
                      <button type="submit" class="btn btn-primary">Submit</button> 
                    </div>
                  </div>

      <div class="container margin-top-s" style='width:50%;'>
      {{ Form::open(array('url' => 'user/create', 'method' => 'put' ,'class' => 'form-horizontal')) }}
      <legend class="form-signin-heading">Noveau profil</legend> 
      {{ Form::text('frm_lastName','', array('class' => 'form-control','required','autofocus', 'placeholder'=>"Nom")) }}
      {{ Form::text('frm_firstName','', array('class' => 'form-control','required', 'placeholder'=>"Prénom")) }}
      {{ Form::text('frm_username','', array('class' => 'form-control','required', 'placeholder'=>"Identifiant")) }}
      {{ Form::password('frm_password', array('class' => 'form-control','required', 'placeholder'=>"Mot de passe" )) }}
      {{ Form::password('frm_passwordConfirm', array('class' => 'form-control','required', 'placeholder'=>"Confirmation" )) }}
      {{ Form::submit('Connexion',array('class' => 'btn btn-lg-3 btn-warning btn-block')) }}
      {{ Form::close() }}
                    </fieldset>
              </form>
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
