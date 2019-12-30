<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fire_Nerd
 */

get_header();
?>

<div class="container" style="margin-top: 40px">
          <div class="row">

          	         <div class="col-md-6 col-xs-12 col-lg-4">
                            <div class="featured-slider mr-md-3 mr-lg-3">
                                <div class="item" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/marvel-capt.jpeg)">
                                    <div class="post-content">
                                        <a href="#" class="post-cat bg-primary">Marvel</a>
                                        <h2 class="slider-post-title">
                                            <a href="single-post.html">Próximo Capitão América dos quadrinhos será uma mulher</a>
                                        </h2>
                                        <div class="post-meta mt-2">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>19 hours ago</span>
                                            <span class="post-author">
                                                by
                                                <a href="author.html">Rodinho Summon</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12 col-lg-4">
                             <div class="featured-slider mr-lg-3">
                                <div class="item" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/2.jpg)">
                                    <div class="post-content">
                                        <a href="#" class="post-cat bg-danger">Serie</a>
                                        <h2 class="slider-post-title">
                                            <a href="single-post.html">Cobra Kai | Segunda temporada ganha primeiro trailer e data estreia</a>
                                        </h2>
                                        <div class="post-meta mt-2">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>19 hours ago</span>
                                            <span class="post-author">
                                                <span> by </span>
                                                <a href="author.html">Rodinho Summon</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12 col-lg-4">
                            <div class="featured-slider mr-md-3 mr-lg-3">
                                <div class="item" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/3.jpg)">
                                    <div class="post-content">
                                        <a href="#" class="post-cat bg-success">Filme</a>
                                        <h2 class="slider-post-title">
                                            <a href="single-post.html">Viúva Negra | Scarlett fala sobre a abordagem do filme</a>
                                        </h2>
                                        <div class="post-meta mt-2">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2 text-danger"></i>19 hours ago</span>
                                            <span class="post-author">
                                                by
                                                <a href="author.html">Rodinho Summon</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
          </div>
</div>

<div class="container-fluid" style="background-color:#1a1a1a; margin-top:40px; padding-top:30px; padding-bottom:30px">
            <div class="container titulo-especial">
                     <h1 style="color:#ffd200">PODCAST</h1>
                      <p style="color:#fff">O Firenerd é um programa de bate-papo falando sobre filmes, series, games e muito mais! É publicado semanalmente.</p>
                       <hr>
                      <div class="row">
                            <div class="col-3">
                                  <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/vitrine.jpg"></a>
                            </div>
                            <div class="col-3">
                                  <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/vitrine1.jpg"></a>
                            </div>
                            <div class="col-3">
                                  <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/vitrine2.jpg"></a>
                            </div>
                             <div class="col-3">
                                  <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/vitrine.jpg"></a>
                            </div>
                       </div>
            </div>
</div>

<div class="container" style="margin-top:40px">
          <div class="row titulo-especial">
                 <div class="col-12 text-center">
                        <h1>ASSINE O FIRENERD</h1>
                        <p>Se você gosta demais do Firenerd, então assine nossa newslater e receba notícias nossa no seu email!</p>
                  </div>
          </div>
</div>


<?php
get_footer();
