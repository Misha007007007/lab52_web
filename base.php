<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Андрейцев Михаил 211-361 Лаб_5</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <header id = "header" class="header">
        <ul class = "menu">
            <li>
                <a href="index.php">
                    Назад
                </a>
            </li>
        </ul>
    </header>

    <section id = "about" class="about">

    

    <?php
        include "databaseconnect.php";
        $sqlName = "SELECT name FROM `Bears`";
        $resultName = mysqli_query($mysql, $sqlName);

        $sqlWeight = "SELECT weight FROM `Bears`";
        $resultWeight = mysqli_query($mysql, $sqlWeight);

        if ($resultWeight == false || $resultName == false){
            print("произошла ошибка при выполненнии запроса");
        }
        
        $rowWeight = mysqli_fetch_array($resultWeight);
        $rowName = mysqli_fetch_array($resultName);
    ?>

    <div class="table">
        <table border="2">
            <tr>
                <th>Вид</th>
                <th>Вес</th>
            </tr>
            <tr>
                <td><?php echo($rowName[0]);
                $rowName = mysqli_fetch_array($resultName);?></td>
                <td><?php echo($rowWeight[0]);
                $rowWeight = mysqli_fetch_array($resultWeight); ?></td>
            </tr>
            <tr>
            <td><?php echo($rowName[0]);
                $rowName = mysqli_fetch_array($resultName);?></td>
                <td><?php echo($rowWeight[0]);
                $rowWeight = mysqli_fetch_array($resultWeight); ?></td>
            </tr>
            <tr>
                <td><?php echo($rowName[0]);
                $rowName = mysqli_fetch_array($resultName);?></td>
                <td><?php echo($rowWeight[0]);
                $rowWeight = mysqli_fetch_array($resultWeight); ?></td>
            </tr>
            <tr>
                <td><?php echo($rowName[0]);
                $rowName = mysqli_fetch_array($resultName);?></td>
                <td><?php echo($rowWeight[0]);
                $rowWeight = mysqli_fetch_array($resultWeight); ?></td>
            </tr>
        </table>
    </div>
   
    

           

    </section>

    <footer id = "footer1" class="footer1">
        <div class="container">
            <li>
                <?php
                    echo date('Сформировано d.m.Y в G:i:s', time()+3600*3);
                ?>
            </li>
        </div>
    </footer>
</body>
</html>