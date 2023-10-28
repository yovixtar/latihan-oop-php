<?php
class DB {
    private $_host = "127.0.0.1";
    private $_dbname = "oop_blj_1";
    private $_username = "khazimstar";
    private $_password = "Khazimfikri3";
    private $_pdo;
    private static $_instance = null;
    private $_columnName = "*";
    private $_orderBy = "";
    private $_countEffect = 0;

    private function __construct()
    {
        try {
            $this->_pdo = new PDO("mysql:host=".$this->_host.";dbname=".$this->_dbname,$this->_username,$this->_password);
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Koneksi dibuat <br />";
        } catch (\PDOException $e) {
            echo "Koneksi Error : ".$e->getMessage()." , Kode : ".$e->getCode();
        }
    }
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }
    public function runQuery($query, $bindValue = [])
    {
        try {
            $stmt = $this->_pdo->prepare($query);
            $stmt->execute($bindValue);
        } catch (\PDOException $e) {
            echo "Query Error : ".$e->getMessage()." , Kode : ".$e->getCode();
        }
        return $stmt;
    }
    public function getQuery($query, $bindValue = [])
    {
        return $this->runQuery($query, $bindValue)->fetchAll(PDO::FETCH_OBJ);
    }
    public function select($namaKolom)
    {
        $this->_columnName = $namaKolom;
        return $this;
    }
    public function orderBy($namaKolom, $sortType = 'ASC')    
    {
        $this->_orderBy = "ORDER BY {$namaKolom} {$sortType}";
        return $this;
    }
    public function get($namaTabel, $kondisi = "", $bindValue = [])
    {
        $query = "SELECT {$this->_columnName} FROM {$namaTabel} {$kondisi} {$this->_orderBy}";
        $this->_columnName = "*";
        return $this->getQuery($query, $bindValue);
    }
    public function getWhere($namaTabel, $kondisi)
    {
        $queryCondition = "WHERE {$kondisi[0]} {$kondisi[1]} ?";
        return $this->get($namaTabel, $queryCondition, [$kondisi[2]]);
    }
    public function getWhereOnce($namaTabel, $kondisi)
    {
        $result = $this->getWhere($namaTabel, $kondisi);
        if (!empty($result)) {
            return $result[0];
        }else{ return false; }
    }
    public function getLike($namaTabel, $namaKolom, $cari)
    {
        $queryLike = "WHERE {$namaKolom} LIKE ?";
        return $this->get($namaTabel, $queryLike, [$cari]);
    }
    public function check($namaTabel, $namaKolom, $dataValue)
    {
        $queryCheck = "SELECT * FROM {$namaTabel} WHERE {$namaKolom} = ?";
        return $this->runQuery($queryCheck, [$dataValue])->rowCount();
    }
    public function insert($namaTabel, $dataIn)
    {
        $key = array_keys($dataIn);
        $value = array_values($dataIn);
        $kolomIn = "(".implode(',' , $key).")";
        $placeholder = "(".str_repeat('?,', count($dataIn)-1)."?)";
        $queryInsert = "INSERT INTO {$namaTabel} {$kolomIn} VALUES {$placeholder}";
        
        $this->_countEffect = $this->runQuery($queryInsert, $value)->rowCount();
        return true;
    }
    public function countEffect()
    {
        return $this->_countEffect;
    }
    public function update($namaTabel, $dataUp, $kondisi)
    {
        $queryUp = "UPDATE {$namaTabel} SET ";
        foreach ($dataUp as $key => $val) {
            $queryUp .= "$key = ?, ";
        }
        $queryUp = substr($queryUp, 0, -2);
        $queryUp .= " WHERE {$kondisi[0]} {$kondisi[1]} ?";

        array_push($dataUp, $kondisi[2]);
        $bindValue = array_values($dataUp);
        $this->_countEffect = $this->runQuery($queryUp, $bindValue)->rowCount();
        return true;
    }
    public function delete($namaTabel, $kondisi)
    {
        $queryDelete = "DELETE FROM {$namaTabel} WHERE {$kondisi[0]} {$kondisi[1]} ?";
        $this->_countEffect = $this->runQuery($queryDelete, [$kondisi[2]])->rowCount();
        return true;
    }
}