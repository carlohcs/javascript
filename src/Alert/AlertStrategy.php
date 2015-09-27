<?php namespace Carlohcs\JavaScript\Alert;

	/**
	 * AlertStrategy
	 *
	 * ----------------
	 * Implements a module with a defined strategy
	 * ----------------------
	 * @author  Carlos Henrique Carvalho de Santana <carlohcs@gmail.com>
	 * @date 2014-08-04
	 */
	class AlertStrategy
	{
		//The main component
		private $alert = null;

		//Array of class modules
		private $alertModule = array(
			'BootstrapAlert' => '\Carlohcs\JavaScript\Alert\BootstrapAlert'
		);

		/**
		 * Constructor
		 * 
		 * @param string $alertClassName
		 */
		public function __construct($alertClassName = 'BootstrapAlert')
		{
			//Search the className in array class modules
			$className = $this->alertModule[$alertClassName];

			//Instantiate a class
			$this->alert = new $className;
		}
		
		/**
		 * Create the component
		 */
		public function create()
		{
			$this->alert->create();
		}

		/**
		 * Return the component
		 * 
		 * @return string
		 */
		public function get()
		{
			$return = $this->alert->get();
			return $return;
		}

		/**
		 * Set a title
		 * 
		 * @param string $title
		 */
		public function setTitle($title)
		{
			$this->alert->title = $title;
		}

		/**
		 * Set a content
		 * 
		 * @param string $content
		 */
		public function setContent($content)
		{
			$this->alert->content = $content;
		}

		/**
		 * Set a type
		 * 
		 * @param string $type
		 */
		public function setType($type)
		{
			$this->alert->setType($type);
		}

		/**
		 * Set if the component can be closed
		 * 
		 * @param string $content
		 */
		public function setCloseBtn($closeBtn)
		{
			$this->alert->closeBtn = $closeBtn;
		}

		/**
		 * Set if contains a space between title and content
		 * 
		 * @param boolean $breakLine
		 */
		public function setBreakLine($breakLine)
		{
			$this->alert->breakLine = $breakLine;
		}

		/**
		 * Set attributes to module container
		 * 
		 * @param array $attributes
		 */
		public function setContainerAttributes($attributes)
		{
			$this->alert->setContainerAttributes($attributes);
		}

	}	