<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
             <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!-- Popper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <link rel="stylesheet" type="text/css" href="{{ asset('/css/navbar.css') }}" />
        </head>
<body>
        
      
        @include('admin.layouts.navabar');
        <div class="container-fluid">
            <div class="row">
                @foreach ($detailproduit as $dtprd)
                    
              
                   <div class="col-sm-4">
                       <div class="card" style="height: 520px;width: 450px;">
                       <img src="{{ Storage::url($dtprd->image ?? null) }}" class="img-fluid "  alt="" style="height: 520px;width: 450px;">
                          
                       </div>
                   </div>
                    <div class="col-sm-8">
                        <div class="card">
                            <h1 class="ml-3">{{$dtprd->nomproduit}}</h1>
                            <div class="card-body">
                                <h4 class="card-title">
                                    {{ $dtprd->Description }}
                                </h4>
                                <p class="card-text">
                                <label> Qte :</label><h3> {{ $dtprd->Qte }}</h3><br>
                                   <label >Prix : </label><h3>{{$dtprd->prix}} Dh</h3>
                                   <button class="btn btn-warning w-75 ml-5" >Acheter</button>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</body>
</html>