<html>
    <form method="post" action="#" enctype="multipart/form-data">
        <table>
            <tr>
                <td>File</td>
                <td>:</td>
                <td><input type="file" name="gambar" /></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="submitGambar" value="Upload"/>
                    &nbsp;&nbsp;
                    <input type="reset" name="reset" value="Reset"/>
                </td>
            </tr>
        </table>
    </form>
    <br/> 

    <?php
    if (isset($_FILES['gambar']['name'])) {
        //tombol submit diklik
       $nama_file=$_FILES['gambar']['name'];
       $folder='product/'.$nama_file;
        if (!move_uploaded_file($_FILES['gambar']['tmp_name'], $folder)) {
            ?>
            UPLOAD GAGAL
            <?php } else {
            ?>
            UPLOAD BERHASIL LAH
            <?php
        }
    }
    ?>
            <br/>
             <img src="product/<?php echo $nama_file?>" width="200"/>
</html>

<!-- Pembulatan CEIL, FLOOR, BIASA -->