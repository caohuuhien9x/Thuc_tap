<?php

    if(isset($_POST['add'])) {

        $name = $_POST['name'];
        $address = $_POST['address'];
        if(isset($_FILES['image'])) {

            $nameFile = $_FILES['image']['name'];

            move_uploaded_file("img/$nameFile", $_FILES['image']['tmp']);

            $sql = "insert into slide(name, address) values($name, $address)";

            if(mysqli_query($conn, $sql) == true) {
                echo ('<script>alert("Thêm thành công"); location.href="slide.php"</script>');
            } else {
                echo ('<script>alert("Thêm khong thành công"); location.href="slide.php"</script>');
            }
        } else {
            echo ('<script>alert("Chua chon file"); location.href="them.php"</script>');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <form action="them.php" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="text" name="name">
        <input type="text" name="address">
        <input type="file" name="image">
        <input type="submit" name="add" value="Them">   
    </form>
    
</body>
</html>