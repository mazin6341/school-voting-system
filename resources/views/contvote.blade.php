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
            <form method="POST" action='compvote'>
                @csrf
                <br><br>
                <input type="text" name="voteCode" value="{{ $parseData['votecode'] }}" hidden>
                <figure class="text-center">
                    <h3><label for="voteCode" class="form-label">Select the candidate you want to vote for</label></h3>
                </figure>
                {{-- 
                    First Line Codes
                    a = Alpha House, b = Beta House, d = Delta House, g = Gamma House
                    s = School Captain, t = Deputy School Captain, u = Games Captain, v = Deputy Games Captain
                --}}

                {{-- SCHOOL CAPTAIN SECTION --}}
                @if($parseData['fCharVoteCode'] == 's')
                <h2>School Captain</h2>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/18.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Ali Dhaain Nash'ath</h4>
                                <h5>Class - J12I</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice1" value="18" required>
                                    <label class="form-check-label" for="choice1">
                                        Candidate Number 18
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/6.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Aishath Sara Ahmed</h4>
                                <h5>Class - J12C</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice2" value="6">
                                    <label class="form-check-label" for="choice2">
                                        Candidate Number 6
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/8.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Eman Ahmed Ismail</h4>
                                <h5>Class - J12L</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice3" value="8">
                                    <label class="form-check-label" for="choice3">
                                        Candidate Number 8
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/10.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Fathimath Zaina Naeem</h4>
                                <h5>Class - J12I</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice4" value="10">
                                    <label class="form-check-label" for="choice4">
                                        Candidate Number 10
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/15.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Mariyam Jana Jinan</h4>
                                <h5>Class - J12D</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice5" value="15">
                                    <label class="form-check-label" for="choice5">
                                        Candidate Number 15
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- DEPUTY SCHOOL CAPTAIN SECTION --}}
                @elseif($parseData['fCharVoteCode'] == 't')
                <h2>Deputy School Captain</h2>
                <div class="card" hidden>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/18.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Ali Dhaain Nash'ath</h4>
                                <h5>Class - J12I</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice6" value="18">
                                    <label class="form-check-label" for="choice6">
                                        Candidate Number 18
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/6.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Aishath Sara Ahmed</h4>
                                <h5>Class - J12C</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice7" value="6">
                                    <label class="form-check-label" for="choice7">
                                        Candidate Number 6
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/8.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Eman Ahmed Ismail</h4>
                                <h5>Class - J12L</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice8" value="8">
                                    <label class="form-check-label" for="choice8">
                                        Candidate Number 8
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/9.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Aminath Maiha</h4>
                                <h5>Class - J12F</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice9" value="9">
                                    <label class="form-check-label" for="choice9">
                                        Candidate Number 9
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/13.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Aminath Imhaal Afeef</h4>
                                <h5>Class - J12B</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice10" value="13">
                                    <label class="form-check-label" for="choice10">
                                        Candidate Number 13
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- GAMES CAPTAIN SECTION --}}
                @elseif($parseData['fCharVoteCode'] == 'u')
                <h2>Games Captain</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/7.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Eva Mohamed Shiyam</h4>
                                <h5>Class - J12M</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice11" value="7">
                                    <label class="form-check-label" for="choice11">
                                        Candidate Number 7
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/16.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Ahil Asim Abdulla</h4>
                                <h5>Class - J12B</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice12" value="16">
                                    <label class="form-check-label" for="choice12">
                                        Candidate Number 16
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{-- DEPUTY GAMES CAPTAIN SECTION FOR GIRLS --}}
                @elseif($parseData['fCharVoteCode'] == 'v')
                <h2>Deputy Games Captain Girls</h2>
                <div class="card" hidden>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/16.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Ahil Asim Abdulla</h4>
                                <h5>Class - J12B</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice13" value="16">
                                    <label class="form-check-label" for="choice13">
                                        Candidate Number 16
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/11.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Fathimath Nadh'ha Nahid Shaugy</h4>
                                <h5>Class - J12B</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice14" value="11">
                                    <label class="form-check-label" for="choice14">
                                        Candidate Number 11
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/2.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Ayesha Alya Abdul Ghafoor</h4>
                                <h5>Class - J12C</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice15" value="2">
                                    <label class="form-check-label" for="choice15">
                                        Candidate Number 2
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/19.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Aminath Rafahath Hassan</h4>
                                <h5>Class - J12G</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice16" value="19">
                                    <label class="form-check-label" for="choice16">
                                        Candidate Number 19
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{-- DEPUTY GAMES CAPTAIN SECTION FOR BOYS--}}
                @elseif($parseData['fCharVoteCode'] == 'w')
                <h2>Deputy Games Captain Boys</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/1.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Mohamed Sidaf Ibrahim</h4>
                                <h5>Class - J12A</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice17" value="1">
                                    <label class="form-check-label" for="choice17">
                                        Candidate Number 1
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/17.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Azaan Ahmed Rasheed</h4>
                                <h5>Class - J12F</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice18" value="17">
                                    <label class="form-check-label" for="choice18">
                                        Candidate Number 17
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/5.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Mohamed Hammad Hamid</h4>
                                <h5>Class - J12M</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice19" value="5">
                                    <label class="form-check-label" for="choice19">
                                        Candidate Number 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{-- ALPHA HOUSE SECTION --}}
                @elseif($parseData['fCharVoteCode'] == 'a')
                <h2>Alpha House Captain</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/13.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Aminath Imhaal Afeef</h4>
                                <h5>Class - J12B</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice20" value="13">
                                    <label class="form-check-label" for="choice20">
                                        Candidate Number 13
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card" hidden>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/1.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Mohamed Sidaf Ibrahim</h4>
                                <h5>Class - J12A</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice21" value="1">
                                    <label class="form-check-label" for="choice21">
                                        Candidate Number 1
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/14.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Ali Nawal Naeem</h4>
                                <h5>Class - J12F</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice22" value="14">
                                    <label class="form-check-label" for="choice22">
                                        Candidate Number 14
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{-- BETA HOUSE SECTION --}}
                @elseif($parseData['fCharVoteCode'] == 'b')
                <h2>Beta House Captain</h2>
                <div class="card" hidden>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/18.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Ali Dhaain Nash'ath</h4>
                                <h5>Class - J12I</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice23" value="18">
                                    <label class="form-check-label" for="choice23">
                                        Candidate Number 18
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/3.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Fathimath Faruheen Firaq</h4>
                                <h5>Class - J12E</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice24" value="3">
                                    <label class="form-check-label" for="choice24">
                                        Candidate Number 3
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{-- DELTA HOUSE SECTION --}}
                @elseif($parseData['fCharVoteCode'] == 'd')
                <h2>Delta House Captain</h2>
                <div class="card" hidden>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/15.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Mariyam Jana Jinan</h4>
                                <h5>Class - J12D</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice25" value="15">
                                    <label class="form-check-label" for="choice25">
                                        Candidate Number 15
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/4.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Hoodh Ibrahim</h4>
                                <h5>Class - J12G</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice26" value="4">
                                    <label class="form-check-label" for="choice26">
                                        Candidate Number 4
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{-- GAMMA HOUSE SECTION --}}
                @elseif($parseData['fCharVoteCode'] == 'g')
                <h2>Gamma House Captain</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/8.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Eman Ahmed Ismail</h4>
                                <h5>Class - J12L</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice27" value="8">
                                    <label class="form-check-label" for="choice27">
                                        Candidate Number 8
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/2.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Ayesha Alya Abdul Ghafoor</h4>
                                <h5>Class - J12C</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice28" value="2">
                                    <label class="form-check-label" for="choice28">
                                        Candidate Number 2
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="/images/12.png" class="img-thumbnail">
                            </div>
                            <div class="col-6">
                                <h4>Mashaa Ibrahim Shihab</h4>
                                <h5>Class - J12I</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vote1" id="choice29" value="12">
                                    <label class="form-check-label" for="choice29">
                                        Candidate Number 12
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                @endif
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit" onclick="return confirm('You can only vote once, do you want to continue?')">Vote</button>
                </div>
            </form>
       </div>
    </body>
</html>
