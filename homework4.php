<?php


?>
<!--    <form action="" method="POST">-->
<!--    <input type="text" name="name" placeholder="Введите имя">-->
<!--    <input type="submit" value="Отправить">-->
<!--    </form>-->
<!--    <form action="" method="POST">-->
<!--    <input type="text" name="name" placeholder="Введите имя"><br><br>-->
<!--    <input type="text" name = "age" placeholder="Введите возраст"><br><br>-->
<!--    <textarea name="text" placeholder="Введите сообщение"></textarea>-->
<!--    <input type="submit" value="Отправить">-->
<!--    </form>-->
<?php
//    error_reporting(E_ALL);
//    if (!empty($_REQUEST['name']))
//    {
//    $name = ($_REQUEST['name']);
//    echo 'Привет, '.$name;
//    }
//    if(
//       !empty($_REQUEST['name']) and
//       !empty($_REQUEST['age']) and
//       !empty($_REQUEST['text'])
//        )
//    {
//       $name = strip_tags($_REQUEST['name']);
//       $text = strip_tags($_REQUEST['text']);
//       $age = strip_tags($_REQUEST['age']);
//        echo 'Привет, '.$name. ' , '.$age. ' лет'. '<br>';
//        echo 'Твое сообщение: '. $text;
//    }
//    if(
//        (
//        empty($_REQUEST['name']) or
//        empty($_REQUEST['age']) or
//        empty($_REQUEST['text'])
//        )
//        and !empty($_REQUEST)
//        )
//        echo '<br>'. 'нужно заполнить все поля!' ;
//    {
//?>
<!--    <form action="" method="POST">-->
<!--    <input type="text" name="name" placeholder="Введите имя"><br><br>-->
<!--    <input type="text" name = "age" placeholder="Введите возраст"><br><br>-->
<!--    <textarea name="text" placeholder="Введите сообщение"></textarea>-->
<!--    <input type="submit" value="Отправить">-->
<!--    </form>-->

<?php
    $loginA = 'artem';
    $passwordInFile = '1234578';
    if(!empty($_REQUEST['login']) and !empty($_REQUEST['password']))
    {
        $login = trim($_REQUEST['login']);
        $password = trim($_REQUEST['password']);
        if ($login == $loginA and $password == $passwordInFile)
        {
            echo 'Привет artem!';
        }
        else
        {
            echo 'Доступ запрещен!';
        }
    }
    ?>
    <form action="" method="POST">
    <input name="login" placeholder="Введите логин"><br><br>
    <input type="password" name = "password" placeholder="Введите пароль"><br><br>
    <input type="submit" value="Отправить">
    </form>


