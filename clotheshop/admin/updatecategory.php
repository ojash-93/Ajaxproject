
<?php include 'include/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   


<?php
   $id = $_GET["id"];
   $uresult = mysqli_query($conn, "select * from category where Category_id  ='$id'") or die(mysqli_error($conn));
   $urow = mysqli_fetch_assoc($uresult);
   ?>


    <div class="container ">
        
<?php include 'include/header.php' ?>
   
    <form class="mt-5" m method="POST"  enctype="multipart/form-data">
    <button type="submit"><a href="categoryview.php"> Category viwe</a></button><br>
  
  <div class="form-group">
    <label for="formGroupExampleInput">category name</label><br>
    <input type="text" class="form-control" value="<?php echo $urow["category_name"] ?>" name="name" id="name" >
  </div><br>
  <button type="submi" name="btn" >submit</button>
  
  </div><br>

</form>
    </div>
</div>

     <?php
                                    if(isset($_POST["btn"]))
                                    {
                                        $name = $_POST["name"];
                                    
                                      
                              


                                        $result = mysqli_query($conn, "update category set category_name='$name' where Category_id   ='$id'") or die(mysqli_error($conn));

                                        if($result== true)
                                        {
                                            echo "update saccess";
                                        }
                                        else
                                        {
                                            echo "update error";
                                        }
                        
        
                                    }
                                    
                                    
                                    ?>
                            </div>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>