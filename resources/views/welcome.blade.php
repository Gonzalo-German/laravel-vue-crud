<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel & VUE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
    <div id="main" class="container">
		<div class="row">
			<div class="col-sm-4">
				<h1>VUEjs - AJAX axios</h1>
				<ul class="list-group">
					<li v-for="item in lists" class="list-group-item">						
						@{{ item.name }}
					</li>
				</ul>
			</div>
			<div class="col-sm-8">
				<h1>JSON VIDEO 2</h1>
				<pre>
					@{{ $data }}
				</pre>
			</div>
		</div>
	</div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
