<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   <title>Ваше сообщение успешно отправлено</title>
</head>
 
<body>
 
<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['fio']) and !empty($_POST['phone']) and !empty($_POST['mail']) 
   and !empty($_POST['b'])){
      $name = trim(strip_tags($_POST['fio']));
      $phone = trim(strip_tags($_POST['phone']));
      $email = trim(strip_tags($_POST['email']));
      //$message = trim(strip_tags($_POST['message']));
 
      mail('ya.alinka2003@yandex.ru', 'Письмо с сайта ', 
      'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");
 
      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
 
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
</body>
</html>