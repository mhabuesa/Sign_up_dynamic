<?php
    session_start();
?>
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
            <a style="text-decoration: none; color: #1A70BC;"  href="https://github.com/mhabuesa/Sign_up_dynamic.git" target="_blank"> <b> GitHub </b></a> 
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

          <form action="in_post.php" method="post">
            <h3 class="title" style="text-align: center;">Sign Up</h3>

            <div class="input-container">
              <input type="text" name="name" class="input" value="<?=(isset($_SESSION['old_name'])?$_SESSION['old_name']:'')?>" />
              <label for="">Name</label>
              <span>Name</span>
            </div>
                     
                     <?php
                      if(isset($_SESSION['err_name'])){?>
                      <div class="err-container"> <?= $_SESSION['err_name'];?> </div>
                      <?php }   ?>
                     

            
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
              <input type="tel" name="phone" class="input" value="<?=(isset($_SESSION['old_phone'])?$_SESSION['old_phone']:'')?>" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>

            <?php
                      if(isset($_SESSION['phone_err'])){?>
                      <div class="err-container"> <?= $_SESSION['phone_err'];?> </div>
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



            <div class="input-container">
              <input type="password" name="con_pass" class="input" value="<?=(isset($_SESSION['old_con_pass'])?$_SESSION['old_con_pass']:'')?>" />
              <label for="">Confirm Password</label>
              <span>Confirm Password</span>
            </div>
            <?php
                      if(isset($_SESSION['con_pass_err'])){?>
                      <div class="err-container"> <?= $_SESSION['con_pass_err'];?> </div>
                      <?php }   ?>

                      <?php
                       if(isset($_SESSION['match_pass_err'])){?>
                      <div class="err-container"> <?= $_SESSION['match_pass_err'];?> </div>
                      <?php }   ?>

                      



            <div class="input-container">
              <input type="date" name="db" class="input" value="<?=(isset($_SESSION['old_db'])?$_SESSION['old_db']:'')?>" />
              <label ></label>
              <span>Date</span>
            </div>

            <?php
                      if(isset($_SESSION['db_err'])){?>
                      <div class="err-container"> <?= $_SESSION['db_err'];?> </div>
                      <?php }   ?>



                      <?php
                            if(isset($_SESSION['old_gender'])){
                              $gender = $_SESSION['old_gender'];
                            }
                        ?>
            <div class="input mb-3 ">
              <p class="mb-1">Select Your Gender</p>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="male"
             <?=($gender == 'male'? 'checked':'')?>>
            <label class="form-check-label">
              Male
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="female" <?=($gender == 'female'? 'checked':'')?>>
            <label class="form-check-label" >
              Female
            </label>
          </div>
            </div>
            <?php
                      if(isset($_SESSION['gender_err'])){?>
                      <div class="err-container"> <?= $_SESSION['gender_err'];?> </div>
                      <?php }   ?>





            <div class="form-check input mb-3 ">
            <input class="ml-5 form-check-input" style="margin-left:0;" type="checkbox" name="check"  >
            <label class="form-check-label" style="margin-left:5px;">
              Agree with me
            </label>
          </div>
          <?php
                      if(isset($_SESSION['check_err'])){?>
                      <div class="err-container"> <?= $_SESSION['check_err'];?> </div>
                      <?php }   ?>


            
            <input type="submit" value="Sign Up" class="btn" />
            <div class="login"  > Already have an account? <a href="login.php">Login</a> </div>
          </form>
          
          
        </div>
      </div>
    </div>

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
  
  </body>
</html>
<?php
    unset($_SESSION['err_name']);
    unset($_SESSION['email_err']);
    unset($_SESSION['phone_err']);
    unset($_SESSION['pass_err']);
    unset($_SESSION['upper_pass_err']);
    unset($_SESSION['lower_pass_err']);
    unset($_SESSION['number_pass_err']);
    unset($_SESSION['spcl_pass_err']);
    unset($_SESSION['pass_num_len']);
    unset($_SESSION['con_pass_err']);
    unset($_SESSION['db_err']);
    unset($_SESSION['gender_err']);
    unset($_SESSION['check_err']);
    unset($_SESSION['match_pass_err']);
    unset($_SESSION['old_name']);
    unset($_SESSION['old_email']);
    unset($_SESSION['old_phone']);
    unset($_SESSION['old_pass']);
    unset($_SESSION['old_con_pass']);
    unset($_SESSION['old_db']);
?>
