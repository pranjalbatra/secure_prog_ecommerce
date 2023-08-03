<!DOCTYPE HTML>
<html>
<head>
    <title>Secure Programming e-commerce</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #e0e0e0;
        }

        /* Header styles */
        .header_top {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo img {
            width: 100px;
            height: auto;
        }

        .search_box {
            margin-left: 20px;
            display: flex;
            align-items: center;
        }

        .search_box input[type="text"] {
            background-color: #ffffff;
            color: red;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
        }

        .search_box input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            margin-left: 5px;
            cursor: pointer;
        }

        .shopping_cart {
            display: flex;
            align-items: center;
        }

        .cart_title {
            margin-right: 5px;
        }

        /* Menu styles */
        .menu {
            background-color: #444;
            padding: 10px;
        }

        .dc_mm-orange {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .dc_mm-orange li {
            margin-right: 20px;
        }

        .dc_mm-orange a {
            color: blue;
            text-decoration: none;
        }

        .dc_mm-orange .active a {
            font-weight: bold;
        }

        /* Content styles */
        .wrap {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="header_top">
            <div class="logo">
                <a href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('uploads/'); ?><?php echo get_option('site_logo'); ?>" alt="" /></a>
            </div>
            <div class="header_top_right">
                <div class="search_box">
                    <form method="get" action="<?php echo base_url('search')?>">
                        <input type="text" placeholder="Search for Products" name="search">
                        <input type="submit" value="SEARCH">
                    </form>
                </div>
                <div class="shopping_cart">
                    <div class="cart">
                        <a href="<?php echo base_url('cart');?>" title="View my shopping cart" rel="nofollow">
                            <span class="cart_title">Cart</span>
                            <span class="no_product">(<?php echo $this->cart->total_items();?> Items)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul id="dc_mega-menu-orange" class="dc_mm-orange">
                <li class="<?php if ($this->uri->uri_string() == '') { echo "active"; } ?>"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="<?php if ($this->uri->uri_string() == 'product') { echo "active"; } ?>"><a href="<?php echo base_url('/product'); ?>">Products</a></li>
                    <?php if ($this->cart->total_items()) { ?>
                    <li class="<?php if ($this->uri->uri_string() == 'cart') { echo "active"; } ?>"><a href="<?php echo base_url('/cart'); ?>">Cart</a></li>
                    <?php } ?>
                <li class="<?php if ($this->uri->uri_string() == 'contact') { echo "active"; } ?>"><a href="<?php echo base_url('/contact'); ?>">Contact</a></li>
                
                <?php if(!$this->session->userdata('customer_id')){?>
                
                <li class="<?php if ($this->uri->uri_string() == 'customer/login') { echo "active"; } ?>"><a href="<?php echo base_url('/customer/login'); ?>">Login</a></li>
                <li class="<?php if ($this->uri->uri_string() == 'customer/register') { echo "active"; } ?>"><a href="<?php echo base_url('/customer/register'); ?>">Register</a></li>
                
                <?php }?>
                
            </ul>
        </div>
        
    </div>
    <footer>
        &copy; Secure Programming e-commerce 2023. All rights reserved.
    </footer>
</body>
</html>
