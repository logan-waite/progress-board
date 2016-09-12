<?php
	$title = 'SCRUM Board';

	include "includes/header.php";
?>

<div id='board'>
	<div class='wrapper'>
		<header class='sub'> Waiting </header>
		<div class="panel-group" id="waiting" role="tablist" aria-multiselectable="true" ondrop="drop(event)" ondragover="allowDrop(event)">
		</div>

	
	</div>
	<div class='wrapper'>
		<header class='sub'> Queue </header>
		<div class="panel-group" id="queue" role="tablist" aria-multiselectable="true" ondrop="drop(event)" ondragover="allowDrop(event)">
		</div>
	</div>
	<div class='wrapper'>
		<header class='sub'> Working </header>
			<div class="panel-group" id="working" role="tablist" aria-multiselectable="true" ondrop="drop(event)" ondragover="allowDrop(event)">
			  <div class="panel panel-default" draggable="true" ondragstart="drag(event)">
			    <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#working" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			      <h4 class="panel-title">
			          Project #1
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			      <ul class="list-group">
			      	<li class='list-group-item project-options'>
			      	    <div class='btn btn-primary'>Info</div>
			      		<div class='btn btn-primary'><i class='fa fa-plus'></i></div>
			      		<div class='btn btn-primary'><i class='fa fa-minus'></i></div>
			      	</li>
			      	<li class="list-group-item list-group-item-danger"><i class='fa fa-times'></i>Task 1</li>
			      	<li class="list-group-item list-group-item-success"><i class='fa fa-check'></i>Task 2</li>
			      </ul>
			    </div>
			  </div>
			  <div  class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#working" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			      <h4 class="panel-title">
			          Project #2
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			      <div class="list-group">
			        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			      </div>
			    </div>
			  </div>
			  <div id="project3" class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingThree" data-toggle="collapse" data-parent="#working" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			      <h4 class="panel-title">
			          Project #3
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			      <ul class="list-group">
			      	<li class="list-group-item">Part 1</li>
			      	<li class="list-group-item">Part 2</li>
			      </ul>
			    </div>
			  </div>
			</div>
	</div>
	<div class='wrapper'>
		<header class='sub'> Finished </header>
		<div class="panel-group" id="finished" role="tablist" aria-multiselectable="true" ondrop="drop(event)" ondragover="allowDrop(event)">
		</div>
	</div>
</div>