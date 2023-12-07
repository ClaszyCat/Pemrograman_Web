<?php

namespace app\Controller;

// include 'xampp/htdocs/Modul 5/app/app/Traits/ApiResponseFormatter.php';
include 'app/Traits/ApiResponseFormatter.php';
// include 'xampp/htdocs/Modul 5/app//Models/Product.php';
include 'app/Models/Product.php';

use app\Models\Product;
use app\Traits\ApiResponseFormatter;

class ProductController
{
  // use trait
  use ApiResponseFormatter;

  public function index()
  {
    // define object model
    $productModel = new Product();
    // call all get function product
    $response = $productModel->findAll();
    // return value
    return $this->apiResponse(200, "success", $response);
  }

  public function getById($id)
  {
    $productModel = new Product();
    $response = $productModel->findById($id);
    return $this->apiResponse(200, "success", $response);
  }

  public function insert()
  {
    $jsonInput = file_get_contents('php://input');
    $inputData = json_decode($jsonInput, true);
    if (json_last_error()) {
      return $this->apiResponse(400, "error invalid input", null);
    }

    $productModel = new Product();
    $response = $productModel->create([
      "id_stok" => $inputData["id_stok"],
      "nama_produk" => $inputData["nama_produk"],
      "kategori" => $inputData["kategori"],
      "harga" => $inputData["harga"]
    ]);

    return $this->apiResponse(200, "success", $response);
  }

  public function update($id)
  {
    $jsonInput = file_get_contents('php://input');
    $inputData = json_decode($jsonInput, true);

    if (json_last_error()) {
      return $this->apiResponse(400, "error invalid input", null);
    }

    $productModel = new Product();
    $response = $productModel->update([
      "id_stok" => $inputData["id_stok"],
      "nama_produk" => $inputData["nama_produk"],
      "kategori" => $inputData["kategori"],
      "harga" => $inputData["harga"]
    ], $id);

    return $this->apiResponse(200, "success", $response);
  }

  public function delete($id)
  {
    $productModel = new Product();
    $response = $productModel->destroy($id);

    return $this->apiResponse(200, "success", $response);
  }
}
