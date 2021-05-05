<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB with php</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
    <body>
        <div class="block">
            <div class="search_block">
                <input type="text" class="Text" placeholder="Search">
            </div>
            <?php
                $link = mysqli_connect('localhost','root','','users')
                or die("Ошибка " . mysqli_error($link)); 
                 
            $query ="SELECT * FROM users";
             
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
            if($result)
            {
                $rows = mysqli_num_rows($result); // количество полученных строк
                 
                echo "<table class = 'm-3'><tr><th>Id</th><th>Login</th><th>Password</th><th>Name</th><th>Age</th></tr>";
                for ($i = 0 ; $i < $rows ; ++$i)
                {
                    $row = mysqli_fetch_row($result);
                    echo "<tr class = 'm-3'>";
                        for ($j = 0 ; $j < 5 ; ++$j) echo "<td class = 'm-3'>$row[$j]</td>";
                    echo "</tr>";
                }
                echo "</table>";
                 
                // очищаем результат
                mysqli_free_result($result);
            }
             
            mysqli_close($link);
            ?>
            <?php
                $link = mysqli_connect('localhost','root','','users')
                or die("Ошибка " . mysqli_error($link)); 
                 
            $query ="SELECT * FROM roles";
             
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
            if($result)
            {
                $rows = mysqli_num_rows($result); // количество полученных строк
                 
                echo "<table class = 'm-3'><tr><th>Id</th><th>User</th><th>User ID</th></tr>";
                for ($i = 0 ; $i < $rows ; ++$i)
                {
                    $row = mysqli_fetch_row($result);
                    echo "<tr>";
                        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
                    echo "</tr>";
                }
                echo "</table>";
                 
                // очищаем результат
                mysqli_free_result($result);
            }
             
            mysqli_close($link);
            ?>
        </div>

            

        
    </body>
</html>