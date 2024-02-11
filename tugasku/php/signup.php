<?php 

if(isset($_POST['nama']) && 
   isset($_POST['email']) &&  
   isset($_POST['pass']) &&
   isset($_POST['divisi']) &&
   isset($_POST['no telp']) &&
   isset($_POST['alasan']) ) {

    include "../db_conn.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $divisi = $_POST['divisi'];
    $divisi = $_POST['no telp'];
    $alasan = $_POST['alasan'];

    $data = "nama=".$nama."&email=".$email;
    
    if (empty($nama)) {
    	$em = "Perlu Di Isi!";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($email)){
    	$em = "Perlu Di Isi!";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Perlu Di Isi!";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
      }else if(empty($divisi)){
         $em = "Perlu Di Isi!";
         header("Location: ../index.php?error=$em&$data");
         exit;    
    if (empty($no telp)) {
    	$em = "Perlu Di Isi!";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($email)){
    	$em = "Perlu Di Isi!";
    	header("Location: ../index.php?error=$em&$data");
	    exit;  
    if (empty($nama)) {
    	$em = "Perlu Di Isi!";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
    }else if(empty($email)){
    	$em = "Perlu Di Isi!";
    	header("Location: ../index.php?error=$em&$data");
	    exit;
      }else if(empty($alasan)){
         $em = "Perlu Di Isi!";
         header("Location: ../index.php?error=$em&$data");
         exit;
    }else {
      // hashing the password
      $pass = password_hash($pass, PASSWORD_DEFAULT);

     {
               // Insert into Database
               $sql = "INSERT INTO users(nama, email, password, divisi,no telp, alasan) 
                 VALUES(?,?,?,?,?)";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$nama, $email, $pass, $divisi,$no telp, $alasan]);
               header("Location: ../index.php?success=Your account has been created successfully");
                exit;
      } 
    }


}else {
	header("Location: ../index.php?error=error");
	exit;
}