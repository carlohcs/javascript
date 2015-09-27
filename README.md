#Alert

The alert component provide a easy way to generate alert boxes. See the examples above.

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

If you need to provide close button at the alert component, you should integrate JQuery and Bootstrap scripts:

```
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
```


##Basic usage

###A success alert

```php

<?php

	$alert = new Carlohcs\JavaScript\Alert\AlertStrategy('BootstrapAlert');

	$alert->setTitle('Success!');

	$alert->setContent('All data has been saved!');

	$alert->setType('success');

	$alert->create();

	echo $alert->get();
```

##Available Methods 

##See Carlohcs\JavaScript\Alert\AlertStrategy

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

Set if alert can be closed

```php
$alert->setCloseBtn($closeBtn);
```

Set if will be created a brek between title and content

```php
$alert->setBreakLine($breakLine);
```

##Extends

You can extends the **AlertInterface** class to create your own Alert class.

```php

<?php

 	use Carlohcs\JavaScript\Alert\AlertInterface;
	
	class MyAlert implements AlertInterface
	{
		...

		public function setContent($content)
		{
			$newContent = "<div class='box-my-alert'>{$content}</div>";

			$this->content = $newContent;
		}

		...
	}

	$alert = new MyAlert();
	$alert->setContent('Amazing content.');
	$alert->create();
	echo $alert->get(); 
```