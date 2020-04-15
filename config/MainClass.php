<?php

// timezone

class MainClass
{


    /**
     * MainClass constructor.
     */
    public function __construct()
    {
        try {
            $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "wazaga_fiver";
            $this->db = new PDO("mysql:$host", $user, $pw);
            $this->db->exec("CREATE DATABASE IF NOT EXISTS $db");
            $this->db->exec("USE $db");
        } catch (Exception $e) {
            echo $e;
        }
    }

    function register($username, $email, $password)
    {
        $stmtselect = $this->db->query("SELECT * FROM users where email ='$email' ");
        if ($stmtselect->rowCount() > 0) {
            return false;
        }
        $password = md5($password);
        $token = $this->generateRandomString();
        $stmt = $this->db->prepare("INSERT INTO `users` (username, email, password,token) VALUES (?,?,?,?)");
        $stmt->execute([$username, $email, $password, $token]);
        sendVerificationEmail($email, $token);
        return true;

    }

    function login($email, $password)
    {
        $password = md5($password);
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email =? AND password =? ");
        $stmt->execute([$email, $password]);
        if ($stmt->rowCount() > 0) {
            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($data['verified'] == 0) {
                return 'verify';
            } else {
                $_SESSION['user'] = $data;
                return 'ok';
            }
        } else {
            return 'bad';
        }
    }

    function requestVerifyGemail($email)
    {
        $stmtselect = $this->db->query("SELECT * FROM users where email ='$email' ");
        if ($stmtselect->rowCount() > 0) {
            $token = $this->generateRandomString();
            sendVerificationEmail($email, $token);
            // update token
            $this->db->query("UPDATE users SET token = '$token' where email = '$email'");
            return true;
        } else {
            return false;
        }
    }

    function verifyGemail($token, $email)
    {
        $this->db->query("UPDATE users SET verified ='1' where email = '$email' ");
        return true;
    }


    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}


$use = new MainClass();


