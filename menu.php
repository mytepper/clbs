<div class="nav-side-menu">
    <div class="brand"><?php echo $_SESSION['login']['name'];?> / รหัส ( <?php echo $_SESSION['login']['id'];?> )</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li class='active'>
                  <a href="#">
                  <i class="glyphicon glyphicon-cog"></i> Dashboard
                  </a>
                </li>
                <?php if($_SESSION['login']['type']==0){?>
                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                  <a href="#"><i class=" glyphicon glyphicon-chevron-right"></i> จัดการข้อมูลพนักงาน <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="?mod=person_add"><i class=" glyphicon glyphicon-chevron-right"></i> เพิ่มข้อมูลพนักงาน</a></li>
                    <li><a href="?mod=person_person"><i class=" glyphicon glyphicon-chevron-right"></i> ข้อมูลพนักงาน</a></li>
                </ul>
                </li>
                <?php } ?>
                 <li>
                  <a href="?mod=rate_rate">
                  <i class="glyphicon glyphicon-chevron-right"></i> ประเมิน
                  </a>
                </li>
                 <li>
                    <a href="?mod=rate_views"><i class='glyphicon glyphicon-user'></i> ผลประเมิน</a>
                </li>
                <li>
                    <a href="?logout"><i class='glyphicon glyphicon-user'></i> Logout</a>
                </li>
            </ul>
     </div>
</div>