<div class="signupform__container">
<h2>Выдать книгу</h2>

    <form method="post">
        <label> Выберите книгу:
            <select name="id_book">
                <?php
                foreach ($givebook as $book) {
                    echo '<option>' . $book->id  . '</option>';
                }
                ?>
            </select>
        </label>
        <label> Выберите пользователя:
            <select name="id_user">
                <?php
                foreach ($giveuser as $user) {
                    echo '<option>' . $user->number_reader  . '</option>';
                }
                ?>
            </select>
        </label>
        <label>Дата выдачи: <input type="date" name="date_vidachi"></label>
        <label>Дата возврата: <input type="date" name="date_cdachi"></label>
        <button>Добавить</button>
    </form>
</div>