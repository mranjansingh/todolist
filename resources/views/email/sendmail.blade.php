<!DOCTYPE html>
<html>
<head>
    <title>TO-DO-LIST</title>
</head>
<body>
<p>Dear</p> 
<p><b>{{ $mailData['name']}}</b></p>
<p>{{ $mailData['subject']}}</p>
@if($mailData['status'] == 1)
<p>Your Task In-progress </p>
@else
<p>Your Task is completed </p>
@endif
<p>Thanks & Regards</p>
<p>Muzammil</p>
</body>
</html>