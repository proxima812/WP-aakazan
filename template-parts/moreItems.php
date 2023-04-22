
      <section class="more_links">
        <ul class="more">
          <li class="more__item">
            <a href="#news_kazan" class="more__link">Новости АА Казань</a>
          </li>
          <li class="more__item">
            <a href="#smi" class="more__link">СМИ о АА</a>
          </li>
          <li class="more__item">
            <a href="#vd" class="more__link">Видеоматериалы</a>
          </li>
          <li class="more__item">
            <a href="#svi" class="more__link">Священнослужители об АА</a>
          </li>
          <li class="more__item">
            <a href="#phones" class="more__link">Тел. Поволжья</a>
          </li>
          <li class="more__item">
            <a href="#al_anon" class="more__link">Ал-Анон</a>
          </li>
        </ul>
      </section>

      <div id="news_kazan"></div>
      <h1 class="main__heading">Новости АА Казань</h1>
      <section class="news_kazan">
          
<?php

$def_attr = array('class' => 'news__photo_img',);


        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 100,
          'orderby'        => 'date',
          'order'          => 'DESC',
        );
        $q = new WP_Query($args);
        ?>

        <?php if ( $q->have_posts() ) : ?>
        <?php while ( $q->have_posts() ) : $q->the_post(); ?>
        <div class="news__item">
          <div class="news__photo mt20">
            <?php the_post_thumbnail('full', $def_attr); ?>
          </div>
          <div class="news__text">
            <h1 class="mt20">
              <?php the_title(); ?>
            </h1>
            <span>
              <?php the_time('F j, Y'); ?>
            </span>
            <p class="mt15">
              <?php the_content(); ?>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

      </section>
      
      <div id="smi"></div>
      
        <?php get_template_part('/template-parts/smi2')?>
        
        
  <div id="vd"></div>

  <?php get_template_part('/template-parts/vd2')?>

  <div id="svi"></div>

  <?php get_template_part('/template-parts/svi')?>

      <div id="phones"></div>

      <section class="phones section_top">
        <h1 class="main__heading">Телефоны Поволжья АА</h1>
        <div class="block__phone mt20">
          <div class="block__item">
            <span>
              <a href="tel: 89872335544">8 987 233 55 44</a>
             Азнакаево
            </span>
            <span>
              <a href="tel: 89178800509">8 917 880 05 09</a>
             Альметьевск
            </span>
            <span>
              <a href="tel: 89872095606">8 987 209 56 06</a>
             Буинск
            </span>
            <span>
              <a href="tel: +79674657536">8 967 465 75 36</a>
             Кукмор
            </span>
            <span>
              <a href="tel: 89047692797">8 904 769 27 97</a>
             Наб. Челны
            </span>
            <span>
              <a href="tel: 89178634567">8 917 863 45 67 </a>
             Васильево
            </span>
            <span>
              <a href="tel: 89600737330">8 960 073 73 30</a>
             Елабуга
            </span>
            <span>
              <a href="tel: 89625485888">8 962 548 58 88</a>
             Зеленодольск
            </span>
            <span>
              <a href="tel: 89048316675">8 904 831 66 75</a>
             Удмуртия
            </span>
          </div>
          <div class="block__item">
            <span>
              <a href="tel: 89026709131">8 902 670 91 31</a>
             Йошкар Ола
            </span>
            <span>
              <a href="tel: 89625898790">8 962 589 87 90</a>
             Волжск
            </span>
            <span>
              <a href="tel: 89874115003">8 987 411 50 03</a>
             Кам. Поляна
            </span>
            <span>
              <a href="tel: 89872163995">8 987 216 39 95</a>
             Лениногорск
            </span>
            <span>
              <a href="tel: 89600801796">8 960 080 17 96</a>
             Менделевск
            </span>
            <span>
              <a href="tel: 89047692797">8 904 769 27 97</a>
             Нижнекамск
            </span>
            <span>
              <a href="tel: 89272487789">8 927 248 77 89</a>
             Нурлат
            </span>
            <span>
              <a href="tel: 89053466567">8 905 346 65 67</a>
             Чебоксары
            </span>
          </div>
        </div>
      </section>
      
      <div id="al_anon"></div>

      <section class="al_anon">
        <h1 class="main__heading">Ал-Анон</h1>
        <p class="p__post p350 mt10">
          Содружество
          <span>
            <a href="https://al-anon.org.ru/" class="contacts__link">«Ал-Анон»</a>
          </span>
          (Для родственников и друзей алкоголиков)
        </p>
        <p class="p__post p350 mt10">
          Казань, тел.:
          <span>
            <a href="#" class="contacts__link">8-929-720-12-09</a>
          </span>
          Email:
          <span>
            <a href="#" class="contacts__link">al-anonkzn@mail.ru</a>
          </span>
        </p>
      </section>