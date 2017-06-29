<?php
    include("db.php");
?>
<?php

    
	if(isset($_POST['reg'])){

	if (isset($_POST['login'])) { 
		$login = $_POST['login']; 
		if ($login == '') { 
			unset($login);
		} 
    }

    if (isset($_POST['email'])) { 
		$email = $_POST['email']; 
		if ($email == '') { 
			unset($email);
		} 
    }

    if (isset($_POST['pass'])) {
     	$pass=$_POST['pass']; 
     	if ($pass == '') { 
     		unset($pass);
     	} 
    }

    if (isset($_POST['pass2'])) {
     	$pass2=$_POST['pass2']; 
     	if ($pass2 =='') { 
     		unset($pass2);
     	} 
    }

    $query = mysql_query("SELECT COUNT(id) FROM login WHERE login_name='".mysql_real_escape_string($_POST['login'])."'")or die ("<br>Invalid query: " . mysql_error()); 
    if(mysql_result($query, 0) > 0) 
    { 
       include("error.php"); 
    } 
    else{


    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
 	$pass = stripslashes($pass);
    $pass = htmlspecialchars($pass);
    $pass2 = stripslashes($pass2);
    $pass2 = htmlspecialchars($pass2);
 //удаляем лишние пробелы
    $login = trim($login);
    $email = trim($email);
    $pass = trim($pass);
    $pass2 = trim($pass2);

     $pass = md5($pass);
    $pass2 = md5($pass2);

 // проверка на существование пользователя с таким же логином
 // если такого нет, то сохраняем данные
    $result2 = mysql_query("Insert Into login (login_name, email, pass, pass2) Values ('".$login."', '".$email."', '".$pass."', '".$pass2."')");    // Проверяем, есть ли ошибки
    if ($result2 == TRUE)
    {
        include("ok.php");
    }
 else {
        include("error.php");
    }
}
}
    ?>