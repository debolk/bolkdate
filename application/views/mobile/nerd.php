<h2>Date de perfecte beauty</h2>
<p>De Bolk koppelt jou aan de beauty van je dromen! 
	maar daar hebben we wel wat informatie voor nodig:</p>

<?php echo Form::open(Route::url('register')); ?>
	<?php echo Form::hidden('sex', Model_Person::SEX_NERD); ?>

	<h3>Jouw naam</h3>
	<p>
		<?php echo Form::input('name', Arr::get($_POST, 'name')); ?>
	</p>

	<h3>Over jou</h3>
	<?php echo View::factory('mobile/_form/nerd'); ?>
	
	<h3>Over haar</h3>
	<?php echo View::factory('mobile/_form/beauty'); ?>

	<h3>Matchen</h3>
	<p>
		<?php echo Form::submit('', 'Zoek mijn ideale beauty!'); ?>
	</p>
<?php echo Form::close(); ?>