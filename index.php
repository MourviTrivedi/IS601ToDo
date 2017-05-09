<?php
require('db_connection.php');
require('db.php');
 $action = filter_input(INPUT_POST, 'action');
 //echo $action.'currentaction'; --thisworks
 if($action == NULL)
 {
  $action = "show_login_page";
 }
if($action == "show_login_page")
{
 include('login.php');
}else if($action == 'test_user')
{
  $username = $_POST['reg_uname'];
  $password = $_POST['reg_password'];
  $suc = isUserValid($username,$password);
  if($suc == true)
  {
    $result = getTodoItems($_COOKIE['my_id']);
    include('list.php');
  }else{
    header("Location: badInfo.php");
  }
}else if ($action == 'register')
{
 
 $name = filter_input(INPUT_POST, 'uname');
 if(isset($name))
 {
   echo "we want to create a new account";
   $pass = filter_input(INPUT_POST, 'password');
   $first_n = filter_input(INPUT_POST, 'first_name');
   $last_n = filter_input(INPUT_POST, 'last_name');
   $email = filter_input(INPUT_POST, 'email');
   $phone_n = filter_input(INPUT_POST, 'number');
   $birthday = filter_input(INPUT_POST, 'birthday');
   $gender = filter_input(INPUT_POST, 'g');


  $query = "INSERT INTO `mt67`.`users`(`username`,`passwordHash`, `Firstname`, `lastname`, `email`, `phone`, `birthday`, `gender`)
   VALUES ('$name','$pass','$first_n','$last_n','$email','$phone_n','$birthday','$gender')";
      
   $exit= createUser($name,$pass,$first_n,$last_n,$email,$phone_n,$birthday,$gender);

   if($exit == true)
 {
   header("Location: login.php");
 }else {
   header("Location: login.php");
   }
 }
}

else if ($action == 'Edit'){
if (isset($_POST['new_description']) and isset($_POST['item_id']))
     {
      echo $_POST['new_description'];
      $todo_item=$_POST['new_description'];
      $todo_id=$_POST['item_id'];

     editTodoItems($todo_item,$todo_id);
     }
   
     $result = getTodoItems($_COOKIE['my_id']);
      include('list.php');
}
else if ($action == 'add')
{
  if(isset($_POST['description']) and $_POST['description']!='')
  {
    addTodoItem($_COOKIE['my_id'],$_POST['description'],$_POST['Date'],$_POST['Time']);
  }
  $result = getTodoItems($_COOKIE['my_id']);
  include('list.php');
}

else if ($action == 'delete') 
{
  if(isset($_POST['item_id']))
{
  //echo 'delete';
      $selected = $_POST['item_id'];
      //echo $_POST['item_id'].$_COOKIE['my_id'];
      deleteTodoItems($_COOKIE['my_id'],$selected);

    $result = getTodoItems($_COOKIE['my_id']);
    include('list.php');
  }
}
?>