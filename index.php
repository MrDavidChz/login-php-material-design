<?php require_once 'class/class_login.php'; 
$login = new login();
if (isset($_POST['save']) and $_POST['save']=='1')
{
    $login->generateSession();
}else{

}
echo md5('123456');
?>
   



<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>

    <!-- Styles -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
<!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="#">
                        Mi sistema 
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">


                     <?php 
                         if (isset($_SESSION['nick'])) {
                             echo "<li><a href='#'>Usuario ".$_SESSION['nick']."</a></li>";
                             echo "<li><a href='destroy_sesion.php'>Cerrar Sesión</a></li>";
                         } else {
                             echo "<li><a href='index.php'>Login</a></li>";
                         }
                         
                      ?>
                            

                      
                    </ul>
                </div>
            </div>
        </nav>
       

     


        <div class="container">

            <?php

        if(!isset($_SESSION["nick"]))
        {
        ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Login</div>

                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="">
                           
                                <input type="hidden" name="save" value="1">
                                <div class="form-group ">
                                    <label for="email" class="col-md-4 control-label">Usuario</label>

                                    <div class="col-md-6">
                                        <input id="NAME" type="text" class="form-control" name="name" value="" required autofocus>

                                    
                                            <span class="help-block">
                                                <strong>    </strong>
                                            </span>
                                    
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                      
                                            <span class="help-block">
                                                <strong> 
                                                    <?php
                                                        if(isset($_GET['usuario']))
                                                        {
                                                            switch($_GET['usuario'])
                                                            {
                                                                case 'no_existe':
                                                                ?>
                                                                    Los datos introducidos no existen
                                                                <?php
                                                            }
                                                        }
                                                    ?>  
                                                </strong>
                                            </span>
                                   
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
       <?php
        }else{
        ?>
        <h2>Bienvenido de nuevo <?php echo $_SESSION['nick']?></h2>
        
        <?php
        }
        ?>
            </div>




        </div>

    </div>


    <!-- Latest compiled and minified JavaScript -->
    <!-- jquery  -->    
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <!-- boostrap js  -->    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <!-- material js  -->    
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
 <!-- efecto circular js  -->    
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
 <script>
    $.material.init();
</script>
</body>
</html>
