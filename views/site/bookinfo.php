<div class="allbook_title__container">
    <h1>Список наших книг</h1>
</div>
<div class="booklist__container">
    <ol>
        <?php
        foreach ($bookinfo as $book) {
            echo '<li>'.  $book->title . '</li>';
            echo '<li>'.  $book->avtor . '</li>';
            echo '<li>'.  $book->price . '</li>';
        }
        ?>
    </ol>
</div>
