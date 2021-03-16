<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <div class="flex-container">

        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

            <h1 class="greeting"> <?php echo $p ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="/img/avatar.jpg" id="avatarImg" alt="avatar">';
                    ?>
                </div>

                <div class="fullname">
                    <p> Привет, я
                        <?php echo $name, ' ', $surname . '<br>'; ?>
                    </p>

                    <p> Я живу в
                        <?php echo 'городе', ' ', $city; ?>
                    </p>

                    <p> Мне
                        <?php echo $age; ?>
                        лет
                    </p>

                    <p> Я учусь в
                        <?php echo $univer; ?>
                    </p>
                    
                    <p> Мне нравится
                        <?php echo $interest; ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="article">
            <p class="text">
                В данном модуле мы изучали основы языка программирования PHP. <br>
                Мы ознакомились с различием между статическим и динамическим сайтом, синтаксисом. <br>
                А также мы научились разворачивать локальный сервис и осуществлять вывод данных.
            </p>
        </div>

        <div class="knowledge">

            <?php include 'knowledge.inc.php'; ?>

            <h3 class="title">
                <?php echo $title ?>
            </h3>

            <?php
            $start = microtime(true);

            echo $a1, ' ', $b1, ' ', $c1, '<br>';

            echo $a2, ' + ', $b2, ' = ', $c2, '<br>';

            echo $a3, '^', $b3, ' = ', $c3, '<br>';

            echo $d, '<br>';

            for ($i = 0; $i < 10; $i++) {
                echo $i . ' ';
            }
            flush();

            echo '<br>';

            echo 'Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec.';
            ?>
        </div>

        <?php include 'footer.inc.php' ?>

    </div>

</body>

</html>