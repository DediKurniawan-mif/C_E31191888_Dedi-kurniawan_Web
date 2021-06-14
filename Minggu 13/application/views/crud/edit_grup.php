<div class="row">
	<div class="col-lg-7">
		<div class="p-5">
			<div class="text-center">
				<h1 class="h4 text-gray-900 mb-4">Edit Grup</h1>
			</div>
			<?php foreach($grup as $baris){ ?>
			<form class="user" action="<?php echo base_url('Grup/update');?>" method="post">
				<div class="form-group">
					<input type="hidden" name="id" value="<?php echo $baris->id_grup; ?>">
					<input type="text" class="form-control form-control-user" id="grup" name="grup" value="<?php echo $baris->grup; ?>" require>
				</div>
				<input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Update" style="padding: 5px;">
			</form>
			<?php } ?>
			<hr>
			<div class="text-center">
				<a class="small" href="<?php echo base_url('Grup')?>">Kembali</a>
			</div>
		</div>
	</div>
</div>