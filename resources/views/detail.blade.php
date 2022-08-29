<!doctype html>
<html lang="ru">

<head>
    <title> {{ $post->id }} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title"> <b>Информация по посте</b> {{ $post->title }}: </h4>
                    </div>
                    <div class="card-body">
                        <p><b>id:</b> {{ $post->id }}</p>
                        <p><b>userId:</b> {{ $post->userId }}</p>
                        <p><b>title:</b> {{ $post->title }}</p>
                        <p><b>body:</b> {{ $post->body }}</p>
                    </div>
                    <div class="card-header">
                        <h4 class="card-title"> <b>Комментарии к этому посту:</b></h4>
                    </div>
                    @foreach ($post->comments as $comment)
                    <div class="card-body">
                        <p><b>id:</b> {{ $comment->id }}</p>
                        <p><b>postId:</b> {{ $comment->postId }}</p>
                        <p><b>name:</b> {{ $comment->name }}</p>
                        <p><b>email:</b> {{ $comment->email }}</p>
                        <p><b>body:</b> {{ $comment->body }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
