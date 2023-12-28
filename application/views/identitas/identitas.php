<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
             
			 <?php  
			 error_reporting(0);
			 $level=$this->session->userdata('id_user_level'); 
			 if($level=='1'){
			 ?>
			
              <div class="row">
		<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-olive">
              <div class="widget-user-image">
               <?php 
			  foreach($identitas as $i){}
			  ?>
		<img src="<?php echo base_url() ?>images/logo/<?php echo $i->logo; ?>" style="height: 45px; width: 50px" class="img-responsive">
		
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?php echo $i->nama; ?></h3>
              <h5 class="widget-user-desc"></h5>
            </div>
			
				
				
			
          </div>
		  
		   <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped">
                
                
                <tr>
                  <td>Nama Lembaga </td>
				   <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->nama; ?></span></td>
                  
                </tr>
				 <tr>
                  <td>Nama Website </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->nama_web; ?></span></td>
                  
                </tr>
				<tr>
                  <td>Alamat </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->alamat; ?></span></td>
                  
                </tr>
				<tr>
                  <td>Url </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->url; ?></span></td>
                  
                </tr>
				
				<tr>
                  <td>Tanggal Mulai Perhitungan </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo date_indo($i->tgl_hitung); ?></span></td>
                  
                </tr>
				<tr>
                  <td>Jam Mulai Perhitungan </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->jam_hitung; ?></span></td>
                  
                </tr>
				<tr>
                  <td>No Telp </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->no_telp; ?></span></td>
                  
                </tr>
				<tr>
                  <td>No WA </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->no_wa; ?></span></td>
                  
                </tr>
				<tr>
                  <td>Facebook </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->facebook; ?></span></td>
                  
                </tr>
				<tr>
                  <td>Twitter </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->twitter; ?></span></td>
                  
                </tr>
				<tr>
                  <td>Email </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->email; ?></span></td>
                  
                </tr>
				<tr>
                  <td>Lokasi </td>
				  <td> :</td>
                  <td><span class="pull-right text-green"><?php echo $i->lokasi; ?></span></td>
                  
                </tr>
				<tr>
                  <td>Logo </td>
				  <td> :</td>
                  <td>
					<span class="pull-right text-green">
					  <div class="btn btn-default btn-file" >
								 <input type="file" disabled name="images" onchange="readURLUser(this);" /> 
								<?php 
								if(empty($i->logo)){
								?>	
												<img id="preview_gambarUser" style="width: 135px; height: 135px" src="<?php echo base_url(); ?>images/logo/kosong.jpg"  />
								<?php } else { ?>				
											<img id="preview_gambarUser" style="width: 135px; height: 135px" src="<?php echo base_url(); ?>images/logo/<?php echo $i->logo; ?>"  />
								<?php } ?>			
						</div>
					</span>		 
				  </td>
                  
                </tr>
				
				
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
		  <div class="box-body table-responsive no-padding">
		  <table>
		    <tr>
			    <td>
			
				   <form action="<?php echo base_url(); ?>Identitas/edit" method="POST">
					<input type="hidden" name="id" value="<?php echo $i->id_identitas; ?>">
					<button class="btn btn-success"><i class="fa fa-edit"></i> Edit</button>
				   </form>
				</td>
				
				
					
			 </tr>  
		   </table>
		   </div>
          <!-- /.widget-user -->
        </div>
		</div>
			<?php 
			 } 
			?>	
				
            </div>
            </div>
    </section>
</div>


		
        