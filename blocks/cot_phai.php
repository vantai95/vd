<?php 
         $idLT =5;
 ?>
<div class="box-cat">
    <div class="cat">
        <?php 
           
            $kq = $tintuc ->getLoaitin($idLT);
            $row=mysqli_fetch_array($kq);
         ?>
        <div class="main-cat">
            <a href="#"><?php echo $row['Ten'];?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php 
            $tinmoitheoloai=$tintuc->getTintheoloaitin(0,1,$idLT);
            $tinmoitheoloai=mysqli_fetch_array($tinmoitheoloai)
         ?>
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $tinmoitheoloai['idTin'];?>"> <?php echo $tinmoitheoloai['TieuDe']; ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $tinmoitheoloai['urlHinh'];?>" align="left" />
                    <div class="des">
                        <?php echo $tinmoitheoloai['TomTat'] ?>
                     </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
            <?php
                $tinmoitheoloaitieptheo=$tintuc->getTintheoloaitin(1,4,5);
                while($tintheoloaitieptheo=mysqli_fetch_array($tinmoitheoloaitieptheo)) {
             ?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $tintheoloaitieptheo['idTin'];?>"><?php 
                echo $tintheoloaitieptheo['TieuDe'];
            ?></a></h3>
           <?php 
                }
            ?>
            
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<?php 
         $idLT =6;
 ?>
<div class="box-cat">
    <div class="cat">
        <?php 
           
            $kq = $tintuc ->getLoaitin($idLT);
            $row=mysqli_fetch_array($kq);
         ?>
        <div class="main-cat">
            <a href="#"><?php echo $row['Ten'];?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php 
            $tinmoitheoloai=$tintuc->getTintheoloaitin(0,1,$idLT);
            $tinmoitheoloai=mysqli_fetch_array($tinmoitheoloai)
         ?>
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $tinmoitheoloai['idTin'];?>"> <?php echo $tinmoitheoloai['TieuDe']; ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $tinmoitheoloai['urlHinh'];?>" align="left" />
                    <div class="des">
                        <?php echo $tinmoitheoloai['TomTat'] ?>
                     </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
            <?php
                $tinmoitheoloaitieptheo=$tintuc->getTintheoloaitin(1,4,5);
                while($tintheoloaitieptheo=mysqli_fetch_array($tinmoitheoloaitieptheo)) {
             ?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $tintheoloaitieptheo['idTin'];?>"><?php 
                echo $tintheoloaitieptheo['TieuDe'];
            ?></a></h3>
           <?php 
                }
            ?>
            
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<?php 
         $idLT =10;
 ?>
<div class="box-cat">
    <div class="cat">
        <?php 
           
            $kq = $tintuc ->getLoaitin($idLT);
            $row=mysqli_fetch_array($kq);
         ?>
        <div class="main-cat">
            <a href="#"><?php echo $row['Ten'];?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php 
            $tinmoitheoloai=$tintuc->getTintheoloaitin(0,1,$idLT);
            $tinmoitheoloai=mysqli_fetch_array($tinmoitheoloai)
         ?>
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $tinmoitheoloai['idTin'];?>"> <?php echo $tinmoitheoloai['TieuDe']; ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $tinmoitheoloai['urlHinh'];?>" align="left" />
                    <div class="des">
                        <?php echo $tinmoitheoloai['TomTat'] ?>
                     </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
            <?php
                $tinmoitheoloaitieptheo=$tintuc->getTintheoloaitin(1,4,5);
                while($tintheoloaitieptheo=mysqli_fetch_array($tinmoitheoloaitieptheo)) {
             ?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $tintheoloaitieptheo['idTin'];?>"><?php 
                echo $tintheoloaitieptheo['TieuDe'];
            ?></a></h3>
           <?php 
                }
            ?>
            
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<?php 
         $idLT =2;
 ?>
<div class="box-cat">
    <div class="cat">
        <?php 
           
            $kq = $tintuc ->getLoaitin($idLT);
            $row=mysqli_fetch_array($kq);
         ?>
        <div class="main-cat">
            <a href="#"><?php echo $row['Ten'];?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        <?php 
            $tinmoitheoloai=$tintuc->getTintheoloaitin(0,1,$idLT);
            $tinmoitheoloai=mysqli_fetch_array($tinmoitheoloai)
         ?>
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $tinmoitheoloai['idTin'];?>"> <?php echo $tinmoitheoloai['TieuDe']; ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $tinmoitheoloai['urlHinh'];?>" align="left" />
                    <div class="des">
                        <?php echo $tinmoitheoloai['TomTat'] ?>
                     </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
            <?php
                $tinmoitheoloaitieptheo=$tintuc->getTintheoloaitin(1,4,5);
                while($tintheoloaitieptheo=mysqli_fetch_array($tinmoitheoloaitieptheo)) {
             ?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $tintheoloaitieptheo['idTin'];?>"><?php 
                echo $tintheoloaitieptheo['TieuDe'];
            ?></a></h3>
           <?php 
                }
            ?>
            
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

