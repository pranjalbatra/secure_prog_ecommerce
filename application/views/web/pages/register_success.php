<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3 style="font-size: 24px; color: #333;">Welcome To <?php echo $this->session->flashdata('customer_name'); ?></h3>
            
            <p style="font-size: 16px; color: #777;">Hi <?php echo $this->session->flashdata('customer_name'); ?>, You Successfully Registered on Our Site.
                Please Check Your Email: <a href="mailto:<?php echo $this->session->flashdata('customer_email'); ?>"><b style="color: #007bff;"><?php echo $this->session->flashdata('customer_email'); ?></b></a>
                and Activate Your Account. Thank You for Staying with Us.
            </p>
        </div>  	
        <div class="clear"></div>
    </div>
</div>
