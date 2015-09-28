<?php namespace Carlohcs\JavaScript\Alert;

	/**
	 * AlertInterface
	 * 
	 * ----------------------
	 * Class with obrigatory methods 
	 * ----------------------
	 * @author  Carlos Henrique Carvalho de Santana <carlohcs@gmail.com>
	 * @date 2014-08-04
	 */
	interface AlertInterface
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
		 * Set a type
		 * 
		 * @param string $type
		 */
		public function setType($type);

		/**
		 * Set if the component can be closed
		 * 
		 * @param string $content
		 */
		public function setCloseBtn($closeBtn);

		/**
		 * Set if contains a space between title and content
		 * 
		 * @param boolean $breakLine
		 */
		public function setBreakLine($breakLine);

		/**
		 * Set dependencies necessaries to create or run the component
		 * 
		 * @param array $options
		 * @deprecated
		 */
		//public function runDependencyRender($options = false);

	}