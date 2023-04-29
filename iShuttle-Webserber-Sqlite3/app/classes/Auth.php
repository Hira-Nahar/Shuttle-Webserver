<?php

namespace App\classes;

class Auth{

    private $email;
    private $password; 
    private $users;
    private $data;
    private $queryResult;
    private $con;
    private $sql;
    private $db;

    public function index()
    {
        header('Location:pages/home.php');
    }

    public function __construct($data = null)
    {
        $this->db = new \PDO('sqlite:shuttle_db.db');

        if($data)
        {
            $this->email = $data['email'];
            $this->password = $data['password'];
        }
    }

    public function login()
    {
        $this->sql = "SELECT * FROM users WHERE email= :email AND password= :password";
        $stmt = $this->db->prepare($this->sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
        $this->data = $stmt->fetch();

        if($this->data)
        {
            session_start();
            $_SESSION['id']         = $this->data['id'];
            $_SESSION['name']       = $this->data['name'];
            $_SESSION['user_type']  = $this->data['user_type'];
            header('location:home.php');
        }
        else
        {
            return "Sorry..Email or password is invalid";
        }
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location:../index.php');
    }
    public function serial()
    {  
    //     $local_dir = 'G:\Hira\lisences';
    //     $files = scandir($local_dir);
    //     print_r($files);
        
        $file = fopen("G:\Vaia\New folder\hira.txt", "r"); // open the file in read mode
        if ($file) {
            $content = fread($file, filesize("G:\Vaia\New folder\hira.txt")); // read the file content
            fclose($file); // close the file
            echo $content; // display the content
        } else {
            echo "Failed to open file.";
        }
        
    }

}