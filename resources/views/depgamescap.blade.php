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
                        <th scope="row">16</th>
                        <td>Ahil Asim Abdulla</td>
                        <td>{{$result['cand1']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Fathimath Nadh'ha Nahid Shaugy</td>
                        <td>{{$result['cand2']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Ayesha Alya Abdul Ghafoor</td>
                        <td>{{$result['cand3']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">19</th>
                        <td>Aminath Rafahath Hassan</td>
                        <td>{{$result['cand4']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mohamed Sidaf Ibrahim</td>
                        <td>{{$result['cand5']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">17</th>
                        <td>Azaan Ahmed Rasheed</td>
                        <td>{{$result['cand6']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Mohamed Hammad Hamid</td>
                        <td>{{$result['cand7']}}</td>
                    </tr>
                </tbody>
            </table>
       </div>
    </body>
</html>
