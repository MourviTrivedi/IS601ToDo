<?php
echo "<h1>To do list system</h1><br/>";
echo "Welcome, ".$_COOKIE['login'].'<br />';
echo "Below you my find your to-do list items: ";
echo "</ br> </ br>";

?>

<html>
  <body>
    <table>
      
         <?php foreach($result as $res):?>
           
	 <tr><a href="url">link_text</a>  
	   <td> <?php echo $res['todo_item']; ?> </td>
	   <td>
	      <form action='index.php' method='post'>
	      <input type='hidden' name='item_id' value'<?php echo $res['id'] ?>'>
	      <input type='hidden' name='action' value='delete'>
	      <input type='submit' value"Delete"> </form>
	      </td>
	 </tr>
	 <?php end foreach;?>
    </table>
	<form method = 'post' action='index.php'>
           <strong>Description: </strong> 
	   <input type='text' name='description'/><br>
	   <input type='hidden' name = 'action' value='add'><br>
	   <input type="submit" value="Add"/>


        </form>

  </body>
</html>
