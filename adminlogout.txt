<?php
session_start();
if(session_destroy())
{
	header("location:2login.php");
}
?>