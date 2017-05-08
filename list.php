<html>
<head>
  <title>To Do List</title>
  <style type="text/css">
    body {
      background-image: url(http://wallpaperpulse.com/img/1331570.jpg);
    }
    #list {
      padding: 6px;
      width:300px;
      margin:20px auto;
      text-align:center; 
      background-color: #E1DFDF;
      border-radius: 10px;
      border:2px solid; 
    }
    </style>
  </head>
<body>
  <div id='list'>
<?php
echo "<h1>To-Do List System</h1><br/>";
echo "Welcome, ".$_COOKIE['login'].'<br />';
echo "Below is your To-Do List Items:";
echo "</ br> </ br>";

?>

<html>
  <body>
    <table>
      
         <?php foreach($result as $res):?>
           
	 <tr>
	   <td> <?php echo $res['todo_item']; ?> </td>
	   <td>
	     <form action='index.php' method="POST">
	      <input type='hidden' name='item_id' value= <?php echo $res['id']; ?> >
	      <input type='hidden' name='action' value='delete'>
	      <input type="submit" value="delete"/> 
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
	   <input type='hidden' name = 'action' value='add'><br>
	   <input type="submit" value="Add"/>
	</form>
	
</div>
</body>
</html>
