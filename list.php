<html>
<head>
  <title>To Do List</title>
  <style type="text/css">
    body {
      background-image: url(http://wallpaperpulse.com/img/1331570.jpg);
    }
    #list {
      padding: 6px;
      width:480px;
      margin:20px auto;
      text-align:center; 
      background-color: #E1DFDF;
      border-radius: 10px;
      border:2px solid; 
    }
     button {
      background-color: #8B0000;
      color: white;
      padding: 6px 15px;
      margin: 8px 0;
      width: 30%;
      border-radius: 10px;
      font-size:medium;
    }
    </style>
  </head>
<body>
  <div id='list'>
<?php
echo "<h1>To-Do List System</h1>";
echo "Welcome, ".$_COOKIE['login'].'<br />';
echo "Below is your To-Do List Items:";

echo "<br /><br />";

?>

<html>
  <body>
    <table align="center">
      
         <?php foreach($result as $res):?>
           
	 <tr>
	   <td> <?php echo $res['todo_item']; ?> </td>
	   <td> <?php echo $res['Date']; ?> </td>
	   <td> <?php echo $res['Time']; ?> </td>
	   <td>
	     <form action='index.php' method="POST">
	      <input type='hidden' name='item_id' value= <?php echo $res['id']; ?> >
	      <input type='hidden' name='action' value='delete'>
	      <input type="submit" value="Delete"/> 
	     </form>
	      </td>
		<td>
	      <form action='index.php' method='POST'>
	      <input type='hidden' name='item_id' value= <?php echo $res['id']; ?> >
	      <input type='hidden' name='action' value='Edit'>
	      <input type='submit' value="Edit"/><input type="text" name="new_description">
	      </form>
	    </td>

	 </tr>
	 <?php endforeach;?>
    </table>
	<form method = 'POST' action='index.php'><br>
           <strong>Description: </strong> 
	   <input type='text' name='description'/><br>
	   <strong>Date:</strong><input type='date' name='Date'><br>
	   <strong>Time:</strong><input type='time' name='Time'><br>
	   <input type='hidden' name = 'action' value='add'><br>
	   <input type="submit" value="Add"/>
	</form>
</div>
<div align="center">
 	<form action="login.php">
      <button type="submit">Sign Out</button>
 	</form>
</div>
</body>
</html>