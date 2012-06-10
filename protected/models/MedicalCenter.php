<?php

/**
 * This is the model class for table "medical_center".
 *
 * The followings are the available columns in table 'medical_center':
 * @property integer $id_medical_center
 * @property string $name_medical_center
 * @property string $code_m_c
 *
 * The followings are the available model relations:
 * @property Alias[] $aliases
 */
class MedicalCenter extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MedicalCenter the static model class
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
		return 'medical_center';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_medical_center, code_m_c', 'required'),
			array('name_medical_center', 'length', 'max'=>50),
			array('code_m_c', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_medical_center, name_medical_center, code_m_c', 'safe', 'on'=>'search'),
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
			'aliases' => array(self::HAS_MANY, 'Alias', 'id_medical_center'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_medical_center' => 'Id Medical Center',
			'name_medical_center' => 'Name Medical Center',
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

		$criteria->compare('id_medical_center',$this->id_medical_center);
		$criteria->compare('name_medical_center',$this->name_medical_center,true);
		$criteria->compare('code_m_c',$this->code_m_c,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}