
 <?php
include_once 'db-config.php';
$result = mysqli_query($mysqli, "SELECT * FROM project");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
	<title>Project list</title>
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
	<style>
      .center .inputbox button{
  width: 20%;
  background: dodgerblue;
  color: #fff;
  border: #fff;
}
	</style>
 </head>
 <body>
	 
<div id="wrapper">
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
          <div class="sidebar-brand-text mx-3">CHARUSAT </div>
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
        
        <li class="nav-item">
          <a class="nav-link" href="task_list.php">
            <span>TaskList</span></a
          >
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view.php">
              <span>ProjectList</span></a
            >
          </li>
        <!-- Nav Item - Charts -->
       

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="login.php">
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
	<div class="container">
		
		<div class="center">
			<h1>Project List</h1>
			<br>
			
			
	 <table  border="2px" style="width: 600px; line: height 40px;">
	 <tr>
		 <td colspan=4>
		 <div class="inputbox" align="right">
		 <a href="project.php"><button type="submit">Add Project</button></a>
	</div></td>
	 </tr>
		 <tr>
			 <th>Name</th>
			 <th>Start Date</th>
			 <th>Due Date</th>
			 <th>Status</th>
		 </tr>
		 <?php
     while($row = $result->fetch_assoc()) {
	 ?>
		 <tr>
		 <td><?php echo $row['name']; ?></td>
			<td><?php echo $row['startdate']; ?></td>
			<td><?php echo $row['duedate']; ?></td>
			<td><?php echo $row['status']; ?></td>
		 </tr>
		 <?php
	 }
	 
	 ?>
	 </table>
	 
		</div>
	</div>
 </div>

 </body>
 </html>

 
