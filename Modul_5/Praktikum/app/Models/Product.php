<?php

namespace app\Models;

// include "xampp/htdocs/Modul 5/app/Config/DatabaseConfig.php";
include "app/Config/DatabaseConfig.php";

use app\Config\DatabaseConfig;
use mysqli;

class Product extends DatabaseConfig
{
  public $conn;

  public function __construct()
  {
    //Connect ke Database MySql
    $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database_name, $this->port);
    //Check Connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }


  //Proses menampilkan semua data
  public function findAll()
  {
    $sql = "SELECT * FROM produk INNER JOIN stock_produk ON produk.id_stok = stock_produk.id_stok";
    $result = $this->conn->query($sql);
    $this->conn->close();
    $data = [];
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
    return $data;
  }

  //Dengan Id
  public function findById($id)
  {
    $sql = "SELECT * FROM produk INNER JOIN stock_produk ON produk.id_stok = stock_produk.id_stok WHERE id_produk= ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $this->conn->close();
    $data = [];
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }

    return $data;
  }

  //Input Data
  public function create($data)
  {
    $idstok = $data['id_stok'];
    $nama_produk = $data['nama_produk'];
    $kategori = $data['kategori'];
    $harga = $data['harga'];
    $query = "INSERT INTO produk (id_stok, nama_produk, kategori, harga) VALUES (?, ?, ?, ?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("issi", $idstok, $nama_produk, $kategori, $harga);
    $stmt->execute();
    $this->conn->close();
  }

  //Update data By Id
  public function update($data, $id)
  {
    $idstok = $data['id_stok'];
    $nama_produk = $data['nama_produk'];
    $kategori = $data['kategori'];
    $harga = $data['harga'];

    $query = "UPDATE produk SET id_stok = ?, nama_produk = ?, kategori = ?, harga = ? WHERE id_produk = ?";
    $stmt = $this->conn->prepare($query);
    // huruf s berarti tipe parameter id_stock, id_produk, nama_produk, kategori, harga adalah string dan huruf i berarti parameter id adalah integer
    $stmt->bind_param("issii", $idstok, $nama_produk, $kategori, $harga, $id);
    $stmt->execute();
    $this->conn->close();
  }

  // delete data by id
  public function destroy($id)
  {
    $query = "DELETE FROM produk WHERE id_produk = ?";
    $stmt = $this->conn->prepare($query);
    // huruf i berarti parameter pertama adalah integer
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $this->conn->close();
  }
}
