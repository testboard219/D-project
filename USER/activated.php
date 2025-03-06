<?php

if(isset($_POST['takein'])){

    header("location:signin.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css" integrity="sha512-NtU/Act0MEcVPyqC153eyoq9L+UHkd0s22FjIaKByyA6KtZPrkm/O5c5xzaia4pyCfReCS634HyQ7tJwKNxC/g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="lgin.css">
	<style>
	
	</style>
    <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> 

    <title></title>
</head>
<body>

<div class="login-background" style="background-color:#000; background-image:url('assets/img/log-reg.jpg'); background-repeat:repeat;">
    <!---marque-->
    <div class="livecoinwatch-widget-5" lcw-base="USD" lcw-color-tx="#999999" lcw-marquee-1="coins" lcw-marquee-2="movers" lcw-marquee-items="10" ></div>

    <!----------mine--->
    <div class="container" style="margin-top:50px;">
        <div class="row mt-20 justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5 justify-content-center" style=" align-items: center; display:flex;"> 
           
        
    </div>
            </div>
        <div class="row justify-content-center">
            
            <div class="col-sm-12 col-md-6 col-lg-5">
                <div class="card" style="position: relative; top:0%;"> 
                    <!--------form----->
                <form action="" method="POST" class="con_timeline" id="">
                
                <div class="form-group">
                        <div class="col-sm-12 justify-content-center" style=" display:flex;">
                        <h3 class=" mb-5" style="color:#1a2255;">Email has been verified</h3></div>

                        <label for="" class="inpu-label"><h5>Click on the continue button to proceed </h5></label>
                        <div class="input-cnt">
                        
                        
                        
                        </div>
                        <br>
                        
                        
                        <input type="submit" name="takein" value="Countinue"  name='submit' class="btn btn-primary sce_nce">
                        

                    </div>
                </form>
                
                <!-----<p style="text-align:center;"> Dont Have An Account Yet? <a href="signup.php">sign up </a></p>------>

                <hr>
                <p style="text-align:center;"> © copyright 2024  apex-lite  All Rights Reserved.</p>

            </div></div>
        </div>
</div>


</div>
</body>
</html>