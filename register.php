<html>
<body>
<head>
  <style type="text/css">
  body {
      background-image: url(http://wallpaperpulse.com/img/1331570.jpg);
    }
	div.container {
       padding: 6px;
	   width:400px;
       margin:20px auto;
	   text-align:center;
	   background-color: #F5F4F4;
	   border-radius: 10px;
	   border:2px solid;
         }
       .signup div {
	   border:2px solid #fff;
       padding:3px;
	}
	/* .register div {
	   border:2px solid #fff;
	   padding:3px;
	}*/
	input[type=text], input[type=password] {
	   padding: 6px 15px;
	   margin: 8px 0;
	   border: 1px solid #ccc;
	   font: arial;
	}
	#button {
       background-color: #8B0000;
	   color: white;
	   padding: 6px 15px;
	   margin: auto;
	   width: 83%;
	   border-radius: 10px;
	   font-size:medium;
 	}
	#wrap {
	   padding-top: 75px;
	   border: 2px;
	   border-color: black;
 	}
 	
</style>
</head>

<div id="wrap">
<div class='container'>
<form action="index.php" method="POST">
<h2>Register</h2>
<table align="center">
   <tbody>
     <tr><td><label><strong>First Name:</strong></label></td><td><input name="first_name" type="text"></td></tr>
      <tr><td><label><strong>Last Name:</strong></label></td><td><input name="last_name" type="text"></td></tr>
       <tr><td><label><strong>Username:</strong></label></td><td><input name="uname" type="text"></td></tr>
       <tr><td><label><strong>Password:</strong></label></td><td><input name="password" type="password"></td></tr>
       <tr><td><label><strong>E-mail Address:</strong></label></td><td><input name="email" type = "text"></td></tr>
       <tr><td><label><strong>Phone Number:</strong></label></td><td><input name="phonenumber" type = "text"></td></tr>
       <tr><td><label><strong>Birthday:</strong></label></td><td><input name="birthday" type = "date"></td></tr>
       <tr>
<td><strong>Gender:</strong></td>
<td><input required="true" id="male" name="g" value="male" type="radio" /><label="male">Male</label>&nbsp;&nbsp;
<input required="true" id="female" name="g" value="female" type="radio"><label="female">Female</label></td>
</tr>
  </tbody>
  </table>
<br />
<div id="button" align="center">
<input type="submit">
<input type="hidden" name="action" value="register">
</div>
</form>

</div>
</div>
</body>
</html>