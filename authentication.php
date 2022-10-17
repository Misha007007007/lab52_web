<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Андрейцев Михаил 211-361 Лаб_3</title>
    
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
        <div class="authentication" id = "authentication">
            <form action="https://httpbin.org/post" method="post">
                <p><b>Аутентификация</b></p>
                <b>Логин:</b>
                <input type="text" size="40" name="login">
                

                <p>
                    <strong>Пароль:</strong>
                    <input type="password" maxlength="20" size="39" name="password">
                </p>

                
                <fieldset>  
                    <legend>
                        <input type="checkbox"> Запомнить меня <br>
                    </legend>
                </fieldset>
                

                <input type="submit">
            
            </form>
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