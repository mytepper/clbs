  <h4>เพิ่มข้อมูลพนักงาน</h4>
  <hr>
    <form action="" method="post">
      <div class="form-group">
        <label for="">ชื่อ-นามสกุล</label>
        <input type="text" placeholder="ชื่อ-นามสกุล" id="" class="form-control" required name="name">
      </div>
      <div class="form-group">
        <label for="">อีเมลล์</label>
        <input type="email" placeholder="อีเมลล์" id="" class="form-control" required name="email">
      </div>
      <div class="form-group">
        <label for="">ตำแหน่ง</label>
        <input type="text" placeholder="ตำแหน่ง" id="" class="form-control" required name="position">
      </div>
      <button class="btn btn-primary" name="add" type="submit">บันทึกข้อมูล</button>
    </form>

    <?php if(isset($_POST['add'])) $post->add_person($_POST,$db); ?>