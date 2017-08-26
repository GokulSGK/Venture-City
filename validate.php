<?php


 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('codexworld') or die(mysql_error());
 $name=$_POST['username'];
 $pwd=$_POST['password'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from enter where user_name='".$name."' and password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
   
    header('location:map.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }

?>