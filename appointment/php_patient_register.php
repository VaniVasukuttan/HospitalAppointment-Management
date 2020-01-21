<!------------------patient data registration to database------------------------->

<?php
include('php_connection.php');

if($_SERVER["REQUEST_METHOD"] == "POST")	
    {	
        $name=test_input($_POST['name']);
        $address=test_input($_POST['address']);
        $dob=test_input($_POST['dob']);
        $gender=test_input($_POST['gender']);
        $mobile=test_input($_POST['mobile']);
        $email=test_input($_POST['email']);
        $password=test_input($_POST['password']);
		$conf_password=test_input($_POST['confirmpassword']);

		if (strlen($password) < 8){
			echo "FAILED! You tried to submit a password which is greater than 10 chars.";
			}
		else if (strlen($password)!=strlen($conf_password)){
			echo "FAILED! Confirm password doesn't match password";
			}
		else if(!preg_match("/^[a-zA-Z'-]+$/",$name))
			{ echo "FAILED! You tried to submit an invalid  name";
			} 
			
		else if (preg_match('/^[0-9]{10}+$/', $mobile)!=true)
			{
				echo "FAILED! You tried to submit a mobilenumber which is not valid";
			}
			
		
		
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				echo "FAILED! You tried to submit an Invalid email format"; 
			}
		else if((getdate()<$dob))
			{
			  echo "FAILED! You tried to submit an Invalid DOB";
			}
		

		else
		{

        $sql="INSERT INTO  patients(pname,paddress,pdob,pmobile,pemail,pgender,ppassword) VALUES('".$name."','".$address."','".$dob."','".$mobile."','".$email."','".$gender."','".$password."')";
        if (mysqli_query($conn,$sql))
            {
                header("location:login.php");
            }
    }
	}
		function test_input($data) 
	  {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	  }			
mysqli_close($conn);
?>
<!------------------patient data registration ends------------------------->
