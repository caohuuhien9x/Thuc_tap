<?php

    $id = $_GET['id'];

    $sql = "Select * from slide where id = $id";

    $result = mysqli_query($conn, $sql);

    $slide = mysqli_fetch_array($result);
    

    if(isset($_POST['edit'])) {

        $name = $_POST['name'];
        $address = $_POST['address'];

        if(isset($_FILES['image'])) {

            $nameFile = $_FILES['image']['name'];

            move_uploaded_file("img/$nameFile", $_FILES['image']['tmp']);

            $sql = "update table slide set name = $name, address = $address WHERE id = $id";

            if(mysqli_query($conn, $sql) == true) {
                echo ('<script>alert("Cập nhật thành công"); location.href="slide.php"</script>');
            } else {
                echo ('<script>alert("Cập nhật khong thành công"); location.href="slide.php"</script>');
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

    <form action="sua.php" method="post">
        <input type="text" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="text" name="name">
        <input type="text" name="address">
        <input type="file" name="image">
        <input type="submit" name="edit" value="Sua">   
    </form>
    
</body>
</html>