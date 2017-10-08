<?php

/**
 * The followings are the available columns in table 'itt_page':
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property integer $is_enabled
 */
class PageModel extends CActiveRecord
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
		return '{{page}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array( 'code, name', 'required' ),
			array( 'code, name', 'length', 'max' => 128 ),
			array( 'description', 'safe' ),
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
			'name' => 'Name',
			'description' => 'Description',
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
}
