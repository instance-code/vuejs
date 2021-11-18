<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
            <a class="btn btn-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{__('blogedit.delete')}}
            </a>
            
          </li>
       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{__('blogedit.languages')}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{url('/blog?lang=en')}} ">English</a>
              <a class="dropdown-item" href="{{url('/blog?lang=vi')}}">Việt nam </a>
            </div>
          </li>
      </ul>
    
    </div>
  </nav>