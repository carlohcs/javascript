<?php namespace Carlohcs\JavaScript\Popover;

	/**
	 * BootstrapPopover
	 * 
	 * ----------------------
	 * Popover of Bootstrap
	 * ----------------------
	 * @author  Carlos Henrique Carvalho de Santana <carlohcs@gmail.com>
	 * @date 2014-08-01
	 */
	class BootstrapPopover implements PopoverInterface
	{
		public $title = '';
		public $content = '';
		public $closeBtn = '';
		public $position = '';
		public $positions = array(
			'top' => 'top',
			'left' => 'left',
			'right' => 'right',
			'bottom' =>'bottom'
			);
		public $defaultPosition = 'bottom';
		public $types = array(
			'default' => '',
			'success' => 'popover-success',
			'warning' => 'popover-warning',
			'info' => 'popover-info',
			'danger' => 'popover-danger'
		);
		public $defaultType = 'default';
		public $type = null;
		public $popover = '';

		/**
		 * Create the component
		 */
		public function create()
		{
			$html = '';

			$type = !is_null($this->type) ? $this->type : $this->types[$this->defaultType];

			$html .= "<div class='popover-fixed'>";
			
				$html .= "<div class='popover {$this->position}'>";

					$html .= "<div class='arrow'></div>";
					  
					$html .= "<h3 class='popover-title {$type}'>{$this->title}</h3>";

					$html .= "<div class='popover-content'>";

						$html .= "<p>{$this->content}</p>";

					$html .= "</div>";
				
				$html .= "</div>";
			
			$html .= "</div>";

			$this->popover = $html;
		}
		
		/**
		 * Return the component
		 * 
		 * @return string
		 */
		public function get()
		{
			return $this->popover;
		}	

		/**
		 * Set a title
		 * 
		 * @param string $title
		 */
		public function setTitle($title)
		{
			$this->title = $title;

		}

		/**
		 * Set a content
		 * 
		 * @param string $content
		 */
		public function setContent($content)
		{
			$this->content = $content;
		}

		/**
		 * Set a position
		 * 
		 * @param string $position
		 */
		public function setPosition($position)
		{
			$this->position = isset($this->positions[$position]) ? $this->positions[$position] : $this->positions[$this->defaultPosition];
		}

		/**
		 * Set a type
		 * 
		 * @param string $position
		 */
		public function setType($type)
		{
			$this->type = isset($this->types[$type]) ? $this->types[$type] : $this->types[$this->defaultType];
		}


		/**
		 * Set dependencies necessaries to create or run the component
		 * 
		 * @param  boolean|array $options
		 */
		public function runDependencyRender($options = false)
		{
			echo "<style>
			.popover-fixed .popover {
			  position: relative;
			  display: block;
			  margin: 20px;
			}

			/*Types*/
			
			.popover-title.popover-success
			{
				background-color: #1ab394;
				border-color: #1ab394;
				color: #ffffff;
			}

			.popover-title.popover-info
			{
			  	background-color: #23c6c8;
  				border-color: #23c6c8;
  				color: #ffffff;
			}

			.popover-title.popover-warning
			{
			  	background-color: #f8ac59;
				border-color: #f8ac59;
				color: #ffffff;
			}

			.popover-title.popover-danger
			{
			  	background-color: #ed5565;
  				border-color: #ed5565;
  				color: #ffffff;
			}
  

			</style>";
			

			echo "<script>
			if(window.jQuery)
			{
				$(function(){
					$('.popover-fixed').popover();
				});
			}
			else
			{
				var tmpjQuery = setInterval(function(){
					if(window.jQuery)
					{
						$(function(){
							$('.popover-fixed').popover();
						});
						clearInterval(tmpjQuery);
					}
				}, 1000);
			}
			</script>";
		}	

	}