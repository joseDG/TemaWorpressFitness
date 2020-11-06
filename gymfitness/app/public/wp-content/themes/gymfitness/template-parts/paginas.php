<?php while( have_posts() ): the_post(); ?>
    <h1 class="text-center texto-primario"><?php the_title(); ?></h1>

        <?php 
            /* esta parte verifiva si hay o no imagen importante */
            if(has_post_thumbnail() ): 
                /* tambien se puede agregar clases propias  */
                the_post_thumbnail('blog', array('class' => 'imagen-destacada'));
            /*else: 
                echo "No hay nada";*/
            endif; 
        ?>

        <?php 
            //Esta parte es para mostrar la pagina de cada uno de las categorias. 
            if(get_post_type() === 'gymfitness_clases'){
        
                $hora_inicio = get_field('hora_inicio'); 
                $hora_fin = get_field('hora_fin'); 
        ?>
            <p class="informacion-clase"><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?></p>
            
        <?php } ?>

    <?php the_content(); ?>
<?php endwhile; ?>