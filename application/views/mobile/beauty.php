<h2>Date de perfecte nerd</h2>
<p>De Bolk koppelt jou aan de nerd van je dromen! 
	maar daar hebben we wel wat informatie voor nodig:</p>

<?php echo Form::open(Route::url('register')); ?>
	<?php echo Form::hidden('sex', Model_Person::SEX_BEAUTY); ?>
	
	<h3>Jouw naam</h3>
	<p>
		<?php echo Form::input('name', Arr::get($_POST, 'name')); ?>
	</p>

	<h3>Over jou</h3>
	<p>
		<label class="select" for="hair">Haarkleur</label>
		<select name="hair" id="hair" data-native-menu="true">
			<option value="<?php echo Model_Person::HAIR_BLACK; ?>">Zwart</option>
			<option value="<?php echo Model_Person::HAIR_BROWN; ?>" selected>Bruin</option>
			<option value="<?php echo Model_Person::HAIR_RED; ?>">Rood</option>
			<option value="<?php echo Model_Person::HAIR_BLONDE; ?>">Blond</option>
		</select>
	</p>
	<p>
		<label class="select" for="boobs">Cupmaat</label>
		<select name="boobs" id="boobs" data-native-menu="true">
			<option value="<?php echo Model_Person::BOOBS_AA; ?>">AA</option>
			<option value="<?php echo Model_Person::BOOBS_A; ?>">A</option>
			<option value="<?php echo Model_Person::BOOBS_B; ?>" selected>B</option>
			<option value="<?php echo Model_Person::BOOBS_C; ?>">C</option>
			<option value="<?php echo Model_Person::BOOBS_D; ?>">D</option>
			<option value="<?php echo Model_Person::BOOBS_DD; ?>">DD</option>
		</select>
	</p>
	
	<h3>Over hem</h3>
	<p>
		<label class="label" for="shower">Doucht minimaal per week</label>
		<input type="range" name="shower" id="shower" value="1" min="0" max="10" data-highlight="true" />
	</p>
	<p>
		<label class="label" for="glasses">Heeft een bril</label>
		<select name="glasses" id="glasses" data-role="slider">
			<option value="0">Nee</option>
			<option value="1" selected="selected">Ja</option>
		</select> 
	</p>

	<h3>Matchen</h3>
	<p>
		<?php echo Form::submit('', 'Zoek mijn ideale nerd!'); ?>
	</p>
<?php echo Form::close(); ?>