<?php

/**
 * This is the model class for table "diag_test".
 *
 * The followings are the available columns in table 'diag_test':
 * @property integer $id
 * @property integer $disease_id
 * @property string $name
 * @property integer $cost
 *
 * The followings are the available model relations:
 * @property Disease $disease
 */
class DiagnosticTest extends CActiveRecord
{
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'diag_test';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('disease_id, name', 'required'),
			array('disease_id, cost', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, disease_id, name, cost', 'safe', 'on'=>'search'),
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
			'disease' => array(self::BELONGS_TO, 'Disease', 'disease_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'disease_id' => 'Disease',
			'name' => 'Name',
			'cost' => 'Cost',
		);
	}

	/**
	 *	@return array of diseases
	 */
	public function getAllDiseases(){

		$model = disease::model()->findAll();
		$list = CHtml::listdata($model,'id','disease_name');
		return $list;
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
		$criteria->compare('disease_id',$this->disease_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('cost',$this->cost);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DiagnosticTest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
