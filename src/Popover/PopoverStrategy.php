<?php namespace Carlohcs\JavaScript\Popover;

	/**
	 * PopoverStrategy
	 *
	 * ----------------
	 * Implements a module with a defined strategy
	 * ----------------------
	 * @author  Carlos Henrique Carvalho de Santana <carlohcs@gmail.com>
	 * @date 2014-08-01
	 */
	class PopoverStrategy
	{
		//The main component
		private $popOver = null;

		//Array of class modules
		private $popOverModule = array(
			'BootstrapPopover' => '\Carlohcs\JavaScript\Popover\BootstrapPopover'
		);

		public $title = '';

		public $content = '';

		/**
		 * Constructor
		 * 
		 * @param string $popOverClassName
		 */
		public function __construct($popOverClassName = 'BootstrapPopover')
		{
			//Search the className in array class modules
			$className = $this->popOverModule[$popOverClassName];

			//Instantiate a class
			$this->popOver = new $className;
		}
		
		/**
		 * Create the component
		 */
		public function create()
		{
			$this->popOver->create();
		}

		/**
		 * Return the component
		 * 
		 * @return string
		 */
		public function get()
		{
			$return = $this->popOver->get();
			return $return;
		}

		/**
		 * Set a title
		 * 
		 * @param string $title
		 */
		public function setTitle($title)
		{
			$this->popOver->title = $title;
		}

		/**
		 * Set a content
		 * 
		 * @param string $content
		 */
		public function setContent($content)
		{
			$this->popOver->content = $content;
		}

		/**
		 * Set a position
		 * 
		 * @param string $position
		 */
		public function setPosition($position)
		{
			$this->popOver->setPosition($position);
		}

		/**
		 * Set a type
		 * 
		 * @param string $type
		 */
		public function setType($type)
		{
			$this->popOver->setType($type);
		}

		/**
		 * Set dependencies necessaries to create or run the component
		 * 
		 * @param array $options
		 */
		public function runDependencyRender($options = false)
		{
			$this->popOver->runDependencyRender($options);
		}

	}	