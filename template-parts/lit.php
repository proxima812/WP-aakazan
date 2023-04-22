<section class="books section_top">
    <h1 class="main__heading">
      Литература АА
    </h1>

    <div class="books__list mt45">

    <?php
      $loop = CFS()->get('aa_book');
      foreach ($loop as $row) {
    ?>
      
      <div class="books__item">
        <div class="book__img_bl">
          <img src="<?= $row['aa_book_img']?>" alt="Описание фотографии">
        </div>
        <div class="book__info">
          <span class="book__heading"><?= $row['aa_book_name']?>
          </span>
          <span class="book__heading_info"><?= $row['aa_book_name_eng']?>
          </span>
          <p class="p__post mt20 p350"><?= $row['aa_book_desc']?></p>
        </div>
      </div>

      <?php
      }
      ?>

  </section>