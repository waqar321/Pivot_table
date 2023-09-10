<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        /* Center the content vertically and horizontally */
        body {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            min-height: 100vh; /* Ensure the content takes up at least the viewport height */
            margin: 0;
        }

        /* Your existing table styles */
        th, td {
            border-bottom: 1px solid #CCC;
        }
        
        th {
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>Project</th>
                    <th>Users</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>{{$project->name}}</td>
                    <td>
                        <ul>
                            @foreach ($project->managers as $user)
                            <li>{{$user->first_name}} | {{ $user->pivot->is_manager }} |({{ $user->pivot->created_at }})</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
