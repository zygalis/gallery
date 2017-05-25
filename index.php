    <?php
        include_once 'include/Top.php';
    ?>
                    <p><b>Kuvia:</b> <output></output></p>
                    
                    <?php
                    $hakemisto="uploads/";
                    $hakemisto2 ="uploads/thumbs/";
                    $osoitin=opendir($hakemisto);
                    $osoitin=opendir($hakemisto2);
                    
                    if($osoitin)
                    {
                        while (false !== ($tiedosto=readdir($osoitin)))
                        {
                        $tiedostoPolunOsat=explode('.',$tiedosto);
                        $paate=end($tiedostoPolunOsat);
                    
                        if(strcasecmp($paate,"png") == 0|| strcasecmp($paate,"jpg")==0)
                        {
                            $polku = $hakemisto . "$tiedosto";
                            $polku2 = $hakemisto2 . "$tiedosto";
                           
                            print "<div class='kuva'><a class='fancybox' rel='group' href='$polku'><img src='$polku2' alt=''/></a></div>";
                        }   
                    }
                    closedir($osoitin);
                    }
                    ?>
    <?php
        include_once 'include/Bottom.php';
    ?>
