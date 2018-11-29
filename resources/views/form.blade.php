<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
</head>
<body>

	<div id="root">
	
		@include('displayName')

		<form method="POST" action="/projects" @submit.once="onSubmit()" @keydown="errors.clear()">

			{{csrf_field()}}

			<div class="control">

				<label>Project Name:</label>

				<input type="text" name="projectName" id="name" v-model="name"> <br> <br>

				<span class="help is-danger" v-text="errors.get('name')"> </span> <br> <br>

			</div>

			<div class="control">
				
				<label>Project Description:</label>

				<input type="text" name="projectDescription" id="description" v-model="description"> <br> <br>

				<span class="help is-danger" v-text="errors.get('description')"> </span> <br> <br>

				<button type="submit"> Create </button>

			</div>

		</form>

	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>



</body>
</html>