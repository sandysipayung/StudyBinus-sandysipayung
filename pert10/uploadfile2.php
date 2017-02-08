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
       $ext=explode('.',$_FILES['gambar']['name']);
       $nama_file=date("d_m_Y H_i_s").'.'.end($ext);
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
</html>

<!-- Pembulatan CEIL, FLOOR, BIASA -->