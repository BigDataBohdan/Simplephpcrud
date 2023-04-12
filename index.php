<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Item list</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add new item</a>
            </div>
        </header>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Author</th>                 
 
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include("connect.php");
                    $sql = "SELECT * from items";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result);
                    while($row = mysqli_fetch_array($result)){
                        ?>
                            <tr>
                                <td>
                                    <?php echo $row["id"]; ?> 
                                </td>
                                
                                <td>
                                    <?php echo $row["title"]; ?> 
                                </td>
                                
                                <td>
                                    <?php echo $row["author"]; ?> 
                                </td>
                                
                                <td>
                                    <?php echo $row["description"]; ?> 
                                </td>
                                
                                <td>
                                    <?php echo $row["type"]; ?> 
                                </td>
                                <td>
                                   <a href="view.php?id=<?php echo $row["id"];?>" class="btn btn-info">Read More</a>
                                   <a href="edit.php?id=<?php echo $row["id"];?>" class="btn btn-warning">Edit</a>
                                   <a href="delete.php?id=<?php echo $row["id"];?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php                
                    }
                    ?>
             
            </tbody>
        </table>
    </div>


</body>
</html>