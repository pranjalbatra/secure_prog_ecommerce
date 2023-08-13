

<div class="main">
    <div class="content">
        <div class="support">
            <div class="support_desc">
                <h3><?php echo get_option('contact_title');?></h3>
                <p><?php echo get_option('contact_subtitle');?></p>
                <p><?php echo get_option('contact_description');?></p>
            </div>
            <img src="<?php echo base_url()?>assets/web/images/contact.png" alt="" />
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="col span_2_of_3">
                <div class="contact-form">
                    <h2>Contact Us</h2>
                    <form>


                    <?php

                    $csrf = array(

                    'name' => $this->security->get_csrf_token_name(),

                    'hash' => $this->security->get_csrf_hash()

                    );

                    ?>

                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                        <div>
                            <span><label>NAME</label></span>
                            <span><input type="text" value=""></span>
                        </div>
                        <div>
                            <span><label>E-MAIL</label></span>
                            <span><input type="text" value=""></span>
                        </div>
                        <div>
                            <span><label>MOBILE</label></span>
                            <span><input type="text" value=""></span>
                        </div>
                        <div>
                            <span><label>SUBJECT</label></span>
                            <span><textarea> </textarea></span>
                        </div>
                        <div>
                            <span><input type="submit" value="SUBMIT"></span>
                        </div>
                    </form>
                </div>
            </div>
            
            </div>
        </div>    	
    </div>
</div>
