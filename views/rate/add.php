<?php 
if(isset($_GET['id']) and is_numeric($_GET['id'])){
	$person  = $db->fetchRow("select * from tb_admin where id='".$_GET['id']."'");
	$check = $db->fetchRow("select * from tb_rate where person_id='".$person['id']."' and person_rate='".$_SESSION['login']['id']."'  ");
	if($check){
?>
<h4>ท่านได้ประเมินผล/แสดงความคิดเห็น พนักงานคนนี้แล้ว</h4>
<?php
	}else{
?>
<h4>ประเมิน แสดงความคิดเห็น</h4>
<hr>
<form action="" method="post" accept-charset="utf-8">
<div class="form-group">
        <label for="">ชื่อ : <?php echo $person['name'];?></label>

</div>
<div class="form-group">
         <label for="">ตำแหน่ง : <?php echo $person['position'];?></label>
</div>
<div class="form-group">
        <label for="">ความคิดเห็น</label>
        <textarea name="comment"  class="form-control" required></textarea>
</div>
<div class="form-group">
       <button type="submit" name="add" class='btn btn-primary'> บันทึกข้อมูล</button>
</div>
</form>
<?php

if(isset($_POST['add'])) $post->add_rate($_POST,$db);
}
}
 ?>