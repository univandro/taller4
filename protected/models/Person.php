<?php

/**
 * This is the model class for table "person".
 *
 * The followings are the available columns in table 'person':
 * @property integer $id_person
 * @property string $name
 * @property string $father_name
 * @property string $mother_name
 * @property string $birth_date
 *
 * The followings are the available model relations:
 * @property Address[] $addresses
 * @property Address[] $addresses1
 * @property Address[] $addresses2
 * @property Cellphone[] $cellphones
 * @property Cellphone[] $cellphones1
 * @property Cellphone[] $cellphones2
 * @property ContactEmergency[] $contactEmergencies
 * @property Email[] $emails
 * @property Email[] $emails1
 * @property Email[] $emails2
 * @property Fax[] $faxes
 * @property Fax[] $faxes1
 * @property Fax[] $faxes2
 * @property Patient[] $patients
 * @property Phone[] $phones
 * @property Phone[] $phones1
 * @property Phone[] $phones2
 * @property User[] $users
 */
class Person extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Person the static model class
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
		return 'person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, mother_name, birth_date', 'required'),
			array('name, father_name, mother_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_person, name, father_name, mother_name, birth_date', 'safe', 'on'=>'search'),
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
			'addresses' => array(self::HAS_MANY, 'Address', 'id_person'),
			'addresses1' => array(self::HAS_MANY, 'Address', 'modified_by'),
			'addresses2' => array(self::HAS_MANY, 'Address', 'created_by'),
			'cellphones' => array(self::HAS_MANY, 'Cellphone', 'id_person'),
			'cellphones1' => array(self::HAS_MANY, 'Cellphone', 'modified_by'),
			'cellphones2' => array(self::HAS_MANY, 'Cellphone', 'created_by'),
			'contactEmergencies' => array(self::HAS_MANY, 'ContactEmergency', 'id_person'),
			'emails' => array(self::HAS_MANY, 'Email', 'id_person'),
			'emails1' => array(self::HAS_MANY, 'Email', 'modified_by'),
			'emails2' => array(self::HAS_MANY, 'Email', 'created_by'),
			'faxes' => array(self::HAS_MANY, 'Fax', 'id_person'),
			'faxes1' => array(self::HAS_MANY, 'Fax', 'created_by'),
			'faxes2' => array(self::HAS_MANY, 'Fax', 'modified_by'),
			'patients' => array(self::HAS_MANY, 'Patient', 'id_person'),
			'phones' => array(self::HAS_MANY, 'Phone', 'id_person'),
			'phones1' => array(self::HAS_MANY, 'Phone', 'created_by'),
			'phones2' => array(self::HAS_MANY, 'Phone', 'modified_by'),
			'users' => array(self::HAS_MANY, 'User', 'id_person'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_person' => 'Id Person',
			'name' => 'Name',
			'father_name' => 'Father Name',
			'mother_name' => 'Mother Name',
			'birth_date' => 'Birth Date',
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

		$criteria->compare('id_person',$this->id_person);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('father_name',$this->father_name,true);
		$criteria->compare('mother_name',$this->mother_name,true);
		$criteria->compare('birth_date',$this->birth_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}