
            <?php
            get_header();
            ?>

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                       <div class="row">
                       <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">With Indicators</h4>
                                    <p class="card-subtitle mb-4">You can also add the indicators to the carousel, alongside the controls, too.</p>
                                    
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="https://i.pinimg.com/474x/2b/27/ba/2b27ba4d8391e6e0ed2b3da13f1a0ee2.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZMkiNtkTCs4zoVPx_472f58BNEHGWSwgs9A&s" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS08_rKkkLyGTs7aAK9ideNQCKtwsn3Z09eFA&s" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                       </div>
                        <!-- start page title -->
                        <div class="row">
                            <div class="container-fluid row">
                                <?php 
                                if ( have_posts() ) :
                                    while ( have_posts() ) : the_post();
                                    ?>

                                            <div class="col-lg-2 col-md-3 col-sm-6" >
                                                <div class="card">
                                                    <a href="<?php the_permalink(); ?>"><?php 
                                                    if ( has_post_thumbnail() ) {
                                                        the_post_thumbnail('thumbnail', array( 'class' => 'card-im-top img-fluid' ));
                                                    }
                                                    ?></a>
                                                   
                                                                <div class="card-body">
                                                                    <h5 class="card-title"><?php the_title();?></h5>
                                                                    <?php the_excerpt()?></p>                                                
                                                                </div>
                                                </div>
                                        </div>
                                <?php 
                                   endwhile;
                                   else :
                                       _e( 'No se encontraron productos en la categoria seleccionada.', 'textdomain' );
                                   endif;
                                 ?>
                            </div>
                        </div>
                        <!-- end page title -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php
            get_footer();
            ?>
        