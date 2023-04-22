<section class="smi__section section_top">
    <h1 class="main__heading smi__heading">Анонимные Алкоголики в СМИ</h1>
            <span style="color: #222; font-weight: 700; font-size: 22px; margin-bottom: 80px; background-color: #F3F3F3; padding: 20px; border-radius: 50px;">
          АА Россия
          <a target="_blank" href="https://aarussia.ru/ssylki/"
            style="color: #345edd; font-weight: 600; padding-left: 5px; font-size: 18px;">aarussia.ru</a>
        </span>
    <div class="smi__list">

<?php $smi = carbon_get_theme_option('smi_file_add', 'complex');

if (!empty($smi)) : ?>
  <?php foreach ($smi as $item) : ?>
    
      <article class="smi__item">
        <span class="p__post mb">
          <?php echo $item['smi_text']?>
        </span>
        <div class="smi__video">
            <video poster="<?php echo $item['smi_image']?>" controls="auto" class="youtube_block block_smi">
                <source src="<?php echo $item['smi_file']?>" type="video/mp4">
              </video>
        </div>
      </article>
      
      <?php endforeach; ?>
<?php endif; ?>

    </div>
  </section>