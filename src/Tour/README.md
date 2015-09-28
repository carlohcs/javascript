#Tour

The tour component provide a easy way to generate a guided tour in a page. See the examples above.

##Installation

```
composer require carlohcs/javascript
```

##Dependencies

The main packpage use [Intro.js](http://usablica.github.io/intro.js/) and [jQuery](http://jquery.org).

You can use Intro.js CDN or download it:

```html
<link href="http://usablica.github.io/intro.js/introjs.css" type="text/css" rel="stylesheet" />
		
<script src="http://usablica.github.io/intro.js/intro.js"></script>
```

You can use jQuery CDN or download it:

```
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
```


##Basic usage

###A simple tour

**PUT THE SCRIPTS AT END OF BODY TAG**

```php

<?php

	//Require the file with array of steps
	$steps = require_once './steps.php';

	//On exit function
	$onExit = "function(){
		alert('User has clicked has clicked in close button.');
	}";

	//On complete function
	$onComplete = "function(){
		alert('The tour has finished.');
	}";

	//Create a tour component
	$tour = new Carlohcs\JavaScript\Tour\TourStrategy();
	$tour->setSteps($steps);
	$tour->setOnExit($onExit);
	$tour->setOnComplete($onComplete);
	$tour->create();
	$tour->init();
```

The $steps variable should be a array with arrays appears with it:

```php

<?php

return array(
	array(
		'title' => 'Welcome to our product!',
		'intro' => '<div class="well" style="width: 200px; text-align: center;"><h3>Welcome to our Tour!</h3><h5>Press right key or click in Próximo.</h5></div>',
		'position' => 'bottom'
	),
	array(
		'element' => '#step-1',
		'title' => 'Easy to configure.',
		'intro' => '<h4>Just create your custom HTML and provide a id selector to elements that you want to display in tour.</h4>',
		'position' => 'bottom'
	),
	array(
		'element' => "#step-2",
		'title' => 'Create a array with the data.',
		'intro' => '<h4>See the examples/steps.php file to view a example of a tour array data.</h4>',
		'position' => 'top'
	),
	array(
		'element' => "#step-3",
		'title' => "Don't forget the dependencies!",
		'intro' => '<h4>To run this module, you need to put in your HTML: </h4><p><pre><code>&lt;link href="http://usablica.github.io/intro.js/introjs.css" type="text/css" rel="stylesheet" /&gt;
		&lt;script src="http://usablica.github.io/intro.js/intro.js"&gt;&lt;/script&gt;</code></pre></p>',
		'position' => 'bottom'
	),
	array(
		'element' => "#step-4",
		'title' => 'Se at this page a PHP example!',
		'intro' => '<h4>At this page, you can check the PHP implementation.</h4>',
		'position' => 'top'
	),
	array(
		'title' => 'Tour has finished!',
		'intro' =>
		'<div class="well" style="width: 200px;text-align: center;">
			<h3>Enjoy the component!</h3>
		</div>
		<p>
			<em>From your friend, <a href="http://twtitter.com/carlohcs" target="_blank">@carlohcs</a></em>
		</p>',
		'position' => 'bottom'
	)
);
```

##Available Methods 

##See Carlohcs\JavaScript\Tour\TourStrategy

Initialize the component

```php
$alert->init();
```

After the configurations, create the component

```php
$alert->create();
```

Return the component string

```php
$alert->get();
```

Set a option and respective value

```php
$alert->setOption($title);
```

Set multiple options

```php
$alert->setOptions($options);
```

Set the array of steps

```php
$alert->setSteps($steps);
```

Set a JavaScript function to when exit the tour

```php
$alert->setOnExit($onExit);
```

Set a JavaScript function to when complete the tour

```php
$alert->setOnComplete($onComplete);
```

##Extends

You can extends the **TourInterface** class to create your own Tour class.

```php

<?php

 	use Carlohcs\JavaScript\Tour\TourInterface;
	
	class MyTour implements TourInterface
	{
		...

		public function create()
		{
			$html = "<script>";

			$html .= "var someThing = new SomeThingTour();";

			if(isset($options['something']))
			{
				$html .= "someThing.prop = {$options['something']};";
			}

			$html .= "</script>";

			$this->tour = $html;
		}

		...
	}

	$tour = new MyTour();
	$tour->setSteps($stepsTutorial);
	$tour->setOnExit($functionOnExitComplete);
	$tour->setOnComplete($functionOnExitComplete);
	$tour->create();
	$tour->init();
```
