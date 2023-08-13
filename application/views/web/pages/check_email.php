<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3 style="font-size: 24px; color: #333;">Register New Account</h3>
            <form>
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
                                    <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Name';
                                            }" style="font-size: 16px; color: #333; padding: 5px;">
                                </div>

                                <div>
                                    <input type="text" value="City" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'City';
                                            }" style="font-size: 16px; color: #333; padding: 5px;">
                                </div>

                                <div>
                                    <input type="text" value="Zip-Code" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Zip-Code';
                                            }" style="font-size: 16px; color: #333; padding: 5px;">
                                </div>
                                <div>
                                    <input type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'E-Mail';
                                            }" style="font-size: 16px; color: #333; padding: 5px;">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Address';
                                            }" style="font-size: 16px; color: #333; padding: 5px;">
                                </div>
                                <div>
                                    <select id="country" name="country" onchange="change_country(this.value)" class="frm-field required" style="font-size: 16px; color: #333; padding: 5px;">
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

                                <div>
                                    <input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Phone';
                                            }" style="font-size: 16px; color: #333; padding: 5px;">
                                </div>

                                <div>
                                    <input type="text" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Password';
                                            }" style="font-size: 16px; color: #333; padding: 5px;">
                                </div>
                            </td>
                        </tr> 
                    </tbody>
                </table>
                <div class="search">
                    <div>
                        <button class="grey" style="font-size: 18px; color: #fff; background-color: #007bff; border: none; padding: 10px 20px; cursor: pointer;">Create Account</button>
                    </div>
                </div>
                <p class="terms" style="font-size: 14px; color: #333;">By clicking 'Create Account' you agree to the <a href="#" style="font-size: 14px; color: #007bff;">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>
