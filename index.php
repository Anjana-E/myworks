<!DOCTYPE html>
<html>
<head>
	<title>PHP AJAX CRUD</title>

	<link rel="stylesheet" href="jquery-ui.css">
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="jquery.min.js"></script>
	<script src="jquery-ui.js"></script>
</head>
<body>
	<div class="container">
		<br/>
		<h3 align="center">PHP Ajax crud using JQuery UI Dialog Box</a></h3><br />
		<br />
		<div align="right" style="margin-bottom: 5px;">
<button type ="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>

		</div>
		<div id="user_data" class="table-responsive">
			<br />
		</div>
<div id="user_dialog" title= "Add Data">
	<form method ="post" id="user_form">

		<div class="form-group">
			<label> Enter First Name</label> 
			<input type="text" name="first_name" id="first_name" class="form-control" />
			<span id="error_first_name" class="text-danger"></span>
</div>
<div class="form-group">
			<label> Enter Last Name</label> 
			<input type="text" name="last_name" id="last_name" class="form-control" />
			<span id="error_last_name" class="text-danger"></span>
</div>
<div class="form-group">
	<input type="hidden" name="action" id="action" value="insert" />
	<input type="hidden" name="hidden_id" id="hidden_id" />
	<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" />
	

	</div>

</form>
</div>
<div id="action_alert" title="Action">
</div>
</body>
</html>
<script>
	$(document).ready(function(){
		load_data();
		function load_data()
		{
			$.ajax({
				url:"fetch.php";
				method:"POST",
				success:function(data){
					$('#user_data').html(data);
				}
			})

		}

		$('#user_dialog').dialog({
			autoOpen:false,
		width:400
		});
		$('#add').click(function(){
			$('#user_dialog').attr('title', 'Add Data');
			$('#action').val('insert');
			$('#form_action').val("Insert");
			$('#form_dialog').dialog('open');

		});

		$('#user_form').on('submit' , function(event){
			event.preventDefault();
			var error_first_name= '';
			var error_last_name= '';
			if ($('#first_name').val() =='') {

				error_first_name="First Name is required";
				$('error_first_name').text(error_first_name);
				$('#first_name').css('border-color' , '#cc0000');

			}
			else
			{

				error_first_name='';
				$('#error_first_name').text(error_first_name);
				$('#first_name').css(border-color,'');

			}

			if($('last_name').val()=='')
            
            {
              error_last_name="Last Name is required";
              $('#error_last_name').text(error_last_name);
              $('#last_name').css('border-color', '#cc0000');
            }

            else
            {
            	error_last_name='';
            	$('#error_last_name').text(error_last_name);
            	$('#last_name').css('border-color', '#cc0000');
            }

            if(error_first_name=='' || error_last_name =='')
            {
            	return false;
            }

            else
            {
            	$('#form_action').attr('disabled','disabled');
            	var form_data =$(this).serialize();
            	$.ajax({

            		url:"action.php",
            		method:"POST",
            		data:form_data,
            		success:function(data)
            		{
                       $('#user_dialog').dialog('close');
                       $('#action_alert').html(data);
                       $('#action_alert').dialog('open');
                       load_data();
            		}
            	});
            }
		});
		$('#action_alert').dialog({
			autoOpen:false
		});

	});
</script>