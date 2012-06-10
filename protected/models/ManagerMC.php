<?php

/**
 * This is the model class for table "manager_m_c".
 *
 * The followings are the available columns in table 'manager_m_c':
 * @property integer $id_manager_m_c
 * @property integer $id_user
 * @property string $code_m_c
 *
 * The followings are the available model relations:
 * @property User $idUser
 */
class ManagerMC extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ManagerMC the static model class
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
		return 'manager_m_c';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, code_m_c', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('code_m_c', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_manager_m_c, id_user, code_m_c', 'safe', 'on'=>'search'),
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
			'id_manager_m_c' => 'Id Manager M C',
			'id_user' => 'Id User',
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

		$criteria->compare('id_manager_m_c',$this->id_manager_m_c);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('code_m_c',$this->code_m_c,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}