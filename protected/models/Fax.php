<?php

/**
 * This is the model class for table "fax".
 *
 * The followings are the available columns in table 'fax':
 * @property integer $id_fax
 * @property integer $id_person
 * @property string $fax
 * @property string $date_created
 * @property integer $created_by
 * @property string $date_modified
 * @property integer $modified_by
 * @property integer $is_primary
 *
 * The followings are the available model relations:
 * @property Person $idPerson
 * @property Person $createdBy
 * @property Person $modifiedBy
 */
class Fax extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fax the static model class
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
		return 'fax';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_person, fax, date_created, created_by, date_modified, modified_by, is_primary', 'required'),
			array('id_person, created_by, modified_by, is_primary', 'numerical', 'integerOnly'=>true),
			array('fax', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_fax, id_person, fax, date_created, created_by, date_modified, modified_by, is_primary', 'safe', 'on'=>'search'),
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
			'idPerson' => array(self::BELONGS_TO, 'Person', 'id_person'),
			'createdBy' => array(self::BELONGS_TO, 'Person', 'created_by'),
			'modifiedBy' => array(self::BELONGS_TO, 'Person', 'modified_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_fax' => 'Id Fax',
			'id_person' => 'Id Person',
			'fax' => 'Fax',
			'date_created' => 'Date Created',
			'created_by' => 'Created By',
			'date_modified' => 'Date Modified',
			'modified_by' => 'Modified By',
			'is_primary' => 'Is Primary',
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

		$criteria->compare('id_fax',$this->id_fax);
		$criteria->compare('id_person',$this->id_person);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('date_modified',$this->date_modified,true);
		$criteria->compare('modified_by',$this->modified_by);
		$criteria->compare('is_primary',$this->is_primary);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}