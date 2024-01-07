<div class="contentpanel">

      <div class="row">
	  <form id="basicForm" method="POST" action="<?php echo base_url(); ?>Mstproduk/simpan" class="form-horizontal">
	  
      <div class="col-sm-6">
          <div class="panel">
              <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Tambah Data Produk</h4>
              </div>

              <div class="panel-body">
                <hr>
                
          <div class="form-group">
                    <label class="col-sm-3 control-label">Code <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="code" class="form-control" placeholder="Code" title="Code Harus Di isi" required />
                    </div>
                  </div>

          <div class="form-group">
                    <label class="col-sm-3 control-label">Description<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="description" class="form-control" placeholder="description" title="Description Harus Di isi"required />
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label class="col-sm-3 control-label">MOQ<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="moq" class="form-control" placeholder="Jurusan" title="Jurusan Harus Di isi" required />
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label class="col-sm-3 control-label">Category PID<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="categorypid" class="form-control" placeholder="Category PID" title="Category PID Harus Di isi" required />
                    </div>
                  </div>

				  <div class="form-group">
                    <label class="col-sm-3 control-label">Hierarchy<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="hierarchy" class="form-control" placeholder="Hierarchy" title="Hierarchy Harus Di isi" required />
                    </div>
                   </div>
				   
				  <div class="form-group">
                    <label class="col-sm-3 control-label">Material Group<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="materialgroup" class="form-control" placeholder="Material Group" title="Material Group Harus Di isi"  required />
                    </div>
                   </div>
				   
				  <div class="form-group">
                    <label class="col-sm-3 control-label">DIV<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="text" name="datadiv" class="form-control" placeholder="DIV" title="DIV Harus Di isi" required />
                    </div>
                   </div>
			
					<div class="form-group">
                    <label class="col-sm-3 control-label">Type PID<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="typepid" class="form-control" placeholder="Type PID" title="Type PID Harus Di isi" required />
                    </div>
                   </div>

          <div class="form-group">
                    <label class="col-sm-3 control-label">Last Price (sales) Before PPN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="text" name="lastpricebfppn" class="form-control" placeholder="Last Price (sales) Before PPN" title="Last Price (sales) Before PPN Harus Di isi" required />
                    </div>
                   </div>

          <div class="form-group">
                    <label class="col-sm-3 control-label">New Price (sales) Before PPN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                    <input type="text" name="newpricebfppn" class="form-control" placeholder="New Price (sales) Before PPN" title="New Price (sales) Before PPN Harus Di isi" required />
                    </div>
                   </div>

          <div class="form-group">
                    <label class="col-sm-3 control-label">Last Discount (%)<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="lastdiscount" class="form-control" placeholder="Last Discount (%)" title="Last Discount Harus Di isi" required />
                    </div>
                   </div>

          <div class="form-group">
                    <label class="col-sm-3 control-label">New Discount (%)<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="newdiscount" class="form-control" placeholder="New Discount (%)" title="New Discount Harus Di isi" required />
                    </div>
                   </div>
				   
                  <hr>
				  
				    <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button type="submit" name="simpan" class="btn btn-success btn-quirk btn-wide mr5"><i class="fa fa-save"></i> Simpan</button>
                      <a href="<?php echo base_url() ?>Mstproduk" class="btn btn-quirk btn-wide btn-danger"><i class="fa fa-close"></i> Kembali</a>
                    </div>
                  </div>
			 	  
              </div><!-- panel-body -->
          </div><!-- panel -->
      </div>
		
		  <div class="col-sm-6">
          <div class="panel">
            <div class="panel-body">
			
				  <div class="form-group">
                    <label class="col-sm-3 control-label">PPN<span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                     <input type="text" name="ppn" class="form-control" placeholder="PPN" title="PPN Harus Di isi" required />
                    </div>
                  </div>
			
          <div class="form-group">
                  <label class="col-sm-3 control-label">Buy Price Before PPN<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="buypricebfppn" placeholder="Buy Price Before PPN"  title="Buy Price Before PPN Harus Di isi" required>
                  </div>     
			          </div>
			  
			    <div class="form-group">
			            <label class="col-sm-3 control-label">Buy Price After PPN<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="buypriceafppn" placeholder="Buy Price After PPN" title="Buy Price After PPN Harus Di isi" required>
                  </div>
                </div>
			  
			    <div class="form-group">
			            <label class="col-sm-3 control-label">Sale Price After PPN<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="salepriceafppn" placeholder="Sale Price After PPN" title="Sale Price After PPN Harus Di isi" required>
                  </div>
                </div>
			  
			    <div class="form-group">
			            <label class="col-sm-3 control-label">Kode Sub Kategori<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="subkat" placeholder="Kode Sub Kategori" title="Kode Sub Kategori Harus Di isi" required>
                  </div>
                </div>
			  
			    <div class="form-group">
			            <label class="col-sm-3 control-label">Nama Sub Kategori<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="namasubkat" placeholder="Nama Sub Kategori" title="Nama Sub Kategori Harus Di isi" required>
                  </div>
                </div>
			  
			    <div class="form-group">
			            <label class="col-sm-3 control-label">Kode Kategori<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kat" placeholder="Kode Kategori" title="Kode Kategori Harus Di isi" required>
                  </div>
                </div>
			  
			    <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Kategori<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="namakat" placeholder="Nama Kategori" title="Nama Kategori Harus Di isi" required>
                  </div>
                </div>
			  
          <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Departement<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dept" placeholder="Kode Departement" title="Kode Departement Harus Di isi"required>
                  </div>
                </div>

          <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Departement<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="namadept" placeholder="Nama Departement" title="Nama Departement Harus Di isi"required>
                  </div>
                </div>

          <div class="form-group">
                  <label class="col-sm-3 control-label">Kode Divisi<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="divisi" placeholder="Kode Divisi" title="Kode Divisi Harus Di isi"required>
                  </div>
                </div>

          <div class="form-group">
			            <label class="col-sm-3 control-label">Nama Divisi<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="namadivisi" placeholder="Nama Divisi" title="Nama Divisi Harus Di isi"required>
                  </div>
                </div>
			  
			    <div class="form-group">
                  <label class="col-sm-3 control-label">Tax<span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <select class="form-control" name="tax" required>
                      <option disabled selected style="display: none;" value="">Pilih</option>
                      <option>Y</option>
                      <option>N</option>
                    </select>
                  </div>
                </div>
			  
            </div>
          </div>
		  </div>
		
      </div><!--row -->
	 </form>
    </div><!-- contentpanel -->
	
	 


	

	

