<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View System_log</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View System_log</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">     
     <div class="card">
      				<div class='card-body'>
		<?php
			echo System_log::get_system_logs();
		?>
			</div>
    <div class="card-footer">
      &nbsp;
    </div>
</div>

</section>
    <!-- /.content -->