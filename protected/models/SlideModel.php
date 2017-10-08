<?php

/**
 * The followings are the available columns in table 'itt_page':
 * @property integer $id
 * @property string $code
 * @property string $file_name
 * @property boolean $is_enabled
 */
class SlideModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return static the static model class
	 */
	public static function model( $className = __CLASS__ )
	{
		return parent::model( $className );
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{slide}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array( 'code', 'required' ),
			array( 'code, file_name', 'length', 'max' => 128 ),
            array( 'is_enabled', 'numerical', 'integerOnly' => true ),
			array( 'is_enabled', 'length', "max" => 1 ),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'code' => 'Code',
			'file_name' => 'File name',
			'is_enabled' => 'Is enabled',
		);
	}

	public function getListForAdmin( $limit, $offset = 0 )
    {
        $criteria = new CDbCriteria();
        $criteria->select = "*";
        $criteria->limit = $limit;
        $criteria->offset = $offset;

        return $this->findAll( $criteria );
    }

	public function getListForHome( $limit = 5 )
    {
        $criteria = new CDbCriteria();
        $criteria->select = "*";
        $criteria->addCondition( "is_enabled = 1" );
        $criteria->limit = $limit;

        return $this->findAll( $criteria );
    }
}
