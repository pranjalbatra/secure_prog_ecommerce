<div class="main">
    <div class="content">
        <div class="section group">
            <div class="cont-desc span_1_of_2">				
                <div class="grid images_3_of_2">
                    <img src="<?php echo base_url('uploads/'.$get_single_product->commodity_image)?>" alt="" />
                </div>
                <div class="desc span_3_of_2">
                    <h2><?php echo $get_single_product->commodity_title?></h2>
                    <p><?php echo $get_single_product->commodity_summary?></p>					
                    <div class="price">
                        <p>Price: <span>AUD.<?php echo $this->cart->format_number($get_single_product->commodity_price)?></span></p>
                        <p>Category: <span><?php echo $get_single_product->division_name?></span></p>
                        <p>Brand:<span><?php echo $get_single_product->brand_name?></span></p>
                    </div>
                    <div class="add-cart">
                        <form action="<?php echo base_url('save/cart');?>" method="post">
                        <?php

                        $csrf = array(

                        'name' => $this->security->get_csrf_token_name(),

                        'hash' => $this->security->get_csrf_hash()

                        );

                        ?>

                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />          
                            <input type="number" class="buyfield" name="qty" value="1"/>
                            <input type="hidden" class="buyfield" name="commodity_id" value="<?php echo $get_single_product->commodity_id?>"/>
                            <input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
                        </form>				
                    </div>
                </div>
                <div class="product-desc">
                    <h2>Product Details</h2>
                    <p><?php echo $get_single_product->commodity_description?></p>
                </div>

            </div>
            <div class="rightsidebar span_3_of_1">
                <h2 style="font-size: 24px; color: #333;">CATEGORIES</h2>
                <ul style="font-size: 16px; color: #555;">
                    <?php foreach($get_all_category as $single_category){?>
                    <li><a href="<?php echo base_url('get/category/'.$single_category->id);?>"><?php echo $single_category->division_name?></a></li>
                    <?php }?>
                </ul>

            </div>
        </div>
    </div>
</div>
