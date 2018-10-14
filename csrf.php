<?php
   session_start();   
 if (isset($_POST['verify']))	{
	if($_POST['csrf_token'] == $_COOKIE['csrf_token_cookie']){
   		header("location: success.php");
   		}
   	  else		{
   		header("location: error.php");
   		}
   	}   
   ?>