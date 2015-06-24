<table class="display datatable" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>วันที่ประเมิน</th>
      <th>ผู้ประเมิน</th>
      <th>Position</th>
      <th>ความเห็น</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $person = $db->select('tb_rate', '*', 'person_id=:c', array(':c'=>$_SESSION['login']['id']), "date desc", "0, 9999999");
    if($person){
    foreach ($person as $key => $value) {
    $person_rate = $db->fetchRow("select * from tb_admin where id='".$value['person_rate']."' ");
    ?>
    <tr>
      <td><?php echo $value['date'];?></td>
      <td><?php echo $person_rate['name'];?></td>
      <td><?php echo $person_rate['position'];?></td>
      <td>
        <div class="panel panel-default">
          <div class="panel-body">
            <?php echo  $value["comment"];?>
          </div>
        </div>
      </td>
    </tr>
    <?php }} ?>
  </tbody>
</table>