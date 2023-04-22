<section class="smi__section section_top">
    <h1 class="main__heading smi__heading">Анонимные Алкоголики в СМИ</h1>
            <span style="color: #222; font-weight: 700; font-size: 22px; margin-bottom: 80px; background-color: #F3F3F3; padding: 20px; border-radius: 50px;">
          АА Россия
          <a target="_blank" href="https://aarussia.ru/ssylki/"
            style="color: #345edd; font-weight: 600; padding-left: 5px; font-size: 18px;">aarussia.ru</a>
        </span>
    <div class="smi__list">

    <?php
  $loop = CFS()->get('aa_smi');
  foreach ($loop as $row) {
  ?>

    
      <article class="smi__item">
        <span class="p__post mb">
          <?= $row['aa_smi_name']?>
        </span>
        <div class="smi__video">
            
            <video poster="<?= $row['aa_smi_youtube_poster']?>" controls="auto" class="youtube_block block_smi">
                <source src="<?= $row['aa_smi_youtube']?>" type="video/mp4">
              </video>
        </div>
      </article>
      

      <?php
      }
      ?>

    </div>
  </section>