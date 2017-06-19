<html>
<head>
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h1>Daftar User</h1>
    <table border="1">
        <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            <?php
            foreach($daftar_user as $user){
            ?>
 
        <tr>
            <td><?php echo $user->nama_lengkap; ?></td>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->alamat; ?></td>
            <td><?php echo '<a href="'.base_url().'index.php/user_controller/delete_user/'.$user->id_user.'" onclick="return confirm(\'Anda yakin akan menghapus '.$user->username.'?\')">Delete</a>'?></td>
        </tr>
           <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </tfoot>
    </table>
</body>
</html>