<style>
    /* Increase font size for product titles */
    .grid_1_of_4 h2 {
        font-size: 18px;
        color: blue; /* Change font color to blue */
    }

    /* Shorten product descriptions to 15 words */
    .grid_1_of_4 p {
        font-size: 14px;
        color: blue; /* Change font color to blue */
    }

    /* Adjust product image size */
    .grid_1_of_4 img {
        width: 200px;
        height: 200px;
    }
</style>



<div class="main">
    <div class="content" >
        <div class="content_top">
            <div class="heading">
                <h3>Shop now for the latest products!!</h3>
            </div>
            <div class="clear"></div>
        </div>

        <?php
        $arr_chunk_product = array_chunk($get_all_product, 4);

        foreach ($arr_chunk_product as $chunk_products) {
            ?>
            <div class="section group">
                <?php foreach ($chunk_products as $single_products) { ?>
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="<?php echo base_url('single/'.$single_products->commodity_id);?>"><img style="width:250px;height:250px" src="<?php echo base_url('uploads/'.$single_products->commodity_image)?>" alt="" /></a>
                        <h2><?php echo $single_products->commodity_title ?></h2>
                        <p><?php echo word_limiter($single_products->commodity_title, 10) ?></p>
                        <p><span class="price"><?php echo $this->cart->format_number($single_products->commodity_price) ?> AUD</span></p>
                        <div class="button"><span><a href="<?php echo base_url('single/'.$single_products->commodity_id);?>" class="details">Details</a></span></div>
                    </div>
                    <?php
                }
                ?>

            </div>
            <?php
        }
        ?>
        <div class="content_pagi">
            <div class="pagination">
                <?=$this->pagination->create_links();?>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>
