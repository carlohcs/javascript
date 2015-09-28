<?php
/**
* Tour Example - Steps
*
* ---------------------
*/
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