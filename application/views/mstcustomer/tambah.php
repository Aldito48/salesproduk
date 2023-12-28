<div class="contentpanel">

      <div class="row">
	  <form id="basicForm" method="POST" action="<?php echo base_url(); ?>Mstcustomer/simpan" class="form-horizontal">
	  
         <div class="col-sm-6">
          <div class="panel">
              <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Tambah Data Customer</h4>
              </div>

              <div class="panel-body">
                <hr>
                
            <div class="form-group">
                    <label class="col-sm-3 control-label">Tahun <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="number" name="tahun" class="form-control" placeholder="Tahun" title="Tahun Harus Diisi" required />
                    </div>
                  </div>

           <div class="form-group">
                    <label class="col-sm-3 control-label">Tgl.Kembali<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="date" name="tglkembali" class="form-control" placeholder="Tanggal Kembali" title="Tanggal Kembali Harus Diisi" required />
                    </div>
                  </div>
				  
				    <div class="form-group">
                    <label class="col-sm-3 control-label">Type Vespa<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="typevesva" class="form-control" placeholder="Type Vespa" title="Type Vespa Harus Diisi" required />
                    </div>
                  </div>
				  
				    <div class="form-group">
                    <label class="col-sm-3 control-label">No. VIN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="novin" class="form-control" placeholder="Nomor VIN" title="Nomor VIN Harus Diisi" required />
                    </div>
                  </div>

				    <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Customer<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="nama" class="form-control" placeholder="Nama Customer" title="Nama Customer Harus Diisi" required />
                    </div>
                   </div>
				   
				    <div class="form-group">
                    <label class="col-sm-3 control-label">Gender<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="gender" class="form-control" placeholder="Gender" title="Gender Harus Diisi"  required />
                    </div>
                   </div>          
				   
                  <hr>
				  
				    <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button type="submit" name="simpan" class="btn btn-success btn-quirk btn-wide mr5"><i class="fa fa-save"></i> Simpan</button>
                      <a href="<?php echo base_url() ?>Mstcustomer" class="btn btn-quirk btn-wide btn-danger"><i class="fa fa-close"></i> Kembali</a>
                    </div>
                  </div>
			 	  
              </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->
		
		<div class="col-sm-6">
          <div class="panel">
            <div class="panel-body">
			
          <div class="form-group">
                    <label class="col-sm-3 control-label">Tgl.Lahir<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="date" name="tgllahir" class="form-control" placeholder="Tanggal Lahir" title="Tanggal Lahir Harus Diisi" required />
                    </div>
                   </div>
			
          <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="alamat" class="form-control" placeholder="Alamat" title="Alamat Harus Diisi" required />
                    </div>
                   </div>
			
          <div class="form-group">
                    <label class="col-sm-3 control-label">Kelurahan<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" title="Kelurahan Harus Diisi" required />
                    </div>
                   </div>
			  
          <div class="form-group">
                    <label class="col-sm-3 control-label">Kecamatan<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" title="Kecamatan Harus Diisi" required />
                    </div>
                   </div>
			  
          <div class="form-group">
                    <label class="col-sm-3 control-label">Kab/Kota<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="kota" class="form-control" placeholder="Kabupaten atau Kota" title="Kabupaten atau Kota Harus Diisi" required />
                    </div>
                   </div>

          <div class="form-group">
                    <label class="col-sm-3 control-label">Provinsi<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" title="Provinsi Harus Diisi" required />
                    </div>
                   </div>
			  
          <div class="form-group">
                    <label class="col-sm-3 control-label">Kode Pos<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="kodepos" class="form-control" placeholder="Kode Pos" title="Kode Pos Harus Diisi" required />
                    </div>
                   </div>
			  
          <div class="form-group">
                    <label class="col-sm-3 control-label">Email<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="email" name="email" class="form-control" placeholder="Email" title="Email Harus Diisi" required />
                    </div>
                   </div>
			  
            </div>
          </div>
		</div>
		
      </div><!--row -->
	 </form>
    </div><!-- contentpanel -->
	
	 


	

	

