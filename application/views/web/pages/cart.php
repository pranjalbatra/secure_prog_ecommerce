<div class="main">

    <div class="content">

        <div class="cartoption">        

            <div class="cartpage">

                <h2 style="font-size: 24px; color: #333;">Your Cart</h2>

                <?php if ($this->cart->total_items()) { ?>

                    <table class="tblone" style="font-size: 16px; color: #333;">

                        <tr>

                            <th width="5%">Sr.</th>

                            <th width="30%">Product Name</th>

                            <th width="10%">Image</th>

                            <th width="15%">Price</th>

                            <th width="20%">Quantity</th>

                            <th width="15%">Total Price</th>

                            <th width="5%">Remove</th>

                        </tr>

                        <?php

                        $i = 0;

                        foreach ($cart_contents as $cart_items) {

                            $i++;

                            ?>

                            <tr>

                                <td><?php echo $i; ?></td>

                                <td><?php echo $cart_items['name'] ?></td>

                                <td><img src="<?php echo base_url('uploads/' . $cart_items['options']['commodity_image']) ?>" alt=""/></td>

                                <td>AUD. <?php echo $this->cart->format_number($cart_items['price']) ?></td>

                                <td>

                                    <form action="<?php echo base_url('update/cart'); ?>" method="post">
                                    <?php

                                            $csrf = array(

                                            'name' => $this->security->get_csrf_token_name(),

                                            'hash' => $this->security->get_csrf_hash()

                                            );

                                        ?>

                                

                                

                                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

                                        <input type="number" name="qty" value="<?php echo $cart_items['qty'] ?>"/>

                                        <input type="hidden" name="rowid" value="<?php echo $cart_items['rowid'] ?>"/>

                                        <input type="submit" name="submit" value="Update"/>

                                    </form>

                                </td>

                                <td>AUD. <?php echo $this->cart->format_number($cart_items['subtotal']) ?></td>

                                <td>

                                    <form action="<?php echo base_url('remove/cart'); ?>" method="post">
                                    <?php

                                            $csrf = array(

                                            'name' => $this->security->get_csrf_token_name(),

                                            'hash' => $this->security->get_csrf_hash()

                                            );

                                        ?>

                                

                                

                                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

                                        <input type="hidden" name="rowid" value="<?php echo $cart_items['rowid'] ?>"/>

                                        <input type="submit" name="submit" value="X"/>

                                    </form>

                                </td>

                            </tr>

                        <?php } ?>

 

 

                    </table>

                    <table style="float:right;text-align:left;" width="40%" style="font-size: 16px; color: #333;">

                        <tr>

                            <th>Sub Total:</th>

                            <td>AUD. <?php echo $this->cart->format_number($this->cart->total()) ?></td>

                        </tr>

                        <tr>

                            <th>VAT:</th>

                            <td>AUD.

                                <?php

                                $total = $this->cart->total();

                                $tax = ($total * 15) / 100;

                                echo $this->cart->format_number($tax);

                                ?>

                            </td>

                        </tr>

                        <tr>

                            <th>Grand Total:</th>

                            <td>AUD. <?php echo $this->cart->format_number($tax + $this->cart->total()); ?> </td>

                        </tr>

                    </table>

                    <?php

                } else {

                    echo "<h1 style='font-size: 24px; color: #333;'>Your Cart is Empty</h1>";

                }

                ?>

            </div>

            <div class="shopping">

                <div class="shopleft">

                    <a href="<?php echo base_url('product') ?>"> <button style='font-size: 18px; color: orange; border: none; padding: 10px 20px; cursor: pointer; background-color: red; border-radius: 4px;'>continue shopping</button></a>

                </div>

                <div class="shopright">

                    <?php

                    $customer_id = $this->session->userdata('customer_id');

                    if (empty($customer_id)) {

                        ?>

                        <a href="<?php echo base_url('user_form') ?>"> <button style='font-size: 24px; color: orange; border: none; padding: 10px 20px; cursor: pointer; background-color: green; border-radius: 4px;'>Check out!</button></a>

                        <?php

                    } elseif (!empty($customer_id)) {

                        ?>

                        <a href="<?php echo base_url('customer/shipping') ?>"> <h1 style='font-size: 24px; color: #333;'>Check out!</h1></a>

                        <?php

                    }

                    ?>

                </div>

            </div>

        </div>      

        <div class="clear"></div>

    </div>

</div>

 