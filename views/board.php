<?php
	$title = 'SCRUM Board';

	include "includes/header.php";
?>

<div id='board'>
	<div id='waiting' class='wrapper'>
		<header class='sub'> Waiting </header>
		<div class='project'>
			<p>Project name</p>
			<div><span class="caret left"></span> <span class="caret right"></span></div>
		</div>
	
	</div>
	<div id='queue' class='wrapper'>
		<header class='sub'> Queue </header>
	
	</div>
	<div id='working' class='wrapper'>
		<header class='sub'> Working </header>

	</div>
	<div id='finished' class='wrapper'>
		<header class='sub'> Finished </header>

	</div>
</div>