<section class="reviews section_top">
    <h1 class="main__heading">
      Рецензии Благодарности
    </h1>
    <div class="reviews__list mt20">

    <?php $r_item = carbon_get_theme_option('r', 'complex');

      if (!empty($r_item)) : ?>
        <?php foreach ($r_item as $item) : ?>

      <div class="reviews__item">
        <img src="<?php echo $item['r_image']?>" alt="Документ">
      </div>

      <?php endforeach; ?>
    <?php endif; ?>

    </div>
  </section>