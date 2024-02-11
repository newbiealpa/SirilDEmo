<?php 
session_start();

if(isset($_POST['email']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $data = "email=".$email;
    
    if(empty($email)){
    	$em = "Email is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else {

    	$sql = "SELECT * FROM users WHERE email = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$email]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          $email =  $user['email'];
          $password =  $user['password'];
          $nama =  $user['nama'];
          $id =  $user['id'];

          if($email === $email){
             if(password_verify($pass, $password)){
                 $_SESSION['id'] = $id;
                 $_SESSION['nama'] = $nama;

                 header("Location: ../home.php");
                 exit;
             }else {
               $em = "Incorect Email or password";
               header("Location: ../index.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorect Email or password";
            header("Location: ../index.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorect Email or password";
         header("Location: ../index.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location: ../index.php?error=error");
	exit;
}