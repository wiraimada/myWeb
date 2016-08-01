<nav>
	<ul id="MenuBar1" class="MenuBarHorizontal">
		<li><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
		<li><a href="<?php echo base_url(); ?>admin/artikel" class="MenuBarItemSubmenu">Artikel</a>
			<ul>
				<li><a href="<?php echo base_url(); ?>admin/artikel">Data Artikel</a></li>
				<li><a href="<?php echo base_url(); ?>admin/artikel/tambah">Tambah Artikel</a></li>
			</ul>
		</li>
		<li><a href="<?php echo base_url(); ?>admin/user" class="MenuBarItemSubmenu">User</a>
			<ul>
				<li><a href="<?php echo base_url(); ?>admin/user">Data User</a></li>
				<li><a href="<?php echo base_url(); ?>admin/user/tambah">Tambah User</a></li>
			</ul>	
		</li>
		<li><a href="<?php echo base_url(); ?>admin/dashboard/config">Konfigurasi</a></li>
	</ul>
</nav>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<!-- End Nav -->