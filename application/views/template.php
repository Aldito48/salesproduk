<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

 <?php 
			$identitas = "SELECT * FROM tbl_identitas";
			$iden = $this->db->query($identitas)->result();
			foreach($iden as $id){
				
			}	
			?>
	 <title><?php echo $id->nama_web; ?></title>

  <link rel="stylesheet" href="<?php echo base_url(); ?>asets/lib/Hover/hover.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asets/lib/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asets/lib/weather-icons/css/weather-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asets/lib/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asets/lib/jquery-toggles/toggles-full.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asets/lib/morrisjs/morris.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>asets/css/quirk.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>asets/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asets/lib/select2/select2.css">

  <script src="<?php echo base_url(); ?>asets/lib/modernizr/modernizr.js"></script>
  <link href="<?php echo base_url() ?>asets/js/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <script src="../lib/respond/respond.src.js"></script>
  <![endif]-->
</head>

<body oncontextmenu='return false;' >

<header>
  <div class="headerpanel">

    <div class="logopanel">
      <h3 style="color:white">Sales Produk</h3>
    </div><!-- logopanel -->

    <div class="headerbar">
      <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

      <div class="header-right">
        <ul class="headermenu">
          
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-logged" data-toggle="dropdown">
                <img src="images/logo/logouinsu.png" alt="" />
                Admin
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu pull-right">
              
                <li><a href="<?php echo base_url() ?>Login/logout"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </div><!-- header-right -->
    </div><!-- headerbar -->
  </div><!-- header-->
</header>

