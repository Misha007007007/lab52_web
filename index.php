<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <?php
        $name = "Андрейцев Михаил 211-361 Лаб_5";
        echo '<title>Андрейцев Михаил 211-361 Лаб_5</title>'
    ?>
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <header id = "header" class="header">
        <div class="container">
            <div class="nav">
                
                <ul class = "menu">
                    
                    <li>
                        <a href="#">
                            Моя страница
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Главная
                        </a>
                    </li>
                
                    <li>
                        <a href="#">
                            Контакты
                        </a>
                    </li>

                    <li>
                        <a href="#" class="cl">
                            Достижения
                        </a>
                    </li>
                    
                    <li>
                        <a 
                            href="
                            <?php 
                                $name='Обратная связь';
                                $link='connect.php';
                                $current_page=true;
                                echo $link;
                            ?>" 
                            class = "
                            <?php if ($current_page) echo "selected"; 
                            ?>"> 
                                <?php echo $name ?>
                        </a>
                    </li>

                    <li>
                        <a 
                            href="
                            <?php 
                                $name='Аунтификация';
                                $link='authentication.php';
                                $current_page=true;
                                echo $link;
                            ?>" 
                            class = "
                            <?php if ($current_page) echo "selected"; 
                            ?>"> 
                                <?php echo $name ?>
                        </a>
                    </li> 
                    
                    <li>
                        <a href="base.php"> База данных </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section id = "about" class="about">
        <div class="container">
            <div class = "fig">
                <?php
                    $s = date('s');	
                    $os = $s % 2;	
                    
                    if ( $os === 0 )	
                        $name='img/bear.png'; 
                    else	
                        $name='img/bear_2.png';
                    
                    echo '<img src="'.$name.'" alt="Меняющаяся фотография">'; 
                ?>
            </div>

            <h1> Медведь </h1>
            <h2> Общая информация</h2>
            <p>В зависимости от видовой принадлежности длина тела хищника может 
                колебаться от 1,2 до 3 метров, а вес медведя варьируется от 40 кг
                до тонны. Тело у этих животных крупное, коренастое, с толстой, 
                короткой шеей и большой головой. Мощные челюсти позволяют легко
                разгрызать как растительную, так и мясную пищу. Конечности 
                довольно короткие и слегка изогнуты. Поэтому медведь ходит, 
                покачиваясь из стороны в сторону, и опирается на всю ступню. 
                Скорость медведя в моменты опасности может достигать 50 км/ч. 
                При помощи больших и острых когтей эти животные добывают из-под 
                земли пищу, разрывают добычу и вскарабкиваются на деревья. 
                Многие виды медведей хорошо плавают. У белого медведя для этого
                между пальцами есть специальная перепонка. Продолжительность 
                жизни медведя может достигать 45 лет.
            </p>
            
            <h2>Вид</h2>
            <?php
                $mass = array('1. Белый', '2. Бурый', '3. Белогрудый', '4. Пещерный');
            ?>
            <ul>
                <li><?=$mass[0];?></li>
                <li><?=$mass[1];?></li>
                <li><?=$mass[2];?></li>
                <li><?=$mass[3];?></li>
            </ul>
            <?php
                mysqli_connect('std-1959.ist.mospolytech.ru', 'std', '1231231234','std_1959_web5', 3306)
            ?>
           
            
        </div>
    </section>

    <footer id = "footer" class="footer">
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