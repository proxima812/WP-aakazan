<div class="wrapper" id="wrapper">
  <div class="container-main">
    <div class="search__block">
      <ul class="search">
        <li class="seacrh__item">
          <a href="#" class="seacrh__link active day1-i" data-filter="day1" tabindex="-1" id="clickOne">Понедельник</a>
        </li>
        <li class="seacrh__item">
          <a href="#" class="seacrh__link day2-i" data-filter="day2" tabindex="-2">Вторник</a>
        </li>
        <li class="seacrh__item">
          <a href="#" class="seacrh__link day3-i" data-filter="day3" tabindex="-2">Среда</a>
        </li>
        <li class="seacrh__item">
          <a href="#" class="seacrh__link day4-i" data-filter="day4" tabindex="-2">Четверг</a>
        </li>
        <li class="seacrh__item">
          <a href="#" class="seacrh__link day5-i" data-filter="day5" tabindex="-2">Пятница</a>
        </li>
        <li class="seacrh__item">
          <a href="#" class="seacrh__link day6-i" data-filter="day6" tabindex="-2">Суббота</a>
        </li>
        <li class="seacrh__item">
          <a href="#" class="seacrh__link day7-i" data-filter="day7" tabindex="-2">воскресенье</a>
        </li>
      </ul>
    </div>



    <!-- Начало Цикла -->

    <div class="grid grid__settings">

      <?php $group = carbon_get_theme_option('add', 'complex');

