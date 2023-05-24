<nav class="navbar navbar-expand-lg bg-light d-flex justify-content-center">
    <div class="container d-flex justify-content-center">
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($nav as $d)
                            <li><a class="dropdown-item" href="/category/{{$d->id}}">{{$d->name_category}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/publisher">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

