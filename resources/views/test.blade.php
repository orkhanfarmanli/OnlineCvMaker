
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
{!! Form::open(array('url' => 'test')) !!}
    {!! Form::text('language') !!}
    {!! Form::text('level') !!}
    {!! Form::text('cv_id') !!}
    {!! Form::submit('submit') !!}
{!! Form::close() !!}
</body>
</html>