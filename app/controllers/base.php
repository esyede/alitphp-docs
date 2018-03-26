<?php
namespace App\Controllers;
defined('DS') or die('Direct file access is not allowed.');

use 
	\Alit,
	\erusev\Parsedown;


class Base {

	protected
		// Framework instance
		$fw;

	/**
	 * Class constructor
	 * @return  void
	 */
	function __construct() {
		$this->fw=Alit::instance();
		$pagename=$this->fw->get('PACKAGE').' | '.$this->fw->get('TAGLINE');
		$this->fw->set(array(
			'data.view'=>'home',
			'data.pagename'=>$pagename
		));
	}

	/**
	 * Not found page handler
	 * @return  void
	 */
	function notfound() {
		$this->fw->render('404');
	}

	/**
	 * After route middleware
	 * @return  void
	 */
	function after() {
		$this->fw->render(
			$this->fw->get('data.view'),
			array('var'=>$this->fw->get('data'))
		);
	}

	//!=============================================================================
	//! Helpers
	//!=============================================================================
	/**
	 * Set page properties
	 * @param   string  $uri   URI segment (ex: /intro, /routing, /sys-vars)
	 * @param   string  $type  page type (docs/apis/pages)
	 * @return  void
	 */
	protected function setprop($uri,$type) {
		$pagename=$this->fw->get('PACKAGE').' | ';
		if (is_null($uri)) {
			$pagename=$pagename.ucwords($type);
			$this->fw->set(array(
				'data.pagename'=>$pagename,
				'data.view'=>$type
			));
		}
		else {
			$src=$this->fw->get('BASE').$type.'/'.$uri.'.md';
			$pagename=$pagename.ucwords(str_replace('-',' ',$uri));
			$content=$this->markdownize($type.'/'.$uri.'.md');
			$doclist=$this->resources($this->fw->get('ROOT').'/resources/guide/');
			$this->fw->set(array(
				'data.pagename'=>$pagename,
				'data.view'=>'layout',
				'data.content'=>$content,
				'data.currpage'=>$uri,
				'data.doclist'=>$doclist,
			));
		}	
	}

	/**
	 * Translate markdown string
	 * @param   string  $src  path to markdown source file
	 * @return  string        markdown rendered strings (html)
	 */
	private function markdownize($src) {
		$src=$this->fw->get('ROOT').'resources/'.$src;
		if (!file_exists($src)) {
			$this->notfound();
			exit();
		}
		$md=new Parsedown();
		return $md->text($this->fw->read($src));
	}

	/**
	 * Scan 'base_url/resources/' directory for markdown files
	 * @param   string  $dir  markdown directory
	 * @return  array         path list of markdown files
	 */
	private function resources($dir) {
		return array_map(function($file) {
			$parts=explode(DS,$file);
			return str_replace('.md','',end($parts));
		},@glob(str_replace('/',DS,$dir).'*.md'));
	}
}