<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VIHS Voting - Positions</title>
        <link href="/css/bootstrap.min.css" media="all" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    </head>
    <body>
       <div class="container">
            <form method="POST" action="createpost">
                @csrf
                <br>
                <label class="form-label" for="positionName">Post Name</label>
                <input type="text" class="form-control" name="postName" placeholder="Post Name" autocomplete="off" required>
                <br>
                <label class="form-label" for="voteCode">Vote Code</label>
                <input type="text" class="form-control" pattern="^[a-zA-Z]+$" name="voteCode" placeholder="Enter 1 Character (No Numbers Allowed)" minlength="1" maxlength="1" autocomplete="off" required>
                <br>
                <button class="btn btn-primary">Add Post</button>
            </form>
            <br><br>
            <h2>Currently Added Posts</h2>
            <table class="table table-striped">
                <thead>
                    <th scope="col">Post Number</th>
                    <th scope="col">Post Name</th>
                    <th scope="col">Vote Code</th>
                </thead>
                <tbody>

                </tbody>
            </table>
       </div>
    </body>
</html>
