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
  	    


$stmt= $con->prepare("SELECT `id`, `username`, `password`, `email` FROM `result` WHERE  username = ? AND password = ? AND email= ?");
$stmt->Execute (array($user_name,$password,$email));
$count=$stmt->rowcount();
echo "$count";
if($count>0){

      $_SESSION['username']=$user_name;      // sagelt el session enoh beyswy el $user_name
      header('LOCATION: next1.php');           // halashan y7awlny le el page el tanya 
      exit();                                        // 3alashan yewa2af le7ad hena 


	

}else{echo"انت مش متسجل عندى سجل ف الموقع الاول وجرب تانى يا كبير";
	
}

} else{ echo" مينفعش تفتع الصحفة مباشرا كدة لازم تسجل دخول الاول ";

}


	

?>
 
 


