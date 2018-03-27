<div class="thongtin-title">
	<div class="right">
    
          <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
          
          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
       
    </div>
</div>
<div class="thongtin-content">


	           <?php 
                $kq=$tintuc->getTheloai();
                while ($row=mysqli_fetch_array($kq)) {
                  $idTL=$row['idTL'];
                
              ?>
            <ul class="ulBlockMenu">
                <li class="liFirst">
                   <h2>
                      <a class="mnu_giaoduc" href="#"><?php echo $row['TenTL']; ?></a>
                   </h2>
                </li>
                 <div class="clear"></div>
                
             </ul>


             <?php 
              }
              ?>

             

</div>




