<?php 
include 'function.php';
include 'pdocon.php';
$db = new Pdocon;
if(isset($_POST['submit_info'])){

    $raw_name           =   cleandata($_POST['name']);
    $raw_surname        =   cleandata($_POST['surname']);
    $raw_email          =   cleandata($_POST['email']);
    $raw_phone          =   cleandata($_POST['phone']);
    $raw_message       =   cleandata($_POST['message']);

    
    
    $c_name             =   sanitize($raw_name);
    $c_surname          =   sanitize($raw_surname);
    $c_email            =   valemail($raw_email);
    $c_phone            =   sanitize($raw_phone);
    $c_message          =  sanitize($raw_message);
  

$db->query("SELECT * FROM web WHERE email = :email");
    
    $db->bindvalue(':email', $c_email, PDO::PARAM_STR);
    
    $row = $db->fetchSingle();
    if($row){
        
         echo "user already exists";
    }


    else{
        
        $db->query("INSERT INTO web(name,surname,email,phone,message) VALUES(:name,:surname, :email,:phone,:message) ");
        
        $db->bindvalue(':name', $c_name, PDO::PARAM_STR);
        $db->bindvalue(':surname', $c_surname, PDO::PARAM_STR);
        $db->bindvalue(':email', $c_email, PDO::PARAM_STR);
        $db->bindvalue(':phone', $c_phone, PDO::PARAM_STR);
        $db->bindvalue(':message', $c_message, PDO::PARAM_STR);
        
        $run = $db->execute();

       if ($run) {
        echo "<h1>your request have been submited our representative will get to your shortly</h1>";
       }
       else{
       	echo "unable to submit";

       }
   }
}








 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	 <link href="css/mdb.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="css/style.css">


</head>
<body>
<a href="index.php"><input type="submit" value="go back" class="btn btn-primary" style="width:70px;height:70px;"></a>
	
</body>
</html>