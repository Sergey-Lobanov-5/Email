<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
    <form action="send.php" method="POST">
        <select name="subject">
            <option disabled selected>Тема письма</option>
            <option value="1">Вопрос по уроку</option>
            <option value="2">Личный вопрос </option>
            <option value="3">Благодарность</option>
        </select>
        <input type="email" name="email" placeholder="Введите ваш e-mail" maxlength="50" required>
        <textarea name="message" placeholder="Введите сообщение" maxlength="150" required> </textarea>
        <img src="Снимок.PNG">
        <input type="number" name="photo5" placeholder="Введите число" required>
        <input type="submit" value="Отправить письмо">
    </form>
</body>
</html>