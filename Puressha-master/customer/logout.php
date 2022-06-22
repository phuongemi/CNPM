<?php
switch($_POST['submit'])
    {
        case 'Logout':
            {
                session_unset();
				session_destroy();
				header('location:index.php');
                break;
            }
    }
    
?>