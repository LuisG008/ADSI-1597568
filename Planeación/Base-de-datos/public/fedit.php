<!DOCTYPE html>

<html>
    <head>
        <title>edit</title>
        <meta charset="UTF-8">  
    </head>
    <body>
        <form action="update.php" method="post">   
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        <input type="text" name="name" required placeholder="Name" value="<?php echo $user['name'] ?>"><br>
        <input type="text" name="surname" required placeholder="SurName" value="<?php echo $user['surname'] ?>"><br>
        <input type="text" name="cellphone" required placeholder="Cellphone" value="<?php echo $user['cellphone'] ?>"><br>
        <button type="submit">Eddit</button>
        <button type="button" onclick="pageback()">Cancel</button> 
    </form>
        <script>
            function pageback(){
                window.location.href = 'index.php';
            }
            </script>
    </body>
</html>
