
<?php

session_start();
   
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $upper = preg_match('@[A-Z]@', $pass);
    $lower = preg_match('@[a-z]@',$pass);
    $number = preg_match('@[0-9]@',$pass);
    $spcl = preg_match('@[!,#,$,%,^,&,*,-,_,+,=,/]@',$pass);



    $flag = false;
   

     //email
     if(!$email){
        $flag = true;
        $_SESSION['email_err'] = 'Please enter Your Email';

    }

    else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $flag = true;
            $_SESSION['email_err'] = 'Invalid Email Format';
            $_SESSION['email_old'] = $email;
        }
        $_SESSION['email_old'] = $email;
        
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


        $_SESSION['pass_old'] = $pass;
    }


    

    if($flag){
        header('location:login.php');
    }


    echo 'Email: '.$email.'<br>';
    echo 'Password: '.$pass;
    ?>

