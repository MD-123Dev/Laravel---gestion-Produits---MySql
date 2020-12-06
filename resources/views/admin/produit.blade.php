<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cl
    oudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/navbar.css') }}" />
</head>

<body>

     @include('admin.layouts.navabar');
   
    <div class="container">
       
              <div class="col-md-6 mb-3" style="margin-left: 980px">
                    <form action="{{ route('file-import')}}" method="POST" name="importform" class="form-inline"
                      enctype="multipart/form-data">
                        @csrf
                        
                        <input type="file" name="file" class="form-control" style="width: 210px; background-color: rgb(184, 184, 149); color: black ">
                        
                        <button class="btn btn-success ">Import File</button>
                    </form>
               </div>
        
      
    <a href="{{ route('produit.create')}}" class="btn btn-info btn-rounded float-right mb-2">Add new Product</a>
        <table class="table" id="table">
            <thead class="black white-text">
                <tr>
                    <th>#</th>
                    <th>Nom Produit </th>
                    <th>Category :</th>
                    <th>Actions :</th>
                </tr>
            </thead>
             <div id="country_list"></div> 
            <tbody id="ablerow1">
                @foreach ($produits as $pd)
                    <tr>

                    
              
                    <td>{{$pd->id}}</td>
                    <td>{{$pd->nomproduit}}</td>
                    <td>{{$pd->categorie}}</td>
                    

                    <td>
             
                    <a href="{{ route('produit.edit',$pd->id)}}" class="btn btn-info">Edit</a>
                      <a href="{{ route('detail.view',$pd->id)}}" class="btn btn-dark">Detail</a>
                       
                    <form method="POST" action="{{ route('produit.destroy',$pd->id) }}">
                        @csrf
                        @method('DELETE')
                       <button onclick="return confirm('Are you sure?')"  type="submit" class='btn btn-danger'>Delete</button>
                       
                    </form>
                       
                    </td>

                 </tr>
                @endforeach
                

            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $produits->links() !!}
        </div>

       
      
    </div>
 

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script>
          
            $(document).ready(function () {

              
                function fetch_customer_data(query = '') {
                    $.ajax({
                        url: "{{route('search.produit')}}",
                        method: 'GET',
                        data: {query: query},
                        dataType: 'json',
                        success: function (data) {
                            $('#ablerow1').html(data.table_data);
                        }
                       
                    })
                }
                  

                      
                $(document).on('keyup', '#search', function () {
                     var myLength = $("#search").val().length;
                    if(myLength>0){
                    var query = $(this).val();
                     fetch_customer_data(query);
                     $('#ablerow1').val(value);
                    }
                    else
                    {
                          location.reload();
                    }
                });
                  
            
                
            });
        </script>

</body>

</html>