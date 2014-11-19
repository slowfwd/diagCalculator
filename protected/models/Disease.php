<?php

/**
 * This is the model class for table "disease".
 *
 * The followings are the available columns in table 'disease':
 * @property integer $id
 * @property string $disease_name
 * @property integer $hints_lower
 * @property integer $hints_upper
 *
 * The followings are the available model relations:
 * @property DiagTest[] $diagTests
 */
class Disease extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'disease';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('disease_name, hints_lower, hints_upper', 'required'),
			array('hints_lower, hints_upper', 'numerical', 'integerOnly'=>true),
			array('disease_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, disease_name, hints_lower, hints_upper', 'safe', 'on'=>'search'),
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
			'diagTests' => array(self::HAS_MANY, 'DiagTest', 'disease_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'disease_name' => 'Disease Name',
			'hints_lower' => 'Hints Lower',
			'hints_upper' => 'Hints Upper',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('disease_name',$this->disease_name,true);
		$criteria->compare('hints_lower',$this->hints_lower);
		$criteria->compare('hints_upper',$this->hints_upper);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Disease the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
