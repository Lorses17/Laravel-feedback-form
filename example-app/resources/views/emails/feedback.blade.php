<!DOCTYPE html>
<html>
<head>
    <title>Новое сообщение обратной связи</title>
</head>
<body>
    <h2>Новое сообщение от {{ $data['name'] }}</h2>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Сообщение:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