<section>

  <div class="leftpanel">
    <div class="leftpanelinner">

      <!-- ################## LEFT PANEL PROFILE ################## -->

      <div class="media leftpanel-profile">
        <div class="media-left">
          <a href="#">
            <img src="<?php echo base_url() ?>asets/images/photos/logouinsu.png" alt="" class="media-object img-circle">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">
		  <?php 
		    $level=$this->session->userdata['id_user_level'];
			$user=$this->session->userdata['full_name'];
			$username=$this->session->userdata['username'];
			echo $user;
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('email',$username);
			$q_user=$this->db->get()->row_array();
		  ?> <a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"><i class="fa fa-angle-down"></i></a></h4>
		 
        </div>
      </div><!-- leftpanel-profile -->
      <?php if($level==1 or $level==2){ ?>
      <div class="leftpanel-userinfo collapse" id="loguserinfo">
       
	
		 <a href="<?php echo base_url(); ?>Login/logout"><h5 class="sidebar-title">Logout</h5></a>
      </div><!-- leftpanel-userinfo -->
	  <?php } else { ?>
      <div class="leftpanel-userinfo collapse" id="loguserinfo">
        
        <a href="<?php echo base_url(); ?>Login/logout"><h5 class="sidebar-title">Logout</h5></a>
        
      </div><!-- leftpanel-userinfo -->

	  <?php } ?>
      <div class="tab-content">

        <!-- ################# MAIN MENU ################### -->

        <div class="tab-pane active" id="mainmenu">
          <h5 class="sidebar-title">Menu Utama</h5>
         
    <ul class="nav nav-pills nav-stacked nav-quirk">
		  
			<?php
        // chek settingan tampilan menu
        $setting = $this->db->get_where('tbl_setting',array('id_setting'=>1))->row_array();
        if($setting['value']=='ya'){
            // cari level user
            $id_user_level = $this->session->userdata('id_user_level');
            $sql_menu = "SELECT * 
            FROM menu 
            WHERE id_menu in(select id_menu from hak_akses where id_user_level=$id_user_level) and is_main_menu=0 and is_aktif='y' order by urut asc";
        }else{
            $sql_menu = "select * from menu where is_aktif='y' and is_main_menu=0 order by urut asc";
        }

        $main_menu = $this->db->query($sql_menu)->result();
        
        foreach ($main_menu as $menu){
            // chek is have sub menu
            $this->db->where('is_main_menu',$menu->id_menu);
            $this->db->where('is_aktif','y');
			$this->db->order_by('urut','asc');
            $submenu = $this->db->get('menu');
			
            if($submenu->num_rows()>0){
				//foreach ($submenu->result() as $sub){}
				$this->db->SELECT('a.is_main_menu');
                $this->db->FROM('menu a');
				
                $this->db->where('a.url', $this->uri->segment(1));
				$this->db->order_by('urut','asc');
                $child = $this->db->get()->row();
             ?>
			 
			 <li class="nav-parent <?php if ($child->is_main_menu == $menu->id_menu ) { echo 'active'; } ?>"><a href=""><i class="<?php echo $menu->icon; ?>"></i> <span><?php echo $menu->title; ?></span></a>
              <ul class="children">
			  <?php 
			 
			  foreach ($submenu->result() as $subm){
			     $this->db->where('is_main_menu',$subm->id_menu);
				$this->db->where('is_aktif','y');
				$this->db->order_by('urut','asc');
				$submenu_n = $this->db->get('menu');
				if($submenu_n->num_rows()>0){
					$this->db->SELECT('a.is_main_menu');
                $this->db->FROM('menu a');
				
                $this->db->where('a.url', $this->uri->segment(1));
				$this->db->order_by('urut','asc');
                $child2 = $this->db->get()->row();
				
                           ?>
						   
				<li class="nav-parent <?php if ($child2->is_main_menu == $subm->id_menu) { echo 'active'; } ?>"><a href=""><span><?php echo ucwords($subm->title) ?></span></a>
								  <ul class="nav-parent">
								   <?php foreach ($submenu_n->result() as $submn){ ?>
									<li <?php if($this->uri->segment(1)==$submn->url){ echo "class='active'";}?>><a href="<?php echo $submn->url; ?>"><?php echo ucwords($submn->title) ?></a></li>
									 <?php } ?>	
								  </ul>
								</li>	
				
				<?php } else { ?>
				
                <li <?php if($this->uri->segment(1)==$subm->url){ echo "class='active'";}?>><a href="<?php echo base_url($subm->url); ?>"><?php echo ucwords($subm->title) ?></a></li>
				
				<?php } ?>
							  
						  
				<?php } ?>
              </ul>
			  
            </li>
					
			
		<?php 		
            }else{
                // display main menu
			?>
			
			<li <?php if($this->uri->segment(1)==$menu->url){ echo "class='active'"; }	?>><a href="<?php echo base_url($menu->url); ?>"><i class="<?php echo $menu->icon; ?>"></i> <span><?php echo $menu->title; ?></span></a></li>		
        <?php        
               
               
            }
        }
        ?>
			
			
		</ul>
        </div><!-- tab-pane -->	
      </div><!-- tab-content -->
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

  <div class="mainpanel">

    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->

    <div class="contentpanel" >

      <div class="row">
        <?php echo $contents; 

		?>
       
      </div><!-- row -->
    </div><!-- contentpanel -->
  </div><!-- mainpanel -->
</section>

<script src="<?php echo base_url(); ?>asets/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/jquery-toggles/toggles.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/morrisjs/morris.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/raphael/raphael.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/flot/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/flot-spline/jquery.flot.spline.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/jquery-knob/jquery.knob.js"></script>
<script src="<?php echo base_url(); ?>asets/js/quirk.js"></script>
<script src="<?php echo base_url(); ?>asets/js/dashboard.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>asets/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>


<script>
$(document).ready(function() {

  'use strict';

  $('#dataTable1').DataTable();

  var exRowTable = $('#exRowTable').DataTable({
    responsive: true,
    'fnDrawCallback': function(oSettings) {
      $('#exRowTable_paginate ul').addClass('pagination-active-success');
    },
    'ajax': 'ajax/objects.txt',
    'columns': [{
      'class': 'details-control',
      'orderable': false,
      'data': null,
      'defaultContent': ''
    },
    { 'data': 'name' },
    { 'data': 'position' },
    { 'data': 'office' },
    { 'data': 'start_date'},
    { 'data': 'salary' }
    ],
    'order': [[1, 'asc']]
  });

  // Add event listener for opening and closing details
  $('#exRowTable tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = exRowTable.row( tr );

    if ( row.child.isShown() ) {
      // This row is already open - close it
      row.child.hide();
      tr.removeClass('shown');
    } else {
      // Open this row
      row.child( format(row.data()) ).show();
      tr.addClass('shown');
    }
  });

  function format (d) {
    // `d` is the original data object for the row
    return '<h4>'+d.name+'<small>'+d.position+'</small></h4>'+
    '<p class="nomargin">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
  }

});
</script>

