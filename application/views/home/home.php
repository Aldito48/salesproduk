<?php  
	//////////////////////////////////////Admin		 
			 $level=$this->session->userdata('id_user_level'); 
			 if($level=='1'){
			 ?>
	<div class="col-md-12 col-lg-12 dash-left">
          
		 <div class="panel panel-announcement">
          
             <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" ></button>
                <h4><strong>Dashboard BIOS</strong></h4> 
              </div>
          </div><!-- panel -->
		
        </div><!-- col-md-9 -->
		 
			 <?php } ?>		
<?php  
	//////////////////////////////////////Admin		 
			 $level=$this->session->userdata('id_user_level'); 
			 if($level=='2'){
			 ?>		
<div class="col-md-12 col-lg-12 dash-left">
          
		 <div class="panel panel-announcement">
          
             <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" ></button>
                <h4 style="color:white"><strong>Dashboard Sales Produk</strong></h4> 
              </div>
          </div><!-- panel -->
		
        </div><!-- col-md-9 -->
		
	
	
			 <?php } ?>			 