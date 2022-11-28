<?php
class Barang_model
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query("SELECT barang.*, kategori.nama_kategori FROM barang
        JOIN kategori ON id_kategori = kategori.id");
        return $this->db->resultSet();
    }

    public function getDetailBarang($id)
    {
        $this->db->query("SELECT barang.*, kategori.nama_kategori, merek.nama_merek FROM barang
        JOIN kategori ON barang.id_kategori = kategori.id
        JOIN merek ON barang.id_merek = merek.id
        WHERE merek.id = '$id'");
        return $this->db->single();
    }

    public function countBarang()
    {
        $this->db->query("SELECT COUNT(*) FROM barang");
        return $this->db->numRows();
    }

    public function tambah_Barang($data)
    {
        $nama_barang = htmlspecialchars($data['nama_barang']);
        $merek = htmlspecialchars($data['merek']);
        $tahun_pembuatan = htmlspecialchars($data['tahun_pembuatan']);                     //hapus penulis dan isbn
        $kategori = htmlspecialchars($data['kategori']);
        $tgl_input = date('Y-m-d');

        $query = "INSERT INTO barang VALUES
        (null, :nama_barang, :merek, :tahun_pembuatan,:kategori, :tgl_input)";

        $this->db->query($query);
        
        $fields = [
            'nama_barang' => $nama_barang,
            'merek' => $merek,
            'tahun_pembuatan' => $tahun_pembuatan,                    //hapus penulis dan isbn
            'kategori' => $kategori,
            'tgl_input' => $tgl_input
        ];

        $this->db->binds($fields);

        try {
            $this->db->execute();
        } catch (\PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                return 0;
                die;
            }
        }

        return $this->db->rowCount();
    }

    public function ubahBarang($id, $data)
    {
        $nama_barang = htmlspecialchars($data['nama_barang']);
        $merek = htmlspecialchars($data['merek']);
        $tahun_pembuatan = htmlspecialchars($data['tahun_pembuatan']);
        $kategori = htmlspecialchars($data['kategori']);

        $sql = "UPDATE barang SET
                nama_barang = :nama_barang,
                id_merek = :merek,
                tahun_pembuatan = :tahun_pembuatan,
                id_kategori = :kategori
                WHERE id = :id";

        $this->db->query($sql);
        $fields = [
            'nama_barang' => $nama_barang,
            'merek' => $merek,
            'tahun_pembuatan' => $tahun_pembuatan,
            'kategori' => $kategori,
        ];
        $this->db->binds($fields);

        try {
            $this->db->execute();
        } catch (\PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                return 0;
                die;
            }
        }

        return $this->db->rowCount();
    }

    public function hapusBarang($id)
    {
        //Cek apakah id barang ada dalam database
        $this->db->query("SELECT id FROM barang WHERE id = '$id'");
        $row = $this->db->numRows();
        //Jika row berisikan nilai 0 maka tidak ada barang yang ingin dihapus dalam database
        if ($row == 0) {
            return 0;
        }

        $this->db->query("DELETE FROM barang WHERE id = :id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return 1;
    }
}






