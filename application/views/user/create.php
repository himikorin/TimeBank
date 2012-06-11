<div id="data" class="popup">
  <div id="main" role="main">

		<?php include Kohana::find_file('views', 'shared/accountinfo') ?>
		
		<div id="content">
			<h2>Create volunteer account</h2>
			<?= Form::open('user/create',array('style'=>'margin-top:20px')); ?>
				<p>
					<?= Form::label('email', 'Email Address'); ?>
                    <?= Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
                    <div class="error">
                        <?= Arr::get($errors, 'email'); ?>
                    </div>
                </p>
                
				<p>
					<?= Form::label('password', 'Password'); ?>
                    <?= Form::password('password'); ?>
                    <div class="error">
                        <?= Arr::path($errors, 'password'); ?>
                    </div>
                </p>
                
				<p>
					<?= Form::label('password_confirm', 'Confirm Password'); ?>
                    <?= Form::password('password_confirm'); ?>
                    <div class="error">
                        <?= Arr::path($errors, 'password_confirm'); ?>
                    </div>
                </p>

				<p><label></label><?= Form::submit('create', 'Create User'); ?></p>
			<?= Form::close(); ?>
<p>Or <?= HTML::anchor('user/login', 'login'); ?> if you have an account already.</p>
		</div>
		
  </div>
</div>