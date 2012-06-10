<?php

/**
 * This is the model class for table "contact_emergency".
 *
 * The followings are the available columns in table 'contact_emergency':
 * @property integer $id_contact_emergency
 * @property integer $id_person
 * @property integer $id_patient
 *
 * The followings are the available model relations:
 * @property Person $idPerson
 * @property Patient $idPatient
 */
class ContactEmergency extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContactEmergency the static model class
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
		return 'contact_emergency';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_person, id_patient', 'required'),
			array('id_person, id_patient', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_contact_emergency, id_person, id_patient', 'safe', 'on'=>'search'),
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
			'idPerson' => array(self::BELONGS_TO, 'Person', 'id_person'),
			'idPatient' => array(self::BELONGS_TO, 'Patient', 'id_patient'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contact_emergency' => 'Id Contact Emergency',
			'id_person' => 'Id Person',
			'id_patient' => 'Id Patient',
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

		$criteria->compare('id_contact_emergency',$this->id_contact_emergency);
		$criteria->compare('id_person',$this->id_person);
		$criteria->compare('id_patient',$this->id_patient);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}