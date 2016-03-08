<?php
	include '../../models/user_model.php';


	$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
	$team = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
	$username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
	$password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
	$password2 = trim(filter_input(INPUT_POST, 'confirm-password', FILTER_SANITIZE_STRING));

    $submitTeam = true;
    $submitPassword = true;
    $nameAlert = "n";
    $teamAlert = "t";
    $usernameAlert = "u";
    $passwordAlert = "p";
    $password2Alert = "2";
    $confirmAlert = "c";
    $alert = "n=";

    if (!empty($name) /*&& !empty($team) */&& !empty($username) && !empty($password) && !empty($password2)) 
    {
        /*if (!filter_var($team, FILTER_VALIDATE_EMAIL))
        {
            $submitTeam = false;
            $alert .= $teamAlert;
        }
        */
        
        if ($password !== $password2)
        {
            $submitPassword = false;
            $alert .= $confirmAlert;
        }
        
        if (/*!$submitTeam || */!$submitPassword) 
        {
            header("Location: ../views/user/new_user.php?{$alert}");
        } 
        else 
        {
            $result = create_user($name, /*$team, */$username, $password);
            if (strpos($result, "1062"))
            {
                echo "1062";
            }
            else
            {
                echo 'true';
            }
        }
    }
    else
    {
        if (empty($name))
        {
            $alert .= $nameAlert;
        }
        
        /*if (empty($team))
        {
            $alert .= $teamAlert;
        }
        */
        if (empty($username))
        {
            $alert .= $usernameAlert;
        }
        
        if (empty($password))
        {
            $alert .= $passwordAlert;
        }
        
        if (empty($password2))
        {
            $alert .= $password2Alert;
        }
        
        header("Location: ../views/user/new_user.php?{$alert}");
    }

?>