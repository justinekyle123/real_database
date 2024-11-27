<?php

    function connection(){
        
        $host = "localhost";
        $database = "loginForm";
        $username = "root";
        $password = "12345";

        $con = new mysqli($host,$username,$password,$database);

        if($con->connect_error){
            echo $con->connect_error;
        }else{


            return $con;
        }

    }

