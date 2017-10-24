<section id="lawyer_signup_section">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1 class="title-header light_font">Find a Lawyer</h1>
		</div>
	</div>
</section>

<div class="module-header">
	<label class="">Field of Law</label>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="content">
			<p>Please choose Field of Law</p>

			<div>
				<?php foreach ($categories as $category) {
					echo '<a href="'.site_url('jobs/find/category/'.$category->id).'" class="field text-center"><i class="fa  fa-balance-scale"></i> <br>'.$category->name.'</a>';
				}
				?>
			</div>
		</div>
	</div>
</div>