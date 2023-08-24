<button class="toup" id="toup"><i class="fa-solid fa-circle-arrow-up"></i></button>
    <div class="image_filter">
      <div class="header">
        <nav class="navbar navbar-expand-lg nav-header">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><i class="fa-solid fa-chalkboard"></i></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
              aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav">
                       
                  
                        <li class="list">
                          <a href="{{ route('home.index') }}" class="">home</a>
                          <ul class="sublist">
                              <li><a href="">categories</a></li>
                              <li><a href="">all cars</a></li>
                              <li><a href="">about</a></li>
                              <li><a href="">contact us</a></li>
                          </ul>
                      </li>
                  
        
                      

                        <li class="list">
                            <a href="{{ route('category') }}" class="">categories</a>
                            <ul class="sublist">
                                <li><a href="">link1</a></li>
                                <li><a href="">link2</a></li>
                                <li><a href="">link3</a></li>
                                <li><a href="">link4</a></li>
                                <li><a href="">link5</a></li>
                            </ul>
                        </li>


                        <li class="list">
                          <a href="{{ route('courses.index') }}" class="">all courses</a>
                          <ul class="sublist">
                              <li><a href="">link1</a></li>
                              <li><a href="">link2</a></li>
                              <li><a href="">link3</a></li>
                              <li><a href="">link4</a></li>
                              <li><a href="">link5</a></li>
                          </ul>
                      </li>

        
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}" style="color: white;">about us</a>
                      </li>
        
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('contact') }}" style="color: white;">contact us</a>
                      </li>

                     @guest
                     <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}" style="color: white;">log in</a>
                    </li>
      
                    <li class="nav-item">
                      <a class="nav-link " href="{{ route('register') }}" style="color: white;">register</a>
                    </li>
                     @endguest

                      @auth
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('logout') }}" style="color: white;">logout</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="#" style="color: white; background-color:black">{{ Auth::user()->name }}</a>
                      </li>
                      @endauth
                  
                </ul>
                
              </div>
            </div>
          </nav>
          <div class="content-header">
           <div>
            <h1>welcome to our page of cars</h1>
            <span>
                <a href="#" class="shadow-bg">home</a>
                <div></div>
            </span>
            <span>
                <a href="" class="shadow-bg">contact us</a>
                <div></div>
            </span>
           </div>
          </div>
    </div>
    </div>