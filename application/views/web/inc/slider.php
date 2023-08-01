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
    .header_bottom {
        display: flex;
        justify-content: center;
        width: 90%; /* Adjust the width as needed /
        margin: 0 auto; / Center the header_bottom horizontally /
    }

    .header_bottom_right_images {
        / Add any additional styles specific to this section if needed */
    }
</style>