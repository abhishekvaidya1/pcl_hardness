<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>PCL-Hardness</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="<?php echo base_url();?>img/icn.png" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->                
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>css/theme-default.css"/>
<!--        <link href="<?php echo base_url(); ?>css/bootstrap/bootstrap.min.css" rel="stylesheet">
         EOF CSS INCLUDE       
        JS INCLUDE-
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>-->
        <!---EOF-->
    </head>
    <body>

        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div style="color:white;"><center><img src="<?php echo base_url();?>img/ind.png"></center></div>
                <div class="login-body">
                    <div class="login-title"><strong>PCL-Hardness</strong></div>
                    <form class="form-horizontal" method="post" name="login" action="<?php echo base_url()?>login">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="pass" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <!--<a href="#" class="btn btn-link btn-block">Forgot your password?</a>-->
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    
                    
                    </form>
                </div>
                
            </div>
            
        </div

    </body>
    
</html>


<?php
ob_start(); // Turn on output buffering
system('ipconfig /all'); //Execute external program to display output
$mycom=ob_get_contents(); // Capture the output into a variable
ob_clean(); // Clean (erase) the output buffer
$findme = "Physical";
$pmac = strpos($mycom, $findme); 
$ip=$_SERVER['REMOTE_ADDR'];// Find the position of Physical text
$mac=shell_exec("arp -a ".escapeshellarg($ip)); // Get Physical Address
echo $mac;
?>



