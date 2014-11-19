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
			array('disease_id, name, cost, sensitivity, specificity', 'required'),
			array('disease_id, cost, sensitivity, specificity', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, disease_id, name, cost, sensitivity, specificity', 'safe', 'on'=>'search'),
			array('cost', 'length', 'max'=>1),

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
			'sensitivity' => 'Sensitivity',
			'specificity' => 'Specificity'
		);
	}

	public function getDiseaseList(){
	 
		$model = Disease::model()->findAll();
 		$list = CHtml::listdata($model,'id','disease_name');
 		return $list;

	}

	/**
	 *	@return array of diseases
	 */
	public function getAllDiseases(){

		$model = Disease::model()->findAll();
		$res = array(array());

		for ($i=0; $i < count($model); $i++) { 
			$did = ($model[$i]->id);
			$res[$i]['disease_name'] = ($model[$i]->disease_name);
			$tests = DiagnosticTest::model()->findAllByAttributes(array('disease_id'=>$did));
			$res[$i]['hint'] = 'Default Hint';
			for ($k=0; $k < count($tests); $k++) { 
				$res[$i][$k]['name'] = ($tests[$k]->name);
				$res[$i][$k]['sensitivity'] = $tests[$k] ->sensitivity;				
				$res[$i][$k]['specificity'] = $tests[$k] ->specificity;
				$res[$i][$k]['cost'] = ($tests[$k]->cost);				
			}
		}

		return $res;
	}

	/**
	 *	@return array of diseases
	 */
	public function getAllDiagTest(){

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
		$criteria->compare('sensitivity',$this->sensitivity);
		$criteria->compare('specificity',$this->specificity);

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
