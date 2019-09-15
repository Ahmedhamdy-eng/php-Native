<?php 
   session_start();

$dsn='mysql:host=localhost;dbname=ahmed';
$user='root';
$pass='';



$con= new PDO ($dsn,$user,$pass);

if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
      
        $user_name= $_POST['username'];
  	    $email = $_POST['email'];
  	    $password= $_POST['password'];


$stmt= $con->prepare("INSERT INTO `result` (`username`, `password`, `email`) VALUES (:zuser,:zpass,:zemail)");
$stmt->Execute (array(
	'zuser'=>$user_name,
	'zpass'=>$password,
	'zemail'=>$email));
$count=$stmt->rowcount();
echo "$count";
if($count>0){
      $_SESSION['username']=$user_name;      // sagelt el session enoh beyswy el $user_name
      header('LOCATION: next1.php');           // halashan y7awlny le el page el tanya 
      exit();                                        // 3alashan yewa2af le7ad hena 

}else{
	echo "sorry there is some thing wrong try again please";

}
}else{
	echo"you cant see this page please Login First and try again please;)";
}
	


	


 ?>