<?php get_header(); ?>
<script type="text/javascript">
    const elemento = document.getElementById("nav-blog");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>

<script type="text/javascript">
  const head = document.getElementById("header-principal");
if (head.classList) head.classList.remove("header-transparent");
if (head.classList) head.classList.add("header-light");
</script>

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout15 text-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/blog/">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page"> <?php the_title(); ?></li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Single
    ========================= -->
    <section class="blog blog-single pt-0 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="post-item mb-0">
              <div class="post__img">

                 <?php the_post_thumbnail(); ?>


              </div><!-- /.post-img -->
              <div class="post__content">
                <div class="post__meta d-inline-flex flex-wrap align-items-center mb-0">
                  
                  <div class="post__meta-cat">
                    <a href="#">Consulting</a><a href="#">Sales</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post__meta-date"><?php echo get_the_date(); ?></span>
                </div><!-- /.blog-meta -->
                <h1 class="post__title">

                  <?php the_title(); ?>

                </h1>
                <div class="post__desc">
                <?php the_content(); ?>
                </div><!-- /.blog-desc -->
              </div>
            </div><!-- /.post-item -->
            <div class="bordered-box mb-30">
              <div class="row row-no-gutter ">
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                  <div class="blog-share d-flex flex-wrap">
                    <strong class="mr-20 color-heading">Compartilhe</strong>
                    <ul class="list-unstyled social-icons social-icons-primary d-flex mb-0">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                  </div><!-- /.blog-share -->
                </div>
              </div>
            </div>
            <div class="widget-nav d-flex justify-content-between mb-40">
              <a href="#" class="widget-nav__prev d-flex flex-wrap">
                <div class="widget-nav__img">
                  <div class="widget-nav__overlay"></div>
                  <img src="assets/images/blog/grid/4.jpg" alt="blog thumb">
                </div>
                <div class="widget-nav__content">
                  <span>Previous Post</span>
                  <h5 class="fz-16 mb-0">Succession Risks Threaten Leadership Strategy</h5>
                </div>
              </a><!-- /.blog-prev  -->
              <a href="#" class="widget-nav__next d-flex flex-wrap">
                <div class="widget-nav__img">
                  <div class="widget-nav__overlay"></div>
                  <img src="assets/images/blog/grid/6.jpg" alt="blog thumb">
                </div>
                <div class="widget-nav__content">
                  <span>Next Post</span>
                  <h5 class="fz-16 mb-0">Employee Engagement Surveys Tell About Employee?</h5>
                </div>
              </a><!-- /.blog-next  -->
            </div><!-- /.widget-nav  -->
            
            
            
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4 ">
            <aside class="sidebar">
              <div class="widget widget-search">
                <h5 class="widget__title">Buscar</h5>
                <div class="widget__content">
                  <form class="widget__form-search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn" type="submit"><i class="icon-search"></i></button>
                  </form>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-search -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Posts Recentes</h5>
                <div class="widget__content">

                <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                  <!-- post item #1 -->
                  <div class="widget-post-item d-flex align-items-center">
                    <div class="widget-post__img">
                      <a href="#"> <?php the_post_thumbnail('thumbnail')?></a>
                    </div><!-- /.widget-post-img -->
                    <div class="widget-post__content">
                      <h4 class="widget-post__title"><a href="#"><?php the_title(); ?></a></h4>
                      <span class="widget-post__date"><?php echo get_the_date(); ?></span>
                    </div><!-- /.widget-post-content -->
                  </div><!-- /.widget-post-item -->
                <?php endwhile;
                  wp_reset_postdata();
                ?>

                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-categories">
                <h5 class="widget__title">Categories</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li><a href="#"><span>IT Management</span><span class="cat-count">9</span></a></li>
                    <li><a href="#"><span>Cyber Security</span><span class="cat-count">2</span></a></li>
                    <li><a href="#"><span>Cloud Computing</span><span class="cat-count">5</span></a></li>
                    <li><a href="#"><span>IT Consulting</span><span class="cat-count">1</span></a></li>
                    <li><a href="#"><span>Software Dev</span><span class="cat-count">7</span></a></li>
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
              
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Single -->

    <?php get_footer(); ?>