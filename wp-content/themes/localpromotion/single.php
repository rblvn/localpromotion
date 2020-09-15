<?php get_header(); ?> 

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
	<section class="single-page">
        <div class="container_single__post">
                <p id="breadcrumbs">
                        <span>
                                <span>
                                        <a href="https://localpromotion.ru">Главная</a>
                                        •
                                        <span>
                                                <a href="https://localpromotion.ru/blog/">Блог</a>
                                                •
                                                <span class="breadcrumb_last" aria-current="page">
                                                        <?php the_title(); ?>
                                                </span>
                                        </span>
                                </span>
                        </span>
                </p>
                <div class="show-single__0">
                        <div class="single-page__title">
                                <h1>
                                        <?php the_title(); ?>
                                </h1>
                        </div>
                                <img  style="width: 100%;height: auto;" src="<?php the_post_thumbnail_url(); ?>">
                </div>
                <div class="single-page__content">

                <?php the_content(); ?>
                        

                </div>
                <div class="single-page__social">
                        <div class="single-page__class">
                                <!-- <div class="vote-block" data-id="650" data-total="1" data-rating="5" rel="v:rating">
                                        <div typeof="v:Rating">
                                                <div itemprop="itemReviewed" itemscope=""
                                                        itemtype="http://schema.org/Book">
                                                        <div style="display: none;" itemprop="aggregateRating"
                                                                itemscope="Рейтинг статьи"
                                                                itemtype="http://schema.org/AggregateRating">
                                                                <meta itemprop="bestRating" content="5">
                                                                <meta property="v:rating" content="5">
                                                                <meta itemprop="ratingValue" content="5">
                                                                <meta itemprop="ratingCount" property="v:votes"
                                                                        content="1">
                                                        </div>
                                                </div>
                                        </div>
                                        <ol class="rating show-current">
                                                <li>
                                                        5
                                                </li>
                                                <li>
                                                        4
                                                </li>
                                                <li>
                                                        3
                                                </li>
                                                <li>
                                                        2
                                                </li>
                                                <li>
                                                        1
                                                </li>
                                                <li class="current">
                                                        <span style="width:100%">
                                                        </span>
                                                </li>
                                        </ol>
                                        <span class="rating-text">
                                                (
                                                <b>
                                                        1
                                                </b>
                                                голос, в среднем:
                                                <strong>
                                                        5
                                                </strong>
                                                из 5)
                                        </span>
                                        <div class="rating-info" id="rating-info">
                                        </div> -->
                                <!-- </div> -->
                        </div>
 
                </div>
        </div>
</section>
<?php } } else { ?>
	<p>Записей нет.</p>
<?php } ?>





<section class="single-int__post">
        <div class="container_flex">
                <div class="single-int__title">
                        <p>
                                Вам также может быть интересно
                        </p>
                </div>
                <div class="category-item__row single-int__row">
                <?php
                        $category = get_the_category(); 
                        $current_category = $category[0]->name;

                        $posts = get_posts( array(
                                'numberposts' => 3,
                                'post__not_in' => array($post->ID),
                                'category'    => 'current_category',
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  =>'',
                                'post_type'   => 'post',
                                'suppress_filters' => true, 
                        ) );
                        foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>
                                        <div class="category-item__col single-item__col">
                                                <a href="<?php the_permalink();?>">
                                                        <div class="category-item__col-img">
                                                                        <img src="<?php the_post_thumbnail_url()?>">
                                                        </div>        
                                                        <div class="category-post__box">
                                                                <div class="category-post__tag">
                                                                        <p><?php $category = get_the_category();  echo $category[0]->name; ?></p>
                                                                </div>
                                                                <div class="category-post__date">
                                                                        <p><?php echo get_the_date(); ?></p>
                                                                </div>
                                                        </div>
                                                        <div class="category-post__title">
                                                                <p><?php the_title();?></p>
                                                        </div>
                                                </a>
                                        </div>
                                <?php
                        }
                         wp_reset_postdata(); ?>
                
                </div>

        </div>
</section>

</main>


<?php get_footer(); ?> 