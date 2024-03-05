<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des incidents</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Styles CSS personnalisés */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px auto;
            width: 80%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .actions {
            width: 60px;
        }
        .actions a {
            text-decoration: none;
            margin-right: 5px;
        }
        .actions a:hover {
            color: blue;
        }
        .delete-btn {
            color: red;
        }
        .delete-btn:hover {
            color: darkred;
        }
    </style>
</head>
<body>
   

<div class="container">
    <h2 class="text-center">
        <span style="font-weight: bold; color: rgb(123, 123, 255);">Modifier un incident</span>
    </h2>
    @if (Session::has("success"))
        <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    
@endif
    <table>
        <a href="{{url('/addincident')}}" class="btn btn-primary" style="margin-right: 5px;">+ Add incident</a>
        <thead>
            <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Type</th>
                <th>Sévérité</th>
                <th>Date de l'incident</th>
                <th>Date de déclaration</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through incidents data -->
            @foreach ($incidents as $itt)
               <tr>
                <td>{{$itt->id}}</td>
                <td>{{$itt->name}}</td>
                <td>{{$itt->description}}</td>
                <td>{{$itt->type}}</td>
                <td>{{$itt->severity}}</td>
                <td>{{$itt->incident_date }} </td>
                <td>{{$itt->declaration_date }}</td>
                <td class="actions">
                    <div style="display: flex; align-items: center;">
                        <a href="{{url('editincident/'.$itt->id)}}" title="Modifier"><i class="fas fa-edit"></i></a>
                
                        <form action="{{ url('/delete/' . $itt->id) }}" method="POST">
                            @csrf
                            @method("delete")
                            <button type="submit" id="delete" class="btn btn-danger" style="margin-right: 5px;">Delete</button>
                        </form>
                
                        
                    </div>
                </td>
            </tr>  
            @endforeach
           
            <!-- Add more rows for other incidents -->
        </tbody>
    </table>
</div>

<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
