<?php

$id = $_GET['id'];

$sql = "delete form slide WHERE id = $id";

if(mysqli_query($conn, $sql) == true) {
    echo ('<script>alert("xoa thành công"); location.href="slide.php"</script>');
} else {
    echo ('<script>alert("xoa khong thành công"); location.href="slide.php"</script>');
}

?>