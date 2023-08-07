<!-- start: Content -->
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="<?php echo base_url('manage/product')?>">Manage Product</a></li>
    </ul>

    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Manage Product</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Product Title</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <?php 
                        $i=0;
                        foreach($get_all_product as $single_product){
                            $i++;
                        ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td class="center"><?php echo $single_product->commodity_title;?></td>
                            <td class="center"><img src="<?php echo base_url('uploads/'.$single_product->commodity_image);?>" style="width:200px;height:75px"/></td>
                            <td class="center">AUD.<?php echo $this->cart->format_number($single_product->commodity_price);?></td>
                            <td class="center"><?php echo $single_product->commodity_quantity;?></td>
                            <td class="center">
                                <a class="btn btn-info" href="<?php echo base_url('edit/product/' . $single_product->commodity_id); ?>">
                                    <i class="halflings-icon white edit"></i> Edit
                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url('delete/product/' . $single_product->commodity_id); ?>">
                                    <i class="halflings-icon white trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                        <?php }?>
                        
                    </tbody>
                </table>            
            </div>
        </div><!--/span-->

    </div><!--/row-->
</div><!--/.fluid-container-->
<!-- end: Content -->
