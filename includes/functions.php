<?php
  session_start();
  function emptyInputLogin($email, $pwd){
    $result;
    if(empty($email) || empty($pwd)){
      $result = true;
    }
    else{
      $result = false;
    }
    return $result;
  }

  function loginUser($con, $email, $pwd){
    $sql = "SELECT * FROM comptes WHERE email='$email' AND password='$pwd'";
		$result = mysqli_query($con, $sql);
    
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
      if ($row['email'] === $email && $row['password'] === $pwd) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['fname'] = $row['full_name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['login_time'] = time();

        header("Location: ../Dashboard.php");
		    exit();
      }
      else{
        header("Location: ../index.php?error=wronglogin");
        exit();
      }
    }
    else{
      header("Location: ../index.php?error=wronglogin");
      exit();
    }
  }

  ?> 