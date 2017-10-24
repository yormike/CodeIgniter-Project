<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav active"><a href="#fee_setting" data-toggle="tab">Fee Settings</a></li>
        <li class="nav"><a href="#system_setting" data-toggle="tab">System Settings</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="fee_setting">
        		<div class="page-header">
        			<h2>Update Fee Settings</h2>
        		</div>
        		<?php if(!empty($messages)) { ?>
					<div class="col-md-12">
						<div class="alert alert-success" role="alert"><?php echo $messages; ?></div>
					</div>
				<?php } ?>
        		<div class="col-md-12">
		        	<?php echo form_open('admin/fee_settings', array('class' => 'form-horizontal'));  ?>
						<div class="form-group">
						    <label for="monthly_fee">Monthly Fee</label>
						    <input type="text" class="form-control" name="monthly_fee" id="monthly_fee" placeholder="Monthly Fee" value="<?php echo (isset($fee_settings->monthly_fee)) ? $fee_settings->monthly_fee : ""; ?>">
						</div>
						<div class="form-group">
						    <label for="percentage_fee">Job Percentage Fee</label>
						    <input type="text" class="form-control" name="percentage_fee" id="percentage_fee" placeholder="Job Percentage Fee" value="<?php echo (isset($fee_settings->percentage_fee)) ? $fee_settings->percentage_fee : ""; ?>">
						</div>
						<div class="form-group">
						    <label for="signup_fee">Initial Signup Fee</label>
						    <input type="text" class="form-control" name="signup_fee" id="signup_fee" placeholder="Initial Signup Fee" value="<?php echo (isset($fee_settings->signup_fee)) ? $fee_settings->signup_fee : ""; ?>">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
        </div>
        <div class="tab-pane fade" id="system_setting">System Setting Content</div>
    </div>
</div>