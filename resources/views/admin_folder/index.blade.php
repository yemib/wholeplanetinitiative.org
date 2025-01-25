<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/general.css')}}" rel="stylesheet">
 

  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/admins">Dashboard</a></li>
            <li><a href="/managements">Management</a></li>
           
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/pages">Pages</a></li>
            <li><a href="/contact">Contact Info</a></li>
            <li><a href="/slidder">Slidder</a></li>
            
            
            <li><a href="/newsletters">newsletters</a></li>
            
            <li><a href="/logo">Logo</a></li>
            <li><a href="/users">Admin Details</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
           
            <li><a  target="new" href="/">View the site</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site  </small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a  href="/pages" type="button" >Pages</a></li>
                
                
                <li><a href="/newsletters">newsletters</a></li>
                <li><a href="/managements">Management</a></li>
              
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/contact">Contact Info</a></li>
                
                <li><a href="/slidder">Slidder(Banner)</a></li>
                <li><a href="/logo">Logo</a></li>
                <li><a href="/users">Admin Details</a></li>
                
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
         
         
          <div class="col-md-3  form_container"    >
            <div class="list-group">
              <a href="/admins" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="/pages" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages </a>
              
            
              
              
              <a href="/newsletters" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> newsletters </a>
              
              
              <a href="/managements" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Management </a>
               
           
              
              <a href="/gallery" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Gallery </a>
              
                  
                  
                  
                  
                  
              <a href="/contact" class="list-group-item"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Contact Info </a>
                     
                     
                     
                      
              <a href="/slidder" class="list-group-item"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Slidder (Banners) </a>
                        
                        
                         
              <a href="/logo" class="list-group-item"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Logo </a>
              
              
              
              
              <a href="/users" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users </a>
            </div>

        
          </div>
          
          
          
         @yield('content')
          
          
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2019</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
  

  <script>
     CKEDITOR.replace( 'body' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('admin/jquery.min.js')}}"></script>
  @include('script')
    <script src="{{asset('admin/bootstrap.min.js')}}"></script>
  </body>
</html>
