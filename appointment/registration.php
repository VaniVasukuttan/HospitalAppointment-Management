<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	
		<title>Login</title>
	</head>
<body onload="hideDiv()">

<!------------------starts first section----------------------->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="row">
        <div class="col-md-11">
                <a class="navbar-brand ml-4" href="login.php">D' Appointments</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </div>
    </div>
</nav>

		<div class="row d-flex my-2">
			          
            <div class="col-md-6">
              <button class="btn" id="b1" >
              <h3 class="fontcol">Patient's</h3>
              </button>             
            </div>
			<div class="col-md-6 ">
              <button class="btn" id="b2" >
              <h3 class="fontcol">Doctor's</h3>
               </button>              
            </div>
	
		</div>
		
 
</head>  	   
		

	<!---------------patient registration form starts------------------->	

			<div id="div1" class="py-5 border-top mb-5">
            <section class="mt-2">
			
            <div class="cotainer ">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                            
                <form name="myform" onsubmit="return validate_form()" action="php_patient_register.php" method="post">
                                

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control box-bg" name="name" required >
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                                    <div class="col-md-6">
                                        <textarea  class="form-control box-bg" name="address" required ></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Date of Birth</label>
                                    <div class="col-md-6">
                                        <input type="date" id="email_address" class="form-control box-bg" required name="dob" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-md-4 col-form-label text-md-right font-weight-bolder" required >Gender</label>
                                    <div class="col-md-6 d-flex form-check">
									<select name="gender">
										<option selected >Choose..</option>
										<option value="Female">Female</option>
										<option value="Male">Male</option>
										<option value="Other">Other</option>
									</select>
                                       
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile</label>
                                    <div class="col-md-6">
                                        <input type="text" name="mobile" id="mobile" required class="form-control box-bg" >
                                    </div>
                                </div>
				
								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                    <div class="col-md-6">
                                        <input type="text"   name="email" required class="form-control box-bg">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                    <div class="col-md-6">
                                        <input type="text" vname="password" id="password"  class="form-control box-bg" >
                                    </div>
                                </div>
				
								 <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="text"  name="confirmpassword"  required id="confirmpassword" class="form-control box-bg">
                                    </div>
                                </div>
								
								
								<div class="row"> 
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary w-25 " name="submit"  onclick="say()";>
                                        <a  class="text-light text-decoration-none">Register</a>
                                        </button>
                                    </div>
									<div class="col-md-6 ">
                                        <button type="submit" class="btn btn-danger w-25 "><a href="" class="text-light text-decoration-none">
                                        Clear</a>
                                        </button>
                                    </div>
                                </div>
								</div>
                            </form>
                         
        </div>
    </div>

	</div>
</section>
		
 </div>

<!------------------patient registration form ends------------------------->

<!------------------patient registration validation starts------------------------->

 <script>
function validate_form()
 <script>
function validate_form()
{
var x=document.forms['myform']['name'].value;
var y=document.forms['myform']['mobile'].value;
var z=document.forms['myform']['password'].value;
var w=document.forms['myform']['confirmpassword'].value;
var em=document.forms['myform']['email'].value;
if (x=="")
	{ 
		alert("fill name field");
	}
if (y=="")
	{ 
		alert("fill mobile field");
	}
if (z=="")
	{ 
		alert("fill password field");
	}
if (w=="")
	{ 
		alert("fill confirmpassword field");
	}
	}
if (em=="")
	{ 
		alert("fill email field");
	}
	atpos = em.indexOf("@");
    dotpos = em.lastIndexOf(".");
         
    if (atpos < 1 || ( dotpos - atpos < 2 ))
		{
            alert("Please enter correct email ID");
            document.myform.email.focus() ;
            return false;
         }
if(y.length<10)
	{
      alert("please enter valid mobilenumber");
	}
