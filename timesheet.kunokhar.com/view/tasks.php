<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Timesheet | Tasks</title>
<link href="../public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../public/css/style.css" rel="stylesheet" type="text/css">
<link href="../public/css/fontawesome-free-5.12.1-web/css/all.min.css" type="text/css">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand ml-3" href="#">
	<img src="../public/img/kunokharK.png" class="logo" alt="Kunokhar logo">
	<span>Timesheet</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./profile.php"><i class="far fa-user fa-2x"></i><div>Profile</div></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" id="logout"><i class="fas fa-sign-out-alt fa-2x"></i><div>Logout</div></a>
      </li>
	
    </ul>
  </div>
</nav>


<div class="container-fluid">
	<div class="row">
        <div class="col-sm-8 mt-4 offset-lg-0" id="all_views">

        </div>
        <div class="col-sm-4 mt-4 mr-0" id="done_tasks_only">

        </div>
		
    </div>
      <!-- Modal -->
      <div class="modal fade show_start_task" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Task</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <div class="row">
                   <p class="time-show">00:00</p>
               </div>
               <div class="row">
                   <div class="start-task"><i class="fa fa-play fa-3x text-tomato"></i></div>
                   <div class="pause-task"><i class="fa fa-pause fa-3x text-tomato"></i></div>
               </div>
               <div class="row">
                   <div class="task-comment">
                       <textarea class="form-control" placeholder="Comment on task(Compulsory)..."></textarea>
                   </div>
               </div>
              <div class="task-status"></div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-tomato-o" id="done_task">Done</button>
            </div>
          </div>
        </div>
      </div>
      
</div>

<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false" style="position: relative;">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>

<script src="../public/js/jquery.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/css/fontawesome-free-5.12.1-web/js/all.min.js"></script>
<script src="../public/js/main.js"></script>

</body>
</html>

