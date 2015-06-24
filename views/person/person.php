<table class="display datatable" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Position</th>
            <th>สถานะ</th>
        </tr>
    </thead>
    <tbody>
         <?php
              $person = $db->select('tb_admin', '*', 'type!=:c', array(':c'=>0), "id ASC", "0, 9999999");
              if($person){
              foreach ($person as $key => $value) {
         ?>
        <tr>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['email'];?></td>
            <td><?php echo $value['position'];?></td>
            <td><?php echo $value['status'];?></td>
        </tr>
        <?php }} ?>
    </tbody>
</table>