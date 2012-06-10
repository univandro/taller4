<?php

/**
 * This is the model class for table "examination_associated".
 *
 * The followings are the available columns in table 'examination_associated':
 * @property integer $id_examination_associated
 * @property integer $id_examination
 * @property integer $id_consult
 * @property string $date
 * @property string $description
 * @property string $state
 * @property string $result
 * @property string $file
 *
 * The followings are the available model relations:
 * @property Examination $idExamination
 * @property Consult $idConsult
 */
class ExaminationAssociated extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExaminationAssociated the static model class
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
		return 'examination_associated';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_examination, id_consult, date, description, state', 'required'),
			array('id_examination, id_consult', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>500),
			array('state, result', 'length', 'max'=>45),
			array('file', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_examination_associated, id_examination, id_consult, date, description, state, result, file', 'safe', 'on'=>'search'),
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
			'idExamination' => array(self::BELONGS_TO, 'Examination', 'id_examination'),
			'idConsult' => array(self::BELONGS_TO, 'Consult', 'id_consult'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_examination_associated' => 'Id Examination Associated',
			'id_examination' => 'Id Examination',
			'id_consult' => 'Id Consult',
			'date' => 'Date',
			'description' => 'Description',
			'state' => 'State',
			'result' => 'Result',
			'file' => 'File',
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

		$criteria->compare('id_examination_associated',$this->id_examination_associated);
		$criteria->compare('id_examination',$this->id_examination);
		$criteria->compare('id_consult',$this->id_consult);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('result',$this->result,true);
		$criteria->compare('file',$this->file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}