<?php
/**
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright KACHINGPHP.ORG 2010
 * @link          http://www.kachingphp.org Kaching Project
 * @package       kaching
 * @subpackage    kaching.models
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

/**
 * Group Model
 * 
 * @author Mike Friesen
 *
 */
class Group extends KachingAppModel {
	
	var $name = 'Group';
	
  	var $validate = array(
  		'name' => array('rule' => 'notEmpty', 'message' => '* Name is required')
    );
}

?>