<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VIHS Voting</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    </head>
    <body>
       <div class="container">
           <br>
            <figure class="text-center">
                <h2>Current School Captain Results</h2>
            </figure>
            <br>
            <table class="table table-striped">
                <thead>
                    <th scope="col">Candidate Number</th>
                    <th scope="col">Candidate Name</th>
                    <th scope="col">Amount of Votes</th>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">18</th>
                        <td>Ali Dhaain Nash'ath</td>
                        <td>{{$result['cand1']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Aishath Sara Ahmed</td>
                        <td>{{$result['cand2']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Eman Ahmed Ismail</td>
                        <td>{{$result['cand3']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Fathimath Zaina Naeem</td>
                        <td>{{$result['cand4']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>Mariyam Jana Jinan</td>
                        <td>{{$result['cand5']}}</td>
                    </tr>
                </tbody>
            </table>
       </div>
    </body>
</html>
