<?php namespace Carlohcs\JavaScript\Tour;

	/**
	 * IntroJs
	 * 
	 * ----------------------
	 * Tour of Intro.js
	 * ----------------------
	 * @author lib http://usablica.github.io/intro.js/
	 * @author  Carlos Henrique Carvalho de Santana <carlohcs@gmail.com>
	 * @date 2014-10-03
	 */
	class IntroJs implements TourInterface
	{
		//The main component
		private $tour = null;
		
		//Set the default options
		private $defaultOptions = array(
			'nextLabel' => 'Próx. >>',
            'prevLabel' => '<< Anter.',
            'doneLabel' => 'Terminar',
            'skipLabel' => 'Terminar',
            'exitOnEsc' => false,
            'showStepNumbers' => false,
            'steps' => array(),
            'onExit' => null,
            'onComplete' => null,
            'exitOnOverlayClick' => false
        );

		public $options = array();
		
		/**
		 * Create the component
		 */
		public function create()
		{
			$html = "<script>";

			$html .= "var intro = introJs();";

			$options = $this->defaultOptions;

			//If user defined options, merge with default options
			if(!empty($this->options))
			{
				$options = array_merge($options, $this->options);
			}

			$html .= "intro.setOptions(";

				$html .= json_encode($options);

			$html .= ");";

			//Se foi definida função após encerrar
			if(!is_null($options['onExit']))
			{
				$html .= "intro.onexit({$options['onExit']});";
			}	
			
			//Se foi definida função após completar
			if(!is_null($options['onComplete']))
			{
				$html .= "intro.oncomplete({$options['onComplete']});";
			}
			
			$html .= "</script>";

			$this->tour = $html;
		}

		/**
		 * Roda o script de inicialização/start do tour atual
		 * @return string Uma String HTML
		 */
		public function init()
		{
			$html = $this->get();

			$html .= "<script>";
				//Adicionado timer devido a possibilidade
				//de uso em modal. atrasando assim o carregamento
				//do DOM
				$html .= "$(function(){ ";
				$html .= "var tourTimeout = window.setTimeout(function(){";
					$html .= 'intro.start();';
					$html .= 'clearTimeout(tourTimeout);';
				$html .= "}, 1000);";
				$html .= "});";
			$html .= "</script>";

			echo $html;
		}

		/**
		 * Return the component
		 * 
		 * @return string
		 */
		public function get()
		{
			return $this->tour;
		}	

		/**
		 * Set a option and respective value
		 * 
		 * @param string $property
		 * @param string $value
		 */
		public function setOption($property, $value)
		{
			$this->setOption($property, $value);
		}

		/**
		 * Set multiple options
		 * 
		 * @param array $options
		 */
		public function setOptions($options = array())
		{
			$this->options = $options;
		}

		/**
		 * Set the array of steps
		 * 
		 * @param string $steps
		 */
		public function setSteps($steps = array())
		{
			$this->options['steps'] = $steps;
		}

		/**
		 * Set a JavaScript function to when exit the tour
		 * 
		 * @param string $function
		 */
		public function setOnExit($param)
		{
			$this->options['onExit'] = $param;
		}

		/**
		 * Set a JavaScript function to when complete the tour
		 * 
		 * @param string $function
		 */
		public function setOnComplete($param)
		{
			$this->options['onComplete'] = $param;
		}
	}