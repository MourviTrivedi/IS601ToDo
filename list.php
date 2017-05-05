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
	     <form action='index.php' method='post'>
	      <input type='hidden' name='item_id' value= <?php echo $res['id']; ?> >
	      <input type='hidden' name='action' value='delete'>
	      <input type='submit' value="Delete"/> 
	     </form>
	      </td>
		<td>
	      <form action='index.php' method='post'>
	      <input type='hidden' name='item_id' value= <?php echo $res['id']; ?> >
	      <input type='hidden' name='action' value='Edit'>
	      <input type='submit' value="Edit"/> 
	      </form>
	    </td>

	 </tr>
	 <?php endforeach;?>
    </table>
	<form method = 'post' action='index.php'><br>
           <strong>Description: </strong> 
	   <input type='text' name='description'/><br>
	   <input type='hidden' name = 'action' value='add'><br>
	   <input type="submit" value="Add"/>


        </form>

  </body>
</html>
