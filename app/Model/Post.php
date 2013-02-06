<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property Tag $Tag
 */
class Post extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'Tag' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min' => 1)),
				'message' => 'You need to select at least one tag',
				'required' => true,
			),
		),
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Tag' => array(
			'className' => 'Tag',
			'joinTable' => 'posts_tags',
			'foreignKey' => 'post_id',
			'associationForeignKey' => 'tag_id',
			'unique' => 'keepExisting',
		)
	);
	
	public function beforeSave($options){
		foreach (array_keys($this->hasAndBelongsToMany) as $model){
			
			if(isset($this->data[$this->name][$model])){
				$this->data[$model][$model] = $this->data[$this->name][$model];
				unset($this->data[$this->name][$model]);
			}
		}
		return true;
	}

}
