<div class="wrapper" id="wrapper">
  <div class="container-main">
    <div class="section__group section_top">
      <div class="search__block">
        <ul class="search">
          <li class="seacrh__item">
            <a href="#m" class="seacrh__link m-i active" id="clickOne" data-filter="m" tabindex="-1">Понедельник</a>
          </li>
          <li class="seacrh__item">
            <a href="#t" class="seacrh__link t-i" data-filter="t" tabindex="-2">Вторник</a>
          </li>
          <li class="seacrh__item">
            <a href="#w" class="seacrh__link w-i" data-filter="w" tabindex="-3">Среда</a>
          </li>
          <li class="seacrh__item">
            <a href="#th" class="seacrh__link th-i" data-filter="th" tabindex="-4">Четверг</a>
          </li>
          <li class="seacrh__item">
            <a href="#f" class="seacrh__link f-i" data-filter="f" tabindex="-5">Пятница</a>
          </li>
          <li class="seacrh__item">
            <a href="#s" class="seacrh__link s-i" data-filter="s" tabindex="-6">Суббота</a>
          </li>
          <li class="seacrh__item">
            <a href="#su" class="seacrh__link su-i" data-filter="su" tabindex="-7">воскресенье</a>
          </li>
        </ul>
      </div>


<section class="section__groups">

<div class="info__day">

  <span class="elem m" id="m">
    <span class="day">Понедельник</span>
    Сегодня проводится 
    <span class="blue"><?= CFS()->get('m')?></span>
  групп
  </span>

  <span class="elem t" id="t">
    <span class="day">Вторник</span>
    Сегодня проводится 
    <span class="blue"><?= CFS()->get('t')?></span>
    групп
  </span>

  <span class="elem w" id="w">
    <span class="day">Среда</span>
    Сегодня проводится 
  <span class="blue"><?= CFS()->get('w')?></span>
  групп
</span>

  <span class="elem th" id="th">
    <span class="day">Четверг</span>
    Сегодня проводится 
    <span class="blue"><?= CFS()->get('th')?></span>
  групп
  </span>

  <span class="elem f" id="f">
    <span class="day">Пятница</span>
    Сегодня проводится 
    <span class="blue"><?= CFS()->get('f')?></span>
    групп
  </span>

  <span class="elem s" id="s">
    <span class="day">Суббота</span> 
    Сегодня проводится 
    <span class="blue"><?= CFS()->get('s')?></span>
    групп
  </span>

  <span class="elem su" id="su">
    <span class="day">Воскресенье</span>
    Сегодня проводится 
    <span class="blue"><?= CFS()->get('su')?></span> 
    групп
  </span>

</div>



<div class="group__list">

<?php
    $loop = CFS()->get('add_group');
    foreach ($loop as $row) {
  ?>


  <article class="group elem <?= $row['id_group']?>">
  
  
      <div class="time__name">
        <h1>Группа</h1>
        <span class="fz"><?= $row['name'] ?></span>
        <span><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/time.svg" alt=""> <?= $row['time'] ?></span>
      </div>
  
      <div class="main__info">
      <?php
    if (!empty($row['qrcode'])) {
      ?>
        <div class="qrcode qr">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/qr.svg" alt="">
          <?= $row['qrcode']?>
        </div>
      <?php
      } 
      if (!empty($row['adress'])) {
        ?>
          <div class="adress">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/adress.svg" alt="">
            <?= $row['adress']?>
          </div>
        <?php
        }
        if (!empty($row['desc'])) {
          ?>
          <div class="info"><img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/desc.svg" alt="">
            <span><?= $row['desc']?></span>
          </div>
          <?php
          }
          if (!empty($row['open'])) {
            ?>
            <div class="open">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/open.svg" alt="">
                <span><?= $row['open']?></span>
          </div>
            <?php
            } 
            if (!empty($row['contact'])) {
              ?>
                  <div class="contact">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/contact.svg" alt="">
                    <span><?= $row['contact']?></span>
                  </div>
              <?php
              } 
              if (!empty($row['phone'])) {
                ?>
                      <div class="phone">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/phone.svg" alt="">
                        <a href="tel: <?= $row['phone']?>"><?= $row['phone']?></a>
                      </div>
                <?php
                } 
                if (!empty($row['map'])) {
                  ?>
                  <a href="<?= $row['map']['url']?>"
                    class="btn__map" target="_blank">Посмотреть на карте</a>
                  <?php
                  } 
  
              ?>
  
    </div>
  
  </article>

        <?php
        } 
        ?>
</div>

  </div>
      


</section>