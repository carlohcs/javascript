<?php
	
	//Files necessarys, but, prefer load with composer autoload.php
	//include '../PopoverInterface.php';
	//include '../BootstrapPopover.php';
	//include '../PopoverStrategy.php';

	require __DIR__.'/../../../vendor/autoload.php';

	//Use class
	use Carlohcs\JavaScript\Popover\PopoverStrategy;
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
			
			<h1>Popover - Examples</h1>

			<h4>Is just necessary CSS files.</h4>

			<h4>If you don't will manipulate the popovers, the scripts doesn't are needed.</h4>

			<div class="row">

				<div class="col-md-6">			
					
					<?php


						// ==================================================================
						//
						// Left
						//
						// ------------------------------------------------------------------

						$popover = new PopoverStrategy('BootstrapPopover');

						$popover->setTitle("Hi! I'm a popover!");
				  		
				  		$popover->setContent('This popover are in left position');
				  	
				  		$popover->setPosition('left');
				  		
				  		$popover->create();

				  		$popover->runDependencyRender();

						echo $popover->get();

					?>

					<div class="highlight">
					
						<code>
						$popover = new PopoverStrategy('BootstrapPopover');
						<br />
						$popover->setTitle("Hi! I'm a popover!");
				  		<br />
				  		$popover->setContent('This popover are in left position');
				  		<br />
				  		$popover->setPosition('left');
				  		<br />
				  		$popover->create();
						<br />
				  		$popover->runDependencyRender();
						<br />
						echo $popover->get();
						</code>

					</div>

					<hr />

					<?php

						// ==================================================================
						//
						// Top
						//
						// ------------------------------------------------------------------

						$popover = new PopoverStrategy('BootstrapPopover');

						$popover->setTitle("Hi! I'm a popover!");
				  		
				  		$popover->setContent('This popover are in top position');
				  	
				  		$popover->setPosition('top');
				  		
				  		$popover->create();

						echo $popover->get();

					?>
			
					<div class="highlight">
					
						<code>
						$popover = new PopoverStrategy('BootstrapPopover');
						<br />
						$popover->setTitle("Hi! I'm a popover!");
				  		<br />
				  		$popover->setContent('This popover are in top position');
				  		<br />
				  		$popover->setPosition('top');
				  		<br />
				  		$popover->create();
						<br />
						echo $popover->get();
						</code>

					</div>

				</div>

				<div class="col-md-6">

					<?php

						// ==================================================================
						//
						// Right
						//
						// ------------------------------------------------------------------
						
						$popover = new PopoverStrategy('BootstrapPopover');

						$popover->setTitle("Hi! I'm a popover!");
				  		
				  		$popover->setContent('This popover are in top position');
				  	
				  		$popover->setPosition('right');
				  		
				  		$popover->create();

						echo $popover->get();

					?>
			
					<div class="highlight">
					
						<code>
						$popover = new PopoverStrategy('BootstrapPopover');
						<br />
						$popover->setTitle("Hi! I'm a popover!");
				  		<br />
				  		$popover->setContent('This popover are in top position');
				  		<br />
				  		$popover->setPosition('right');
				  		<br />
				  		$popover->create();
						<br />
						echo $popover->get();
						</code>

					</div>

					<hr />

					<?php

						// ==================================================================
						//
						// Bottom
						//
						// ------------------------------------------------------------------
						
						$popover = new PopoverStrategy('BootstrapPopover');

						$popover->setTitle("Hi! I'm a popover!");
				  		
				  		$popover->setContent('This popover are in bottom position');
				  	
				  		$popover->setPosition('bottom');
				  		
				  		$popover->create();

						echo $popover->get();

					?>
			
					<div class="highlight">
					
						<code>
						$popover = new PopoverStrategy('BootstrapPopover');
						<br />
						$popover->setTitle("Hi! I'm a popover!");
				  		<br />
				  		$popover->setContent('This popover are in bottom position');
				  		<br />
				  		$popover->setPosition('bottom');
				  		<br />
				  		$popover->create();
						<br />
						echo $popover->get();
						</code>

					</div>

				</div>

			</div>

			<hr />
			
			<div class="row">

				<div class="col-md-6">			
					
					<h4>Types</h4>

					<br />

					<h5>Success</h5>

					<?php

						
						// ==================================================================
						//
						// Success
						//
						// ------------------------------------------------------------------

						$popover = new PopoverStrategy('BootstrapPopover');

						$popover->setTitle("Success!");
				  		
				  		$popover->setContent('All data has been saved!');
				  	
				  		$popover->setPosition('left');
				  		
				  		$popover->setType('success');
				  		
				  		$popover->create();

						echo $popover->get();

					?>
			
					<div class="highlight">
					
						<code>
						$popover->setType('success');
						</code>

					</div>

					<hr />

					<h5>Information</h5>

					<?php

						// ==================================================================
						//
						// Info
						//
						// ------------------------------------------------------------------

						$popover = new PopoverStrategy('BootstrapPopover');

						$popover->setTitle("Hi! I'm a popover!");
				  		
				  		$popover->setContent('We have updated our <strong>terms of service</strong>.');
				  	
				  		$popover->setPosition('left');
				  		
				  		$popover->setType('info');
				  		
				  		$popover->create();

						echo $popover->get();

					?>

					<div class="highlight">
					
						<code>
						$popover->setType('info');
						</code>

					</div>

				</div>

				<div class="col-md-6">			
				
					<h4>&nbsp;</h4>

					<br />

					
					<h5>Warning</h5>

					<?php

						// ==================================================================
						//
						// Warning
						//
						// ------------------------------------------------------------------

						$popover = new PopoverStrategy('BootstrapPopover');

						$popover->setTitle("Warning!");
				  		
				  		$popover->setContent('Be careful when changing this data.');
				  	
				  		$popover->setPosition('right');
				  		
				  		$popover->setType('warning');
				  		
				  		$popover->create();

						echo $popover->get();
						
						

					?>

					<div class="highlight">
					
						<code>
						$popover->setType('warning');
						</code>

					</div>

					<hr />

					
					<h5>Danger</h5>

					<?php

						// ==================================================================
						//
						// Danger
						//
						// ------------------------------------------------------------------

						$popover = new PopoverStrategy('BootstrapPopover');

						$popover->setTitle("Danger!");
				  		
				  		$popover->setContent('Are you shure?');
				  	
				  		$popover->setPosition('right');
				  		
				  		$popover->setType('danger');
				  		
				  		$popover->create();

						echo $popover->get();

					?>

					<div class="highlight">
					
						<code>
						$popover->setType('danger');
						</code>

					</div>

				</div>

			</div>

			<br />

			<div>
				<p class="text-center">By <a href="http://twitter.com/carlohcs" target="_blank">@carlohcs</a></p>
			</div>

		</div>

		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	</body>
</html>