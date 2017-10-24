<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h1>Find a Lawyer <small></small></h1>
		</div>

		<div class="content">
			<h4><?php echo $category->name; ?> Questionaire</h4>

			<div class="col-md-4">
				<?php foreach ($sub_categories as $category) {
					echo '<a href="'.site_url('jobs/find/select_options/'.$category->id).'" class="field field_options text-center">'.$category->name.'</a>';
				}
				?>

				<br>
				<div>
				<a href="<?php echo site_url('jobs/find'); ?>" class="btn btn-warning">Go Back</a>
			</div>
			</div>
		</div>
	</div>
</div>