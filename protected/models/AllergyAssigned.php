<?php

/**
 * This is the model class for table "allergy_assigned".
 *
 * The followings are the available columns in table 'allergy_assigned':
 * @property integer $id_allergy_assigned
 * @property integer $id_allergy
 * @property integer $id_medical_history
 * @property string $details
 *
 * The followings are the available model relations:
 * @property Allergy $idAllergy
 * @property MedicalHistory $idMedicalHistory
 */
class AllergyAssigned extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AllergyAssigned the static model class
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
		return 'allergy_assigned';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_allergy, id_medical_history, details', 'required'),
			array('id_allergy, id_medical_history', 'numerical', 'integerOnly'=>true),
			array('details', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_allergy_assigned, id_allergy, id_medical_history, details', 'safe', 'on'=>'search'),
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
			'idAllergy' => array(self::BELONGS_TO, 'Allergy', 'id_allergy'),
			'idMedicalHistory' => array(self::BELONGS_TO, 'MedicalHistory', 'id_medical_history'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_allergy_assigned' => 'Id Allergy Assigned',
			'id_allergy' => 'Id Allergy',
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

		$criteria->compare('id_allergy_assigned',$this->id_allergy_assigned);
		$criteria->compare('id_allergy',$this->id_allergy);
		$criteria->compare('id_medical_history',$this->id_medical_history);
		$criteria->compare('details',$this->details,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}