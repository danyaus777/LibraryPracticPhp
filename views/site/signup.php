<h2>Регистриция в нашей библиотеке</h2>
<h3><?= $message ?? '' ; ?></h3>
<form method="post">
    <label>Ваше ФИО <input type="text" name="FIO"></label>
    <label>Логин <input type="text" name="login"></label>
    <label>Пароль <input type="password" name="password"></label>
    <label>Ваш адрес проживания <input type="text" name="adress"></label>
    <label>Ваш номер телефона <input type="number" name="number_phone"></label>
    <button>Зарегестрироваться</button>
</form>