<div class="contentpanel">
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">Data Produk</h4>
        </div>
        <div class="panel-body">
		<?php 
		$level=$this->session->userdata('id_user_level');
		?>
		<?php if($level==1){ ?>
		<form method="POST" action="<?php echo base_url(); ?>Mstproduk/tambah">
		 <button name="tambah"  class="btn btn-success btn-quirk btn-sm"><i class="fa fa-plus"></i> Tambah</button>
		
		 </form>
		<?php } ?>
		 <br>

          <div class="table-responsive">
            <table id="mydata" class="table table-bordered table-striped-col">
              <thead>
                <tr>
				  <th width="30">No</th>
                  <th>code</th>
                  <th>Description</th>
				  <th>Tax</th>
				  <th>MOQ</th>
				  <th>Category PID</th>
				  <th>Hierarchy</th>
				  <th>Material Group</th>
				  <th style="text-align:center">Aksi</th>
                </tr>
              </thead>
              <tbody id="show_data">
              </tbody>
            </table>
          </div>
        </div>
      </div><!-- panel -->
    </div><!-- contentpanel -->

<script src="<?php echo base_url('asets/js2/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('asets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('asets/datatables/dataTables.bootstrap.js') ?>"></script>
 <script type="text/javascript">
	$(document).ready(function(){
		tampil_data();	
		$('#mydata').dataTable();
		function tampil_data(){
		    $.ajax({
		        type  : 'get',
		        url   : '<?php echo base_url();?>Mstproduk/v_mstproduk',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i; 
					var no=1;
		            for(i=0; i<data.length; i++){
						
		                html += '<tr>'+
								'<td style="text-align:center">'+no+++'</td>'+
								'<td style="text-align:left">'+data[i].code+'</td>'+
								'<td style="text-align:left">'+data[i].description+'</td>'+
								'<td style="text-align:left">'+data[i].tax+'</td>'+
								'<td style="text-align:left">'+data[i].moq+'</td>'+
								'<td style="text-align:left">'+data[i].categorypid+'</td>'+
								'<td style="text-align:left">'+data[i].hierarchy+'</td>'+
								'<td style="text-align:left">'+data[i].materialgroup+'</td>';
		                  html += '<td align="center">'+

								'<table>'+ 

									'<tr>'+

										'<td>'+

											'<form action="<?php echo base_url() ?>Mstproduk/edit" method="POST"><input type="hidden" name="id" value="'+data[i].id+'" ><button data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success tooltips"><i class="fa fa-edit"></i></button></form>'+' '+

									    '</td>'+

										'<td>'+

											'<form action="<?php echo base_url() ?>Mstproduk/hapus" method="POST"><input type="hidden" name="id" value="'+data[i].id+'" ><button  data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></button></form>'+' '+

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