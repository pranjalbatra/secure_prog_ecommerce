<div class="header_bottom">

        $popular_posts_chunk = array_chunk($popular_posts, 2);
        foreach ($popular_posts_chunk as $single_popular_chunk) {
            ?>
            <div class="section group">
                <?php foreach($single_popular_chunk as $single_popular){?>
                <div class="listview_1_of_2 images_1_of_2">
                    <div class="listimg listimg_2_of_1">
                        <a href="<?php echo base_url('single/'.$single_popular->commodity_id);?>"> <img src="<?php echo base_url() ?>uploads/<?php echo $single_popular->commodity_image?>" alt="" /></a>
                    </div>
                    <div class="text list_2_of_1">
                        <h2><?php echo word_limiter($single_popular->commodity_title,2) ?></h2>
                        <p><?php echo word_limiter($single_popular->commodity_summary, 5) ?></p>
                        <div class="button"><span><a href="<?php echo base_url('single/'.$single_popular->product_id);?>">Add to cart</a></span></div>
                    </div>
                </div>
                <?php }?>
            </div>
        <?php } ?>
        <div class="clear"></div>
    </div>
    <div class="header_bottom_right_images">
        <!-- FlexSlider -->
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <?php
                    $slider_posts = $this->web_model->get_all_slider_post();
                    foreach ($slider_posts as $slider_post) {
                        ?>
                        <li><a href="<?php echo $slider_post->slider_link ?>"><img src="<?php echo base_url() ?>uploads/<?php echo $slider_post->slider_image ?>" alt=""/></a></li>
                    <?php } ?>
                </ul>
            </div>
        </section>
        <!-- FlexSlider -->
    </div>
    <div class="clear"></div>
</div>

<style>
    .header_bottom {
        display: flex;
        justify-content: center;
        width: 90%; /* Adjust the width as needed */
        margin: 0 auto; /* Center the header_bottom horizontally */
    }

    .header_bottom_right_images {
        /* Add any additional styles specific to this section if needed */
    }
</style>

