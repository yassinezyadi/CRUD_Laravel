<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un incident</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Styles CSS personnalisés */
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">
        <span style="font-weight: bold; color: rgb(123, 123, 255);">Ajouter un incident</span>
    </h2>
    <a href="{{url('/table')}}" class="btn btn-primary" style="margin-right: 5px;">L'affichage des donnees </a>

    @if (Session::has("success"))
    <div class="alert alert-success">
      {{Session::get('success')}}
    </div>
@endif
    <form action="{{url('create')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select class="form-control" id="type" name="type" required>
                <option value="M">M</option>
                <option value="L">L</option>
            </select>
        </div>
        <div class="form-group">
            <label for="severity">Sévérité:</label>
            <input type="number" class="form-control" id="severity" name="severity" required>
        </div>
        <div class="form-group">
            <label for="incident_date">Date de l'incident:</label>
            <input type="date" class="form-control" id="incident_date" name="incident_date" required>
        </div>
        <div class="form-group">
            <label for="declaration_date">Date de déclaration:</label>
            <input type="date" class="form-control" id="declaration_date" name="declaration_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
