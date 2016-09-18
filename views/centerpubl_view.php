

<div class="portfolioContainer wow fadeInUp delay-04s">

                <?php $n = count($data);
                for($i = 0; $i < $n-1;$i++) {
                $subtext = trim(substr( strip_tags( $data[$i]['text_post'] ), 0, 120))."..."; ?>
                <div class=" Portfolio-box">
                    <a href="index.php?post=<?php echo $data[$i]['id_post'];?>">
                        <img src="img/posts/<?php echo $data[$i]['image_post'];?>" style=""alt="">
                    </a>
                    <h3><a href="index.php?post=<?php echo $data[$i]['id_post'];?>"> <?php echo utf8_encode($data[$i]['title_post']); ?></a></h3>
                    <p><?php echo utf8_encode( $subtext ); ?>
                        <a href="index.php?post=<?php echo $data[$i]['id_post'];?>"><button class="btn btn-link">Seguir leyendo.</button></a>
                    </p>
                </div>
                <?php } ?>
                
   	</div>
