<?php

/**
 * This is the model class for table "consult".
 *
 * The followings are the available columns in table 'consult':
 * @property integer $id_consult
 * @property integer $id_patient
 * @property integer $id_alias
 * @property string $date
 * @property string $reason
 * @property string $result
 *
 * The followings are the available model relations:
 * @property Patient $idPatient
 * @property Alias $idAlias
 * @property ExaminationAssociated[] $examinationAssociateds
 * @property MedicineAssigned[] $medicineAssigneds
 */
class Consult extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Consult the static model class
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
		return 'consult';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_patient, id_alias, date, reason', 'required'),
			array('id_patient, id_alias', 'numerical', 'integerOnly'=>true),
			array('reason, result', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_consult, id_patient, id_alias, date, reason, result', 'safe', 'on'=>'search'),
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
			'idPatient' => array(self::BELONGS_TO, 'Patient', 'id_patient'),
			'idAlias' => array(self::BELONGS_TO, 'Alias', 'id_alias'),
			'examinationAssociateds' => array(self::HAS_MANY, 'ExaminationAssociated', 'id_consult'),
			'medicineAssigneds' => array(self::HAS_MANY, 'MedicineAssigned', 'id_consult'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_consult' => 'Id Consult',
			'id_patient' => 'Id Patient',
			'id_alias' => 'Id Alias',
			'date' => 'Date',
			'reason' => 'Reason',
			'result' => 'Result',
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

		$criteria->compare('id_consult',$this->id_consult);
		$criteria->compare('id_patient',$this->id_patient);
		$criteria->compare('id_alias',$this->id_alias);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('reason',$this->reason,true);
		$criteria->compare('result',$this->result,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}