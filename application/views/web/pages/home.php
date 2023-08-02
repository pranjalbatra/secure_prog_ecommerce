


<div class="main" style="background-color: black">
    <div class="content" style="background-color: yellow">
        <div class="content_top">
            <div class="heading">
                <h3>Feature Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">

            <?php
            foreach ($all_featured_products as $single_feature_product) {
                ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="<?php echo base_url('single/' . $single_feature_product->commodity_id); ?>"><img style="width:250px;height:250px" src="<?php echo base_url('uploads/' . $single_feature_product->commodity_image) ?>" alt="" /></a>
                    <h2><?php echo $single_feature_product->commodity_title; ?> </h2>
                    <p><?php echo word_limiter($single_feature_product->commodity_summary, 10) ?></p>
                    <p><span class="price">AUD<?php echo $this->cart->format_number($single_feature_product->commodity_price); ?></span></p>
                    <div class="button"><span><a href="<?php echo base_url('single/' . $single_feature_product->commodity_id); ?>" class="details">Details</a></span></div>
                </div>

            <?php } ?> 

        </div>

        <div class="content_bottom">
            <div class="heading">
                <h3>New Products</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php foreach ($all_new_products as $single_new_product) { ?>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="<?php echo base_url('single/' . $single_new_product->commodity_id); ?>"><img style="width:250px;height:250px" src="<?php echo base_url('uploads/' . $single_new_product->commodity_image) ?>" alt="" /></a>
                    <h2><?php echo $single_new_product->commodity_title; ?></h2>
                    <p><?php echo word_limiter($single_new_product->commodity_summary, 10) ?></p>
                    <p><span class="price">AUD<?php echo $this->cart->format_number($single_new_product->commodity_price); ?></span></p>
                    <div class="button"><span><a href="<?php echo base_url('single/' . $single_feature_product->commodity_id); ?>" class="details">Details</a></span></div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>