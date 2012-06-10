<?php

/**
 * This is the model class for table "medicine_assigned".
 *
 * The followings are the available columns in table 'medicine_assigned':
 * @property integer $id_medicine_assigned
 * @property integer $id_medicine
 * @property integer $id_consult
 * @property string $details
 *
 * The followings are the available model relations:
 * @property Medicine $idMedicine
 * @property Consult $idConsult
 */
class MedicineAssigned extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MedicineAssigned the static model class
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
		return 'medicine_assigned';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_medicine, id_consult, details', 'required'),
			array('id_medicine, id_consult', 'numerical', 'integerOnly'=>true),
			array('details', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_medicine_assigned, id_medicine, id_consult, details', 'safe', 'on'=>'search'),
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
			'idMedicine' => array(self::BELONGS_TO, 'Medicine', 'id_medicine'),
			'idConsult' => array(self::BELONGS_TO, 'Consult', 'id_consult'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_medicine_assigned' => 'Id Medicine Assigned',
			'id_medicine' => 'Id Medicine',
			'id_consult' => 'Id Consult',
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

		$criteria->compare('id_medicine_assigned',$this->id_medicine_assigned);
		$criteria->compare('id_medicine',$this->id_medicine);
		$criteria->compare('id_consult',$this->id_consult);
		$criteria->compare('details',$this->details,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}