<?php

/** 
 * LICENSE: ##LICENSE##
 * 
 * @category   Anahita
 * @package	   Com_Todos
 * @subpackage Domain_Entity
 * @author     Arash Sanieyan <ash@anahitapolis.com>
 * @author     Rastin Mehr <rastin@anahitapolis.com>
 * @copyright  2008 - 2010 rmdStudio Inc./Peerglobe Technology Inc
 * @license    GNU GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 * @version    SVN: $Id$
 * @link       http://www.anahitapolis.com
 */

/**
 * Todo entity
 * 
 * @category   Anahita
 * @package	   Com_Todos
 * @subpackage Domain_Entity
 * @author     Arash Sanieyan <ash@anahitapolis.com>
 * @author     Rastin Mehr <rastin@anahitapolis.com>
 * @license    GNU GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 * @link       http://www.anahitapolis.com
 */
class ComTodosDomainEntityTodo extends ComMediumDomainEntityMedium 
{
	/*
	 * Priorities values
	 */
	const PRIORITY_HIGHEST =  2;
	const PRIORITY_HIGH	   =  1;
	const PRIORITY_NORMAL  =  0; 
	const PRIORITY_LOW     = -1;
	const PRIORITY_LOWEST  = -2;
		
	/**
	 * Initializes the default configuration for the object
	 *
	 * Called from {@link __construct()} as a first step of object instantiation.
	 *
	 * @param KConfig $config An optional KConfig object with configuration options.
	 *
	 * @return void
	 */
	protected function _initialize( KConfig $config )
	{				
		$config->append(array(
			'resources'		=> array( 'todos_todos' ),
			'attributes' => array(
				'name' => array( 'required' => true ),
				'openStatusChangeTime' => array( 'column'=>'open_status_change_time','default'=>'date', 'type'=>'date', 'write'=>'private'),
				'priority' => array( 'column'=>'ordering',  'default'=>self::PRIORITY_NORMAL, 'type'=>'integer')
				),
			'relationships' => array(
				'lastChanger' => array( 'parent'=>'com:people.domain.entity.person', 'child_column'=>'open_status_change_by'),
				),
			'behaviors' => array(
				'enableable'
			),
			'aliases' => array(
				'open' => 'enabled'		
			)
		));
			
		parent::_initialize( $config );		
	}
	
	/**
	 * Opens the todo item
	 * 
	 * @return null
	 */
	public function open( $changer )
	{
		$this->open = true;
		$this->setLastChanger( $changer );		
	}
	
	/**
	 * Closes the todo item
	 * 
	 * @return null
	 */
	public function close( $changer )
	{
		$this->open = false;
		$this->setLastChanger( $changer );		
	}
	
	/**
	 * sets the last person who changed the open status
	 * 
	 * @param ComPeopleDomainEntityPerson object $changer
	 * 
	 * @return null
	 */
	public function setLastChanger($changer)
	{
		$this->set( 'lastChanger', $changer );
		$this->set( 'openStatusChangeTime', AnDomainAttribute::getInstance('date') );
	}
}