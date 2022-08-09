<?php 
require '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Data YouTube</title>
    </head>
    <body>

        <h1>Tambah Data YouTube</h1>

        <a href="tb_youtube.php">Table YouTube</a>

        <br><br>

        <fieldset>
            <legend>Form Tambah Data</legend>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="">Postingan:</label>
                        </td>
                        <td>
                            <textarea name="post" placeholder="Postingan" id="" cols="20" rows="1"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Jenis:</label>
                        </td>
                        <td>
                            <input type="text" name="jenis" placeholder="Jenis" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Keyword:</label>
                        </td>
                        <td>
                            <input type="text" name="keyword" placeholder="Keyword" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Link:</label>
                        </td>
                        <td>
                            <input type="text" name="link" placeholder="Link" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Akun:</label>
                        </td>
                        <td>
                            <input type="text" name="akun" placeholder="Akun" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Followers:</label>
                        </td>
                        <td>
                            <input type="text" name="followers" placeholder="Followers" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Comment:</label>
                        </td>
                        <td>
                            <input type="text" name="comment" placeholder="Comment" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Like:</label>
                        </td>
                        <td>
                            <input type="text" name="like" placeholder="Like" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Share:</label>
                        </td>
                        <td>
                            <input type="text" name="share" placeholder="Share" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">View:</label>
                        </td>
                        <td>
                            <input type="text" name="view" placeholder="View" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Kota/Kabupaten:</label>
                        </td>
                        <td>
                            <input type="text" name="kabupaten" placeholder="Kota/Kabupaten" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Provinsi:</label>
                        </td>
                        <td>
                            <input type="text" name="provinsi" placeholder="Provinsi" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>
                            <input type="submit" name="tambah" value="Tambah" style="cursor: pointer;">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>


<?php 
if(isset($_POST['tambah'])){
    $post = $_POST['post'];
    $jenis = $_POST['jenis'];
    $keyword = $_POST['keyword'];
    $link = $_POST['link'];
    $akun = $_POST['akun'];
    $followers = $_POST['followers'];
    $comment = $_POST['comment'];
    $like = $_POST['like'];
    $share = $_POST['share'];
    $view = $_POST['view'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];


}
?>