<h2>Date de perfecte nerd</h2>
<p>De Bolk koppelt jou aan de man van je dromen! 
	maar daar hebben we wel wat informatie voor nodig</p>

<?php echo Form::open(Route::url('match')); ?>
	<h3>Over jou</h3>
	<?php echo Form::hidden('type','beauty'); ?>
	<p>
		<label class="label" for="name">Pseudoniem</label>
		<?php echo Form::input('name', Arr::get($_POST, 'name')); ?>
	</p>
	<p>
		<label class="label" for="hair">Haarkleur</label>
		<?php echo Form::select('hair', array('red' => 'Rood', 'black' => 'Zwart', 'brown' => 'Bruin', 'blonde' => 'Blond'), Arr::get($_POST, 'hair')); ?>
	</p>
	<p>
		<fieldset data-role="controlgroup">
			<legend>Cupmaat</legend>
		     	<input type="radio" name="bra" id="bra-AA" value="AA" />
		     	<label for="bra-AA">AA</label>

		     	<input type="radio" name="bra" id="bra-A" value="A" />
		     	<label for="bra-A">A</label>

		     	<input type="radio" name="bra" id="bra-B" value="B" />
		     	<label for="bra-B">B</label>

		     	<input type="radio" name="bra" id="bra-C" value="C" />
		     	<label for="bra-C">C</label>

		     	<input type="radio" name="bra" id="bra-D" value="D" />
		     	<label for="bra-D">D+</label>
		</fieldset>
	</p>
	
	<h3>Over hem</h3>
	<p>
		<label class="label" for="shower">Douche minimaal per week</label>
		<input type="range" name="shower" id="shower" value="1" min="0" max="10" />
	</p>
	<p>
		<label class="label" for="diablo">Speelt Diablo III</label>
		<select name="diablo" id="diablo" data-role="slider">
			<option value="0">Nee</option>
			<option value="1">Ja</option>
		</select> 
	</p>

	<h3>Matchen</h3>
	<p>
		<?php echo Form::submit('', 'Zoek mijn ideale nerd!'); ?>
	</p>
<?php echo Form::close(); ?>