<script src="<?php echo base_url(); ?>asets/lib/jquery-validate/jquery.validate.js"></script>

<script src="<?php echo base_url(); ?>asets/lib/select2/select2.js"></script>
<script>
$(document).ready(function(){

  'use strict';

  // Basic Form
  $('#basicForm').validate({
    highlight: function(element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      $(element).closest('.form-group').removeClass('has-error');
    }
  });

  // Error Message In One Container
  $('#basicForm2').validate({
	 errorLabelContainer: jQuery('#basicForm2 div.error')
  });

  // With Checkboxes and Radio Buttons
  $('#basicForm3').validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });

  // Validation with select boxes
  $('#basicForm4').validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });

  $('.select2').select2();


});
</script>	
<script type="text/javascript" src="<?php echo base_url() ?>asets/js/plugins/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asets/js/plugins/sweetalert.min.js"></script>
<script type="text/javascript">
      $('.lanjut').on('click',function(e){
			e.preventDefault();
			var form = $(this).parents('form');
			swal({
				title: "Apakah Anda Yakin?",
				text: "Data Akan di Verifikasi!",
				type: "success",
				showCancelButton: true,
				confirmButtonColor: "#4CAF50",
				confirmButtonText: "Ya, Lanjut",
				closeOnConfirm: false
			}, function(isConfirm){
				if (isConfirm) form.submit();
			});
		});
		
		$('.kirim').on('click',function(e){
			e.preventDefault();
			var form = $(this).parents('form');
			swal({
				title: "Apakah Anda Yakin?",
				text: "Data Akan Di Kirim dan Tidak Bisa Diedit Kembali!",
				type: "success",
				showCancelButton: true,
				confirmButtonColor: "#4CAF50",
				confirmButtonText: "Ya, Kirim",
				closeOnConfirm: false
			}, function(isConfirm){
				if (isConfirm) form.submit();
			});
		});
		$('.terima').on('click',function(e){
			e.preventDefault();
			var form = $(this).parents('form');
			swal({
				title: "Apakah Anda Yakin?",
				text: "Data Akan DiVerifikasi!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#4CAF50",
				confirmButtonText: "Ya, Terima",
				closeOnConfirm: false
			}, function(isConfirm){
				if (isConfirm) form.submit();
			});
		});
        $('.tolak').on('click',function(e){
			e.preventDefault();
			var form = $(this).parents('form');
			swal({
				title: "Apakah Anda Yakin?",
				text: "Data Akan Ditolak!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Ya, Tolak",
				closeOnConfirm: false
			}, function(isConfirm){
				if (isConfirm) form.submit();
			});
		});
		
		$('.hapus').on('click',function(e){
			e.preventDefault();
			var form = $(this).parents('form');
			swal({
				title: "Apakah Anda Yakin?",
				text: "Data Akan Dihapus!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Ya, Hapus",
				closeOnConfirm: false
			}, function(isConfirm){
				if (isConfirm) form.submit();
			});
		});
		$('.batalkan').on('click',function(e){
			e.preventDefault();
			var form = $(this).parents('form');
			swal({
				title: "Apakah Anda Yakin?",
				text: "Data Akan dibatalkan!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Ya, Batalkan",
				closeOnConfirm: false
			}, function(isConfirm){
				if (isConfirm) form.submit();
			});
		});

	 
      $('.batal_kan').click(function(e){
			var href = $(this).attr('href');
        	swal({
        		title: "Apakah Anda Yakin?",
        		text: "Akan Menghapus Data Ini",
        		type: "warning",
        		showCancelButton: true,
        		confirmButtonColor: '#DD6B55',
        		confirmButtonText: 'Ya Hapus',
        		cancelButtonText: "Tidak",
        		closeOnConfirm: true,
        		closeOnCancel: true
        	},
        	function(isConfirm){
            if (isConfirm){
              window.location.href = href;
			  }
			  swal("");
        	});
			return false;
        });
    </script>
<script src="<?php echo base_url() ?>asets/js/uang.js"></script>
</body>
</html>
