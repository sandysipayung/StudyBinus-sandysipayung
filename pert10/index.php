<html>
    <form method="post" action="#" enctype="multipart/form-data">
        <table>
            <tr>
                <td>File</td>
                <td>:</td>
                <td><input type="file" name="gambar" /></td>
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
    
    Nama File: <?php echo @$_FILES['gambar']['name'];?>
    <br/>
    Size: <?php echo @$_FILES['gambar']['size'];?>
    <br/>
    Tipe File: <?php echo @$_FILES['gambar']['type'];?>
    
</html>

<!-- Pembulatan CEIL, FLOOR, BIASA -->