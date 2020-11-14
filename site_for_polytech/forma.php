<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="RESET.css">
		<link rel="stylesheet" href="style.css">
	<title>Оставить заявку</title>
</head>
<body>
	<section>
		<page><h3 style="color: #fff;">Оставить заявку</h3></page>
			<!--contentblock>
				<div class="cont" style="width: calc(99.65% - 40px); margin: 0px; padding: 20px; ">
					<form style="text-align: left;">
						<table>
							<tr>
			<td><label>Ваше ФИО:</label></td>
			<td><input name="fio"></td>
		</tr>
		<tr>
			<td><label>Номер телефона:</label></td>
			<td><input name="phone"></td>
		</tr>
		<tr>
			<td><label>E-mail:</label></td>
			<td><input name="email"></td>
		</tr>
		<tr>
			<td><label>Доставка:</label></td>
			<td><input type="radio" name="a">Самовывоз <input type="radio" name="b">Почтой</td>
		</tr>
		<tr>
			<td><label>Категория заявки:</label></td>
			<td><select name="cc">
			<option value="1"></option>
			<option value="2">Мягкие игрушки</option>
			<option value="3">Одежда</option>
			<option value="4">Метрика</option>
			<option value="5">Банты и галстуки</option>
			<option value="6">Другое</option>
			</select></td>
		</tr>
		<tr>
			<td><label>Пожелание к заявке</label></td>
		</tr>
		<tr>
			<td colspan="2"><textarea style="width: 450px; height: 100px"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td align="right"><input type="submit" value="Отправить"></td>
		</tr>
	</table>
					</form>
				</div>
			</contentblock-->
<contentblock>
	<page style="width: 93%">
	<form action="./mail.php" method="post">
  <!--Тег используется для группировки связанных элементов в форме-->
  <fieldset>
  <!--Тег задает заголовок для групповых элементов-->
  <legend>Оставьте сообщение:</legend>
  <hr style="color: transparent; border: none;">
  Ваше имя:
  <!--Устанавливает однострочное текстовое поле ввода:-->
  <input type="text" name="name">
  <!--Используется для полей ввода, которые должны содержать адрес электронной почты.-->
  E-mail:
  <input type="text" name="email">
  Номер телефона:
  <input type="text" name="phone">
  <hr style="color: transparent; border: none;">
  Сообщение:
  <!--Тег разрешает многострочный ввод текста.-->
  <textarea rows="10" cols="45" name="message"></textarea>
  <!--Устанавливает кнопку для отправки данных формы в обработчик формы.-->
  <input type="submit" value="Отправить сообщение">
  </fieldset>
  </form>
		</contentblock>
	</page>
	</section>
</body>
</html>