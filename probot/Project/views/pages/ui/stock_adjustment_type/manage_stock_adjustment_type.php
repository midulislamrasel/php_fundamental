<?php
if(isset($_POST["btnDelete"])){
	$stock_adjustment_type_id=$_POST["txtId"];
	Stock_adjustment_type::delete($stock_adjustment_type_id);}
?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Stock_adjustment_type</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Stock_adjustment_type</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">     
     <div class="card">
      <div class='card-header'>
				<a href='create-stock-adjustment-type' class='btn btn-success'>New Stock_adjustment_type</a>
			</div>
				<div class='card-body'>
		<?php
			echo Stock_adjustment_type::manage_stock_adjustment_types();
		?>
			</div>
    <div class="card-footer">
      &nbsp;
    </div>
</div>

</section>
    <!-- /.content -->