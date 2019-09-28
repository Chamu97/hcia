<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<br>
		<?php foreach ($errors as $error) : ?>
			<?php echo $error ?><br><br>
		<?php endforeach ?>
	</div>
<?php  endif ?>
