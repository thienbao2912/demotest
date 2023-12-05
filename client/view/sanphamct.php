<div class="row mb">
            <div class="boxtrai mr">
            <div class="row mb">
                <?php
                extract($onesp);
                ?>
        <div class="boxtitle"><?=$ten?></div>
            <div class=" row boxcontent">
                    <?php
                        
                        $hinhanh =$img_path.$hinhanh;
                        echo '<div class=" mb spct"><img src="'.$hinhanh.'"></div>';
                        echo  $mota;
                        echo '<br>'; 
                        echo $giaban;
                    ?>        
            </div>
        </div>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            });
        </script>
            <div class="row" id="binhluan">

            </div> -->

            <div class="row">
                <iframe src="view/binhluan/binhluanform.php?sanpham_id=<?=$id?>" frameborder="0" width="100%" height="300px"></iframe>
            </div>

    <div class="row mb ">
        <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class=" row boxcontent">
                <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp="index.php?act=sanphamct&idsp".$id;
                        echo '<li><a href="'.$linksp.'">'.$ten.'</a></li>';
                    }
                ?>     
            </div>
        </div>
            </div>
           
        </div>