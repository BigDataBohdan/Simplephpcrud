<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>description</title>
</head>
<body>
<div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Book Details</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details p-5 my-4">
            <?php
            include("connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM items WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 ?>
                 <h3>Title:</h3>
                 <p><?php echo $row["title"]; ?></p>
                 <h3>Description:</h3>
                 <p><?php echo $row["description"]; ?></p>
                 <h3>Author:</h3>
                 <p><?php echo $row["author"]; ?></p>
                 <h3>Type:</h3>
                 <p><?php echo $row["type"]; ?></p>
                
                 <?php
                }
            }
            else{
                echo "<h3>No items found</h3>";
            }
            ?>
            
        </div>
    </div>          

</body>
</html>