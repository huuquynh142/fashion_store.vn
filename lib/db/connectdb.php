<?php
class database
{
    public function database()
    {
        $servername = "localhost";
        $username = "root";
        $password = "123456";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=fashion_store", $username, $password);
            // set the PDO error mode to exception
           $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //print_r("ket noi thanh cong");
            return $this->conn;
        }
        catch(PDOException $e)
        {
           // print_r("ket noi that bai");
            return "Connection failed: " . $e->getMessage();
        }
    }

    public function getAllData($sql){
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRowData($sql){
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
