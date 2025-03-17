<?php include 'admin/include/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="./css/projectstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: black;">





<?php
  $id=$_GET["id"];
  $result = mysqli_query($conn, "select * from products as p left join category as c on p.Category_id =c.Category_id  where p.product_id ='$id'") or die(mysqli_error($conn));
while($row=mysqli_fetch_assoc($result)){

?>


<div class="container">
   
        <div class="session2">
        
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-6 shopimg"> <div><img src="admin/uploads/<?php echo $row["img1"] ?>" width="300" /></div></div>
                        <div class="col-6"> <div><img src="admin/uploads/<?php echo $row["img2"] ?>" width="300" /></div>
                    </div>
                    
                    </div>
                


                </div>
               
               
                <div class="col-4">
                <h8 class="session2txt2"><?php echo $row["category_name"]; ?></h8><br>
                <h1 class="sessiom2txt"><?php echo $row["name"]; ?></h1><br>
                <h1 class="sessiom2txt"><?php echo $row["descripsion"]; ?></h1><br><br>
                <h1 class="sessiom2txt">pris/:<?php echo $row["pric"]; ?></h1>
                <div >
4
                    </div>
                    <div class="ses2img1">
                      <!-- img -->
                     
                       
                      
                    </div>
                    
                </div>
              

                </div>
            </div>

            
           
<
    </div>
</div>


<?php           
}
?>
            <!-- <div>

            <div class="session2txt3">
                        <h8>product name</h8>

                    </div>

                <div class="">
                    <div class="ses2img2">
                        <img src="./img/men-02.jpg" alt="">
                    </div>
                    <div class="session2txt4">
                        <h8>Air Force 1 X</h8>
                    </div>
                </div>
                <div class="col-4">
                    <div class="sesimg3">
                        <img src="./img/men-03.jpg" alt="">
                    </div>
                    <div class="session2txt5">
                        <h8>Love Nana 20</h8>
                    </div>

                    
                    </div> -->


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                        crossorigin="anonymous"></script>
</body>
</html>