<?php
App::uses('AppModel', 'Model');
/**
 * Articulo Model
 *
 * @property categoria $categoria
 * @property lin $lin
 */
class Media extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */

	public $belongsTo = array(
		'Content' => array(
			'className' => 'Content',
			'foreignKey' => 'content_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
