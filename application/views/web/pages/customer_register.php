<style>
    .main {
        display: flex;
        justify-content: center;
    }

    .register_account {
        max-width: 600px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
    }

    .register_account h3 {
        margin-bottom: 20px;
    }

    .register_account form {
        text-align: left;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group select {
        height: 40px;
    }

    .form-group .terms {
        font-size: 12px;
    }

    .form-group .create-account-btn {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<div class="main">
    <div class="register_account">
        <h3>Register New Account</h3>
        <?php if (!empty($this->session->flashdata('message'))) { ?>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
        <?php } ?>
        <form method="post" action="<?php echo base_url('customer/save'); ?>">

            <?php

            $csrf = array(

            'name' => $this->security->get_csrf_token_name(),

            'hash' => $this->security->get_csrf_hash()

            );

            ?>

            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />


            <div class="form-group">
                <label for="customer_name">Name:</label>
                <input type="text" name="customer_name" id="customer_name" placeholder="Enter Your Name" required>
            </div>

            <div class="form-group">
                <label for="customer_password">Password:</label>
                <input type="password" name="customer_password" id="customer_password" placeholder="Enter Your Password" required>
            </div>

            <div class="form-group">
                <label for="customer_city">City:</label>
                <input type="text" name="customer_city" id="customer_city" placeholder="Enter Your City" required>
            </div>

            <div class="form-group">
                <label for="customer_phone">Phone:</label>
                <input type="tel" name="customer_phone" id="customer_phone" placeholder="Enter Your Phone" required>
            </div>

            <div class="form-group">
                <label for="customer_email">Email:</label>
                <input type="email" name="customer_email" id="customer_email" placeholder="Enter Your Email" required>
            </div>

            <div class="form-group">
                <label for="customer_address">Address:</label>
                <input type="text" name="customer_address" id="customer_address" placeholder="Enter Your Address" required>
            </div>

            <div class="form-group">
                <label for="customer_country">Country:</label>
                <select id="customer_country" name="customer_country" class="frm-field required" required>
                    <option value="">Select a Country</option>
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

            <div class="form-group">
                <label for="customer_zipcode">ZipCode:</label>
                <input type="text" name="customer_zipcode" id="customer_zipcode" placeholder="Enter Your ZipCode" required>
            </div>

            <div class="form-group">
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
                <button type="submit" class="create-account-btn">Create Account</button>
            </div>
        </form>
    </div>
</div>
