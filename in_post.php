
<?php

session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $con_pass = $_POST['con_pass'];
    $db = $_POST['db'];
    $gender = $_POST['gender'];
    $check = $_POST['check'];
    $upper = preg_match('@[A-Z]@', $pass);
    $lower = preg_match('@[a-z]@',$pass);
    $number = preg_match('@[0-9]@',$pass);
    $spcl = preg_match('@[!,#,$,%,^,&,*,-,_,+,=,/]@',$pass);



    $flag = false;
    
    //name
    if(!$name){
        $flag = true;
        $_SESSION['err_name'] = 'Please enter Your Name';

    }
    else{
        $_SESSION['old_name'] = $name;
    }


     //email
     if(!$email){
        $flag = true;
        $_SESSION['email_err'] = 'Please enter Your Email';

    }

    else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $flag = true;
            $_SESSION['email_err'] = 'Invalid Email Format';
            $_SESSION['old_email'] = $email;
        }
        $_SESSION['old_email'] = $email;
        
    }


     //phone
     if(!$phone){
        $flag = true;
        $_SESSION['phone_err'] = 'Please enter Your Phone';

    }
    else{
        $_SESSION['old_phone'] = $name;
    }
   


     //pass
     if(!$pass){
        $flag = true;
        $_SESSION['pass_err'] = 'Please enter Your Password';

    }
    else{
        if(!$upper){
            $_SESSION['upper_pass_err'] = 'Uppercase  Required. ';
        }

        if(!$lower){
            $flag = true;
            $_SESSION['lower_pass_err'] = 'Lowercase  Required. ';
        }

        if(!$number){
            $flag = true;
            $_SESSION['number_pass_err'] = 'Number  Required. ';
        }

        if(!$spcl){
            $flag = true;
            $_SESSION['spcl_pass_err'] = 'Special Charecter Required. ';
        }

        if(strlen($pass)<8){
            $flag = true;
            $_SESSION['pass_num_len'] = 'Minimum 8 Charecter Required. ';
        }


        $_SESSION['old_pass'] = $pass;
    }



     //con_pass
     if(!$con_pass){
        $flag = true;
        $_SESSION['con_pass_err'] = "Please enter Your Confirm Password ";

    }
    else{
        $_SESSION['old_con_pass'] = $con_pass;
    }

    if($pass != $con_pass){
        
        $_SESSION['match_pass_err'] = "Don't Match Your Password ";
    }
    



     //db
     if(!$db){
        $flag = true;
        $_SESSION['db_err'] = 'Please enter Your Birth Date';

    }

    else{
        $_SESSION['old_db'] = $db;
    }



     //gender
     if(!$gender){
        $flag = true;
        $_SESSION['gender_err'] = 'Please enter Your Gender';

    }

    else{
        $_SESSION['old_gender'] = $gender;
    }



     //check check_err
     if(!$check){
        $flag = true;
        $_SESSION['check_err'] = 'Please With Me';

    }
    

    if($flag){
        header('location:index.php');
    }
    else{?>





<!DOCTYPE html>
<html lang="en">
  <!--Created by Tivotal-->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - Abu Esa</title>

    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  

    <!--css file-->
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="container1">
      <div class="big-circle"></div>
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Hi, I am Abu Esa.<br>  I’m currently learning Dynamic Website Development with Raw PHP, Laravel framework. All of my projects are available at 
            <a style="text-decoration: none; color: #1A70BC;"  href="https://github.com/mhabuesa" target="_blank"> <b> GitHub </b></a> 
          </p>
          
          <div class="social-media">
            <p>Others Social Site</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
        <div class="contact-form">
          <div class="circle one"></div>
          <div class="circle two"></div>



          <!-- Login Field-->

          <form action="login_post.php" method="post">
            <h3 class="title" style="text-align: center;">Login</h3>

              
            <div class="input-container">
              <input type="text" name="email" class="input"  value="<?=(isset($_SESSION['old_email'])?$_SESSION['old_email']:'')?>"/>
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <?php
                      if(isset($_SESSION['email_err'])){?>
                      <div class="err-container"> <?= $_SESSION['email_err'];?> </div>
                      <?php }   ?>


            <div class="input-container">
              <input type="password" name="pass" class="input" value="<?=(isset($_SESSION['old_pass'])?$_SESSION['old_pass']:'')?>" />
              <label for="">Password</label>
              <span>Password</span>
            </div>
            <?php
                      if(isset($_SESSION['pass_err'])){?>
                      <div class="err-container"> <?= $_SESSION['pass_err'];?> </div>
                      <?php }   ?>

                      <?php
                      if(isset($_SESSION['upper_pass_err'])){?>
                      <div class="err-container"> <?= $_SESSION['upper_pass_err'];?> </div>
                      <?php }   ?>

                      <?php
                      if(isset($_SESSION['lower_pass_err'])){?>
                      <div class="err-container"> <?= $_SESSION['lower_pass_err'];?> </div>
                      <?php }   ?>

                      <?php
                      if(isset($_SESSION['number_pass_err'])){?>
                      <div class="err-container"> <?= $_SESSION['number_pass_err'];?> </div>
                      <?php }   ?>

                      <?php
                      if(isset($_SESSION['spcl_pass_err'])){?>
                      <div class="err-container"> <?= $_SESSION['spcl_pass_err'];?> </div>
                      <?php }   ?>

                      <?php
                      if(isset($_SESSION['pass_num_len'])){?>
                      <div class="err-container"> <?= $_SESSION['pass_num_len'];?> </div>
                      <?php }   ?>



            

                      



            
           





            


            
            <input type="submit" value="Login" class="btn" />
            <div class="login"  > Don't have an account? <a href="index.php">Sign Up</a> </div>
          </form>
          
          
        </div>
      </div>
    </div>

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  
  </body>
</html>
<?php

    unset($_SESSION['email_err']);
    unset($_SESSION['pass_err']);
    unset($_SESSION['upper_pass_err']);
    unset($_SESSION['lower_pass_err']);
    unset($_SESSION['number_pass_err']);
    unset($_SESSION['spcl_pass_err']);
    unset($_SESSION['pass_num_len']);
    unset($_SESSION['old_name']);
    unset($_SESSION['old_email']);
    unset($_SESSION['old_pass']);
?>




   <?php }
    ?>


    
    