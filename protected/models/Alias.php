<?php

/**
 * This is the model class for table "alias".
 *
 * The followings are the available columns in table 'alias':
 * @property integer $id_alias
 * @property integer $id_medical_center
 * @property integer $id_user
 * @property string $state
 *
 * The followings are the available model relations:
 * @property User $idUser
 * @property MedicalCenter $idMedicalCenter
 * @property Consult[] $consults
 */
class Alias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Alias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_medical_center, id_user, state', 'required'),
			array('id_medical_center, id_user', 'numerical', 'integerOnly'=>true),
			array('state', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_alias, id_medical_center, id_user, state', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
			'idMedicalCenter' => array(self::BELONGS_TO, 'MedicalCenter', 'id_medical_center'),
			'consults' => array(self::HAS_MANY, 'Consult', 'id_alias'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_alias' => 'Id Alias',
			'id_medical_center' => 'Id Medical Center',
			'id_user' => 'Id User',
			'state' => 'State',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_alias',$this->id_alias);
		$criteria->compare('id_medical_center',$this->id_medical_center);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('state',$this->state,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}