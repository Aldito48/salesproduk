<?php 
if(isset($_POST['id'])){
?>
<div class="content-wrapper">

    <section class="content">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Header Web</h3>
            </div>
			 
            <form action="<?php echo base_url(); ?>Identitas/edit_header" id="popup-validation" method="post" enctype="multipart/form-data">
			
             <input type="hidden" class=" form-control"  name="id" value="<?php echo $edit['id_identitas']; ?>">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="row">
				  <div class="col-md-12">
				   <div class="box-body">
					
					<div class="form-group">
					   
				
						<label class="col-sm-2 control-label">Logo Header Web</label>
					  
					  
										
							<div class="btn btn-default btn-file" >
							 <input type="file"  name="logo_header" onchange="readURLUser2(this);" /> 
							<?php 
							if(empty($edit['logo_header'])){
							?>	
											<img id="preview_gambarUser2" style="width: 135px; height: 135px" src="<?php echo base_url(); ?>images/logo/kosong.jpg"  />
							<?php } else { ?>				
										<img id="preview_gambarUser2" class="img-responsive" style="width: 935px; height: 135px" src="<?php echo base_url(); ?>images/logo/<?php echo $edit['logo_header']; ?>"  />
							<?php } ?>			
							 </div>
					  
					</div>
					
					
					<br>
					
					<button type="submit" name="edit"  class="btn btn-primary left"><i class="fa fa-save"></i> Simpan</button>
					<a href="<?php echo base_url() ?>Identitas" class="btn btn-danger"><i class="fa fa-close"></i> Batal</a>
					</div>
			</div>
					
                
             
			  
			 
              <!-- /.box-body -->
			
	
			
              
           
          
            </div>  
              
            </form>
          
                
				
		</div>
	</section>
</div>
<?php  } else { ?>
<script type='text/javascript'>
  setTimeout(function () {  
   swal({
    title: 'Pengaturan',
    text:  'Tidak ada Hak Akses',
    type:  'warning',
    timer: 2000,
    showConfirmButton: true
   });  
  },10); 
  window.setTimeout(function(){ 
   window.location.replace('<?php echo base_url('Identitas'); ?>');
  } ,2000); 
</script>
<?php } ?>
<script>
			
			function readURLUser2(input) { // Mulai membaca inputan gambar
			if (input.files && input.files[0]) {
			var reader = new FileReader(); // Membuat variabel reader untuk API FileReader
			 
			reader.onload = function (e) { // Mulai pembacaan file
			$('#preview_gambarUser2') // Tampilkan gambar yang dibaca ke area id #preview_gambar
			.attr('src', e.target.result)
			.width(345); // Menentukan lebar gambar preview (dalam pixel)
			//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
			};
			 
			reader.readAsDataURL(input.files[0]);
			}
			}
</script>


