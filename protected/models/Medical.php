<?php

/**
 * This is the model class for table "medical".
 *
 * The followings are the available columns in table 'medical':
 * @property integer $id_medical
 * @property integer $id_user
 * @property string $specialty
 *
 * The followings are the available model relations:
 * @property User $idUser
 */
class Medical extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Medical the static model class
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
		return 'medical';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, specialty', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('specialty', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_medical, id_user, specialty', 'safe', 'on'=>'search'),
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
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_medical' => 'Id Medical',
			'id_user' => 'Id User',
			'specialty' => 'Specialty',
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

		$criteria->compare('id_medical',$this->id_medical);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('specialty',$this->specialty,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}