<?php
namespace App\Controllers;
defined('DS') or die('Direct file access is not allowed.');


class Docs extends Base {

	/**
	 * Class constructor
	 * @return  void
	 */
	function __construct() {
		parent::__construct();
	}

	/**
	 * Front page handler (base_url/). No need to change anything :)
	 * @return  void
	 */
	function home() {}

	/**
	 * User guide page handler (base_url/guide/*)
	 * @param   string  $arg
	 * @return  void
	 */
	function guide($arg) {
		$this->setprop($arg,__FUNCTION__);
	}

	/**
	 * API Reference page handler (base_url/apis/*)
	 * @param   string  $arg
	 * @return  void
	 */
	function apis($arg) {
		$this->setprop($arg,__FUNCTION__);
	}

	/**
	 * Other pages handler (base_url/pages/*)
	 * @param   string  $arg
	 * @return  void
	 */
	function pages($arg) {
		$this->setprop($arg,__FUNCTION__);
	}
}