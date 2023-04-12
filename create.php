<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Add new item</title>
</head>
<body>
    <div class="container">
<header class="d-flex justify-content-between my-4">
    <h1>Add New Book</h1>
    <div>
        <a href="" class="btn btn-primary">Back</a>
    </div>
</header>

        <form action="process.php" method="post">
            <div class="form-elemen my-4">
                <input type="text" clss="form-control" name="title" placeholder="Title:">
            </div>
            <div class="form-elemen my-4">
                <input type="text" clss="form-control" name="author" placeholder="Name:">
            </div>
            <div class="form-elemen my-4">
                 <select name="type"  class="form-control">
                    <option value=""   >
                    Select item type
                    </option>
                    <option value="Adventure" >   Adventure                  
                    </option>
                    <option value=" Fantasy">   Fantasy                   
                    </option>
                    <option value=" Detective">      Detective              
                    </option>
                    <option value="Pulp">    Pulp                  
                    </option>
                 </select>
            </div>
            <div class="form-elemen my-4">
                <input type="text" clss="form-control" name="description" placeholder="Description:">
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Book" class="btn btn-primary">
            </div>
        </form>

    </div>
</body>
</html>