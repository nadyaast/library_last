<div class="book_row">
    <div class="book_photo" style="background-image: 
    url('/covers/<?php echo $row['cover'] ?>'); "> </div>
    <div class="book_info">
        <h2>"<?php echo $row['book_name'] ?>"</h2>
        <p><?php echo $row['author'] ?></p>
        <p><?php echo $row['book_year'] ?></p>
        <p><?php echo $row['genre'] ?></p>
        <br><br><br>
        <a href="/pdfs/<?php echo $row['download'] ?>" target="_blank">Скачать</a>
    </div>
</div>