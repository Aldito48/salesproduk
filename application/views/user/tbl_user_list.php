<?php  
	//////////////////////////////////////Admin		 
			 $level=$this->session->userdata('id_user_level'); 
			 if($level=='1'){
			 ?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">User Verifikator</h4>
                </div>
                <div class="card-body">
                   <div class="toolbar">
                    <form method="post" action="<?php echo base_url() ?>User/tambah_user">
					<button name="tambah_user" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
					</form>
                  </div>
                 <div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
							  <thead>
								<tr>
								  <th width="50">No</th>
								
								<th>Nama</th>
								<th>Username</th>
								<th>Aktif</th>
								
								<th>Level</th>
								  <th width="90"><center>Aksi</center></th>
								</tr>
							  </thead>
							 
							  <tbody id="show_data">
								
								
							  </tbody>
							</table>
						  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->
        </div>
      </div>
			 <?php } ?>	  
<script src="<?php echo base_url('asets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('asets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('asets/datatables/dataTables.bootstrap.js') ?>"></script>
 <script type="text/javascript">
	$(document).ready(function(){
		tampil_data_user();	
		
		$('#mydata').dataTable();
		 
		//fungsi tampil barang
		function tampil_data_user(){
		    $.ajax({
		        type  : 'Get',
		        url   : '<?php echo base_url()?>User/data_user',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
					var no=1;
		            for(i=0; i<data.length; i++){
						
		                html += '<tr>'+
								'<td style="text-align:center">'+no+++'</td>'+
		                  		'<td>'+data[i].full_name+'</td>'+
		                        '<td>'+data[i].username+'</td>'+
								
		                        '<td>'+data[i].is_aktif+'</td>'+
								'<td>'+data[i].nama_level+'</td>'+
		                        '<td style="text-align:center;">'+
								'<table>'+ 
										'<tr>'+
											'<td width="100">'+
                                    '<form action="<?php echo base_url() ?>User/edit" method="POST"><input name="id" value="'+data[i].id_users+'" type="hidden"><button name="edit_user"  data-toggle="tooltip" data-placement="top" title="Edit Data User" class="btn btn-primary"><i class="fa fa-edit"></i></button></form>'+' '+
                                    
									        '</td>'+
											
								'</tr>'+	
								'</table>'+	
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

		


		
		


	});

</script>
<script type="text/javascript">
	$(document).ready(function(){
		tampil_data_user_ses();	
		
		$('#mydata_ses').dataTable();
		 
		//fungsi tampil barang
		function tampil_data_user_ses(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo base_url()?>User/data_user_ses',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
					var no=1;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
								'<td style="text-align:center">'+no+++'</td>'+
		                  		'<td>'+data[i].full_name+'</td>'+
		                        '<td>'+data[i].username+'</td>'+
		                        '<td>'+data[i].is_aktif+'</td>'+
								
		                        '<td style="text-align:center;">'+
								'<table>'+ 
								'<tr>'+
											'<td width="200">'+
                                    '<form action="<?php echo base_url() ?>User/edit" method="POST"><input name="id" value="'+data[i].id_users+'" type="hidden"><button name="edit_user" class="btn btn-primary"><i class="fa fa-edit"></i> Edit </button></form>'+' '+
                                    
									        '</td>'+
											
								'</tr>'+	
								'</table>'+	
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data_ses').html(html);
		        }

		    });
		}
	});

</script>


		
        