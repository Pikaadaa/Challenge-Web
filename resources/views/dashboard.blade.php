<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Events</title>
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
                <h1 class="titre">Bonjour {{  Auth::user()->name }}</h1>
            </div>

            <div class="dashboard">
                <div class="gauche">
                    <div class="mes_events">
                        <h3>Mes events</h3>
                        <ul>
                        </ul>
                    </div>
                </div>

                <div class="droite">
                    <div class="participation_events">
                        <h3>Events auquels je participe</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>