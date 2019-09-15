<?php  


  session_start();


 
  if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
      
        $user_name= $_POST['username'];
      
  	    $email = $_POST['email'];
  	    $password= $_POST['password'];


  	    echo"welcome " . $user_name."<br/>" ;
  	    echo"your login info is :" . "<br />". "user name :" .$user_name . "<br />";
  	    echo "your email is  :". $email . "<br />";
  	    echo "your password is  :" . $password ;
  	    echo" <br/>";
echo '<a href="next1.php"> click hear to start </a>';
  	    

  }else{
  	echo "sorry you cant login now please try agian ";
  }
 echo" <br/>";






 ?>