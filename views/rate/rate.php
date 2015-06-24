<table class="display datatable" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>ประเมิน</th>
        </tr>
    </thead>
    <tbody>
         <?php
              $person = $db->select('tb_admin', '*', 'id!=:c', array(':c'=>$_SESSION['login']['id']), "id desc", "0, 9999999");
              if($person){
              foreach ($person as $key => $value) {
              $check  = $db->fetchRow("select * from tb_rate where person_id='".$value['id']."' and person_rate='".$_SESSION['login']['id']."' ")
         ?>
        <tr>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['position'];?></td>
            <td>
              <?php if($check){?>
              <i class='glyphicon glyphicon-ok'></i> ประเมินแล้ว
              <?php }else{ ?>
              <a href="?mod=rate_add&id=<?php echo $value['id'];?>" class="btn btn-success">ประเมิน</a>
              <?php } ?>
            </td>
        </tr>
        <?php }} ?>
    </tbody>
</table>