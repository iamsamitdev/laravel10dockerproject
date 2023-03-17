<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        
    </head>
    <body>
        <div class="container-fluid text-end bg-dark">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

        <div>
            <h1>Home Page</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, optio quod error nihil voluptate quas iure minus officia nam beatae ea nobis unde. Est facere perferendis delectus deserunt asperiores laudantium, pariatur iusto natus provident excepturi, cupiditate iste repellat magnam ducimus distinctio temporibus necessitatibus tempore fugit, adipisci quisquam nostrum! Voluptatibus, ullam quisquam sequi laborum sint molestiae. Repellendus molestias, deleniti repudiandae, mollitia dicta ullam quia possimus sit voluptas perspiciatis similique. Laborum officia neque rerum odio totam consequuntur minima? Inventore in maxime animi nulla quis, corrupti cumque placeat voluptatibus amet, nobis enim dicta repellat. Aperiam modi laborum saepe ex non et iste ab!</p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
