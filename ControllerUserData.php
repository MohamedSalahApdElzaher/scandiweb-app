<?php

include "includes/db-config.php";
include "model/Product.php";

/**
 * press add button
 */
if (isset($_POST['ADD'])) {
  header('location: add-Product.php');
}

/**
 * press mass-delete button
 */
if (isset($_POST['delete'])) {
  if (!empty($_POST['products'])) {
    foreach ($_POST['products'] as $product) {
      $sql = "DELETE FROM products WHERE id=" . $product;
      mysqli_query($GLOBALS['con'], $sql);
    }
  }
  header('location: index.php');
}

/**
 * press cancel button
 */
if (isset($_POST['cancel'])) {
  header('location: index.php');
}

/**
 * get form inputs
 */
function getInputs()
{
  // create an object
  $product = new Product();

  // set all attributes fields
  $sku = $_POST['sku'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $weight = $_POST['weight'];
  $size = $_POST['size'];
  $height = $_POST['height'];
  $width = $_POST['width'];
  $length = $_POST['length'];
  $connection = $product->setDataBase($GLOBALS['con']);
  $product->setSKU($connection->real_escape_string($sku));
  $product->setName($connection->real_escape_string($name));
  $product->setPrice($price);
  $product->setWeight($weight);
  $product->setSize($size);
  $product->setHeight($height);
  $product->setWidth($width);
  $product->setLength($length);

  //return product
  return $product;
}

/**
 * press save button
 */
if (isset($_POST['save-product'])) {
  getInputs()->addProduct();
  header("location: index.php");
}


