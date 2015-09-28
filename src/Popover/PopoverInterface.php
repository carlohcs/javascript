<?php namespace Carlohcs\JavaScript\Popover;

	/**
	 * PopoverInterface
	 * 
	 * ----------------------
	 * Class with obrigatory methods
	 * ----------------------
	 * @author  Carlos Henrique Carvalho de Santana <carlohcs@gmail.com>
	 * @date 2014-08-01
	 */
	interface PopoverInterface
	{
		
		/**
		 * Create the component
		 */
		public function create();

		/**
		 * Return the component
		 * 
		 * @return string
		 */
		public function get();

		/**
		 * Set a title
		 * 
		 * @param string $title
		 */
		public function setTitle($title);

		/**
		 * Set a content
		 * 
		 * @param string $content
		 */
		public function setContent($content);

		/**
		 * Set a position
		 * 
		 * @param string $position
		 */
		public function setPosition($position);

		/**
		 * Set a type
		 * 
		 * @param string $type
		 */
		public function setType($type);
		
		/**
		 * Set dependencies necessaries to create or run the component
		 * 
		 * @param array $options
		 */
		public function runDependencyRender($options = false);

	}