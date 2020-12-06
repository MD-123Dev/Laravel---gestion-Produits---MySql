
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <title>Document</title>
    </head>
    <body>
        
        <div class="container">
            
                 <div class="registration-form">
                    <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       <div>
                           <h3>Ajouter  produits et son detail</h3>
                       </div>
                        <div class="form-group">
                            <input type="text" class="form-control item" id="Nom Produit" name="NomProduit" placeholder="Nom Produit">
                        </div>
                        
                         <div class="form-group">
                            <input type="text" class="form-control item" id="Categorie" name="Categorie" placeholder="Categorie">
                        </div>
                        
                         <div class="form-group">
                            <input type="text" class="form-control item" id="prix" name="prix" placeholder="prix">
                        </div>
                        
                         <div class="form-group">
                            <input type="text" class="form-control item" id="Qte" name="Qte" placeholder="Qte">
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-control item" id="Description" name="Description" placeholder="Description">
                        </div>
                         <div class="form-group">
                             <label for="image">picture</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>

                           <input type="submit" class="btn btn-info" value="create">
                              
                           @include('error'); 
                    </form>
                
                </div>
            
                
            </div>
           
     

    </body>

</html>