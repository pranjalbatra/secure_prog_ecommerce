<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Dashboard</a></li>
    </ul>

   	

	
   
    <div class="row-fluid">	

        <a class="quick-button metro orange span3">
            <i class="icon-group"></i>
            
            <h1 ><?php $query = $this->db->query('SELECT * FROM sed_current_customers'); echo $query->num_rows();?></h1>
            <h4>Users</h4>
        </a>
        
        <a class="quick-button metro blue span3">
            <i class="icon-shopping-cart"></i>
            <h1><?php $query = $this->db->query('SELECT * FROM sed_manage_order'); echo $query->num_rows();?></h1>
            <h4>Orders</h4>
        </a>

        <a class="quick-button metro red span3">
            <i class="icon-th"></i>
            <h1><?php $query = $this->db->query('SELECT * FROM sed_division'); echo $query->num_rows();?></h1>
            <h4>Categories</h4>
        </a>

        <a class="quick-button metro green span3">
            <i class="icon-barcode"></i>
            <h1><?php $query = $this->db->query('SELECT * FROM sed_commodity'); echo $query->num_rows();?></h1>
            <h4>Products</h4>
        </a>

        <div class="clearfix"></div>
        <hr>

    </div><!--/row-->

    <div class="row-fluid">
        <div class="span3"></div>
        <a class="quick-button metro pink span3">
            <i class="icon-bold"></i>
            <h1><?php $query = $this->db->query('SELECT * FROM sed_industry_brand'); echo $query->num_rows();?></h1>
            <h4>Brands</h4>
        </a>
        <a class="quick-button metro black span3">
            <i class="icon-money"></i>
            <h1><?php $query = $this->db->query('SELECT SUM( order_total)as total FROM sed_manage_order;')->row(); echo $query->total;?></h1>
            <h4>Total Income</h4>
        </a>

        <div class="span3"></div>
    </div>



</div><!--/.fluid-container-->

<!-- end: Content -->