<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home view</title>
</head>
<body>
    @foreach($data as $v)
        title:{{ $v['title'] }}<br/>
    @endforeach
</body>
</html>