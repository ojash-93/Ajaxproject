
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
   

    <div class="container ">
        
<?php include 'include/header.php' ?>
   
    <form class="mt-5" m method="POST"  enctype="multipart/form-data">
    <button type="submit"><a href="categoryview.php"> Category viwe</a></button><br>
  
  <div class="form-group">
    <label for="formGroupExampleInput">category name</label><br>
    <input type="text" class="form-control" name="name" id="name" >
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
                                    
                                      
                              


                                        $result = mysqli_query($conn,"insert into category (category_name)  values ('$name')")or dir(mysqli_error($conn));

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










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>