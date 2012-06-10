<?php

/**
 * This is the model class for table "disease_assigned".
 *
 * The followings are the available columns in table 'disease_assigned':
 * @property integer $id_disease_assigned
 * @property integer $id_disease
 * @property integer $id_medical_history
 * @property string $details
 *
 * The followings are the available model relations:
 * @property Disease $idDisease
 * @property MedicalHistory $idMedicalHistory
 */
class DiseaseAssigned extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DiseaseAssigned the static model class
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
		return 'disease_assigned';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_disease, id_medical_history, details', 'required'),
			array('id_disease, id_medical_history', 'numerical', 'integerOnly'=>true),
			array('details', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_disease_assigned, id_disease, id_medical_history, details', 'safe', 'on'=>'search'),
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
			'idDisease' => array(self::BELONGS_TO, 'Disease', 'id_disease'),
			'idMedicalHistory' => array(self::BELONGS_TO, 'MedicalHistory', 'id_medical_history'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_disease_assigned' => 'Id Disease Assigned',
			'id_disease' => 'Id Disease',
			'id_medical_history' => 'Id Medical History',
			'details' => 'Details',
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

		$criteria->compare('id_disease_assigned',$this->id_disease_assigned);
		$criteria->compare('id_disease',$this->id_disease);
		$criteria->compare('id_medical_history',$this->id_medical_history);
		$criteria->compare('details',$this->details,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}