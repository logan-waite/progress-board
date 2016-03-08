<?php
    require ("../../resources/db_connect.php");


    function create_user($name = NULL,/*$team = NULL,*/ $username = NULL, $password = NULL) 
    {

        if ($name == NULL /*|| $team == NULL */|| $username == NULL || $password == NULL)
        {
            throw new Exception ("Missing information to add new user!");
        }

        global $db;
              
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $full_name = explode(" ", $name);
        $first_name = trim($full_name[0]);
        $last_name = trim($full_name[1]);
        
        
        try 
        {
            $query = "INSERT INTO users
                            (first_name, last_name, username, password)
                            VALUES
                            (:first_name, :last_name, :username, :password)";
            $result = $db->prepare($query);
            $result->execute(
                array(
                    "first_name" => $first_name,
                    "last_name" => $last_name,
                    "username" => $username,
                    "password" => $hashed_password
                )
            );
            return 1;
        }
        catch (Exception $e)
        {
            error_log("We got this exception: " .$e);
            return $e;
        }
    }

    function delete_user() 
    {
        
    }

    function get_all_users() 
    {
        
    }

    // Returns Array containing user information.
    // Second Parameter determines which single field to return, default is everything
    function get_user_info($username = NULL, $info = NULL) 
    {
        if ($username == NULL)
        {
            throw new Exception ("No username passed to get_user_info");
        }
        global $db;
        $field = "*";
        
        switch ($info) 
        {
            case 'id':
                $field = "id";
                break;
            case 'name':
                $field = 'first_name, last_name';
                break;
            case 'first_name';
                $field = 'first_name';
                break;
            case 'last_name':
                $field = 'last_name';
                break;
            case 'team':
                $field = 'team';
                break;
            case 'username':
                $field = 'username';
                break;
            case 'password':
                $field = 'password';
                break;
            default:
                $field = '*';
                break;
        }
        
        $query = "SELECT {$field} 
                    FROM users
                    WHERE username = :username";
        
        $result = $db->prepare($query);
        $result->execute(
            array(
                "username" => $username
            )
        );
        $user_info = $result->fetch();
        
        if ($info == 'name') 
        {
            return $user_info['first_name'] . " " . $user_info['last_name'];
        }
        else if ($info = NULL)
        {
            return $user_info;
        }
        else
        {
            return $user_info[$field];
        }
    }

    function get_user_password($user = NULL) 
    {
        if ($name = NULL)
        {
            throw new Exception ("No user was submitted!");
        }

        global $db;

        $query = "SELECT password 
                    FROM users 
                    WHERE username = :user";

        $result = $db->prepare($query);
        $result->execute(
            array(
                "user" => $user
            )
        );
        $info = $result->fetch();
        return trim($info['password']);
    }

    function update_user() 
    {
        
    }

?>