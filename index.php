<?php 

// include "vendor/autoload.php";

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

		var_dump($data);
	}
}

return (new FormValidation())->FunctionName();

