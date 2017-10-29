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

    <?php while(have_posts()): the_post(); ?>
    <!-- Content -->
    <article class="content">
      
      <!-- Intro -->
      <section class="article__header" style="background-image: url(<?php bloginfo( 'template_directory' ); ?>/images/img-header-post.jpg)">
        
        <div class="article__content">
          
          <h3 class="article__category">Front-End</h3>
          <h4 class="article__subcategory">// Javascript</h4>

        </div>

      </section>
      <!-- / Intro -->

      <section class="article__container section">
        
        <h2 class="article__title"><?php the_title() ?></h2>

        <ul class="article__info">
          <li>
            <a href="#" title="<?php the_author() ?>">
              <?php the_author() ?>
            </a>
          </li>
          <li>
            <?php the_date('d.m.Y'); ?>
          </li>
        </ul>

        <div class="article__text">
          <?php the_content() ?>
        </div>

      </section>

    </article>
    <!-- / Content -->
    <?php endwhile; ?>

  </div>	

<?php get_footer() ?>
