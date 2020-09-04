<div class="category-item__col">
        <a href="<?php the_permalink(); ?>">
        <div class="category-item__col-img"> 
                <img src="<?php the_post_thumbnail_url(); ?>"></div>
                        <div class="category-post__box"><div class="category-post__tag"><p><?php $category = get_the_category();  echo $category[0]->name; ?></p></div>
                                <div class="category-post__date" style="display: flex;"><p><?php echo get_the_date(); ?></p></div></div><div class="category-post__title">
                                        <p><?php  the_title(); ?> </p>
        </div> 
        </a>
</div>