<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Interface</div>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Addons</div>
        <li class="nav-item">
          <a class="nav-link" href="to-do.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Daliy Tasks</span></a
          >
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a
          >
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a
          >
        </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           

        </ul>
        <!-- End of Sidebar -->
        <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-white">
            <div class="card-body">
              <form action="javascript:void(0);">
                <input
                  type="text"
                  class="form-control add-task"
                  placeholder="New Task..."
                />
              </form>
              <ul class="nav nav-pills todo-nav">
                <li role="presentation" class="nav-item all-task active">
                  <a href="#" class="nav-link">All</a>
                </li>
                <li role="presentation" class="nav-item active-task">
                  <a href="#" class="nav-link">Active</a>
                </li>
                <li role="presentation" class="nav-item completed-task">
                  <a href="#" class="nav-link">Completed</a>
                </li>
              </ul>
              <div class="todo-list">
                <div class="todo-item">
                  <div class="checker">
                    <span class=""><input type="checkbox" /></span>
                  </div>
                  <span>Create theme</span>
                  <a
                    href="javascript:void(0);"
                    class="float-right remove-todo-item"
                    ><i class="icon-close"></i
                  ></a>
                </div>
                <div class="todo-item">
                  <div class="checker">
                    <span class=""><input type="checkbox" /></span>
                  </div>
                  <span>Work on wordpress</span>
                  <a
                    href="javascript:void(0);"
                    class="float-right remove-todo-item"
                    ><i class="icon-close"></i
                  ></a>
                </div>

                <div class="todo-item">
                  <div class="checker">
                    <span class=""><input type="checkbox" /></span>
                  </div>
                  <span>Organize office main department</span>
                  <a
                    href="javascript:void(0);"
                    class="float-right remove-todo-item"
                    ><i class="icon-close"></i
                  ></a>
                </div>
                <div class="todo-item">
                  <div class="checker">
                    <span><input type="checkbox" /></span>
                  </div>
                  <span>Error solve in HTML template</span>
                  <a
                    href="javascript:void(0);"
                    class="float-right remove-todo-item"
                    ><i class="icon-close"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>