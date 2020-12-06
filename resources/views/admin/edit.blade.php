
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
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/createview.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
</head>
<body>
    <div class="container">
            
                 <div class="registration-form">
                        @foreach ($produitdetail as $pddetail)
                        <form action="{{ route('produit.update',$pddetail->id)}}" method="POST" enctype="multipart/form-data">
                               @method('PUT')
                            @csrf
                            <div>
                                <h3>Modifier  produits et son detail</h3>
                            </div>   
                        
                           
                            <div class="form-group">
                            <input type="text" class="form-control item" id="Nom Produit" name="NomProduit" value="{{$pddetail->nomproduit}}">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control item" id="Categorie" name="Categorie" value="{{$pddetail->categorie}}">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control item" id="prix" name="prix" value="{{$pddetail->prix}}">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control item" id="Qte" name="Qte" value="{{$pddetail->Qte}}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control item" id="Description" name="Description" value="{{$pddetail->Description}}">
                            </div>
                            <div class="form-group">
                                <label for="image">picture</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                         @endforeach

                           <input type="submit" class="btn btn-info" value="Update">
                              
                           
                        </form>
                
                    </div>
            
            
        </div>
           
</body>
</html>