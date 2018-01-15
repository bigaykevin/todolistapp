<?php 

	$todos = file_get_contents('assets/todos.json');
	$todos = json_decode($todos, true);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<script src="https://use.fontawesome.com/0b6fab0879.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>PHP To-Do List</title>
</head>
<body>

	<div id="container">
		<h2>TO-DO LIST<i class="fa fa-plus"></i></h2>
		<input type="text" name="" id="newTask" placeholder="Add New Task">

		<ul>
			<?php 
				foreach ($todos as $key => $todo) {

						

					if($todo['done'] === false){
						echo '<li id=' . $key . '>' . $todo['task'] . '<span><i class="fa fa-times"></i></span></li>';
					} else {

						echo '<li id=' . $key . ' class="completed">' . $todo['task'] . '<span><i class="fa fa-times"></i></span></li>';
					};
				};


			 ?>
		</ul>



	</div>





	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>