<html>
<head>
  <title>To Do List System</title>
  <style type="text/css">
    body {
      background-image: url(http://wallpaperpulse.com/img/1331570.jpg);
    }
    h1 {
      color: #fff;
    }
    div.container {
      padding:6px;
      width:300px;
      margin:20px auto;
      text-align:center; 
      background-color: #E1DFDF;
      border-radius: 10px;
      border:2px solid; 
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
       padding-top: 110px;
       border: 2px;
       border-color: black;
 }
  </style>
</head>
<div id="wrap">
<body>
  <h1 align="center">To Do List</h1>
  <div class='container' align="center">
   <h3 align="center">Please Enter Your Login:</h3>
    <form method = "post" action="index.php" class="login">
      <div>
        <label><strong>Username:</strong></label>
        <input type="text" name="reg_uname" required>
        <label><strong>Password:</strong></label>
        <input type="password" name="reg_password" required>
        <input type ="hidden" name="action" value="test_user">
      </div>
  <div>
        <button type="submit">Login</button>
    </form>

	   <form action="register.php" class="register">
      <button type="submit">Register</button>
     </form>
  </div>


</div>
</body>

</html>
