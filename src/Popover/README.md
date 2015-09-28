#Popover

The popover component provide a easy way to generate popover boxes. See the examples above.

##Installation

```
composer require carlohcs/javascript
```

##Dependencies

The main packpage use bootstrap.

You can use Bootstrap CDN:  

```html
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
```

If you don't will manipulate the popovers, the scripts doesn't are needed.

```
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
```


##Basic usage

###A default popover

```php

<?php

	$popover = new Carlohcs\JavaScript\Popover\PopoverStrategy('BootstrapAlert');

	$popover->setTitle("Hi! I'm a popover!");

	$popover->setContent('This is a simple message.');

	$popover->create();

	echo $popover->get();
```

##Available Methods 

##See Carlohcs\JavaScript\Popover\PopoverStrategy

After the configurations, create the component

```php
$alert->create();
```

Return the component string

```php
$alert->get();
```

Set a title

```php
$alert->setTitle($title);
```

Set the content

```php
$alert->setContent($content);
```
Set the alert's type

Types availables:

- success

- danger

- info

- warning

```php
$alert->setType($type);
``` 

Set the position

Positions availables:

- left

- right

- top

- bottom

The default position is *bottom*.

```php
$alert->setPosition($position);
```

Set dependencies necessaries to create or run the component

```php
$alert->runDependencyRender($options);
```

##Extends

You can extends the **PopoverInterface** class to create your own Popover class.

```php

<?php

 	use Carlohcs\JavaScript\Popover\PopoverInterface;
	
	class MyPopover implements PopoverInterface
	{
		...

		public function setContent($content)
		{
			$newContent = "<div class='box-my-popover'>{$content}</div>";

			$this->content = $newContent;
		}

		...
	}

	$popover = new MyPopover();
	$popover->setContent('Amazing content.');
	$popover->create();
	echo $popover->get(); 
```