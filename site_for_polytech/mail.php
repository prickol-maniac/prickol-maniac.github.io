<?php
  $msg_box = ""; // в этой переменной будем хранить сообщения формы
  
  if($_POST['btn_submit']){
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($_POST['user_name'] == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($_POST['user_email'] == "")   $errors[] = "Поле 'Ваш e-mail' не заполнено!";
    if($_POST['text_comment'] == "") $errors[] = "Поле 'Текст сообщения' не заполнено!";

    // если форма без ошибок
    if(empty($errors)){   
      // собираем данные из формы
      $message  = "Имя пользователя: " . $_POST['user_name'] . "<br/>";
      $message .= "E-mail пользователя: " . $_POST['user_email'] . "<br/>";
      $message .= "Текст письма: " . $_POST['text_comment'];    
      send_mail($message); // отправим письмо
      // выведем сообщение об успехе
      $msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
    }else{
      // если были ошибки, то выводим их
      $msg_box = "";
      foreach($errors as $one_error){
        $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
      }
    }
  }
  
  // функция отправки письма
  function send_mail($message){
    // почта, на которую придет письмо
    $mail_to = "ya.alinka2003@yandex.ru"; 
    // тема письма
    $subject = "Письмо с обратной связи";
    
    // заголовок письма
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
    $headers .= "From: Тестовое письмо <no-reply@test.com>\r\n"; // от кого письмо
    
    // отправляем письмо 
    mail($mail_to, $subject, $message, $headers);
  }
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Обратная связь</title>
</head>
<body>
  <br/>
  <?= $msg_box; // вывод сообщений ?>
  <br/>
  <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" name="frm_feedback">
    <label>Ваше имя:</label><br/>
    <input type="text" name="user_name" value="<?=($_POST['user_name']) ? $_POST['user_name'] : ""; // сохраняем то, что вводили?>" /><br/>
    
    <label>Ваш e-mail:</label><br/>
    <input type="text" name="user_email" value="<?=($_POST['user_email']) ? $_POST['user_email'] : ""; // сохраняем то, что вводили?>" /><br/>
    
    <label>Текст сообщения:</label><br/>
    <textarea name="text_comment"><?=($_POST['text_comment']) ? $_POST['text_comment'] : ""; // сохраняем то, что вводили?></textarea>
    
    <br/>
    <input type="submit" value="Отправить" name="btn_submit" />
  </form>

</body>
</html>
