<div class="contentpanel">
      <div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">Data Customer</h4>
        </div>
        <div class="panel-body">
		<?php 
		$level=$this->session->userdata('id_user_level');
		?>
		<?php if($level==1){ ?>
		<form method="POST" action="<?php echo base_url(); ?>Mstcustomer/tambah">
		 <button name="tambah"  class="btn btn-success btn-quirk btn-sm"><i class="fa fa-plus"></i> Tambah</button>
		
		 </form>
		<?php } ?>
		 <br>

          <div class="table-responsive">
            <table id="mydata" class="table table-bordered table-striped-col">
              <thead>
                <tr>
				  <th width="30">No</th>
                  <th>Tahun</th>
                  <th>Tgl.Kembali</th>
				  <th>Type Vespa</th>
				  <th>No. VIN</th>
				  <th>Nama Customer</th>
				  <th>Gender</th>
				  <th>Tgl.Lahir</th>
				  <th>Alamat</th>
				  <th>Kelurahan</th>
				  <th>Kecamatan</th>
				  <th>Kab/Kota</th>
				  <th>Provinsi</th>
				  <th>Kode Pos</th>
				  <th>Email</th>
				 
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
		        url   : '<?php echo base_url();?>Mstcustomer/v_mstcustomer',
		        async : true,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i; 
					var no=1;
		            for(i=0; i<data.length; i++){
						
		                html += '<tr>'+
								'<td style="text-align:center">'+no+++'</td>'+
								'<td style="text-align:left">'+data[i].tahun+'</td>'+
								'<td style="text-align:left">'+data[i].tglkembali+'</td>'+
								'<td style="text-align:left">'+data[i].typevespa+'</td>'+
								'<td style="text-align:left">'+data[i].novin+'</td>'+
								'<td style="text-align:left">'+data[i].nama+'</td>'+
								'<td style="text-align:left">'+data[i].gender+'</td>'+
								'<td style="text-align:left">'+data[i].tgllahir+'</td>'+
								'<td style="text-align:left">'+data[i].alamat+'</td>'+
								'<td style="text-align:left">'+data[i].kelurahan+'</td>'+
								'<td style="text-align:left">'+data[i].kecamatan+'</td>'+
								'<td style="text-align:left">'+data[i].kota+'</td>'+
								'<td style="text-align:left">'+data[i].provinsi+'</td>'+
								'<td style="text-align:left">'+data[i].kodepos+'</td>'+
								'<td style="text-align:left">'+data[i].email+'</td>';
		                  html += '<td align="center">'+

								'<table>'+ 

									'<tr>'+

										'<td>'+

											'<form action="<?php echo base_url() ?>Mstcustomer/edit" method="POST"><input type="hidden" name="id" value="'+data[i].id+'" ><button data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success tooltips"><i class="fa fa-edit"></i></button></form>'+' '+

									    '</td>'+

										'<td>'+

											'<form action="<?php echo base_url() ?>Mstcustomer/hapus" method="POST"><input type="hidden" name="id" value="'+data[i].id+'" ><button  data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></button></form>'+' '+

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