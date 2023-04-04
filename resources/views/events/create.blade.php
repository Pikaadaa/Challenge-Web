<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Créer un event</title>
</head>
    <body>
        <div class="index">
            <div class="sidebar">
    
                <img class="logoiut" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThb3qCc1QG9bNgZaSpxu-HplKPB6-YKxb7uzKp_6QN8Q&s">
    
                <ul>
                    <li><a href="{{ route('events.index') }}">Events</a></li>
                    <li><a href="{{ route('events.index') }}">Events</a></li>
                    <li><a href="{{ route('events.index') }}">Events</a></li>
                </ul>
            </div>
    
            <div class="content">

                <h1 class="titre">Créer un événement</h1>

                <form class="form" method="POST" action="{{ route('events.store') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="lieu" class="form-label">Nom de l'IUT :</label>
                      <select class="form-select" id="lieu" name="lieu">
                        <option selected disabled>Choisir un IUT</option>
                        <option value="IUT de Paris">IUT de Paris</option>
                        <option value="IUT de Lyon">IUT de Lyon</option>
                        <option value="IUT de Lille">IUT de Lille</option>
                        <!-- Ajouter d'autres options pour les IUTs de France -->
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Nom de l'événement :</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                      <label for="date_fin" class="form-label">Date :</label>
                      <input type="date" class="form-control" id="date_fin" name="date_fin" required>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <a href="{{ route('events.index') }}" class="btn btn-secondary">Annuler</a>
                      <button type="submit" class="btn btn-primary">Créer l'événement</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>