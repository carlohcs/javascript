<?php
	
	//Files necessarys, but, prefer load with composer autoload.php
	//include '../AlertInterface.php';
	//include '../BootstrapAlert.php';
	//include '../AlertStrategy.php';

	require __DIR__.'/../../../vendor/autoload.php';

	//Use class
	use Carlohcs\JavaScript\Alert\AlertStrategy;
?>
<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Alerts Examples</title>

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
			
			<h1>Alert - Examples</h1>

			<h4>Is just necessary CSS files.</h4>

			<h4>If you not use the close button, doesn't necessary the scripts.</h4>
	
			<div class="row">

				<div class="col-md-6">			
					
					<?php


						// ==================================================================
						//
						// Success
						//
						// ------------------------------------------------------------------

						$alert = new AlertStrategy('BootstrapAlert');

						$alert->setTitle('Success!');

						$alert->setContent('All data has been saved!');

						$alert->setType('success');

						$alert->create();

						echo $alert->get();

					?>

					<div class="highlight">
					
						<code>
						$alert = new AlertStrategy('BootstrapAlert');
						<br />
						$alert->setTitle('Success!');
						<br />
						$alert->setContent('All data has been saved!');
						<br />
						$alert->setType('success');
						<br />
						$alert->create();
						<br />
						echo $alert->get();
						</code>

					</div>

					<hr />

					<?php

						// ==================================================================
						//
						// Warning
						//
						// ------------------------------------------------------------------

						$alert = new AlertStrategy('BootstrapAlert');

						$alert->setTitle('Warning!');

						$alert->setContent('Be careful when changing this data.');

						$alert->setType('warning');

						$alert->create();

						echo $alert->get();

					?>
			
					<div class="highlight">
					
						<code>
						$alert = new AlertStrategy('BootstrapAlert');
						<br />
						$alert->setTitle('Warning!');
						<br />
						$alert->setContent('Be careful when changing this data.');
						<br />
						$alert->setType('warning');
						<br />
						$alert->create();
						<br />
						echo $alert->get();
						</code>

					</div>

				</div>

				<div class="col-md-6">

					<?php

						// ==================================================================
						//
						// Info
						//
						// ------------------------------------------------------------------
						
						$alert = new AlertStrategy('BootstrapAlert');

						$alert->setTitle('Information:');
						
						$alert->setType('info');

						$alert->setContent('We have updated our <strong>terms of service.</strong>');

						$alert->create();

						echo $alert->get();

					?>
			
					<div class="highlight">
					
						<code>
						$alert = new AlertStrategy('BootstrapAlert');
						<br />
						$alert->setTitle('Information:');
						<br />
						$alert->setType('info');
						<br />
						$alert->setContent('We have updated our &lt;strong&gt;terms of service.&lt;/strong&gt;');
						<br />
						$alert->create();
						<br />
						echo $alert->get();
						</code>

					</div>

					<hr />

					<?php

						// ==================================================================
						//
						// Danger
						//
						// ------------------------------------------------------------------
						
						$alert = new AlertStrategy('BootstrapAlert');

						$alert->setTitle('Danger!');

						$alert->setType('danger');
						
						$alert->setBreakLine(true);

						$alert->setContent("Are you shure? <button class='btn btn-default'>Yes</button> <button class='btn btn-default'>No</button>");

						$alert->create();

						echo $alert->get();

					?>
			
					<div class="highlight">
					
						<code>
						$alert = new AlertStrategy('BootstrapAlert');
						<br />
						$alert->setTitle('Danger!');
						<br />
						$alert->setType('danger');
						<br />
						$alert->setBreakLine(true);
						<br />
						$alert->setContent("Are you shure? &lt;button class='btn btn-default'&gt;Yes&lt;/button&gt; &lt;button class='btn btn-default'&gt;No&lt;/button&gt;");
						<br />
						$alert->create();
						<br />
						echo $alert->get();
						</code>

					</div>

				</div>

			</div>

			<hr />
			
			<div class="row">

				<div class="col-md-6">			
					
					<h4>Just one line</h4>

					<?php

						// ==================================================================
						//
						// Just one line
						//
						// ------------------------------------------------------------------
						
						$alert = new AlertStrategy('BootstrapAlert');

						$alert->setTitle('Success! All data has been saved!');

						$alert->setType('success');

						$alert->create();

						echo $alert->get();

					?>
			
					<div class="highlight">
					
						<code>
						$alert = new AlertStrategy('BootstrapAlert');
						<br />
						$alert->setTitle('Success! All data has been saved!');
						<br />
						$alert->setType('success');
						<br />
						$alert->create();
						<br />
						echo $alert->get();
						</code>

					</div>

				</div>

				<div class="col-md-6">			
				
					<h4>Just one line without close button</h4>

					<?php

						// ==================================================================
						//
						// Just one line without close button
						//
						// ------------------------------------------------------------------
						
						$alert = new AlertStrategy('BootstrapAlert');

						$alert->setTitle('Success! All data has been saved!');

						$alert->setType('success');
						
						$alert->setCloseBtn(false);

						$alert->create();

						echo $alert->get();

					?>

					<div class="highlight">
					
						<code>
						$alert = new AlertStrategy('BootstrapAlert');
						<br />
						$alert->setTitle('Success! All data has been saved!');
						<br />
						$alert->setType('success');
						<br />
						$alert->setCloseBtn(false);
						<br />
						$alert->create();
						<br />
						echo $alert->get();
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