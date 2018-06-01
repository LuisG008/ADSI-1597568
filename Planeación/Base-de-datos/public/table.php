<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <a href="add.html">Add</a>
        <table>
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Cellphone</th>
            <th>actions</th>
            </thead>
            <tbody>
            <?php while($user = $db->getData()):?>
            <tr>
                <td><?php echo $user["id"] ?></td>
                <td><?php echo $user["name"] ?></td>
                <td><?php echo $user["surname"] ?></td>
                <td><?php echo $user["cellphone"] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $user['id']?>">Edit</a>                 
                    <a href="#" onclick="delete(<?php echo $user['id']?>)">delete</a>
                </td>
            </tr>
            <?php endwhile  ?>
            </tbody>
        </table>
        <script>
            function deleteUser(id) {
                var rsp = confirm('you want to delete the record');
                if (rsp === true) {
                    windows.location.href = 'eliminate.php?id=' + id;
                }
            }
        </script>
    </body>
</html>