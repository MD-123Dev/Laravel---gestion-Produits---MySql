<nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand">ProduitSIte</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  ">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('produit.index') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
       
        <form class="form-inline navbar-collapse collapse justify-content-center" style="margin-right: 370px;" >
            <div class="form-group">
              <input type="text" name="search" id="search" class="form-control"
                                   placeholder="search"  style="width:380px;" />
              
            </div>
        </form>
       
    </nav>