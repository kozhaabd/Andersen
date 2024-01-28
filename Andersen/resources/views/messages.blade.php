<!-- messages.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <h1>All Users</h1>

    <table class="table table-striped-columns">
        <th scope="col" scope="col"ead>
            <tr class="table-primary">
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($users as $user)
                <tr class="table-primary">
                    <td class="table-secondary">{{ $user->name }}</td>
                    <td class="table-secondary">{{ $user->email }}</td>
                    <td class="table-secondary">{{ $user->message }}</td>
                    <td class="table-secondary">{{ $user->created_at }}</td>
                    <td class="table-secondary">{{ $user->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
