<html>
<head></head>


<body>

    <table>
    
        <th>
            <td>Tên</td>
            <td>Địa chỉ</td>
            <td>Ảnh</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </th>

        <?php
    
            $sql = "select * from slide";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result) {
                ?>

                <tr>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["address"] ?></td>
                    <td><img src="img/<?php echo $row['image']; ?>" /></td>
                    <td><a href="sua.php?id=<?php echo $row['id'] ?>">Sửa</a></td>
                    <td><a href="xoa.php?id=<?php echo $row['id'] ?>">Xoa</a></td>
                </tr>

                <?php
            }
    
        ?>

    </table>

</body>
</html>