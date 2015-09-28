<?php namespace Carlohcs\JavaScript\Tour;

	/**
	 * TourStrategy
	 *
	 * ----------------
	 * Implements a module with a defined strategy
	 * ----------------------
	 * @author  Carlos Henrique Carvalho de Santana <carlohcs@gmail.com>
	 * @date 2014-08-04
	 */
	class TourStrategy
	{
		//The main component
		private $tour = null;

		//Array of class modules
		private $tourModule = array(
			'IntroJs' => '\Carlohcs\JavaScript\Tour\IntroJs'
		);
		
		/**
		 * Constructor
		 * 
		 * @param string $tourClassName
		 */
		public function __construct($tourClassName = 'IntroJs')
		{
			//Search the className in array class modules
			$className = $this->tourModule[$tourClassName];

			//Instantiate a class
			$this->tour = new $className;
		}
		
		/**
		 * Init the script
		 */
		public function init()
		{
			$this->tour->init();
		}

		/**
		 * Create the component
		 */
		public function create()
		{
			$this->tour->create();
		}

		/**
		 * Return the component
		 * 
		 * @return string
		 */
		public function get()
		{
			$return = $this->tour->get();
			return $return;
		}
		
		/**
		 * Set a option and respective value
		 * 
		 * @param string $property
		 * @param string $value
		 */
		public function setOption($property, $value)
		{
			$this->tour->setOption($property, $value);
		}

		/**
		 * Set multiple options
		 * 
		 * @param array $options
		 */
		public function setOptions($options = array())
		{
			$this->tour->setOptions($options);
		}

		/**
		 * Set the array of steps
		 * 
		 * @param string $steps
		 */
		public function setSteps($source = array())
		{
			$this->tour->setSteps($source);
		}

		/**
		 * Set a JavaScript function to when exit the tour
		 * 
		 * @param string $function
		 */
		public function setOnExit($function)
		{
			$this->tour->setOnExit($function);
		}

		/**
		 * Set a JavaScript function to when complete the tour
		 * 
		 * @param string $function
		 */
		public function setOnComplete($function)
		{
			$this->tour->setOnComplete($function);
		}

	}