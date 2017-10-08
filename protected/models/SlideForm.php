<?php

class SlideForm extends CFormModel
{
    public $code;
    public $file_name;
	public $is_enabled;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array( 'code', 'required' ),
			array( 'code, file_name', 'length', 'max' => 128 ),
			array( 'is_enabled', 'numerical', 'integerOnly' => true ),
			// verifyCode needs to be entered correctly
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array();
	}
}