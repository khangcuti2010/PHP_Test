<?php
include ("config.php");
class Data
{
    protected $conn = "";
    protected $result = "";
    public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=php_test;charset=utf8","root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($sql){//thực thi truy vấn sql và gán kết quả thu được vào biến result
        if ($this->conn) {
            $this->result = $this->conn->query($sql);
        }
    }

    public function exec($sql){//thực thi truy vấn sql và gán kết quả thu được vào biến result

        if ($this->conn) {
            $this->result = $this->conn->exec($sql);
        }
    }

    public function getResult(){
        return $this->result;
    }

    public function num_row(){ //trả về số lượng kết quả truy vấn
        $rows = 0;
        if($this->result){
            $rows = $this->result->rowCount();
        }
        return $rows;
    }

    public function getOneFirst(){ //lấy bản ghi đầu tiên của kết quả
        $data = array();
        if($this->result){
            $data = $this->result->fetch(PDO::FETCH_ASSOC);// là 1 mảng có key là tên cột valua là nội dung cột
        }
        return $data;
    }

    public function getAll(){ //lấy tất cả các bản ghi
        $arr = array();//tạo 1 mảng lớn chứa tất cả các mảng khác
        $row = array();//mảng con chứa dữ liệu 1 bản ghi
        if ($this->result) {
            while ($row = $this->result->fetch(PDO::FETCH_ASSOC)) {
                $arr[] = $row;
            }
        }
        return $arr;
    }


}