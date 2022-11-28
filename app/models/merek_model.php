<?php

class Merek_model
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMerek()
    {
        $this->db->query("SELECT * FROM merek");
        return $this->db->resultSet();
    }

    public function getMerekById($id)
    {
        $this->db->query("SELECT * FROM merek WHERE id = '$id'");
        return $this->db->single();
    }

    public function insertMerek($data)
    {
        $nama_merek = htmlspecialchars($data['nama_merek']);  //menghapus alamat dann no telp

        $sql = "INSERT INTO merek VALUES
        (null, :nama_merek)";
        $this->db->query($sql);
        $fields = [
            'nama_merek' => $nama_merek               //menghapus alamt n no telp
        ];
        $this->db->binds($fields);
        // $this->db->bind('nama_penerbit', $nama_penerbit);
        // $this->db->bind('alamat', $alamat);
        // $this->db->bind('no_telp', $no_telp);
        $this->db->execute();
    }

    public function updateMerek($id, $data)
    {
        $nama_merek = htmlspecialchars($data['nama_merek']);
        $sql = "UPDATE merek SET
                nama_merek = :nama_merek
                WHERE id = :id";
        $this->db->query($sql);
        $fields = [
            'nama_merek' => $nama_merek,
            'id' => $id
        ];
        $this->db->binds($fields);
        // $this->db->bind('nama_penerbit', $nama_penerbit);
        // $this->db->bind('alamat', $alamat);
        // $this->db->bind('no_telp', $no_telp);
        // $this->db->bind('id', $id);
        $this->db->execute();
    }

    public function hapusMerek($id)
    {
        //Cek apakah id merek ada dalam database
        $this->db->query("SELECT id FROM merek WHERE id = '$id'");
        $row = $this->db->numRows();
        //Jika row berisikan nilai 0 maka tidak ada merek yang ingin dihapus dalam database
        if ($row == 0) {
            return 0;
        }
        $this->db->query("DELETE FROM merek WHERE id = :id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return 1;
    }
}
