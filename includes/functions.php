<?php
  session_start();
  function emptyInputSignup($name, $email, $pwd, $Rpwd){
    $result;
    if(empty($name) || empty($email) || empty($pwd) || empty($Rpwd)){
      $result = true;
    }
    else{
      $result = false;
    }
    return $result;
  }

  function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $result = true;
    }
    else{
      $result = false;
    }
    return $result;
  }

  function passwordMatch($pwd, $Rpwd){
    $result;
    if($pwd !== $Rpwd){
      $result = true;
    }
    else{
      $result = false;
    }
    return $result;
  }

  function emailExist($con, $email){
    $result;
    $sql = "SELECT * FROM comptes WHERE email = '$email'";
    $res = mysqli_query($con, $sql);
    if(mysqli_num_rows($res) > 0){
      return true; 
    }else{
      $result = false;
    }
    return $result;
  }

  function createUser($con, $name, $email, $pwd){
    $sql = "INSERT INTO comptes VALUES (NULL, '$name', '$email', '$pwd', NULL)";
    $res = mysqli_query($con, $sql);
    header("location:../index.php?error=none");
    exit();
  }

  /*                      log In                            */

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
        $_SESSION['signin'] = true;
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