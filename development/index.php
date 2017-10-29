<?php get_header() ?>

  <div class="app">
  	
  	<!-- Sidebar -->
  	<aside class="sidebar">
  		
  		<!-- Logo -->
  		<h1 class="logo">
  			<a href="<?php echo home_url() ?>" title="<?php bloginfo( 'name' ); ?>">
  				<img src="<?php bloginfo( 'template_directory' ); ?>/images/logo-infinity-game.svg" width="100" height="96" alt="<?php bloginfo( 'name' ); ?>">
  			</a>
  		</h1>
  		<!-- / Logo -->

  		<!-- Menu -->
  		<ul class="menu">
  			
  			<li class="menu__item">
  				<a href="#" title="HTML" class="menu__anchor">HTML</a>
  			</li>
  			
  			<li class="menu__item">
  				<a href="#" title="CSS" class="menu__anchor">CSS</a>
  			</li>
  			
  			<li class="menu__item">
  				<a href="#" title="Javascript" class="menu__anchor">Javascript</a>
  			</li>
  			
  			<li class="menu__item">
  				<a href="#" title="Web Design" class="menu__anchor">Web Design</a>
  			</li>
  			
  			<li class="menu__item">
  				<a href="#" title="SEO" class="menu__anchor">SEO</a>
  			</li>
  			
  			<li class="menu__item">
  				<a href="#" title="Design" class="menu__anchor">Design</a>
  			</li>

  		</ul>
  		<!-- / Menu -->

  		<!-- Newsletter -->
  		<div class="newsletter">
  			
  			<h4 class="newsletter__title">Newsletter</h4>

  			<div class="newsletter__description">
  				
  				<p>Fique ligado no que rola de legal no EBANX sobre tecnologia, meetups e mais!</p>

  			</div>

  			<div class="newsletter__form">
  				
  				<div class="form__group">
  					<input class="form__input" type="text" placeholder="Insira seu nome"/>
  				</div>
  				
  				<div class="form__group">
  					<input class="form__input" type="email" placeholder="Insira seu email"/>
  				</div>
  				
  				<div class="form__group">
  					<input class="btn btn--blue btn--block" type="submit" value="Assinar"/>
  				</div>

  			</div>

  		</div>
  		<!-- / Newsletter -->

  		<!-- Powered By -->
  		<div class="ebanx">
  			
  			<h1 class="ebanx__logo">
  				<a href="https://ebanx.com/br/" title="EBANX" target="_blank">
  					<img src="<?php bloginfo( 'template_directory' ); ?>/images/logo-ebanx.svg" width="130" height="25" alt="EBANX">
  				</a>
  			</h1>

  		</div>
  		<!-- / Powered By -->

  	</aside>	
  	<!-- / Sidebar -->

    <!-- Content -->
    <article class="content">
      
      <!-- Intro -->
      <section class="intro" style="background-image: url(<?php bloginfo( 'template_directory' ); ?>/images/img-intro.jpg)">
        
        <div class="intro__content">
          
          <h3>To infinity... and beyond!</h3>

        </div>

      </section>
      <!-- / Intro -->

      <?php  

        $args = array(
          'post_type'         =>  'post',
          'posts_per_page'    =>  6
        );
        query_posts( $args );

        if (have_posts($args)):
      ?>
      <!-- Posts -->
      <div class="news section">
        
        <!-- Posts Header -->
        <div class="news__header">
          
          <h3 class="news__title">Hello</h3>
          <h4 class="news__subtitle">// News posts</h4>

        </div>
        <!-- / Posts Header -->

        <!-- Posts Container -->
        <div class="news__container">
          
          <?php while(have_posts($args)): the_post(); ?>

          <?php  

            $author_id = get_post_field( 'post_author', $post_id );

          ?>
          <!-- News Item -->
          <div class="news__item">
            
            <div class="news__img">
              <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                <img src="<?php bloginfo( 'template_directory' ); ?>/images/img-post-01.jpg" alt="<?php the_title() ?>">
              </a>
            </div>

            <div class="news__description">
              
              <h4 class="news__post">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title() ?>
                </a>
              </h4>

              <ul class="news__info">

                <li>
                  <?php the_category(', '); ?>
                </li>

                <li>
                  <a href="#" title="<?php the_author(); ?>">
                    <?php the_author(); ?>
                  </a>
                </li>

                <li>
                  <?php the_time('d.m.Y') ?>
                </li>
                
              </ul>

              <a href="<?php the_permalink(); ?>">
                <?php the_excerpt(); ?>
              </a>

            </div>

          </div>
          <!-- / News Item -->
          <?php endwhile; ?>

        </div>  
        <!-- / Posts Container -->

      </div>  
      <!-- / Posts -->
      <?php endif; wp_reset_query(); ?>

    </article>
    <!-- / Content -->

  </div>	

<?php get_footer() ?>
