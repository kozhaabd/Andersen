<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('registration.post')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
        <div class="mb-3">
          <label for="exampleInputmessage1" class="form-label">Message</label>
          <input type="text" class="form-control" name="message">
        </div>
        <div class="mb-3 form-check">

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <button type="button" class="btn btn-primary" style="position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%);" onclick="window.location.href='{{ route('messages') }}'">See Messages</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>