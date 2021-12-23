<!DOCTYPE html>
<html>

<head>
    <title>Product Add</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/javasc.js"></script>
</head>

<body>

    <form action="ControllerUserData.php" id="product_form" method="POST" style="margin: 25px;">

        <span style="font-size: 30px;">Product Add</span>

        <button class="btn btn-warning" id="cancel" name="cancel" type="submit" style="float: right;" formnovalidate>Cancel</button>

        <button class="btn btn-success" id="save" name="save-product" type="submit" style="margin-right: 10px; float:right;">Save</button>

        <hr style="border: 1px solid black;">

        <br><br>
        <label for="fname">SKU&emsp;&emsp;&emsp;&emsp;</label>
        <input type="text" id="sku" name="sku" placeholder="#Sku" required><br><br>

        <label for="lname">Name&emsp;&emsp;&emsp;</label>
        <input type="text" id="name" name="name" placeholder="#Name" required><br><br>

        <label for="lname">Price ($)&emsp;&emsp;</label>
        <input type="number" id="price" name="price" placeholder="#Price" required><br><br>

        <label for="type">Type Switcher&emsp;&emsp;&emsp;</label>
        <select id="productType" name="type" onchange="perform()" required>
            <option value="" disabled selected="selected">Type Switcher</option>
            <option value="dvd">DVD</option>
            <option value="furniture">Furniture</option>
            <option value="book">Book</option>
        </select><br><br>

        <label id="l_size" style="display: none;">Size (MB)&emsp;&emsp;&emsp;&emsp;</label>
        <input type="number" id="size" name="size" placeholder="#Size" style="display: none;" />

        <label id="l_weight" style="display: none;">Weight (KG)&emsp;&emsp;&emsp;</label>
        <input type="number" id="weight" name="weight" placeholder="#Weight" style="display: none;" />

        <h6 id="l_dim" style="display: none;">Enter Dimensions (HxWxL)</h6><br><br>

        <label id="l_height" style="display: none;">Height (CM)&emsp;&emsp;&emsp;</label>
        <input type="number" id="height" name="height" placeholder="#Height" style="display: none;" /><br><br>

        <label id="l_width" style="display: none;">Width (CM)&emsp;&emsp;&emsp;</label>
        <input type="number" id="width" name="width" placeholder="#Width" style="display: none;" /><br><br>

        <label id="l_length" style="display: none;">Length (CM)&emsp;&emsp;&emsp;</label>
        <input type="number" id="length" name="length" placeholder="#Length" style="display: none;" />

    </form>


</body>

</html>