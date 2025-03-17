<?php include 'include/connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product viwe</title>
</head>
<body>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<!-- delete code -->

<?php
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    $imgname = $_GET["imgname"];
                    unlink("uploads/" . $imgname);
                    $result = mysqli_query($conn, "delete from products where product_id = '$id'") or die(mysqli_errno($conn));
                    if ($result) {
                        header('Location: productviwe.php');
                    } else {
                        echo "Delete Error";
                    }
                }
                ?>






<div  class="container mt-5">
    <div>
    <a href="product.php">product add</a>
    </div>
    <div>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">product name</th>
      <th scope="col">tital</th>
      <th scope="col">img1</th>
      <th scope="col">img2</th>
      <th scope="col">pric</th>
      <th scope="col">descripsion</th>
    </tr>
  </thead>
  <tbody>

    <?php
    
    $result = mysqli_query($conn, "select * from products") or die(mysqli_error($conn));
    $num =  mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <th scope="row"><?php echo $row["product_id"]?></th>
     
      <td><?php echo $row["titeal"] ?></td>
      <td><?php echo $row["name"] ?></td>
      <td>
      <img src="uploads/<?php echo $row["img1"] ?>" width="100" />
      </td>
      <td>
      <img src="uploads/<?php echo $row["img2"] ?>" width="100" />
    </td>
     
      <td><?php echo $row["pric"] ?></td>
      <td><?php echo $row["descripsion"] ?></td>
    
      <td>
        <a href="?id=<?php echo $row["product_id"] ?>&imgname=<?php echo $row["img1"] ?><?php echo $row["img2"] ?>" class="btn btn-sm btn-danger">delete</a><br><br>
        <a href="updateproduct.php?id=<?php echo $row["product_id"] ?>&imgname=<?php echo $row["img1"] ?>&imagename2=<?php echo $row["img2"] ?>" class="btn btn-sm btn-danger">update</a>
      </td>
      
    </tr>
  <?php
  }
  ?>
 
  </tbody>
</table>
    </div>
</div>










        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                        crossorigin="anonymous"></script>
</body>
</html>