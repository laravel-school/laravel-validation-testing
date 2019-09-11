<?php 

require('vendor/autoload.php');

use Rakit\Validation\Validator;

class FormValidation
{
	public function FunctionName()
	{
		$data = [
			'name' => 'This is my name',
			'cell' => '01928382938'
		];

		$rules = [
			'name' => 'required',
			'cell' => 'required'
		];

		$validator = new Validator;

		// make it
		$validation = $validator->make($data, [
		    'name'                  => 'required',
		    'cell'                 	=> 'required|email'
		]);

		$validation->validate();

		if ($validation->fails()) {
	    	// handling errors
	    	$errors = $validation->errors();
		    echo "<pre>";
		    print_r($errors->firstOfAll());
		    echo "</pre>";
		    exit;
		} else {
			// Success.
		}

		var_dump($validation->errors());
	}
}

return (new FormValidation())->FunctionName();

