<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h1>Find a Lawyer <small></small></h1>
		</div>

		<div class="content">

			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php 
						if($category) echo ($category->user_label)?$category->user_label:$category->name ?>
					</div>
					<div class="panel-body">
						<?php 
						if($options && count($options)>0)
						{
							foreach ($options as $option) {
								echo '<a href="'.site_url('jobs/find/select_next_options/'.$option->id).'" class="field field_options text-left">'.$option->name.'</a>';
							}
						}
						else{
							redirect(site_url('jobs/questions'));
						}

						?>
					</div>
				</div>

				<div>
					<a href="<?php echo site_url('jobs/find/category/'.$this->session->selected_category); ?>" class="btn btn-warning">Go Back</a>
				</div>

			</div>
		</div>
	</div>
</div>