<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">

        <li class="header">Menu</li>
	        <li class="<?php if( isset($pgPainel) && $pgPainel != NULL){ echo"active";} ?>">
	        	<a href="<?= base_url(); ?>painel"><i class="fa fa-dashboard"></i> <span>Painel</span></a>
	        </li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $titulo; ?>
        <small><?php if( isset($descricao) ){ echo $descricao; } ?></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">