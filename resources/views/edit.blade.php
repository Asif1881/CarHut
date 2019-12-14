

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="{{ route('asif') }}" method="get" accept-charset="utf-8">

                        <input type="text" name="myname" value="{{ $users->name }}">
                        <input type="email" name="myemail" value="{{ $users->email }}">
                        <button type="submit">save</button>
                    </form>

                    </body>
</html>