if (!empty($group)) : ?>
      <?php foreach ($group as $list) : ?>

      <article class="group-new group__flex elem day1">

        <span class="name_group group__item">
          <?php echo $list['name_group'] ?>
        </span>

        <?php if ($list['point']): ?>
        <span class="point group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/adress.svg" alt="">
          <?php echo $list['point'] ?>
        </span>
        <?php endif; ?>

        <span class="time group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/time1.svg"
            alt=""><?php echo $list['time'] ?>
        </span>

        <?php if ($list['desc']): ?>
        <span class="full-desc group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/desc.svg" alt="">
          <?php echo $list['desc']?>
        </span>
        <?php endif; ?>

        <span class="open group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/open.svg" alt="">
          <?php
            $open = $list['select_open_group'];

            if ($open === 'open') {
              echo 'Все собрания открытые';
            }
            if ($open === 'close') {
              echo 'Закрытое собрание';
            }
            if ($open === 'open1') {
              echo 'Открытые собрания: первый понедельник месяца';
            }
            if ($open === 'open2') {
              echo 'Открытые собрания: первый вторник месяца';
            }
            if ($open === 'open3') {
              echo 'Открытые собрания: второй вторник месяца';
            }
            if ($open === 'open4') {
              echo 'Открытые собрания: первая среда месяца';
            }
            if ($open === 'open5') {
              echo 'Открытые собрания: первая пятница месяца';
            }
            if ($open === 'open6') {
              echo 'Открытые собрания: первая суббота месяца';
            }
            if ($open === 'open7') {
              echo 'Открытые собрания: каждый четверг';
            }
            if ($open === 'open8') {
              echo 'Окрытые собрания: последняя пятница месяца';
            }
            if ($open === 'open9') {
              echo 'Открытые собрания: вторая пятница месяца';
            }
            if ($open === 'open10') {
              echo 'Открытое собрание последняя суббота месяца';
            }
            if ($open === 'open11') {
              echo 'Открытые собрания: третья суббота месяца';
            }
            ?>
        </span>

        <?php if ($list['name']): ?>
        <span class="name group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/contact.svg" alt="">
          <?php echo $list['name'] ?>
        </span>
        <?php endif; ?>

        <?php if ($list['phone']): ?>
        <a href="tel: <?php echo $list['phone'] ?>" class="phone group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/phone.svg" alt="">
          <?php echo $list['phone'] ?>
        </a>
        <?php endif; ?>

        <a href="https://<?php echo $list['map'] ?>" class="map group__item" target="_blank">
          Посмотреть на карте
        </a>

      </article>

      <?php endforeach; ?>
      <?php endif; ?>

      <!-- Вторник -->

      <?php $group2 = carbon_get_theme_option('add2', 'complex');
    if (!empty($group2)) : ?>
      <?php foreach ($group2 as $list2) : ?>
      <article class="group-new group__flex elem day2">
        <span class="name_group group__item">
          <?php echo $list2['name_group2'] ?>
        </span>
        <?php if ($list2['point2']): ?>
        <span class="point group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/adress.svg"
            alt=""><?php echo $list2['point2'] ?>
        </span>
        <?php endif; ?>
        <span class="time group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/time1.svg"
            alt=""><?php echo $list2['time2'] ?>
        </span>
        <?php if ($list2['desc2']): ?>
        <span class="full-desc group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/desc.svg"
            alt=""><?php echo $list2['desc2']?>
        </span>
        <?php endif; ?>
        <span class="open group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/open.svg" alt="">
          <?php
            $open2 = $list2['select_open_group2'];

            if ($open2 === 'open') {
              echo 'Все собрания открытые';
            }
            if ($open2 === 'close') {
              echo 'Закрытое собрание';
            }
            if ($open2 === 'open1') {
              echo 'Открытые собрания: первый понедельник месяца';
            }
            if ($open2 === 'open2') {
              echo 'Открытые собрания: первый вторник месяца';
            }
            if ($open2 === 'open3') {
              echo 'Открытые собрания: второй вторник месяца';
            }
            if ($open2 === 'open4') {
              echo 'Открытые собрания: первая среда месяца';
            }
            if ($open2 === 'open5') {
              echo 'Открытые собрания: первая пятница месяца';
            }
            if ($open2 === 'open6') {
              echo 'Открытые собрания: первая суббота месяца';
            }
            if ($open2 === 'open7') {
              echo 'Открытые собрания: каждый четверг';
            }
            if ($open2 === 'open8') {
              echo 'Окрытые собрания: последняя пятница месяца';
            }
            if ($open2 === 'open9') {
              echo 'Открытые собрания: вторая пятница месяца';
            }
            if ($open2 === 'open10') {
              echo 'Открытое собрание последняя суббота месяца';
            }
            if ($open2 === 'open11') {
              echo 'Открытые собрания: третья суббота месяца';
            }
            ?>
        </span>
        <?php if ($list2['name2']): ?>
        <span class="name group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/contact.svg"
            alt=""><?php echo $list2['name2'] ?>
        </span>
        <?php endif; ?>
        <?php if ($list2['phone2']): ?>
        <a href="tel: <?php echo $list2['phone2'] ?>" class="phone group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/phone.svg"
            alt=""><?php echo $list2['phone2'] ?>
        </a>
        <?php endif; ?>
        <a href="https://<?php echo $list2['map2'] ?>" class="map group__item" target="_blank">
          Посмотреть на карте
        </a>
      </article>
      <?php endforeach; ?>
      <?php endif; ?>

      <!-- Среда -->

      <?php $group3 = carbon_get_theme_option('add3', 'complex');
    if (!empty($group3)) : ?>
      <?php foreach ($group3 as $list3) : ?>
      <article class="group-new group__flex elem day3">
        <span class="name_group group__item">
          <?php echo $list3['name_group3'] ?>
        </span>
        <?php if ($list3['point3']): ?>
        <span class="point group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/adress.svg" alt="">
          <?php echo $list3['point3'] ?>
        </span>
        <?php endif; ?>
        <span class="time group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/time1.svg" alt="">
          <?php echo $list3['time3'] ?>
        </span>
        <?php if ($list3['desc3']): ?>
        <span class="full-desc group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/desc.svg" alt="">
          <?php echo $list3['desc3']?>
        </span>
        <?php endif; ?>
        <span class="open group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/open.svg" alt="">
          <?php
            $open3 = $list3['select_open_group3'];

            if ($open3 === 'open') {
              echo 'Все собрания открытые';
            }
            if ($open3 === 'close') {
              echo 'Закрытое собрание';
            }
            if ($open3 === 'open1') {
              echo 'Открытые собрания: первый понедельник месяца';
            }
            if ($open3 === 'open2') {
              echo 'Открытые собрания: первый вторник месяца';
            }
            if ($open3 === 'open3') {
              echo 'Открытые собрания: второй вторник месяца';
            }
            if ($open3 === 'open4') {
              echo 'Открытые собрания: первая среда месяца';
            }
            if ($open3 === 'open5') {
              echo 'Открытые собрания: первая пятница месяца';
            }
            if ($open3 === 'open6') {
              echo 'Открытые собрания: первая суббота месяца';
            }
            if ($open3 === 'open7') {
              echo 'Открытые собрания: каждый четверг';
            }
            if ($open3 === 'open8') {
              echo 'Окрытые собрания: последняя пятница месяца';
            }
            if ($open3 === 'open9') {
              echo 'Открытые собрания: вторая пятница месяца';
            }
            if ($open3 === 'open10') {
              echo 'Открытое собрание последняя суббота месяца';
            }
            if ($open3 === 'open11') {
              echo 'Открытые собрания: третья суббота месяца';
            }
            ?>
        </span>
        <?php if ($list3['name3']): ?>
        <span class="name group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/contact.svg"
            alt=""><?php echo $list3['name3'] ?>
        </span>
        <?php endif; ?>
        <?php if ($list3['phone3']): ?>
        <a href="tel: <?php echo $list3['phone3'] ?>" class="phone group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/phone.svg"
            alt=""><?php echo $list3['phone3'] ?>
        </a>
        <?php endif; ?>
        <a href="https://<?php echo $list3['map3'] ?>" class="map group__item" target="_blank">
          Посмотреть на карте
        </a>
      </article>
      <?php endforeach; ?>
      <?php endif; ?>

      <!-- Четверг -->

      <?php $group4 = carbon_get_theme_option('add4', 'complex');
    if (!empty($group4)) : ?>
      <?php foreach ($group4 as $list4) : ?>
      <article class="group-new group__flex elem day4">
        <span class="name_group group__item">
          <?php echo $list4['name_group4'] ?>
        </span>
        <?php if ($list4['point4']): ?>
        <span class="point group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/adress.svg"
            alt=""><?php echo $list4['point4'] ?>
        </span>
        <?php endif; ?>
        <span class="time group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/time1.svg" alt="">
          <?php echo $list4['time4'] ?>
        </span>
        <?php if ($list4['desc4']): ?>
        <span class="full-desc group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/desc.svg" alt="">
          <?php echo $list4['desc4']?>
        </span>
        <?php endif; ?>
        <span class="open group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/open.svg" alt="">
          <?php
            $open4 = $list4['select_open_group4'];

            if ($open4 === 'open') {
              echo 'Все собрания открытые';
            }
            if ($open4 === 'close') {
              echo 'Закрытое собрание';
            }
            if ($open4 === 'open1') {
              echo 'Открытые собрания: первый понедельник месяца';
            }
            if ($open4 === 'open2') {
              echo 'Открытые собрания: первый вторник месяца';
            }
            if ($open4 === 'open3') {
              echo 'Открытые собрания: второй вторник месяца';
            }
            if ($open4 === 'open4') {
              echo 'Открытые собрания: первая среда месяца';
            }
            if ($open4 === 'open5') {
              echo 'Открытые собрания: первая пятница месяца';
            }
            if ($open4 === 'open6') {
              echo 'Открытые собрания: первая суббота месяца';
            }
            if ($open4 === 'open7') {
              echo 'Открытые собрания: каждый четверг';
            }
            if ($open4 === 'open8') {
              echo 'Окрытые собрания: последняя пятница месяца';
            }
            if ($open4 === 'open9') {
              echo 'Открытые собрания: вторая пятница месяца';
            }
            if ($open4 === 'open10') {
              echo 'Открытое собрание последняя суббота месяца';
            }
            if ($open4 === 'open11') {
              echo 'Открытые собрания: третья суббота месяца';
            }
            ?>
        </span>
        <?php if ($list4['name4']): ?>
        <span class="name group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/contact.svg" alt="">
          <?php echo $list4['name4'] ?>
        </span>
        <?php endif; ?>
        <?php if ($list4['phone4']): ?>
        <a href="tel: <?php echo $list4['phone4'] ?>" class="phone group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/phone.svg"
            alt=""><?php echo $list4['phone4'] ?>
        </a>
        <?php endif; ?>
        <a href="https://<?php echo $list4['map4'] ?>" class="map group__item" target="_blank">
          Посмотреть на карте
        </a>
      </article>
      <?php endforeach; ?>
      <?php endif; ?>


      <!-- Пятница -->

      <?php $group5 = carbon_get_theme_option('add5', 'complex');
    if (!empty($group5)) : ?>
      <?php foreach ($group5 as $list5) : ?>
      <article class="group-new group__flex elem day5">
        <span class="name_group group__item">
          <?php echo $list5['name_group5'] ?>
        </span>
        <?php if ($list5['point5']): ?>
        <span class="point group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/adress.svg"
            alt=""><?php echo $list5['point5'] ?>
        </span>
        <?php endif; ?>
        <span class="time group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/time1.svg"
            alt=""><?php echo $list5['time5'] ?>
        </span>
        <?php if ($list5['desc5']): ?>
        <span class="full-desc group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/desc.svg"
            alt=""><?php echo $list5['desc5']?>
        </span>
        <?php endif; ?>
        <span class="open group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/open.svg" alt="">
          <?php
            $open5 = $list5['select_open_group5'];

            if ($open5 === 'open') {
              echo 'Все собрания открытые';
            }
            if ($open5 === 'close') {
              echo 'Закрытое собрание';
            }
            if ($open5 === 'open1') {
              echo 'Открытые собрания: первый понедельник месяца';
            }
            if ($open5 === 'open2') {
              echo 'Открытые собрания: первый вторник месяца';
            }
            if ($open5 === 'open3') {
              echo 'Открытые собрания: второй вторник месяца';
            }
            if ($open5 === 'open4') {
              echo 'Открытые собрания: первая среда месяца';
            }
            if ($open5 === 'open5') {
              echo 'Открытые собрания: первая пятница месяца';
            }
            if ($open5 === 'open6') {
              echo 'Открытые собрания: первая суббота месяца';
            }
            if ($open5 === 'open7') {
              echo 'Открытые собрания: каждый четверг';
            }
            if ($open5 === 'open8') {
              echo 'Окрытые собрания: последняя пятница месяца';
            }
            if ($open5 === 'open9') {
              echo 'Открытые собрания: вторая пятница месяца';
            }
            if ($open5 === 'open10') {
              echo 'Открытое собрание последняя суббота месяца';
            }
            if ($open5 === 'open11') {
              echo 'Открытые собрания: третья суббота месяца';
            }
            ?>
        </span>
        <?php if ($list5['name5']): ?>
        <span class="name group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/contact.svg"
            alt=""><?php echo $list5['name5'] ?>
        </span>
        <?php endif; ?>
        <?php if ($list5['phone5']): ?>
        <a href="tel: <?php echo $list5['phone5'] ?>" class="phone group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/phone.svg" alt="">
          <?php echo $list5['phone5'] ?>
        </a>
        <?php endif; ?>
        <a href="https://<?php echo $list5['map5'] ?>" class="map group__item" target="_blank">
          Посмотреть на карте
        </a>
      </article>
      <?php endforeach; ?>
      <?php endif; ?>

      <!-- Суббота -->

      <?php $group6 = carbon_get_theme_option('add6', 'complex');
    if (!empty($group6)) : ?>
      <?php foreach ($group6 as $list6) : ?>
      <article class="group-new group__flex elem day6">
        <span class="name_group group__item">
          <?php echo $list6['name_group6'] ?>
        </span>
        <?php if ($list6['point6']): ?>
        <span class="point group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/adress.svg"
            alt=""><?php echo $list6['point6'] ?>
        </span>
        <?php endif; ?>
        <span class="time group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/time1.svg"
            alt=""><?php echo $list6['time6'] ?>
        </span>
        <?php if ($list6['desc6']): ?>
        <span class="full-desc group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/desc.svg" alt="">
          <?php echo $list6['desc6']?>
        </span>
        <?php endif; ?>
        <span class="open group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/open.svg" alt="">
          <?php
            $open6 = $list6['select_open_group6'];

            if ($open6 === 'open') {
              echo 'Все собрания открытые';
            }
            if ($open6 === 'close') {
              echo 'Закрытое собрание';
            }
            if ($open6 === 'open1') {
              echo 'Открытые собрания: первый понедельник месяца';
            }
            if ($open6 === 'open2') {
              echo 'Открытые собрания: первый вторник месяца';
            }
            if ($open6 === 'open3') {
              echo 'Открытые собрания: второй вторник месяца';
            }
            if ($open6 === 'open4') {
              echo 'Открытые собрания: первая среда месяца';
            }
            if ($open6 === 'open5') {
              echo 'Открытые собрания: первая пятница месяца';
            }
            if ($open6 === 'open6') {
              echo 'Открытые собрания: первая суббота месяца';
            }
            if ($open6 === 'open7') {
              echo 'Открытые собрания: каждый четверг';
            }
            if ($open6 === 'open8') {
              echo 'Окрытые собрания: последняя пятница месяца';
            }
            if ($open6 === 'open9') {
              echo 'Открытые собрания: вторая пятница месяца';
            }
            if ($open6 === 'open10') {
              echo 'Открытое собрание последняя суббота месяца';
            }
            if ($open6 === 'open11') {
              echo 'Открытые собрания: третья суббота месяца';
            }
            ?>
        </span>
        <?php if ($list6['name6']): ?>
        <span class="name group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/contact.svg"
            alt=""><?php echo $list6['name6'] ?>
        </span>
        <?php endif; ?>
        <?php if ($list6['phone6']): ?>
        <a href="tel: <?php echo $list6['phone6'] ?>" class="phone group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/phone.svg" alt="">
          <?php echo $list6['phone6'] ?>
        </a>
        <?php endif; ?>
        <a href="https://<?php echo $list6['map6'] ?>" class="map group__item" target="_blank">
          Посмотреть на карте
        </a>
      </article>
      <?php endforeach; ?>
      <?php endif; ?>


      <!-- Воскресенье -->

      <?php $group7 = carbon_get_theme_option('add7', 'complex');
    if (!empty($group7)) : ?>
      <?php foreach ($group7 as $list7) : ?>
      <article class="group-new group__flex elem day7">
        <span class="name_group group__item">
          <?php echo $list7['name_group7'] ?>
        </span>
        <?php if ($list7['point7']): ?>
        <span class="point group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/adress.svg"
            alt=""><?php echo $list7['point7'] ?>
        </span>
        <?php endif; ?>
        <span class="time group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/time1.svg"
            alt=""><?php echo $list7['time7'] ?>
        </span>
        <?php if ($list7['desc7']): ?>
        <span class="full-desc group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/desc.svg"
            alt=""><?php echo $list7['desc7']?>
        </span>
        <?php endif; ?>
        <span class="open group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/open.svg" alt="">
          <?php
            $open7 = $list7['select_open_group7'];

            if ($open7 === 'open') {
              echo 'Все собрания открытые';
            }
            if ($open7 === 'close') {
              echo 'Закрытое собрание';
            }
            if ($open7 === 'open1') {
              echo 'Открытые собрания: первый понедельник месяца';
            }
            if ($open7 === 'open2') {
              echo 'Открытые собрания: первый вторник месяца';
            }
            if ($open7 === 'open3') {
              echo 'Открытые собрания: второй вторник месяца';
            }
            if ($open7 === 'open4') {
              echo 'Открытые собрания: первая среда месяца';
            }
            if ($open7 === 'open5') {
              echo 'Открытые собрания: первая пятница месяца';
            }
            if ($open7 === 'open6') {
              echo 'Открытые собрания: первая суббота месяца';
            }
            if ($open7 === 'open7') {
              echo 'Открытые собрания: каждый четверг';
            }
            if ($open7 === 'open8') {
              echo 'Окрытые собрания: последняя пятница месяца';
            }
            if ($open7 === 'open9') {
              echo 'Открытые собрания: вторая пятница месяца';
            }
            if ($open7 === 'open10') {
              echo 'Открытое собрание последняя суббота месяца';
            }
            if ($open7 === 'open11') {
              echo 'Открытые собрания: третья суббота месяца';
            }
            ?>
        </span>
        <?php if ($list7['name7']): ?>
        <span class="name group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/contact.svg"
            alt=""><?php echo $list7['name7'] ?>
        </span>
        <?php endif; ?>
        <?php if ($list7['phone7']): ?>
        <a href="tel: <?php echo $list7['phone7'] ?>" class="phone group__item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/phone.svg" alt="">
          <?php echo $list7['phone7'] ?>
        </a>
        <?php endif; ?>
        <a href="https://<?php echo $list7['map7'] ?>" class="map group__item" target="_blank">
          Посмотреть на карте
        </a>
      </article>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>

  <!-- END-->

</div>
</div>