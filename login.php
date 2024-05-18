<?php session_start();
 include_once('autoload.php');
 $error_message=''; if(isset($_SESSION['user_details']) && isset($_SESSION['user_id'])){

                        $confirm=bursary::login_bursary($_SESSION['user_details']['username'],$_SESSION['user_details']['password']);

                        $crows=$confirm['row_count'];

                        if($crows >0){
 echo '<script type="text/javascript">window.location.href="my-applications.php";</script>'; 
}else{
 session_destroy();
 echo '<script type="text/javascript">window.location.href="login.php";</script>';
                        }
                    
}else{

                    if(isset($_POST['login'])){

                    extract($_POST);

                    $confirm_login=bursary::login_bursary($username,$password);

                    $row_count=$confirm_login['row_count'];

                    $rows=$confirm_login['rows'];

                    if($row_count >0){

                    $_SESSION['user_details']=$rows;

                    $_SESSION['student']=$username;

                    $_SESSION['user_id']=$rows['bursary_id'];

                    echo '<script type="text/javascript">window.location.href="my-applications.php";</script>';
                    }else{ $error_message="<div class='alert alert-danger'>Login Failed! Incorrect username/password.</div>"; }

                    } 
                     
}
 ?><html>
<head>
<title>Login Page</title>

                    <meta name='viewport' content='width=device-width; initial-scale=1.0'>

                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>

                    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

                    </head>
<body>

                    <nav class="navbar navbar-inverse" style="background: blue;">
                      <div class="container-fluid">
                        <div class="navbar-header">
                          <a class="navbar-brand" href="#">Login | Student </a>
                        </div>
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="#"><i class='fa fa-user'></i>  Account</a></li>
                          <li><a href="index.php"><i class='fa fa-home'></i>  BACK</a></li>
                          
                        </ul>
                      </div>
                    </nav>

                        <div class='container-fluid'>
                        <div class='row'>

                            <div class='col-sm-4 col-md-4 col-xs-12 col-lg-4'></div>

                            <div class='col-sm-4 col-md-4 col-xs-12 col-lg-4'>

                                <form method='POST' action='login.php'>
                                <div class='panel panel-primary'>

                                    <div class='panel-heading'><i class='fa fa-graduation-cap'></i> STUDENT Log In</div>
                                    <div class='panel-body'><?php echo $error_message; ?>
                                    <div class="alert alert-info">
                                        For first time login user your phone number as username and admission number as password.
                                    </div>
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
