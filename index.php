<?php
session_start();

if (!isset($_SESSION['user_id'], $_SESSION['role'])) {
    header('Location: login.php');
    exit();
}

$user = $_SESSION['role'];
$displayName = htmlspecialchars($_SESSION['full_name'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Task Management</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css?v=20261012-sidebar-icons">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">TASK <b>MANAGEMENT</b>
			<label for="checkbox">
				<span id="navbtn" class="icon" aria-hidden="true">☰</span>
			</label>
		</h2>
		<i class="fa fa-bell header-icon" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/user.webp" alt="Sofia">
				<h4><?php echo $displayName; ?></h4>
			</div>
			 <?php if ($user === 'employee') {
			?>
			<!-- Employee Navigation Bar -->
			<ul>
				<li>
					<a href="#">
						<span class="icon" aria-hidden="true">◴</span>
						<span class="nav-label">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon" aria-hidden="true">✉</span>
						<span class="nav-label">My Tasks</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon profile-icon" aria-hidden="true">👤</span>
						<span class="nav-label">Profile</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bell icon" aria-hidden="true"></i>
						<span class="nav-label">Notifications</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon tasks-icon" aria-hidden="true">👤</span>
						<span class="nav-label">All Tasks</span>
					</a>
				</li>
				<li>
					<a href="app/logout.php">
						<span class="icon" aria-hidden="true">⏻</span>
						<span class="nav-label">Logout</span>
					</a>
				</li>
			</ul>
			<?php }else { ?>
			<!-- Admin Navigation Bar -->
                 <ul>
				<li>
					<a href="#">
						<span class="icon" aria-hidden="true">◴</span>
						<span class="nav-label">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon" aria-hidden="true">👥</span>
						<span class="nav-label">Manage Users</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon plus-icon" aria-hidden="true">👤</span>
						<span class="nav-label">Create Task</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon" aria-hidden="true">✉</span>
						<span class="nav-label">All Tasks</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-bell icon" aria-hidden="true"></i>
						<span class="nav-label">Notifications</span>
					</a>
				</li>
				<li>
					<a href="app/logout.php">
						<span class="icon" aria-hidden="true">⏻</span>
						<span class="nav-label">Logout</span>
					</a>
				</li>
			</ul>
			<?php } ?>

		</nav>
		<section class="section-1">
			
		<section>
	</div>

</body>
</html>