<!DOCTYPE html>
<html lang="ja">
<?php echo $this->view( 'shared/head' ) ?>

  <body>

<?php //echo $this->view( 'shared/header' ) ?>

    <div class="container">
	  <?php echo form_open('login/login_exe', array('class'=>'form-horizontal')) ?>
	  <fieldset>
	  <div class="control-group">
		  <?php echo form_label('username: ', 'username', array('class'=>'control-label'))?>
		  <div class="controls">
			  <?php $data = array('name' => 'username', 'id' => 'username', 'size' => '25', 'class' => 'input-file') ?>
			  <?php echo form_input($data)?>
		  </div>
	  </div>

	  <div class="control-group">
		  <?php echo form_label('password: ', 'password', array('class'=>'control-label') ) ?>
		  <div class="controls">
			  <?php $data = array('type' => 'password', 'name' => 'password', 'id' => 'password', 'size' => '25') ?>
			  <?php echo form_input($data) ?>
		  </div>
	  </div>

	  <div class="form-actions">
	  <?php echo form_submit('submit', 'login' ," class='btn' " ) ?>
	  </div>
	  </fieldset>
	  <?php echo form_close() ?>

    </div> <!-- /container -->
  </body>
</html>

