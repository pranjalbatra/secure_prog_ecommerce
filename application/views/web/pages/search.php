

<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>You Are Search Now <b style="color:red"><?php if($search){echo $search;}?></b></h3>
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
                        <p><?php echo word_limiter($single_products->commodity_summary, 10) ?></p>
                        <p><span class="price"><?php echo $this->cart->format_number($single_products->commodity_price) ?> AUD.</span></p>
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
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li class="pagiactive"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Prev</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>
<style>
    .content_pagi{padding:20px;border: 1px solid #EBE8E8;border-radius: 3px;}
    .pagination{}
    .pagination ul{}
    .pagination ul li{float: right}
    .pagination ul li a{color: blue;padding: 15px 12px;border: 1px solid #ddd;font-size: 30px;}
    .pagination ul li a:hover{background:blue;}
    .pagiactive a{background:blue;}

</style>