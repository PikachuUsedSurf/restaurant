<?php
// Include the PHP script to connect to the database
include("server.php");

// Define SQL query to select menu items from the database
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="CodeHim">
  <title>Add To Cart using HTML Example</title>

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600,400italic'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css'>
  <!-- Style CSS -->
  <link rel="stylesheet" href="./css/cart/style.css">
  <!-- Demo CSS (No need to include it into your project) -->
  <link rel="stylesheet" href="./css/cart/demo.css">

</head>

<body>

  <main>
    <!-- Start DEMO HTML (Use the following code into your project)-->
    <div class="wrapper">

      <header class="site-header">
        <div class="inner-wrap">
          <h1>Menu</h1>
          <ul class="list-inline">
            <li><button class="your-cart js-toggle-cart" data-item-num="3">Your Cart <i class="fa fa-lg fa-shopping-cart"></i></button></li>
          </ul>
        </div>
      </header>

      <div class="site-toolbar">
        <div class="inner-wrap clearfix">
          <div class="notifications animated"><span>Amazing Product</span> Added to Cart!</div>
        </div>
      </div>

      <div class="filter-grid">
        <div class="inner-wrap">
          <div class="filter-cell">
            <select class="form-control">
              <option value="*">Category</option>
              <option value="fav">Favorites</option>
            </select>
          </div>
        </div>
      </div>

      <div class="inner-wrap content-wrap">
        <!--Menu lists-->
        <?php
        // Check if there are menu items in the result
        if ($result->num_rows > 0) {
          // Loop through each row of menu items
          while ($row = $result->fetch_assoc()) {
            // Output HTML content for each menu item
        ?>
            <div class="product-grid">
              <div class="grid-product square fav">
                <div class="img-name">
                <img src="./public/images/<?php echo $row["image"]; ?>" alt="<?php echo $row["name"]; ?>" class="curvy-image">
                  <h4><?php echo $row["name"]; ?></h4>
                </div>
                <p class="price">$<?php echo $row["price"]; ?><button class="add-to-cart js-add-to-cart btn">Add</button>
                <p>
              </div>
            </div>

        <?php
          }
        } else {
          // If no menu items found
          echo "No menu items available.";
        }
        ?>


      </div>

      <div class="sticky"></div>

    </div>
    <div class="cart">

      <div class="inner-wrap">
        <h2>Your Cart</h2>

        <table class="cart-table">
          <thead>
            <tr>
              <th class="product-remove">Remove Items</th>
              <th class="product-name">Product</th>
              <th class="product-price">Price</th>
              <th class="product-quantity">Quantity</th>
              <th class="product-line-total">Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr id="product-camera">
              <td><button type="button" class="product-remove" data-id="product-camera"><i class="fa fa-times"></i></button></td>
              <td>Camera</td>
              <td class="product-price" data-price="3.99">3.99</td>
              <td class="product-quantity">
                <input type="number" pattern="\d*" step="1" min="1" max="5" value="1" data-id="product-camera">
                <button class="plus js-number-control">
                  <i class="fa fa-plus-square"></i>
                </button>
                <button class="minus js-number-control">
                  <i class="fa fa-minus-square"></i>
                </button>
              </td>
              <td class="product-line-total" id="product-camera-total" data-line-total="3.99">3.99</td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
    <!-- END EDMO HTML (Happy Coding!)-->
  </main>


  <footer class="credit">Author: Filip Danisko - Distributed By: <a title="Awesome web design code & scripts" href="https://www.codehim.com?source=demo-page" target="_blank">CodeHim</a></footer>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.0.0/isotope.pkgd.min.js'></script>
  <script src="./js/script.js"></script>

</body>

</html>