<?php get_header() ?>

    <header class="head">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-7">
            <span class="hola">Bienvenido</span>
            <h1 class="intro">Hola, soy Juan Guillermo.<br>Desarrollo Web.</h1>
            <p class="tech">Estudios en la Academia Desafio Latam.</p>
          </div>
          <div class="col-md-5 col-5">
            <img class="foto" src="<?php echo get_theme_file_uri('assets/img/foto-p.jpg'); ?>" alt="perfil">            
          </div>
        </div>
          <a class="cv" href="<?php echo get_theme_file_uri() ?>/curriculum.docx">Descargar CV</a> 
      </div>
    </header>

<section class="about mb-3" id="acerca">
  <h2 class="study text-center m-4">Acerca de mi</h2>
    <div class="container">
      <div class="row text-center">
      <?php
            $arg = array(
              'posts_per_page' => -1,
              'order-by'       => 'title',
              'order'          => 'asc',
            );
          
            $get_arg = new WP_Query( $arg );
          
            while ( $get_arg->have_posts() ) {
              $get_arg->the_post();
            ?>
          
          <div class="col-sm-4">
          <div class="card">
            <div class="card-body" style="height: 22.205rem;">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('card'); ?></a>
              <h5 class="card-title p-2"><b><?php the_title(); ?></b></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>
          
            <?php } wp_reset_postdata();
          ?>

      </div>
    </div>
</section>


    <section class="traba mb-5" id="trabajos">
      <div class="container">
        <h3 class="proyect">Mis trabajos</h3>
        <div class="row">
          <figure class="col-6 col-md-3 works">
            <img class="w-100 h-auto" src="<?php echo get_theme_file_uri('assets/img/giggeo.png'); ?>" alt="Giggeo app">
            <a href="trabajos/gigeoapp/index.html" target="_blank">
              <figcaption class="opac">
                <h4 class="text">Giggeo app</h4>
              </figcaption>
            </a>
          </figure>
          <figure class="col-6 col-md-3 works">
            <img class="w-100 h-auto" src="<?php echo get_theme_file_uri('assets/img/barber.png'); ?>" alt="Barber shop">
            <a href="trabajos/barberia/index.html" target="_blank">
              <figcaption class="opac">
                <h4 class="text">Barber Shop</h4>
              </figcaption>
            </a>
          </figure>
          <figure class="col-6 col-md-3 works">
            <img class="w-100 h-auto" src="<?php echo get_theme_file_uri('assets/img/suricata.png'); ?>" alt="Suricata page">
            <a href="trabajos/suricata/index.html" target="_blank">
              <figcaption class="opac">
                <h4 class="text">Suricata Page</h4>
              </figcaption>
            </a>
          </figure>
          <figure class="col-6 col-md-3 works">
            <img class="w-100 h-auto" src="<?php echo get_theme_file_uri('assets/img/trekk.png'); ?>" alt="Trekk-in page">
            <a href="trabajos/treek-in/index.html" target="_blank">
              <figcaption class="opac">
                <h4 class="text">Treek-in</h4>
              </figcaption>
            </a>
          </figure>
          <figure class="col-6 col-md-3 works">
            <img class="w-100 h-auto" src="<?php echo get_theme_file_uri('assets/img/ricomida.png'); ?>" alt="Ricomida page">
            <a href="trabajos/ricomida/index.html" target="_blank">
              <figcaption class="opac">
                <h4 class="text">Ricomida</h4>
              </figcaption>
            </a>
          </figure>
          <figure class="col-6 col-md-3 works">
            <img class="w-100 h-auto" src="<?php echo get_theme_file_uri('assets/img/cafe.png'); ?>" alt="Cafe agere">
            <a href="trabajos/cafeteria-agere/index.html" target="_blank">
              <figcaption class="opac">
                <h4 class="text">Cafeteria Agere</h4>
              </figcaption>
            </a>
          </figure>
          <figure class="col-6 col-md-3 works">
            <img class="w-100 h-auto" src="<?php echo get_theme_file_uri('assets/img/cuppon.png'); ?>" alt="Cuppon page">
            <a href="trabajos/cuppon/index.html" target="_blank">
              <figcaption class="opac">
                <h4 class="text">Cuppon Page</h4>
              </figcaption>
            </a>
          </figure>
          <figure class="col-6 col-md-3 works">
            <img class="w-100 h-auto" src="<?php echo get_theme_file_uri('assets/img/olivia.png'); ?>" alt="Olivia Ros">
              <a href="trabajos/olivia-ros/index.html" target="_blank">
                <figcaption class="opac">
                  <h4 class="text">Olivia Ros</h4>
                </figcaption>
              </a>
          </figure>
        </div>
      </div>
    </section>

<div class="container">
  <h4 class="forma">
    Contactame
  </h4>
  <div class="typeform-widget" data-url="https://juanguillermo823124.typeform.com/to/KtgyqR" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"> powered by <a href="https://admin.typeform.com/signup?utm_campaign=KtgyqR&utm_source=typeform.com-01DWN5WMXZCZN4173021WPBE6H-free&utm_medium=typeform&utm_content=typeform-embedded-poweredbytypeform&utm_term=ES" style="color: #999" target="_blank">Typeform</a> </div>
</div>

<?php get_footer() ?>
</body>
</html>