<style>
  .gocnhin img{
    margin-left: 10px;
  }
</style>
<div id="slide-left">

         <?php  
      
          $kq=$tintuc->getTinmoi(0,1);
          $row=mysqli_fetch_array($kq);
          ?>
        	<div id="slideleft-main">
                <img src="upload/tintuc/<?php echo $row['urlHinh'] ?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin= <?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a> </h2>
                <div class="des">
                    <?php echo $row['TomTat']; ?>
                </div>
            	<!-- <p class="tlq"><a href="#">Hàng trăm chuyến bay bị hủy vì Trung Quốc tập trận</a></p> -->
                
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
                <?php 
                $kq =$tintuc ->getTinmoi(1,5);
                while ($row1 = mysqli_fetch_array($kq)) {
                
               ?>
            <ul>
              
               <li>
                <div class="title_news">
               		<a href="index.php?p=chitiettin&idTin= <?php echo $row1['idTin'] ?>" class="txt_link"> <?php echo $row1['TieuDe']; ?> </a> 
                </div>
              
 
            </ul>

            <?php } ?>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="./images/a.jpg" width="140px" height="210px" ></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     