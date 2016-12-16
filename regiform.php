<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
   <h3 style="padding-left:4cm">Create an account</h3>
    
   <form data-toggle="validator" action="phppart.php" method="post" role="form">
   <div class="container-fluid ">
   	    <div class="row form-group">
   	    	<div class="col-md-1 col-md-push-1">First Name :</div>
   	    	 
   	    	<div class="col-md-5 col-md-push-1">
   	    	<input type="text" name="Fname" class="form-control" id="inputName" placeholder="Bishawjet" required></div>
   	    </div>

   	     <div class="row form-group" style="padding-top:0.5cm;">
   	    	<div class="col-md-1 col-md-push-1 col-md-offset-0 ">Last Name :</div>
   	    	 
   	    	<div class="col-md-5 col-md-push-1">
   	    	<input type="text" name="Lname" class="form-control" id="inputName" placeholder="Banik" required>
   	    	</div>
   	    </div>
   	    <div class="row form-group" style="padding-top:0.5cm;">
   	    	<div class="col-md-1 col-md-push-1 col-md-offset-0 ">Email Id &nbsp &nbsp&nbsp:</div>
   	    	 
   	    	<div class="col-md-5 col-md-push-1 control-label">
   	    	<input type="email" name="Email" class="form-control" id="inputName" placeholder="banik@gmail.com" data-error="Bruh, that email address is invalid" required>
   	    	 
   	    	</div>
   	    	<div class="help-block with-errors"></div>
   	    </div>

   	    <div class="row form-group" style="padding-top:0.5cm;">
   	    	<div class="col-md-1 col-md-push-1 col-md-offset-0 ">Contact No :</div>
   	    	 
   	    	<div class="col-md-5 col-md-push-1">
   	    	<input type="text" name="Cnumber" class="form-control" id="inputName" placeholder="+88017 47304332" required>
   	    	</div>
   	    </div>
        
        <div class="row form-group" style="padding-top:0.5cm;">
   	    	<div class="col-md-1 col-md-push-1 col-md-offset-0 ">Password :</div>
   	    	 
   	    	<div class="col-md-5 col-md-push-1">
   	    	<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Minimum of 6 characters" required>
   	    	</div>
   	    </div>

   	     <div class="row form-group" style="padding-top:0.5cm;">
   	    	<div class="col-md-1 col-md-push-1 col-md-offset-0 ">Confirm Password :</div>
   	    	 
   	    	<div class="col-md-5 col-md-push-1">
   	    	<input type="password" name="Cpassword" class="form-control" id="inputName" placeholder="" required>
   	    	</div>
   	    </div>

   	    <div class="row form-group" style="padding-top:0.5cm;">
   	    	<div class="col-md-1 col-md-push-1 col-md-offset-0 ">Location &nbsp&nbsp:</div>
   	    	 
   	    	<div class="col-md-5 col-md-push-1">
   	    	<input type="text" name="Location" class="form-control" id="inputName" placeholder="Dhanmondi" required>
   	    	</div>
   	    </div>
   	    <div class="row form-group" style="padding-top:0.5cm;">
   	    	
   	    	<div class="col-md-5 col-md-push-3 form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
   	    </div>
   	    </div>
   </form>
</body>
</html>