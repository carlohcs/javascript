<?php
	
	//Files necessarys, but, prefer load with composer autoload.php
	//include '../TourInterface.php';
	//include '../IntroJs.php';
	//include '../TourStrategy.php';

	require __DIR__.'/../../../vendor/autoload.php';

	//Use class
	use Carlohcs\JavaScript\Tour\TourStrategy;
?>
<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Popovers Examples</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />

		<style type="text/css">
			.highlight {
			  padding: 9px 14px;
			  margin-bottom: 14px;
			  background-color: #f7f7f9;
			  border: 1px solid #e1e1e8;
			  border-radius: 4px;
			}
		</style>

	</head>
	<body>

		<div class="container">
			
			<h1>Tour - Example</h1>

			<div class="row">

				<div class="col-md-6">

					<div class="well" id="step-1">
						
						This is the step one!

					</div>

				</div>

				<div class="col-md-6">

					<div class="well" id="step-3">
						
						This is the step three!

					</div>

				</div>

			</div>
			
			<div class="row">

				<div class="col-md-6">			
					
					<div class="well" id="step-2">
						
						This is the step two!

					</div>

				</div>

				<div class="col-md-6">

					<div class="well" id="step-4">
						
						This is the step four!

					</div>

				</div>

			</div>

			<br />

			<h4 style="color: red;">BODY TAG</h4>

			<h4>How to</h4>

			<div class="highlight">
			
				<code>
				//Steps
				<br />
				<br />
				//Require the file with array of steps
				<br />
				<br />
				$steps = require_once './steps.php';
				<br />
				<br />
				//or 
				<br />
				<br />
				$steps = array(<br />
					array(<br />
						'title' => 'Welcome to our product!',<br />
						'intro' => '&lt;h3&gt;Welcome to our Tour!&lt;/h3&gt;>',<br />
						'position' => 'bottom'<br />
					),<br />
					array(<br />
						'element' => '#step-1',<br />
						'title' => 'Easy to configure.',<br />
						'intro' => '&lt;h4&gt;Just create your custom HTML and provide a id selector to elements that you want to display in tour.&lt;/h4&gt;',<br />
						'position' => 'bottom'<br />
					),<br />
					array(<br />
						'title' => 'Tour has finished!',<br />
						'intro' =>
						'&lt;h3&gt;Enjoy the component!&lt;/h3&gt;',<br />
						'position' => 'bottom'<br />
					)<br />
				);<br />
				<br />
				//On exit function
				<br />
				$onExit = "function(){
					alert('User has clicked has clicked in close button.');
				}";
				<br />
				//On complete function
				<br />
				<br />
				$onComplete = "function(){
					alert('The tour has finished.');
				}";
				<br />
				<br />
				//Create a tour component
				<br />
				$tour = new TourStrategy();
				<br />
				$tour->setSteps($steps);
				<br />
				$tour->setOnExit($onExit);
				<br />
				$tour->setOnComplete($onComplete);
				<br />
				$tour->create();
				<br />
				$tour->init();
				</code>

			</div>
			
			<div>
				<p class="text-center">By <a href="http://twitter.com/carlohcs" target="_blank">@carlohcs</a></p>
			</div>

		</div>

		<!-- Scripts -->

		<!-- 
			ALL ABOVE FILES ARE NECESSARY TO RUN THIS MODULE
		-->
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

		<link href="http://usablica.github.io/intro.js/introjs.css" type="text/css" rel="stylesheet" />
		
		<script src="http://usablica.github.io/intro.js/intro.js"></script>
		
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
			$tour = new TourStrategy();
			$tour->setSteps($steps);
			$tour->setOnExit($onExit);
			$tour->setOnComplete($onComplete);
			$tour->create();
			$tour->init();
		?>

	</body>
</html>