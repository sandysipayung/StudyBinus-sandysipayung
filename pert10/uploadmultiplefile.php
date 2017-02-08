<html>
    <form method="post" action="#" enctype="multipart/form-data">
        <table>
            <tr>
                <td>File</td>
                <td>:</td>
                <td><input type="file" name="gambar[]" multiple="multiple"/></td>
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
    if (isset($_POST['submitGambar'])) {
        //tombol submit diklik
        foreach ($_FILES['gambar']['name'] as $ind => $nama)
        {
             $folder='product/'.$nama;
             move_uploaded_file($_FILES['gambar']['tmp_name'][$ind], $folder);
             ?>
             <img src="product/<?php echo $nama?>" width="200"/><?php
             
        }
    }
    ?>
</html>

<!-- Pembulatan CEIL, FLOOR, BIASA -->