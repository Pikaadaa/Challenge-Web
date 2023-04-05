<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>
    <div class="index">

        <div class="sidebar">

            <img class="logoiut" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThb3qCc1QG9bNgZaSpxu-HplKPB6-YKxb7uzKp_6QN8Q&s">

            <ul>
                <li><a href="/">Dashboard</a></li>
                <li><a href="{{ route('events.index') }}">Events</a></li>
                @if(Auth::user()->role == 'admin')
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                @endif
            </ul>
        </div>

        <div class="content">

            <div class="titre_btn">
                <h1 class="titre">Users</h1>
            </div>

            <div class="all_cards">
                @foreach($users as $user)
                        <div class="card border-rounded">
                            <div class="card-body">
                                <div class="text">
                                    <h5 class="card-title mb-4 mt-2" id="event-name">{{$user->name}}</h5>
                                </div>
                                <h6 class="card-subtitle mb-2 text-muted" id="iut-name">{{$user->email}}</h6>
                                <p class="card-text">{{ $user->role }}</p>
                                <p class="card-text">
                                    <i class="bi bi-calendar3"></i> <span id="event-date">{{$user->created_at->format('d/m/Y')}}</span>
                                </p>
                                <div class="buttons">
                                    <form action="{{ route('users.destroy',['user' => $user]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        @if(Auth::user()->role == 'admin')
                                            <button class="bg-danger btn btn-danger" type="submit">Supprimer</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>