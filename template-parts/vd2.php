<section class="video__materials">
    <h1 class="main__heading">Видеоматериалы об Анонимных Алкоголиках
    </h1>
    <h3 class="p__post"><?php echo carbon_get_theme_option('vd_main_text')?>
    </h3>
        
    <div class="video__materials_video mt45">
          <video poster="<?php echo carbon_get_theme_option('vd_main_image')?>" controls="auto" class="youtube_block block_video__materials">
                <source src="<?php echo carbon_get_theme_option('vd_main_file')?>" type="video/mp4">
              </video>
    </div>

    

    <div class="smi__list mt75">


    <?php $vd_item = carbon_get_theme_option('vd', 'complex');

if (!empty($vd_item)) : ?>
  <?php foreach ($vd_item as $item) : ?>
    
      <article class="smi__item">
        <span class="p__post mb">
          <?php echo $item['vd_text']?>
        </span>
        <div class="smi__video">
            
            <video poster="<?php echo $item['vd_image']?>" controls="auto" class="youtube_block">
                <source src="<?php echo $item['vd_file']?>" type="video/mp4">
              </video>
        </div>
      </article>

      <?php endforeach; ?>
    <?php endif; ?>

    </div>
  </section>