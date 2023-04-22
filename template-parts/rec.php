<section class="reviews section_top">
    <h1 class="main__heading">
      Рецензии Благодарности
    </h1>
    <div class="reviews__list mt20">

    <?php
      $loop = CFS()->get('recs');
      foreach ($loop as $row) {
    ?>
      
      <div class="reviews__item">
        <img src="<?= $row['recs_img']?>" alt="Описание фотографии">
      </div>

      <?php
      }
      ?>

    </div>
  </section>