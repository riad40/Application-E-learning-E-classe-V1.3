
<?php 
    if(time() - $_SESSION['login_time'] > 10) { 
        session_destroy();
        header('Location:  index.php'); 
        exit;
    } 
    else {
        $_SESSION['login_time'] = time(); 
    }