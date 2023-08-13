

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Your Shipping Address</h3>
            <style type="text/css">
                #result{color:blue;padding: 30px}
                #result p{color:blue}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('customer/save/shipping/address');?>">
            <?php

            $csrf = array(

            'name' => $this->security->get_csrf_token_name(),

            'hash' => $this->security->get_csrf_hash()

            );

            ?>

                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />          
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="shipping_name" placeholder="Enter Your Name">
                                </div>


                                <div>
                                    <input type="text" name="shipping_city" placeholder="Enter Your City">
                                </div>
                                <div>
                                    <input type="text" name="shipping_phone" placeholder="Enter Your Phone">
                                </div>
                                <div>
                                    <input type="text" name="shipping_zipcode" placeholder="Enter Your ZipCode">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="shipping_email" placeholder="Enter Your Email">
                                </div>
                                        

                                <div>
                                    <input type="text" name="shipping_address" placeholder="Enter Your Address">
                                </div>
                                
                                <div>
                                    <select id="country" name="shipping_country" class="frm-field required">
                                        <option value="null">Select a Country</option>         
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Netherland">Netherlands</option>
                                        <option value="USA">USA</option>

                                    </select>
                                </div>		

                                
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div><button class="blue">Create Account</button></div></div>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>