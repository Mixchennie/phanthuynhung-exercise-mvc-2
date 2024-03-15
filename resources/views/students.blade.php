<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
<p>List of student</p>
@foreach($students as $student)
{{$student->name .' in class '. $student->class. " is ".$student->age}}
@endforeach
</body>

</html>