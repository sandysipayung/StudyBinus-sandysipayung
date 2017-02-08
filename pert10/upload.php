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
    <br/>
    <br/>

    <?php
    if (!empty(@$_FILES['gambar']['name'])) {
        //tombol submit diklik
        $ukuran=round(@$_FILES['gambar']['size']/1024);
        if ($ukuran >=1024) {
            ?>
            Nama File: <?php echo @$_FILES['gambar']['name']; ?>
            <br/>
            Size: <?php echo round(@$_FILES['gambar']['size']/1024).'Kb'; ?>
            <br/>
            Tipe File: <?php echo @$_FILES['gambar']['type']; ?>
            <?php } else {
            ?>
            FILE NYA HARUS LEBIH GEDE 1Mb
            <?php
        }
    }
    ?>
</html>

<!-- Pembulatan CEIL, FLOOR, BIASA -->