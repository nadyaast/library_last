<div class="book_row">
    <div class="book_photo" style="background-image: 
    url('/covers/<?php echo $bookArray['cover'] ?>'); "> </div>
    <div class="book_info">
        <h2>"<?php echo $bookArray['book_name'] ?>"</h2>
        <p><?php echo $bookArray['author'] ?></p>
        <p><?php echo $bookArray['book_year'] ?></p>
        <p><?php echo $bookArray['genre'] ?></p>
        <br><br><br>
        <a href="/pdfs/<?php echo $bookArray['download'] ?>" target="_blank">Скачать</a>
    </div>
</div>