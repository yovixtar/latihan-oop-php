<?php
class DisplayDatabase{
    private $query;
    public function select($value)
    {
        $this->query = "SELECT ".$value;
        return $this;
    }
    public function from($value)
    {
        $this->query .= " FROM ".$value;
        return $this;
    }
    public function where($value)
    {
        $this->query .= " WHERE ".$value;
        return $this;
    }
    public function getQuery()
    {
        return $this->query;
    }
}
$mahasiswa = new DisplayDatabase();
$mahasiswa->select("nim, nama")->from("mahasiswa")->where("nim='202400007'");
echo $mahasiswa->getQuery();