<?php 
if(isset($_POST['id'])){
?>
<div class="content-wrapper">

    <section class="content">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Pengaturan</h3>
            </div>
			 
            <form action="<?php echo base_url(); ?>Identitas/edit" id="popup-validation" method="post" enctype="multipart/form-data">
			
             <input type="hidden" class=" form-control"  name="id" value="<?php echo $edit['id_identitas']; ?>">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="row">
				  <div class="col-md-12">
				   <div class="box-body">
				   <div class="form-group">
					  <label for="nama">Mulai Perhitungan Suara</label>
					  <input type="date" class="validate[required] form-control" value="<?php echo $edit['tgl_hitung']; ?>"  name="tgl_hitung" placeholder="Tanggal Mulai Perhitungan Suara">
					</div>
					<div class="form-group">
					  <label for="nama">Jam Perhitungan Suara</label>
					  <input type="time" class="validate[required] form-control" value="<?php echo $edit['jam_hitung']; ?>"  name="jam_hitung" placeholder="Jam Mulai Perhitungan Suara">
					</div>
					<div class="form-group">
					  <label for="nama">Nama</label>
					  <input type="text" class="validate[required] form-control" value="<?php echo $edit['nama']; ?>"  name="nama" placeholder="Nama">
					</div>
					
					<div class="form-group">
					  <label for="nama">Nama Website</label>
					  <input type="text" class="validate[required] form-control" value="<?php echo $edit['nama_web']; ?>"  name="nama_web" placeholder="Nama Website">
					</div>
					<div class="form-group">
					  <label for="nama">Alamat</label>
					  <input type="text" class="validate[required] form-control" value="<?php echo $edit['alamat']; ?>"  name="alamat" placeholder="Kode Prodi">
					</div>
					<div class="form-group">
					  <label for="nama">Url</label>
					  <input type="text" class="form-control" value="<?php echo $edit['url']; ?>"  name="url" placeholder="Url ">
					</div>
					
					<div class="form-group">
					  <label for="nama">Twitter</label>
					  <input type="text" class="form-control" value="<?php echo $edit['twitter']; ?>"  name="twitter" placeholder="Twitter ">
					</div>
					<div class="form-group">
					  <label for="nama">Email</label>
					  <input type="text" class="validate[required,custom[email]] form-control" value="<?php echo $edit['email']; ?>"  name="email" placeholder="E-MAIL">
					</div>
					<div class="form-group">
					  <label for="nama">No. Telp</label>
					  <input type="text" class="form-control" value="<?php echo $edit['no_telp']; ?>"  name="no_telp" placeholder="NO. Telp  ">
					</div>
					<div class="form-group">
					  <label for="nama">No. WA</label>
					  <input type="text" class="validate[required] form-control" value="<?php echo $edit['no_wa']; ?>"  name="no_wa" placeholder="Format: +628888888888 ">
					</div>
					<div class="form-group">
					  <label for="nama">Lokasi</label>
					  <textarea type="text" class="form-control" rows="8"  name="lokasi" placeholder="lokasi"><?php echo $edit['lokasi']; ?></textarea>
					</div>
					
					<div class="form-group">
				
					 <label class="col-sm-2 control-label">Logo</label>
					  
					  
										
							<div class="btn btn-default btn-file" >
							 <input type="file"  name="images" onchange="readURLUser(this);" /> 
							<?php 
							if(empty($edit['logo'])){
							?>	
											<img id="preview_gambarUser" style="width: 135px; height: 135px" src="<?php echo base_url(); ?>images/logo/kosong.jpg"  />
							<?php } else { ?>				
										<img id="preview_gambarUser" style="width: 135px; height: 135px" src="<?php echo base_url(); ?>images/logo/<?php echo $edit['logo']; ?>"  />
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
<script type="text/javascript" src="<?php echo base_url() ?>asets/js/rupiah.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asets/js/jquery.js"></script>
<script>
			//gambar plank
			function readURLUser(input) { // Mulai membaca inputan gambar
			if (input.files && input.files[0]) {
			var reader = new FileReader(); // Membuat variabel reader untuk API FileReader
			 
			reader.onload = function (e) { // Mulai pembacaan file
			$('#preview_gambarUser') // Tampilkan gambar yang dibaca ke area id #preview_gambar
			.attr('src', e.target.result)
			.width(135); // Menentukan lebar gambar preview (dalam pixel)
			//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
			};
			 
			reader.readAsDataURL(input.files[0]);
			}
			}
</script>	


