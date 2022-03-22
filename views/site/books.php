<h1>Список наших книг</h1>
<ol>
    <?php
    foreach ($books as $book) {
        echo '<li>' . $book->Название . '</li>';
    }
    ?>
</ol>