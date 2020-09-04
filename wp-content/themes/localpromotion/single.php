<?php get_header(); ?> 

<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
	<section class="single-page">
        <div class="container_single__post">
                <p id="breadcrumbs">
                        <span>
                                <span>
                                        <a href="..\index.php">Главная</a>
                                        •
                                        <span>
                                                <a href="..\blog-ru\index.htm">Блог</a>
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
                        <div class="single-page__sharing">
                                <div class="addtoany_shortcode">
                                        <div class="a2a_kit a2a_kit_size_32 addtoany_list"
                                                data-a2a-url="https://ideadigital.agency/ru/7-oshibok-ux-sovershaemyh-vsemi-dizajnerami/"
                                                data-a2a-title="7 ошибок UX, невольно совершаемых всеми дизайнерами">
                                                <a class="a2a_button_facebook"
                                                        href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fideadigital.agency%2Fru%2F7-oshibok-ux-sovershaemyh-vsemi-dizajnerami%2F&linkname=7%20%D0%BE%D1%88%D0%B8%D0%B1%D0%BE%D0%BA%20UX%2C%20%D0%BD%D0%B5%D0%B2%D0%BE%D0%BB%D1%8C%D0%BD%D0%BE%20%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%88%D0%B0%D0%B5%D0%BC%D1%8B%D1%85%20%D0%B2%D1%81%D0%B5%D0%BC%D0%B8%20%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%D0%B5%D1%80%D0%B0%D0%BC%D0%B8"
                                                        title="Facebook" rel="nofollow noopener" target="_blank"></a>
                                                <a class="a2a_button_telegram"
                                                        href="https://www.addtoany.com/add_to/telegram?linkurl=https%3A%2F%2Fideadigital.agency%2Fru%2F7-oshibok-ux-sovershaemyh-vsemi-dizajnerami%2F&linkname=7%20%D0%BE%D1%88%D0%B8%D0%B1%D0%BE%D0%BA%20UX%2C%20%D0%BD%D0%B5%D0%B2%D0%BE%D0%BB%D1%8C%D0%BD%D0%BE%20%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%88%D0%B0%D0%B5%D0%BC%D1%8B%D1%85%20%D0%B2%D1%81%D0%B5%D0%BC%D0%B8%20%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%D0%B5%D1%80%D0%B0%D0%BC%D0%B8"
                                                        title="Telegram" rel="nofollow noopener" target="_blank"></a>
                                        </div>
                                </div>
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