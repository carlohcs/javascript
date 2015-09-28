<?php namespace Carlohcs\JavaScript\Tour;

	/**
	 * TourInterface
	 * 
	 * ----------------------
	 * Class with obrigatory methods
	 * ----------------------
	 * @author  Carlos Henrique Carvalho de Santana <carlohcs@gmail.com>
	 * @date 2014-10-03
	 */
	interface TourInterface
	{
		/**
		 * Init the script
		 */
		public function init();

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
		 * Set a option and respective value
		 * 
		 * @param string $property
		 * @param string $value
		 */
		public function setOption($property, $value);

		/**
		 * Set multiple options
		 * 
		 * @param array $options
		 */
		public function setOptions($options = array());

		/**
		 * Set the array of steps
		 * 
		 * @param string $steps
		 */
		public function setSteps($steps = array());
	}