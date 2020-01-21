<!------------------doctor data registration to database------------------------->

<?php
include('php_connection.php');

if($_SERVER["REQUEST_METHOD"] == "POST")	
    {	
        $id=test_input($_POST['id']);
        $spec=test_input($_POST['spec']);
        $name=test_input($_POST['name']);
        $address=test_input($_POST['address']);
        $gender=test_input($_POST['gender']);
        $dob=test_input($_POST['dob']);
        $email=test_input($_POST['email']);
        $mobile=test_input($_POST['mobile']);
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
			  echo "FAILED! You tried to submit an Invalid DOB"
			}
		

		else
		{
    
        $sql="INSERT INTO  doctors (d_regid,dname,daddress,dgender,dspecs,ddob,demail,dmobile,dpassword) VALUES('".$id."','".$name."','".$address."','".$gender."','".$spec."','".$dob."','".$email."','".$mobile."','".$password."')";
        if (mysqli_query($conn,$sql))
            {
                header("location:login.php");
            }
            echo $sql;
			
			
			echo "SUCCESS!";
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
<!------------------doctor data registrationends------------------------->
