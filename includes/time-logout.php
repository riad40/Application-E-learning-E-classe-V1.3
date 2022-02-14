
<?php 
    if(time() - $_SESSION['login_time'] > 10000000000) { 
        session_destroy();
        header('Location:  index.php'); 
        exit;
    } 
    else {
        $_SESSION['login_time'] = time(); 
    }