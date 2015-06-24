
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" method="post">
            <span id="reauth-text" class="reauth-text"></span>
            <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button name="login" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            <a href="#register" data-toggle="modal" data-target="#myModal">สมัครเข้าใช้งาน ( สำหรับพนักงาน )</a>
        </form>
    </div>

<?php if(isset($_POST['login'])){$post->login($_POST,$db);} ?>

<form action="" method="post">
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">สมัครเข้าใช้งาน</h4>
      </div>
      <div class="modal-body">
            <form action="" method="post">
      <div class="form-group">
        <label for="">อีเมลล์</label>
        <input type="email" placeholder="อีเมลล์" id="" class="form-control" required name="email">
      </div>
      <div class="form-group">
        <label for="">Username</label>
        <input type="text" placeholder="UserName" id="" class="form-control" required name="userName">
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" placeholder="Password" id="" class="form-control" required name="passWord">
      </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default"  data-dismiss="modal">ยกเลิก</button>
        <button class="btn btn-primary" type="submit" name="register">กดเพื่อสมัคร</button>
      </div>
    </div>
  </div>
</div>
</form>

<?php 
if(isset($_POST['register'])) $post->register($_POST,$db);
 ?>


