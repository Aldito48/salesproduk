<div class="content-wrapper">

    <section class="content">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">UPDATE DATA USER</h3>
            </div>
            <form action="<?php echo base_url(); ?>User/edit" id="popup-validation" method="post" enctype="multipart/form-data">
			
            
            <!-- /.box-header -->
            <!-- form start -->
           <div class="row">
        
			
             <input type="hidden" class="form-control" value="<?php echo $edit['id_users']; ?>" name="id_users">
			  <div class="col-md-8">
			   <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="validate[required] form-control" value="<?php echo $edit['full_name']; ?>" name="full_name" placeholder="Nama Lengkap">
                </div>
				 <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="validate[required] form-control" value="<?php echo $edit['username']; ?>" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="validate[required] form-control" value="<?php echo $edit['username']; ?>" name="password" placeholder="Password">
                </div>
				<div class="form-group">
					<label>Level User</label>
					<select class="validate[required] form-control select2" name="level_user" style="width: 100%;">
					<?php foreach($join as $j){  ?>
					  <option value="<?php echo $j->id_user_level; ?>"><?php echo $j->nama_level; ?></option>
					<?php } ?>
					  <?php foreach($level as $l){  ?>
					  <option value="<?php echo $l->id_user_level; ?>"><?php echo $l->nama_level; ?></option>
					  <?php } ?>
					  
					</select>
				</div>
				<div class="form-group">
					<label>Status Aktif</label>
					<select class="validate[required] form-control select2" name="is_aktif" style="width: 100%;">
					  <option><?php echo $edit['is_aktif']; ?></option>
					  <option value="y">Ya</option>
					  <option value="n">Tidak</option>
					  
					</select>
				</div>
				<button type="submit" name="edit" class="btn btn-primary left"><i class="fa fa-save"></i> Simpan</button>
				<a href="<?php echo base_url() ?>User" class="btn btn-danger"><i class="fa fa-close"></i> Batal</a>
				</div>
				</div>
				<div class="col-md-4">	
				<div class="box-body">	
                <div class="form-group">
				
                 <label class="col-sm-4 control-label">Foto</label>
                  
				  <?php
				  $level= $edit['id_user_level'];
				  if ($level==4){	
				  ?>
									
						<div class="btn btn-default btn-file" >
						 <input type="file" disabled  name="images" onchange="readURLUser2(this);" /> 
						 <?php
									$fotouser=$edit['images'];
									if(empty($fotouser)){
										?>
										<img id="preview_gambarUser2" style="width: 125px; height: 125px" src="<?php echo base_url(); ?>assets/foto_profil/kosong.jpg"  />
									<?php	
									} else {	
									?>
									 <img id="preview_gambarUser2" src="<?php echo base_url() . 'assets/foto_profil/', $edit['images'] ?>" style="width: 125px; height: 125px">
									 <?php } ?>
						 </div>
				  <?php } else { ?>
				  <div class="btn btn-default btn-file" >
						 <input type="file"   name="images" onchange="readURLUser2(this);" /> 
						 <?php
									$fotouser=$edit['images'];
									if(empty($fotouser)){
										?>
										<img id="preview_gambarUser2" style="width: 125px; height: 125px" src="<?php echo base_url(); ?>asets/foto_profil/kosong.jpg"  />
									<?php	
									} else {	
									?>
									 <img id="preview_gambarUser2" src="<?php echo base_url() . 'images/foto_user/', $edit['images'] ?>" style="width: 125px; height: 125px">
									 
									 <?php } ?>
						 </div>
				  <?php } ?>	 
                  
                </div>
				</div>
				</div>
                
             
			  
			 
              <!-- /.box-body -->
			
	
			
              
           
          
            </div>    
		 </form>		
		</div>
	</section>
</div>

<script>
			//gambar plank
			function readURLUser2(input) { // Mulai membaca inputan gambar
			if (input.files && input.files[0]) {
			var reader = new FileReader(); // Membuat variabel reader untuk API FileReader
			 
			reader.onload = function (e) { // Mulai pembacaan file
			$('#preview_gambarUser2') // Tampilkan gambar yang dibaca ke area id #preview_gambar
			.attr('src', e.target.result)
			.width(125); // Menentukan lebar gambar preview (dalam pixel)
			//.height(200); // Jika ingin menentukan lebar gambar silahkan aktifkan perintah pada baris ini
			};
			 
			reader.readAsDataURL(input.files[0]);
			}
			}
</script>			