if (z!=w)
	
	{
		alert("confirm password doesnt match password,please enter correctly");
	}
      return( true );
}
</script>
<!------------------patient registrationvalidation ends------------------------->


	<!---------------doctor registration section start------------>			
			<div id="div2" class=" py-5">
            <section>
			
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                            
            <form name="my-form" action="php_doctor_register.php" method="POST" onsubmit="return validate()" >
                                
                                <div class="form-group row">
                                   <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Registration ID</label>
                                   <div class="col-md-6">
                                       <input type="text" id="rid" required class="form-control box-bg" name="id">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Specelization</label>
                                   <div class="col-md-6">
                                       <input type="text" id="name" required class="form-control box-bg" name="spec">
                                   </div>
                               </div>

                               <div class="form-group row">
                                   <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Name</label>
                                   <div class="col-md-6">
                                       <input type="text" id="name" required class="form-control box-bg" name="name">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Address</label>
                                   <div class="col-md-6">
                                       <textarea  class="form-control box-bg" name="address" ></textarea>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label required class="col-md-4 col-form-label text-md-right font-weight-bolder" >Gender</label>
                                   <div class="col-md-6 d-flex form-check">
                                   <select name="gender">
                                       <option selected >Choose..</option>
                                       <option value="Female">Female</option>
                                       <option value="Male">Male</option>
                                       <option value="other">Other</option>
                                   </select>
                                      
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-4 col-form-label text-md-right font-weight-bolder">DOB</label>
                                   <div class="col-md-6">
                                       <input type="date" name="dob" required class="form-control box-bg" >
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label required class="col-md-4 col-form-label text-md-right font-weight-bolder">Email</label>
                                   <div class="col-md-6">
                                       <input  class="form-control box-bg" name="email" ></input>
                                   </div>
                               </div>
                                <div class="form-group row">
                                   <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Mobile</label>
                                   <div class="col-md-6">
                                       <input type="text"  name="mobile"  id="mobile" class="form-control box-bg">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Password</label>
                                   <div class="col-md-6">
                                       <input  class="form-control box-bg" required name="password" ></input>
                                   </div>
                               </div>
                                <div class="form-group row">
                                   <label class="col-md-4 col-form-label text-md-right font-weight-bolder">Confirm Password</label>
                                   <div class="col-md-6">
                                       <input type="text"  name="confirmpassword" required class="form-control box-bg">
                                   </div>
                               </div>
                               
                               <div class="row"> 
                                   <div class="col-md-6 text-right">
                                       <button type="submit" class="btn btn-primary w-25 " name="submit" onclick="say()">
                                       <a class="text-light text-decoration-none">Register</a>
                                       </button>
                                   </div>
                                   <div class="col-md-6 ">
                                       <button type="submit" class="btn btn-danger w-25 "><a href="" class="text-light text-decoration-none">
                                       Clear</a>
                                       </button>
                                   </div>
                               </div>
                               </div>
                           </form>
                         
        </div>
    </div>

				</div>
			</section>	
            </div>
<!------------------doctor registration ends------------------------->
<!------------------doctor registrationvalidation starts------------------------->

<script>
function validate()
{
var x=document.forms['myform']['name'].value;
var y=document.forms['myform']['mobile'].value;
var z=document.forms['myform']['password'].value;
var w=document.forms['myform']['confirmpassword'].value;
var em=document.forms['myform']['email'].value;
if (x=="")
	{ 
		alert("fill name field");
	}
if (y=="")
	{ 
		alert("fill mobile field");
	}
if (z=="")
	{ 
		alert("fill password field");
	}
if (w=="")
	{ 
		alert("fill confirmpassword field");
	}
	}
if (em=="")
	{ 
		alert("fill email field");
	}
	atpos = em.indexOf("@");
    dotpos = em.lastIndexOf(".");
         
    if (atpos < 1 || ( dotpos - atpos < 2 ))
		{
            alert("Please enter correct email ID");
            document.myform.email.focus() ;
            return false;
         }
if(y.length<10)
	{
      alert("please enter valid mobilenumber");
	}
if (z!=w)
	
	{
		alert("confirm password doesnt match password,please enter correctly");
	}
      return( true );
}
</script>
<!------------------doctor registrationvalidation ends------------------------->

	
	<!---------------main section end------------>	
                       
 <?php include('footer.php')?>    
<script>
$(document).ready(function(){
	
	
	
  $("#b1").click(function(){
    $("#div1").show();
	 $("#div2").hide();
  });
   $("#b2").click(function(){
    $("#div1").hide();
	 $("#div2").show();
  });
});

 function hideDiv() {
     document.getElementById("div2").style.display = 'none';   
	document.getElementById("div3").style.display = 'none';   	  
    } 
	
	




 </script>	
	<!-----------------------------includefiles section---------------->
		<script src="js/jquery.min.js"></script>
		<script src="js/validation.js"></script>
		<Script src="js/jquery.validate.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/popper.min.js"></script>
		
		
		
</body>
</html>
 
 