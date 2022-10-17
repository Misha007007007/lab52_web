<!DOCTYPE html>
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
        
        <div class="connection" id = "connection">
            <form action="https://httpbin.org/post" method="post">
                <p><b>Обратная связь</b></p>
                
                <p><b>ФИО:</b>
                    <input type="text" maxlength="30" size="40" name="login">
                </p>
                <p><b>Email:</b>
                    <input type="text" maxlength="30" size="40" name="login">
                </p>
                <p><b>Откуда вы узнали о нас</b></p>
                <input type="radio" id="contactChoice1"
                name="contact" value="email">
                <label for="contactChoice1">От друга</label>
            
                <input type="radio" id="contactChoice2"
                name="contact" value="phone">
                <label for="contactChoice2">Реклама ВК</label>
            
                <input type="radio" id="contactChoice3"
                name="contact" value="mail">
                <label for="contactChoice3">В университете</label>

                
                <p><b>Тип обращения</b></p>
                <select size="1" style="width: 100px;">
                    <option disabled>Выберети один вариант</option>
                    <option value="1">Жалоба</option>
                    <option value="2">Предложение</option>
                    <option value="3">Вопрос</option>
                </select>
            

            
                <p><b>Введите текст обращения</b></p>
                <p><textarea rows="10" cols = "100" name="text"></textarea></p>
            

            
                <p><b>Прикрепите файл</b></p>
                <input type="file" name="file">
            

            
                <fieldset>  
                    <legend>
                        <input type="checkbox"> Даю согласие на обработку перональных данных <br>
                    </legend>
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