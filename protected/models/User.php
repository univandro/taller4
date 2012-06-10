<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id_user
 * @property integer $id_person
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Alias[] $aliases
 * @property ManagerG[] $managerGs
 * @property ManagerMC[] $managerMCs
 * @property Medical[] $medicals
 * @property Person $idPerson
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_person, password', 'required'),
			array('id_person', 'numerical', 'integerOnly'=>true),
			array('password', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_user, id_person, password', 'safe', 'on'=>'search'),
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
			'aliases' => array(self::HAS_MANY, 'Alias', 'id_user'),
			'managerGs' => array(self::HAS_MANY, 'ManagerG', 'id_user'),
			'managerMCs' => array(self::HAS_MANY, 'ManagerMC', 'id_user'),
			'medicals' => array(self::HAS_MANY, 'Medical', 'id_user'),
			'idPerson' => array(self::BELONGS_TO, 'Person', 'id_person'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'id_person' => 'Id Person',
			'password' => 'Password',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_person',$this->id_person);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}