<?php 
if(!isset($_SESSION)) session_start();
$admin_password = '87654322';
$user_password = '87654321';
/**
 * @author quocdunginfo
 * @copyright 2013
 */
if(!isset($_SESSION['qd_admin']))
{
    if (isset($_POST['submit']))
    {
		//validate password
        if($_POST['password']===$admin_password)
        {
			$_SESSION['qd_admin'] = '1';
			//redirect to browser
			header("Location: browse.php");
        }
        else if($_POST['password']===$user_password)
        {
            $_SESSION['qd_admin'] = '0';
			//redirect to browser
			header("Location: browse.php");
        }
		echo 'FAIL!';
		include_once('login.html');
    } else 
    {
        include_once('login.html');
    }
    
}
else
{
    //redirect to browser
    header("Location: browse.php");
}
