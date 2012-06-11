<?php

/**
 * This is the model class for table "address".
 *
 * The followings are the available columns in table 'address':
 * @property integer $id_address
 * @property integer $id_person
 * @property string $location
 * @property string $zone
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $google_map
 * @property string $date_created
 * @property integer $created_by
 * @property string $date_modified
 * @property integer $modified_by
 * @property integer $is_primary
 *
 * The followings are the available model relations:
 * @property Person $idPerson
 * @property Person $modifiedBy
 * @property Person $createdBy
 */
class Address extends CActiveRecord
{
    
        public function behaviors(){
            return array(
                'CTimestampbehavior' => array(
                    'class' => 'zii.behaviors.CTimestampbehavior',
                    'createAttribute' => 'date_created',
                    'updateAttribute' => 'date_modified',
                )
            );
        }
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Address the static model class
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
		return 'address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_person, location, zone, city, state, country, is_primary', 'required', 'on'=>'createPerson'),
			array('location, zone, city, state, country, is_primary', 'required', 'on'=>'updatePerson'),
			array('id_person, created_by, modified_by, is_primary', 'numerical', 'integerOnly'=>true),
			array('location, zone, city, state, country, google_map', 'length', 'max'=>145),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_address, id_person, location, zone, city, state, country, google_map, date_created, created_by, date_modified, modified_by, is_primary', 'safe', 'on'=>'search'),
                        array('created_by', 'default','value'=>Yii::app()->user->id,'setOnEmpty'=>true,'on'=>'insert,createPerson'),
                        
                        array('modified_by', 'default','value'=>Yii::app()->user->id,'setOnEmpty'=>true,'on'=>'updatePerson'),
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
			'modifiedBy' => array(self::BELONGS_TO, 'Person', 'modified_by'),
			'createdBy' => array(self::BELONGS_TO, 'Person', 'created_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_address' => 'Id Address',
			'id_person' => 'Id Person',
			'location' => 'Location',
			'zone' => 'Zone',
			'city' => 'City',
			'state' => 'State',
			'country' => 'Country',
			'google_map' => 'Google Map',
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

		$criteria->compare('id_address',$this->id_address);
		$criteria->compare('id_person',$this->id_person);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('zone',$this->zone,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('google_map',$this->google_map,true);
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