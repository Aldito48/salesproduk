<div class="contentpanel">
		<form method="POST" action="<?php echo base_url(); ?>Mstproduk/tambah">
		 <br>
          <div class="table-responsive">
<script src="<?php echo base_url('asets/js2/jquery-1.11.2.min.js') ?>"></script>
		                html += '<tr>'+
								'<table>'+ 
									'<tr>'+
										'<td>'+
											'<form action="<?php echo base_url() ?>Mstproduk/edit" method="POST"><input type="hidden" name="id" value="'+data[i].id+'" ><button data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-success tooltips"><i class="fa fa-edit"></i></button></form>'+' '+
									    '</td>'+
										'<td>'+
											'<form action="<?php echo base_url() ?>Mstproduk/hapus" method="POST"><input type="hidden" name="id" value="'+data[i].id+'" ><button  data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></button></form>'+' '+
									    '</td>'+			
								'</tr>'+	
		            }
		            $('#show_data').html(html);
		        }
		    });
		}
	});
</script>			