<?php
require("includes.php");

if (!isset($_SESSION['auth']))
{ header("Location:login.php");}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
  
    <title>HIT 401 - Admin site</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    

    

<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="index.php">HIT401 - Project Management</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
		<?php if ($_SESSION['priv']>1) {?>	
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?p=add_lecturer">
              <span data-feather="file" class="align-text-bottom"></span>
              Add a lecturer
            </a>
          </li>
		 <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?p=lecturers_list">
              <span data-feather="users" class="align-text-bottom"></span>
              Lecturer List
            </a>
          </li>
			<?php }?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=add_project">
              <span data-feather="file" class="align-text-bottom"></span>
              Add a Project
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=project_list">
              <span data-feather="layers" class="align-text-bottom"></span>
              Project List
            </a>
          </li>
         
			
         
        </ul>

      
      </div>
    </nav>

   

     
		<?php
		
		if (isset($_GET['p'])) $page=$_GET['p'];
		else $page="";
		
		switch ($page) {
			case "":
				include_once('home.php');
				break;
			case "add_lecturer":
				include_once('add_lecturer.php');
				break;
			case "lecturers_list":
				include_once('lecturers_list.php');
				break;
			case "add_project":
				include_once('add_project.php');
				break;
			case "project_list":
				include_once('project_list.php');
				break;	
			default:	
			include_once('home.php');
				break;	
			
		}
		?>

  </div>
</div>


    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
