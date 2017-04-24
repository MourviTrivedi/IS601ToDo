<html>
<head>
  <title>Enter Login</title>
  <style type="text/css">
    div.container {
      padding: 6px;
      width:300px;
      margin:20px auto;
      text-align:center;  
    }
    .login div {
      border:2px solid #fff;
      padding:3px;
    }
    .register div {
      border:2px solid #fff;
      padding:3px;
    }
    input[type=text], input[type=password] {
      padding: 6px 15px;
      margin: 8px 0;
      border: 1px solid #ccc;
      font: arial;
    }
    button {
      background-color: #8B0000;
      color: white;
      padding: 6px 15px;
      margin: 8px 0;
      width: 83%;
      border-radius: 10px;
      font-size:medium;
    }
    #wrap {
       padding-top: 100px;
       border: 2px;
       border-color: black;
 }
  </style>
</head>
<div id="wrap">
<body>
  <div class='container' align="center">
   <h3 align="center">Please Enter Your Login:</h3>
    <form method = "post" action="index.php" class="login">
      <div>
        <label><b>Username:</b></label>
        <input type="text" name="reg_uname" required>
        <label><b>Password:</b></label>
        <input type="password" name="reg_password" required>
        <input type ="hidden" name="action" value="test_user">
      </div>
      <div>
        <button type="submit">Login</button>
	<button type="submit">Sign up</button>
      </div>
    </form>

  </div>
</div>
</body>

</html>
