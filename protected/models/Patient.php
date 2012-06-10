<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property integer $id_patient
 * @property integer $id_person
 * @property integer $id_medical_history
 * @property string $code_m_c
 *
 * The followings are the available model relations:
 * @property Consult[] $consults
 * @property ContactEmergency[] $contactEmergencies
 * @property Person $idPerson
 * @property MedicalHistory $idMedicalHistory
 */
class Patient extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Patient the static model class
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
		return 'patient';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_person, id_medical_history, code_m_c', 'required'),
			array('id_person, id_medical_history', 'numerical', 'integerOnly'=>true),
			array('code_m_c', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_patient, id_person, id_medical_history, code_m_c', 'safe', 'on'=>'search'),
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
			'consults' => array(self::HAS_MANY, 'Consult', 'id_patient'),
			'contactEmergencies' => array(self::HAS_MANY, 'ContactEmergency', 'id_patient'),
			'idPerson' => array(self::BELONGS_TO, 'Person', 'id_person'),
			'idMedicalHistory' => array(self::BELONGS_TO, 'MedicalHistory', 'id_medical_history'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_patient' => 'Id Patient',
			'id_person' => 'Id Person',
			'id_medical_history' => 'Id Medical History',
			'code_m_c' => 'Code M C',
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

		$criteria->compare('id_patient',$this->id_patient);
		$criteria->compare('id_person',$this->id_person);
		$criteria->compare('id_medical_history',$this->id_medical_history);
		$criteria->compare('code_m_c',$this->code_m_c,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}