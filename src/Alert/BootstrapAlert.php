<?php namespace Carlohcs\JavaScript\Alert;

	/**
	 * BootstrapAlert
	 * 
	 * ----------------------
	 * Alert of Bootstrap
	 * ----------------------
	 * @author  Carlos Henrique Carvalho de Santana <carlohcs@gmail.com>
	 * @date 2014-08-04
	 */
	class BootstrapAlert implements AlertInterface
	{
		public $title = false;
		public $breakLine = false;
		public $content = '';
		public $closeBtn = true;
		public $type = '';
		public $types = array(
			'success' => 'alert-success',
			'warning' => 'alert-warning',
			'info' => 'alert-info',
			'danger' => 'alert-danger'
		);
		public $defaultType = 'warning';
		public $alert = '';

		public $containerAttributes = array();

		/**
		 * Create the component
		 */
		public function create()
		{
			$html = '';

			$containerAttributes = implode(" ", $this->containerAttributes);

			$html .= "<div class='alert {$this->type}' {$containerAttributes}>";
			
				if($this->closeBtn)
				{
					$html .= '<button type="button" class="close" data-dismiss="alert">×</button>';
				}
			
				if($this->title) 
				{
					$html .= "<strong>{$this->title}</strong>";
				}

				if($this->breakLine)
				{
					$html .= '<br />';
				}
	
				$html .= "<p>{$this->content}</p>";

			$html .= "</div>";

			$this->alert = $html;
		}
		
		/**
		 * Return the component
		 * 
		 * @return string
		 */
		public function get()
		{
			return $this->alert;
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
		 * Set a type
		 * 
		 * @param string $type
		 */
		public function setType($type)
		{
			$this->type = isset($this->types[$type]) ? $this->types[$type] : $this->type[$this->defaultType];
		}

		/**
		 * Set if the component can be closed
		 * 
		 * @param string $content
		 */
		public function setCloseBtn($closeBtn)
		{
			$this->closeBtn = $closeBtn;
		}
		
		/**
		 * Set if contains a space between title and content
		 * 
		 * @param boolean $breakLine
		 */
		public function setBreakLine($breakLine)
		{
			$this->breakLine = $breakLine;
		}

		/**
		 * Set container attributes
		 * 
		 * @param array $attributes
		 */
		public function setContainerAttributes($attributes)
		{
			$this->containerAttributes = $attributes;
		}

		/**
		 * Set dependencies necessaries to create or run the component
		 * @param  boolean|array $options
		 * @deprecated
		 */
		/*public function runDependencyRender($options = false)
		{
			echo "<style>
			.popover-fixed .popover {
			  position: relative;
			  display: block;
			  margin: 20px;
			}
			</style>";
			

			echo "<script>
			$(function(){
				$('.popover-fixed').popover();
			});
			</script>";
		}*/	

	}