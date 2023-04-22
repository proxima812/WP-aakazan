<section class="video__materials">
    <h1 class="main__heading">Видеоматериалы об Анонимных Алкоголиках
    </h1>
    <h3 class="p__post"><?= CFS()->get('video_p')?>
    </h3>
        
    <div class="video__materials_video mt45">
           <video poster="<?= CFS()->get('video_youtube_poster')?>" controls="auto" class="youtube_block block_video__materials">
                <source src="<?= CFS()->get('video_youtube')?>" type="video/mp4">
              </video>
    </div>

    <div class="smi__list mt75">

    <?php
      $loop = CFS()->get('video_videos');
      foreach ($loop as $row) {
    ?>
    
      <article class="smi__item">
        <span class="p__post mb">
          <?= $row['video_videos_name']?>
        </span>
        <div class="smi__video">
            
            <video poster="<?= $row['video_videos_youtube_poster']?>" controls="auto" class="youtube_block">
                <source src="<?= $row['video_videos_youtube']?>" type="video/mp4">
              </video>
        </div>
      </article>

      <?php
      }
      ?>

    </div>
  </section>