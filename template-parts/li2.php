  <section class="my__history section_top">
    <h1 class="main__heading">
      Личные истории членов АА г. Казань
    </h1>

<?php $li_item = carbon_get_theme_option('li', 'complex');

if (!empty($li_item)) : ?>
  <?php foreach ($li_item as $item) : ?>

    <div class="history__item">
          <details>
                <summary>
                  <span class="name__author">
                  <?php echo $item['li_text']?>
                  </span>
                </summary>
                <p class="history__p">
                  <?php echo $item['li_desc']?>
                </p>
          </details>
    </div>

    <?php endforeach; ?>
    <?php endif; ?>

  </section>