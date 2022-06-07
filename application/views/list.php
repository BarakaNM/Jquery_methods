<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>To Do List</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>

	<div class="row" style="margin-top:170px"></div>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1>My To-Do-List</h1>
	<input type="text" class="form-control" placeholder="New Item"/>
	<div class="row" style="margin-top:10px"></div>
	<button class="btn btn-primary" id="add">Add</button>
	<ol id="mylist"></ol>
		</div>
		<div class="col-md-4"></div>
	</div>





</body>
<script type="text/javascript">
	$(function(){
		$("#add").click(function(){
			var val = $("input").val();
			if(val !== ''){
               var elem = $("<li></li>").text(val);
               $(elem).append("    <button class='rem btn btn-primary'>remove</button>");
               $("#mylist").append(elem);
               $("input").val("");
               $(".rem").click(function(){
               	$(this).parent().remove();
               });
			}
			else{
				$("input").val("Please right down an item");
			}

		});
	});
	
</script>	
</html>

