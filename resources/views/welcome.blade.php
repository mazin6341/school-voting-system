<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VIHS Voting</title>
        <link href="/css/bootstrap.min.css" media="all" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    </head>
    <body>
       <div class="container">
            <form method="POST" action="votevalidate">
                @csrf
                <br><br>
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                You have entered an invalid code!
                </div>
                @endif
                @if(\Session::has('exists'))
                <div class="alert alert-danger" role="alert">
                The code has already been used or is invalid.
                </div>
                @endif
                <figure class="text-center">
                    <label for="voteCode" class="form-label">Enter your 6 Digit Code</label>
                </figure>
                <input type="text" autocomplete="off" id="voteCode" name="voteCode" class="form-control" placeholder="Enter 6 Digit Code" style="text-align: center" minlength="6">
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit">Proceed</button>
                </div>
            </form>
       </div>
    </body>
</html>
