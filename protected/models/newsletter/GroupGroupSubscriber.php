<?php

/**
 * This is the model class for table "{{_group_group_subscriber}}".
 *
 * The followings are the available columns in table '{{_group_group_subscriber}}':
 * @property integer $id
 * @property integer $subscriber_id
 * @property integer $group_id
 */
class GroupGroupSubscriber extends _BaseModel {
		
		/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{_group_subscriber}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subscriber_id, group_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, subscriber_id, group_id', 'safe', 'on'=>'search'),
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
	
																						);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('translation','ID'),
			'subscriber_id' => Yii::t('translation','Subscriber'),
			'group_id' => Yii::t('translation','Group'),
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
		$criteria->compare('subscriber_id',$this->subscriber_id);
		$criteria->compare('group_id',$this->group_id);
					
		 
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                'pageSize'=> Yii::app()->params['defaultPageSize'],
            ),
		));
	}

	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GroupGroupSubscriber the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function nextOrderNumber()
	{
		return GroupGroupSubscriber::model()->count() + 1;
	}
	
	//Vnguyen
	public function getBySubscribeId($subscriber_id) {
		$criteria=new CDbCriteria;
		$criteria->compare('subscriber_id',$subscriber_id);
		$models = GroupGroupSubscriber::model()->findAll($criteria);
		return CHtml::listData($models,'id','group_id');
	}
	
	//Vnguyen
	public function getByGroupId($group_id) {
		$criteria=new CDbCriteria;
		$criteria->compare('group_id',$group_id);
		$models = GroupGroupSubscriber::model()->findAll($criteria);
		return CHtml::listData($models,'id','subscriber_id');
	}
	
	//Vnguyen
	public function checkExist($subscriber_id, $group_id) {
		$criteria=new CDbCriteria;
		$criteria->compare('subscriber_id',$subscriber_id);
		$criteria->compare('group_id',$group_id);
		$count = GroupGroupSubscriber::model()->count($criteria);
		if($count > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	//Vnguyen
	public function saveGroup($subscriber_id, $group_id) {
		$group = new GroupGroupSubscriber();
		$group->subscriber_id = $subscriber_id;
		$group->group_id = $group_id;
		$group->save();
	}
	
	//Vnguyen
	public function removeGroup($subscriber_id, $group_id) {
		$criteria=new CDbCriteria;
		$criteria->compare('subscriber_id',$subscriber_id);
		$criteria->compare('group_id',$group_id);
		$models = GroupGroupSubscriber::model()->findAll($criteria);
		if($models) {
			foreach($models as $model) {
				$model->delete();
			}
		} 
	}
}
