<?php
    $login = filter_var(trim($_POST['Login']),
    FILTER_SANITIZE_STRING);

     $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

      $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

  }if (mb_strlen($login) < 3 || mb_strlen($login) > 40) {
        echo "Не допустимая длина логина";
        exit();
      }if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Не допустимая длина имени";
        exit();
      }if (mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
        echo "Не допустимая длина пароля от 2 до 6 символов";
        exit();
      }


    $mysql = new mysqli('94.199.202.143', 'itmtigro', '#x3]8klWO2KXc0Sc!0','register-bd',);
    $mysql->query("INSERT INTO users (login, pass, name) VALUES ('$login', '$pass', '$name')");

    $mysql->close();

 ?>
