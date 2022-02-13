<?php
include("layout/head.php");
include("layout/nav.php");
include("layout/header.php");

?>
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="card">
<div class="card-title">
<h1>Student create</h1>
</div>
<div class="card-body">
<form action="_actions/student_create.php" metaphone="POST">
<label for="name">student name</label>
<div class="input-group">

 
<input type="text" name="name" id="" class="form-control">
     </div>
     <label for="">student Join date</label>
     <div class="input-group">
        
        <input type="text" name="join_date" id="" class="form-control">
     </div>
     <label for="">student bio</label>
     <div class="input-group">
        
        <input type="text" name="room_id" id="" class="form-control">
     </div>
     <label for="">studint room Id</label>
     <div class="input-group">
        
        <input type="text" name="room_id" id="" class="form-control">
     </div>
     <div class="input-group">
        <button type="submit" class="btn btn-primary">create Student</button>

</div>
</div>
</div>
</div>
</div>
</div>



<?php
include("layout/footer.php");