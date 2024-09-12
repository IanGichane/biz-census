<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Profiles</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Services</th>
                    <th>Description</th>
          
                </tr>
            </thead>
            <tbody>
                @foreach($profiles as $profile)
                    <tr>
                        <td>{{ $profile->id }}</td>
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->category }}</td>
                        <td>{{ $profile->services }}</td>
                        <td>{{ $profile->description }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        </body>
</html>
