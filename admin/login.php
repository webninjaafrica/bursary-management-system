<?php session_start();
 include_once('autoload.php');
 $error_message=''; if(isset($_SESSION['user_details']) && isset($_SESSION['user_id'])){

                        $confirm=admin::login_admin($_SESSION['user_details']['username'],$_SESSION['user_details']['password']);

                        $crows=$confirm['row_count'];

                        if($crows >0){
 echo '<script type="text/javascript">window.location.href="home.php";</script>'; 
}else{
 session_destroy();
 echo '<script type="text/javascript">window.location.href="login.php";</script>';
                        }
                    
}else{

                    if(isset($_POST['login'])){

                    extract($_POST);

                    $confirm_login=admin::login_admin($username,$password);

                    $row_count=$confirm_login['row_count'];

                    $rows=$confirm_login['rows'];

                    if($row_count >0){

                    $_SESSION['user_details']=$rows;

                    $_SESSION['user_id']=$rows['admin_id'];

                    echo '<script type="text/javascript">window.location.href="home.php";</script>';
                    }else{ $error_message="<div class='alert alert-danger'>Login Failed! Incorrect username/password.</div>"; }

                    } 
                     
}
 ?><html>
<head>
<title>Admin Login Page</title>

                    <meta name='viewport' content='width=device-width; initial-scale=1.0'>

                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>

                    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

                    </head>
<body>

                    <nav class="navbar navbar-inverse">
                      <div class="container-fluid">
                        <div class="navbar-header">
                          <a class="navbar-brand" href="#">Login | Account </a>
                        </div>
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="#"><i class='fa fa-user'></i> Account</a></li>
                          
                        </ul>
                      </div>
                    </nav>

                        <div class='container-fluid'>
                        <div class='row'>

                            <div class='col-sm-4 col-md-4 col-xs-12 col-lg-4'></div>

                            <div class='col-sm-4 col-md-4 col-xs-12 col-lg-4'>

                                <form method='POST' action='login.php'>
                                <div class='panel panel-default'>

                                    <div class='panel-heading'><i class='fa fa-user'></i> Log In</div>
                                    <div class='panel-body'><?php echo $error_message; ?>

                                    <b>USERNAME:</b><br>

                                    <div class='form-group'><input type='text' class='form-control' required='required' name='username'></div>


                                    <b>PASSWORD:</b><br>

                                    <div class='form-group'><input type='password' class='form-control' required='required' name='password' placeholder='****'></div>

                                    
                                    </div>
                                    <div class='panel-footer'>
                                    <button class='btn btn-info' type='submit' name='login'><i class='fa fa-padlock'></i> Login</button></div>
                            
</div>
 </form>
 </div>

                            <div class='col-sm-4 col-md-4 col-xs-12 col-lg-4'></div>

                        
</div></div>
                    </body>

                    

 <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
                    
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
                    </html>
