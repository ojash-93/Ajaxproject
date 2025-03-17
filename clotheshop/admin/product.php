
<?php include 'include/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   

    <div class="container ">
        
<?php include 'include/header.php' ?>
   
    <form class="mt-5" m method="POST"  enctype="multipart/form-data">
    <button type="submit"><a href="productviwe.php">product add</a></button>
  <div class="form-group">
    <label for="formGroupExampleInput">product name</label><br>
    <input type="text" class="form-control" name="name" id="name" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">tital</label><br>
    <input type="text" class="form-control" name="tital"id="tital" >
  </div>
 
  <div class="mb-3">
                                        <label for="txtcategory" class="form-label">Category</label>
                                        <select class="form-control" id="txtcategory" name="txtcategory" aria-describedby="emailHelp">
                                            <option>Please select category</option>
                                            <?php
                                            $result = mysqli_query($conn, "select * from category ") or dir(mysqli_error($conn));
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <option value="<?php echo $row["Category_id"]; ?>"><?php echo $row["category_name"]; ?></option>
                                            <?php
                                            } ?>
                                        </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">img1</label><br>
    <input type="file" class="form-control"name="img1" id="img1" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">img2</label><br>
    <input type="file" class="form-control"name="img2" id="img2" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">pric</label><br>
    <input type="text" class="form-control"name="pric" id="pric" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">descripsion</label><br>
    <input type="text" class="form-control"name="descripsion" id="descripsion" >
  </div><br><br>
 <button type="submi" name="btn" >submit</button>
</form>
    </div>
</div>

     <?php
                                    if(isset($_POST["btn"]))
                                    {
                                        $name = $_POST["name"];
                                        $tital = $_POST["tital"];
                                        $category= $_POST["txtcategory"];
                                       $image1= $_FILES["img1"];
                                       $image2= $_FILES["img2"];
                                        
                                        $pric = $_POST["pric"];
                                        $descripsion = $_POST["descripsion"];


                                       
                                        $image = $_FILES["img1"]["name"];
                                      
                                        $ext = pathinfo($image,PATHINFO_EXTENSION);
                                        $newname = rand(1111,9999).rand(1111,9999).".".$ext; 
                                        move_uploaded_file($_FILES["img1"]["tmp_name"],"uploads/".$newname);

                              

                                        $image = $_FILES["img2"]["name"];
                                      
                                        $ext = pathinfo($image,PATHINFO_EXTENSION);
                                        $newname2 = rand(2222,7777).rand(2222,7777).".".$ext; 
                                        move_uploaded_file($_FILES["img2"]["tmp_name"],"uploads/".$newname2);


                                        $result = mysqli_query($conn,"insert into products (titeal,Category_id ,name,img1,img2,pric,descripsion)  values ( '".mysqli_real_escape_string($conn,$tital)."','$category','".mysqli_real_escape_string($conn,$name)."','$newname','$newname2','$pric','".mysqli_real_escape_string($conn,$descripsion)."')") or dir(mysqli_error($conn));


                                        if($result== true)
                                        {
                                            echo "insert saccess";
                                        }
                                        else
                                        {
                                            echo "insert error";
                                        }
                        
        
                                    }
                                    
                                    
                                    ?>
                            </div>







<!-- 
product 

name
tital

img
img
descripsion
pris




-->

<!-- category
  category
 category   name




-->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>