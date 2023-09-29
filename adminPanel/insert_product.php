<?php 
    include('./includes/db.php');
    if(isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name' , FILTER_SANITIZE_SPECIAL_CHARS);
        $price = $_POST['price'];
        if($_FILES['image']['error'] === 4) {
            echo "<script>
                alert('Images does not exist!');
            </script>";
        }
        else {
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $tmpName = $_FILES['image']['tmp_name'];

            $validImageExtention = ['jpg','jpeg', 'png','webp'];
            $imageExtention = explode(".", $fileName);
            $imageExtention = strtolower(end($imageExtention));
            if(!in_array($imageExtention,$validImageExtention)) {
                echo "<script>
                    alert('Invalid Image extentions!');
                </script>";
            }
            else if($fileSize > 10000000) {
                echo "<script>
                    alert('Images size is too large!');
                </script>";
            }
            else {
                $newImageName = uniqid();
                $newImageName.='.'.$imageExtention;
                move_uploaded_file($tmpName,'img/'.$newImageName);
                $sql = "INSERT INTO products VALUES ('','$newImageName','$name','KALTEE', '$price')";
                mysqli_query($conn,$sql);
                echo "<script>
                    alert('SUCCESSFULLY ADDED');
                    document.location.href='data.php';
                </script>";

            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload products</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="name">Enter Product name: </label>
        <input type="text" name="name"/></br>
        <label for="price">Enter Product Price: </label>
        <input type="price" name="price"/></br>
        <input type="file" name="image"/></br>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>