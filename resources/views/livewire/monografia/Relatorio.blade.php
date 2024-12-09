
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>SIGMonos</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/jqvmap/css/jqvmap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/chartist/css/chartist.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/skin-2.css')}}">

    </head>
    <body>
        <h1>{{$title}}</h1>
        <p>{{$data}}</p>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table primary-table-bordered">
                            <thead class="thead-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Estudante</th>
                                    <th scope="col">Orientador</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Data de submissão</th>
                                    <th scope="col">Arquivo</th>
                                    <th scope="col">Nota final</th>
                                    <th scope="col">Açao</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mono1 as $mono)
                                    <tr>
                                        <th>{{$mono-> id}}</th>
                                        <th>{{$mono-> Students->name}}</th>
                                        <th>{{$mono-> Advisors->name}}</th>
                                        <th>{{$mono-> title}}</th>
                                        <th>{{$mono-> submission_date}}</th>
                                        <th>{{$mono-> file}}</th>
                                        <th>{{$mono-> note}}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>