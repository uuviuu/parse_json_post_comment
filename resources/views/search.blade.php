<!doctype html>
<html lang="ru">

<head>
    <title> Search </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
</head>

<body>
    <div class="container mt-5">
        @if (!$comments->count())
            <div class="title">
                <h3>Совпадений не найдено</h3>
            </div>
        @else
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                    <div class="title">
                        <h3><b>Результаты поиска:</b></h3>
                    </div>
                    <div class="card shadow">
                        @foreach ($comments as $comment)
                            <div class="card-header">
                                <h4 class="card-title"><a class='text_b' href="{{ route('postDetail', $comment->post) }}"><b>{{ $comment->post->id}} пост:</b> {{ $comment->post->title}} </a></h4>
                                <h5 class="card-title"><b>Комментарий:</b> {{ $comment->body }} </h5>
                            </div>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary mb-2"><a class="text"
                                href="{{ route('posts') }}">Вернуться</a></button>
                    </div>
                </div>
            </div>
        @endif
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
