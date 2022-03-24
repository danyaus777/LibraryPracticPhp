<div class="allbook_title__container">
    <h1>Список наших книг</h1>
</div>
    <div class="booklist__container">
        <ol>
            <?php
            foreach ($books as $book) {
                echo '<li>'. "<a href='book?id=$book->id'>" . $book->title . '</a>' . '</li>';
            }
            ?>
        </ol>
    </div>