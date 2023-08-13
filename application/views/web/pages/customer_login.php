<div class="main">
    <div class="content" style="text-align: center">
         <div class="login_panel" style="width:700px;text-align:top;display:inline-block;float: none">
            <h3>Customers login</h3>
            <p>Existing user only</p>
            <style type="text/css">
                #result{color:red;padding: 10px}
                #result p{color:black}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            
            <form action="<?php echo base_url('customer/logincheck');?>" method="post">

            <?php

            $csrf = array(

            'name' => $this->security->get_csrf_token_name(),

            'hash' => $this->security->get_csrf_hash()

            );

            ?>

                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <input name="customer_email" placeholder="Email Or Account" type="text"/>
                <input name="customer_password" placeholder=" Password" type="password"/>
                <p class="note">forgot your password  <a href="#">here</a></p>
                <div class="buttons"><div><button class="grey">login </button></div></div>

            
            </form>

        </div>
        <div class="clear"></div>
    </div>
</div>