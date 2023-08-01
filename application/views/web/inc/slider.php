<div class="header_bottom">
    
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
    .slider-container {
        display: flex;
        justify-content: center; /* Horizontally center the slider */
        align-items: center; /* Vertically center the slider */
        height: 100vh; /* Set the height of the container to the full viewport height */
    }

    .header_bottom_right_images {
        max-width: 800px; /* Adjust the max-width of the slider container as needed */
        margin: 0 auto; /* Center the slider within the slider-container */
    }
</style>
