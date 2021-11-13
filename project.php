

<!DOCTYPE html>
<html>
<head>
	<title>ADD PROJECT</title>
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
		@import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");
		.center {
  position: relative;
  padding: 50px 50px;
  background: #fff;
  border-radius: 10px;
}
.center h1 {
  font-size: 2em;
  border-left: 5px solid dodgerblue;
  padding: 10px;
  color: #000;
  letter-spacing: 5px;
  margin-bottom: 60px;
  font-weight: bold;
  padding-left: 10px;
}
.center .inputbox {
  position: relative;
  width: 300px;
  height: 50px;
  margin-bottom: 50px;
}
.center .inputbox input {
  position: absolute;
  top: 0;
  left: 0;
  width: 150%;
  border: 2px solid #000;
  outline: none;
  background: none;
  padding: 10px;
  border-radius: 10px;
  font-size: 1.2em;
}
.center .inputbox textarea {
  position: absolute;
  top: 0;
  left: 0;
  width: 150%;
  border: 2px solid #000;
  outline: none;
  background: none;
  padding: 10px;
  border-radius: 10px;
  font-size: 1.2em;
}
.center .inputbox:last-child {
  margin-bottom: 0;
}
.center .inputbox span {
  position: absolute;
  top: 14px;
  left: 20px;
  font-size: 1em;
  transition: 0.6s;
  font-family: sans-serif;
}
.center .inputbox input:focus ~ span,
.center .inputbox input:valid ~ span {
  transform: translateX(-13px) translateY(-35px);
  font-size: 1em;
}
.center .inputbox button{
  width: 50%;
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
			<h1>ADD NEW PROJECT</h1>
			<form  method="POST">
			  <div class="inputbox">
				<input type="text" name="name" required="required">
				<span>Name</span>
			  </div>
			  <div class="inputbox">
				<input type="text" name="startdate" required="required">
				<span>Start Date</span>
			  </div>
			  <div class="inputbox">
				<input type="text" name="duedate" required="required">
				<span>Due Date</span>
			  </div>
			  <div class="inputbox">
				<!-- <input type="textarea" rows="10" cols="5" name="description" required="required"> -->
				<textarea name="description"  cols="30" rows="4"></textarea>
				<span>Description</span>
			  </div>
			  <br><br><br>
			  <div class="inputbox">
				<input type="text" name="status" required="required">
				<span>Status</span>
			  </div>
			  <div class="inputbox">
				<button type="submit">Submit</button> 
				
			  </div>
			
			  <?php  
		$name = $_POST ['name'];	
		$startdate = $_POST ['startdate'];	
		$duedate = $_POST ['duedate'];
		$decription = $_POST ['description'];
		$status = $_POST ['status'];

		$conn = mysqli_connect('localhost', 'root', '', 'pms');

		$query = "INSERT INTO `project`(`name`, `startdate`, `duedate`, `description`, `status`) VALUES ('$name','$startdate','$duedate','$decription','$status')";

		$run = mysqli_query($conn, $query);

		if ($run == TRUE){
			echo "This is insert into Database table";
		}
		else 
			echo "error!";	
		
?>
			</form>
		  </div>					 

</div>
</div>

</body>
</html>