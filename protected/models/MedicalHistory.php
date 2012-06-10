<?php

/**
 * This is the model class for table "medical_history".
 *
 * The followings are the available columns in table 'medical_history':
 * @property integer $id_medical_history
 * @property string $weight
 * @property string $height
 * @property string $blood_type
 *
 * The followings are the available model relations:
 * @property AllergyAssigned[] $allergyAssigneds
 * @property DiseaseAssigned[] $diseaseAssigneds
 * @property Patient[] $patients
 */
class MedicalHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MedicalHistory the static model class
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
		return 'medical_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('weight, height, blood_type', 'required'),
			array('weight, height, blood_type', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_medical_history, weight, height, blood_type', 'safe', 'on'=>'search'),
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
			'allergyAssigneds' => array(self::HAS_MANY, 'AllergyAssigned', 'id_medical_history'),
			'diseaseAssigneds' => array(self::HAS_MANY, 'DiseaseAssigned', 'id_medical_history'),
			'patients' => array(self::HAS_MANY, 'Patient', 'id_medical_history'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_medical_history' => 'Id Medical History',
			'weight' => 'Weight',
			'height' => 'Height',
			'blood_type' => 'Blood Type',
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

		$criteria->compare('id_medical_history',$this->id_medical_history);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('blood_type',$this->blood_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}