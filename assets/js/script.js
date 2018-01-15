$('li').on('click',this, function(){
	$(this).toggleClass('completed');

	$.post('done.php',
		{id: $(this).attr('id')},
		function(data,status){

		});



});


$('#newTask').keypress(function(event){

	if(event.which === 13){

		var todoText = $(this).val();
		// console.log(todoText)

		$(this).val('')

		$.post('create.php', 
			{task: todoText},
			function(data,status){

				$('ul').append('<li id="' + data + '"><span> <i class="fa fa-trash"></i>' + todoText + '</li>')
		})

		
	}

});

$('ul').on('click', 'span', function(){
	$(this).parent().fadeOut(500, function(){
		$(this).remove();
	});

	$.post('delete.php',
		{id: $(this).parent().attr('id')},
		function(data, status){
	
		});






});
