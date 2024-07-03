
            <?php
            get_header();
            ?>

            

<?php
get_header();
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <?php 
             if ( have_posts() ) :
             while ( have_posts() ) : the_post();
              ?>
            <div class="row">
                 <div class="col-6">
                 <?php 
                    if ( has_post_thumbnail() ) {
                     the_post_thumbnail('medium', array( 'class' => 'card-im-top img-fluid' ));
                     }
                     ?>
                    
                </div>
                <div class="col-6 row">
                    <div class="card col-12" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title();?></h5>
                            <p class="card-text"><?php the_excerpt()?></p>
                            <div class="row mb-3">
                                <button class="btn btn-danger mr-2" onclick="reducir_cantidad();">-</button>
                                <input type="number" value="1" class="form-control col-4"id='cantidad'>
                                <button class="btn btn-primary ml-2" onclick="agregar_cantidad();">+</button>
                            </div>

                            <a href="#" class="btn btn-primary">Go somewhere</a>

                        </div>
                    </div>
                </div>

            </div>
            <?php 
             endwhile;
             else : _e( 'No se encontraron productos en la categoria seleccionada.', 'textdomain' );
              endif;
               ?>
        </div>


        <!-- end page title -->

    </div> <!-- container-fluid -->
</div>
<script>
   function cambiar_cantidad(tipo) {
            var cantidad_actual = document.getElementById('cantidad').value;
            if (tipo == "suma") {
                var cantidad_nueva = parseInt(cantidad_actual) + 1;
            } else {
                if (tipo == "resta" && cantidad_actual > 1) {
                    var cantidad_nueva = parseInt(cantidad_actual) - 1;
                } else {
                    var cantidad_nueva = 0;
                }
            }
            document.getElementById('cantidad').value = cantidad_nueva;
        }
</script>
<!-- End Page-content -->
<?php
get_footer();
?>

              
        

