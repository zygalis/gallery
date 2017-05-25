
    <?php
        include_once 'include/Top.php';
    ?>
        <form action="upload.php" method="post" enctype="multipart/form-data" role="form">
            <div class="form-group">
                <label for="kuva">Kuva:</label>
                <input type="file" name="kuva" id="kuva">
            </div>
            <div class="form-group">
                <button>Lähetä</button>
                <button type="button" onclick="window.location='index.php';">Peruuta</button>
            </div>
        </form>
    <?php
        include_once 'include/Bottom.php';
    ?>
   
