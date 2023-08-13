<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="<?php echo base_url('edit/product/'.$product_info_by_id->commodity_id)?>">edit Product</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Product</h2>
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
                <p><?php echo $this->session->flashdata('message');?></p>
            </div>
            <div class="box-content">
                <form name="formName" class="form-horizontal" action="<?php echo base_url('update/product/'.$product_info_by_id->commodity_id);?>" method="post" enctype="multipart/form-data">
                <?php

                $csrf = array(

                'name' => $this->security->get_csrf_token_name(),

                'hash' => $this->security->get_csrf_hash()

                );

                ?>

                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />                 
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Title</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php echo $product_info_by_id->commodity_title;?>" name="commodity_title" id="fileInput" type="text"/>
                            </div>
                        </div>          
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Product Short Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="commodity_summary" id="textarea2" rows="2">
                                    <?php echo $product_info_by_id->commodity_summary;?>
                                </textarea>
                            </div>
                        </div>        
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Product Long Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="commodity_description" id="textarea2" rows="4">
                                    <?php echo $product_info_by_id->commodity_description;?>
                                </textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Image</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="commodity_image" id="fileInput" type="file"/>
                                <input class="span6 typeahead" name="product_delete_image" value="<?php echo base_url('uploads/'.$product_info_by_id->commodity_image);?>" type="hidden"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <div class="controls">
                                <img src="<?php echo base_url('uploads/'.$product_info_by_id->commodity_image);?>" style="width:500px;height:200px"/>
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Price</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php echo $product_info_by_id->commodity_price;?>" name="commodity_price" id="fileInput" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Quantity</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php echo $product_info_by_id->commodity_quantity;?>" name="commodity_quantity" id="fileInput" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Category</label>
                            <div class="controls">
                                <select id="commodity_category" name="commodity_category">
                                    <?php foreach($all_published_category as $single_category){?>
                                    <option value="<?php echo $single_category->id;?>"><?php echo $single_category->division_name;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Brand</label>
                            <div class="controls">
                                <select id="commodity_industry_brand" name="commodity_industry_brand">
                                    <?php foreach($all_published_brand as $single_brand){?>
                                    <option value="<?php echo $single_brand->brand_id;?>"><?php echo $single_brand->brand_name;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Product Featured</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="0" name="commodity_feature" id="fileInput" type="radio"/> Unfeatured
                                <input class="span6 typeahead" value="1" name="commodity_feature" id="fileInput" type="radio" />Featured
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Publication Status</label>
                            <div class="controls">
                                <select id="upload_status" name="upload_status">
                                    <option value="1">Published</option>
                                    <option value="0">UnPublished</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->


</div><!--/.fluid-container-->

<!-- end: Content -->

<script>
document.getElementById('upload_status').value = <?php echo $product_info_by_id->pstatus;?>;
document.formName.commodity_feature.value=<?php echo $product_info_by_id->commodity_feature;?>;
document.getElementById('commodity_industry_brand').value = <?php echo $product_info_by_id->commodity_industry_brand;?>;
document.getElementById('commodity_category').value = <?php echo $product_info_by_id->commodity_category;?>;
</script>