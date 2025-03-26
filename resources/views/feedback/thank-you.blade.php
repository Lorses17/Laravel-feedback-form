<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за сообщение</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Спасибо за ваше сообщение!</h2>
        <p>Мы свяжемся с вами в ближайшее время.</p>
        <a href="{{ route('feedback.form') }}" class="btn btn-primary">Отправить еще одно сообщение</a>
    </div>
</body>
</html>
