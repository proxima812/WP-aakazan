<section class="my__history section_top">
    <h1 class="main__heading">
      Личные истории членов АА г. Казань
    </h1>
    
    <?php
      $loop = CFS()->get('aa_history');
      foreach ($loop as $row) {
    ?>

    <div class="history__item">
      <span class="name__author"><?= $row['aa_history_name']?></span>
      <p class="history__p">
      <?= $row['aa_history_p']?>
      </p>
      <a href="<?= $row['aa_history_a']['url']?>" class="history__link mt10" target="_blank">Читать дальше...</a>
    </div>

    <?php
      }
    ?>

  </section>