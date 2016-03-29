<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
<style>
#login_box_inner {
	width: 25%;
	position: fixed;
	top: 15%;
	left: 35%;
	padding-right: 5%;
	padding-left: 5%;
	background:rgba(204,204,204,0.5);
	height: 70%;
}
#box_inner {
	padding-top: 20px;
	padding-bottom: 50px;
	}


#login_box_inner #box_inner #text1 {
	font-size: 24px;
	text-align: center;
	box-shadow: 100px blur spread #333333;
	padding-top: 0px;
	padding-right: 10px;
	padding-bottom: 30px;
	padding-left: 10px;
}
#username::before{
	content:url(../../images/download.png);


}
#text1 {
	color: #F0C96C;
}
#pass {
	text-align: center;
}
#userpass {
	height: 40px;
	padding: 20px;
}
#username {
	height: 40px;
	padding: 20px;
}
#text1 {
	color: #337AB7;
}
#text1 {
	font-weight: bold;
}
#box_inner form div .btn.btn-primary {
	padding-left: 20px;
	margin-left: 60px;
}
</style>
</head>

<body>
<section id="loginbox">
   	  <div class="container">
       	  <div class="row">
           	<div id="login_box_inner">
                <div id="box_inner">
                <div id="text1"> Register</div>
                		 <form action="../../thanks.html" method="post" name="loginform">
            
            	<div class="input-group">
               	  <label for="username"></label>
               	  <input type="text" name="username" id="username" class="form-control" placeholder="Username"/ >
                  <span class="input-group-addon">
        <i class="fa fa-user"></i>
    </span>
                </div>
                <div class="input-group">
               	  <label for="username"></label>
               	  <input type="email" name="username" id="username" class="form-control" placeholder="Email"/ >
                  <span class="input-group-addon">
        <i class="fa fa-envelope"></i>
    </span>
                </div>
                <div class="input-group">
               	  <label for="userpass"></label>
                	<input type="password" name="userpass" id="userpass"  class="form-control" placeholder="Password" />
                    <span class="input-group-addon">
        <i class="fa fa-lock"></i>
    </span>
                    
                </div>
                <div class="input-group">
               	  <label for="userpass"></label>
                	<input type="password" name="userpass" id="userpass"  class="form-control" placeholder="Confirm Password" />
                    <span class="input-group-addon">
        <i class="fa fa-repeat"></i>
    </span>
                    
                </div>
               
                <div class="input-group">
               	  <label for="userpass"></label>
                	<select name="country" class="form-control">
                     <option>Select</option>
                	  <option>United States</option>
                	  <option>Canada</option>
                	  <option>New Zealand</option>
                	  <option>Austriala</option>
                	  <option>Germany</option>
                	</select>
                    <span class="input-group-addon">
        <i class="fa fa-flag"></i>
    </span>
                    
                </div>
                
                <div class="input-group">
               	  <label for="userpass"></label>
                	<select name="find" class="form-control">
                     <option>Select</option>
                	  <option>Bing</option>
                	  <option>Google</option>
                	  <option>Yahoo</option>
                	  <option>Instagram</option>
                	  <option>Facebook</option>
                       <option>Twitter</option>
                	</select>
                    <span class="input-group-addon">
        <i class="fa fa-search"></i>
    </span>
                    
                </div>
                
               
                
                <div></br></div>
                <div><input name="remlogin" type="checkbox" value="Remember my login" />I agree to Terms and Conditions for using Pay A Professor</div>
                <br/>
                <div>
                	<input type="reset" value="SIGNUP" name="login" class="btn btn-primary">
                    </div>
                    <br/>
                   
              </form>
            </div>
              </div>
           
            	
        </div>
             </div>
    </section>
          
</body>
</html>