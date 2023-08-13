

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Payment Options</h3>
            <style type="text/css">
                #result{color:blue;padding: 30px}
                #result p{color:blue}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('save/order');?>" style="text-align: left">
            <?php

            $csrf = array(

            'name' => $this->security->get_csrf_token_name(),

            'hash' => $this->security->get_csrf_hash()

            );

            ?>

                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <span><input type="radio" name="payment" value="cashon"/>Cash On Delivary</span><br/>
                <span><input type="radio" name="payment" value="ssl"/>SSL Wocommerz</span><br/>
                <span><input type="radio" name="payment" value="paypal"/>Paypal</span><br/><br/>
                <div class="search"><div><button class="blue">Create Account</button></div></div>
            </form>
           
        </div>  	
        <div class="clear"></div>
    </div>
</div>