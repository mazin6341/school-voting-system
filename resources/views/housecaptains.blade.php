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
                <h2>Current Alpha House Captain Results</h2>
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
                        <th scope="row">13</th>
                        <td>Aminath Imhaal Afeef</td>
                        <td>{{$result['alphacand1']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mohamed Sidaf Ibrahim</td>
                        <td>{{$result['alphacand2']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>Ali Nawal Naeem</td>
                        <td>{{$result['alphacand3']}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <figure class="text-center">
                <h2>Current Beta House Captain Results</h2>
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
                        <td>{{$result['betacand1']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Fathimath Faruheen Firaq</td>
                        <td>{{$result['betacand2']}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <figure class="text-center">
                <h2>Current Delta House Captain Results</h2>
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
                        <th scope="row">15</th>
                        <td>Mariyam Jana Jinan</td>
                        <td>{{$result['deltacand1']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Hoodh Ibrahim</td>
                        <td>{{$result['deltacand2']}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <figure class="text-center">
                <h2>Current Gamma House Captain Results</h2>
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
                        <th scope="row">8</th>
                        <td>Eman Ahmed Ismail</td>
                        <td>{{$result['gammacand1']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Ayesha Alya Abdul Ghafoor</td>
                        <td>{{$result['gammacand2']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>Mashaa Ibrahim Shihab</td>
                        <td>{{$result['gammacand3']}}</td>
                    </tr>
                </tbody>
            </table>
       </div>
    </body>
</html>
