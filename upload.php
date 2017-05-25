   <?php
        include_once 'include/Top.php';
    ?>
      <?php
        
        include 'include/ImageResize.php';
        
        use \Eventviva\ImageResize;
        
        if ($_FILES['kuva']['error'] == UPLOAD_ERR_OK)
        {
            $tiedosto = $_FILES['kuva']['name'];
            
            if($_FILES['kuva']['size'] > 0)
            {
                $tyyppi=$_FILES['kuva']['type'];
            
                if (strcasecmp($tyyppi,"image/png") == 0|| strcasecmp($tyyppi,"image/jpg")==0)
                {
                    $tiedosto = basename($tiedosto);
                    $kansio = 'uploads/';
                
                    if (move_uploaded_file($_FILES["kuva"]["tmp_name"], "$kansio/$tiedosto"))
                    {
                        $image = new ImageResize("$kansio/$tiedosto");
                        $image->crop(200, 200);
                        $image->save("$kansio/thumbs/$tiedosto");
                        print "<p>Kuva on tallennettu palvelimelle.</p>";
                        print "<a href='index.php'>Selaa kuvia</a>";
                    }
                    else {
                        print "<p>Kuvan tallennuksessa tapahtui virhe.</p>";
                    }
                }
                else
                {
                    print "<p>Voit ladata vain jpg tai png-tiedostoja.</p>";
                }
            }
        }
        ?>
<?php
        include_once 'include/Bottom.php';
    ?>
    
  