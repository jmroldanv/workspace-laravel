<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>test-lang</title>
</head>
<body>
    <h1>test-lang: {{ app()->getLocale() }}</h1>

    <h2> @lang('messages.appTitle') </h2>

    <h3> {{ __('messages.appTitle') }} </h3>

</body>
</html>