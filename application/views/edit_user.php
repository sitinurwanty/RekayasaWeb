<html>
    <head>
        <title><?php echo $judul; ?></title>
    </head>
    <body>                        
    <h1>Update Data User</h1>
 
    <?php 
        $att = array('id' => 'biodata-form');
        echo form_open('user_controller/simpan_edit_user', $att);
        echo form_hidden('id_user',$edit->id_user);
    ?>
        <table> 
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" value="<?php echo $edit->nama_lengkap; ?>"/></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $edit->username; ?>"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $edit->password; ?>"/></td>
            </tr>
            </tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $edit->email; ?>"/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" style="height: 80px;"><?php echo $edit->alamat; ?></textarea></td>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"/></td>
            </tr>
        </table>
    </form>
    </body>
</html>