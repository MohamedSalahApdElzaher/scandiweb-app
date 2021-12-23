<!DOCTYPE html>
<html>

<head>
  <title>product List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

  <form action="ControllerUserData.php" method="POST" style="margin: 25px;">

    <span style="font-size: 30px;">Product List</span>

    <button class="btn btn-danger" name="delete" id="delete-product-btn" type="submit" style="float: right;">MASS DELETE</button>
    <button class="btn btn-primary" name="ADD" id="ADD" type="submit" style="margin-right: 10px; float: right;" value="ADD">ADD</button>


    <hr style="border: 1px solid black;">

    <div class="flex-container" style=" display: flex; flex-direction: row; flex-wrap: wrap;">

      <?php 
      include "includes/db-config.php";
      include "model/Product.php";
      $product = new Product;
      $connection = $product->setDataBase($GLOBALS['con']);
      $sql = "SELECT * FROM products ORDER BY id";
      $result = $connection->query($sql);
      while ($row = $result->fetch_assoc()) {
      ?>
        <div class="col-lg-3 my-3" style="margin: 5px;">
          <div class="card border border-secondary rounded-lg">
            <div class="card-body text-center">
              <div class="custom-control custom-checkbox text-left">

                <input type="checkbox" class="delete-checkbox" style="float: left;" name="products[]" id="<?= $row['id'] ?>" value="<?= $row['id'] ?>">
                <label class="custom-control-label" for="<?= $row['id'] ?>"></label>

                <h6 class="card-title"><?php echo $row['sku'] ?></h6>
                <h6 class="card-title"><?php echo $row['name'] ?></h6>
                <h6><?php echo $row['price'] . " $" ?></h6>
                <h6><?php
                    echo $row['weight'] != 0 ? "Weight: " . $row['weight'] . " Kg" : ($row['size'] != 0 ? "Size: " . $row['size'] . " MB" :
                      "Dimensions: " . $row['height'] . "x" . $row['width'] . "x" . $row['length']);
                    ?></h6>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </form>

</body>

</html>