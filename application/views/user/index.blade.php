<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	<div class="wrapper">
	    <header>
                    <h1>Laravel</h1>
                    <h2>A Framework For Web Artisans</h2>

                    <p class="intro-text" style="margin-top: 45px;">
                    </p>
            </header>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

    <table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Role</td>

		</tr>
	</thead>
	<tbody>
            foreach ($users as $user){
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->role }}</td>
            </tr>
	</tbody>
    </table>

</body>
</html>