<?php
$koneksi = mysqli_connect('localhost','root','','ukk2025_todolist');

//tambah task
if (isset($_POST['add_Task'])){
    $Task =$_POST['Task'];
    $Priority =$_POST['priority'];
    $Due_date =$_POST['due_date'];

    if (!empty($Task) && !empty($Priority) && !empty($Due_date)){
        mysqli_query($koneksi,"INSERT INTO tasks VALUES('','$Task','$Priority','$Due_date','0')");
        echo"<script> alert('data harus disimpan');</script>";
    }else{
        echo"<script> alert('semua kolom harus diisi!');</script>";

    }
}

if(isset($_GET['complete'])){
    $id =$_GET['complete'];
    mysqli_query($koneksi,"UPDATE tasks SET status=1 WHERE id=$id");
    echo"<script('data berhasil diperbarui');</script>";
    header('location:index.php');
}

if(isset($_GET['delete'])){
    $id =$_GET['delete'];
    mysqli_query($koneksi,"DELETE FROM tasks WHERE id=$id");
    echo"<script('data berhasil dihapus');</script>";
    header('location:index.php');
}

$result = mysqli_query($koneksi,"SELECT * FROM tasks ORDER BY status ASC, Priority DESC, Due_date ASC");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Todo List | UKK RPL 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container mt-2">
        <h2 class="text-center">Aplikasi Todo List</h2>
        <form method="POST" class="border-rounded bg-light p-2">
            <label class="form-label">nama Task</label>
            <input type="text" name="Task" class="form-control" placeholder="masukan Task baru" autocomplete="off" autofocus required>
            <label class="form-label">prioritas</label>
            <select name="priority" class="form-control" required>
                <option value="">--pilih prioritas--</option>
                <option value="1">low</option>
                <option value="2">medium</option>
                <option value="3">High</option>


            </select>
            <label class="form-label">tanggal</label>
            <input type="date" name="due_date" class="form-control" value="<?php echo date('y-m-d')?>" required|>
            <button  type="submit" class="btn btn-primary w-100 mt-2" name="add_Task">tambah</button>
            </form>

            <hr>

         <table class="table table-striped">
            <thead>
                <tr>
                <th>No</th>
                <th>Task</th>
                <th>Priority</th>
                <th>tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(mysqli_num_rows($result) > 0) {
                $no= 1;
                while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['Task']; ?></td>
                        <td>
                            <?php 
                            if($row['Priority'] == 1) {
                                echo "low";
                            }elseif($row['Priority'] == 2) {
                                echo "medium";
                            }else{
                                echo "high";
                            }
                            ?>
                            </td>
                <td><?php echo $row['Due_date']; ?></td>
                <td>
                    <?php
                    if($row['Status'] == 0){
                        echo "belum selesai";
                    }else{
                        echo "selesai";
                    }
                    ?>
                    </td>
                    <td>
                        <?php
                        if($row['Status'] == 0) { ?>
                        <a href="?complete=<?php echo $row['id'] ?> "class="btn btn-success">selesai</a>
                        
                        <?php } ?>
                 <a href="?delete=<?php echo $row['id'] ?> "class="btn btn-danger">hapus</a>
                </td>
                </tr>
            <?php }
            } else {
                 echo "tidak ada data";
                }
           ?>
            </tbody>
         </table>
               
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

</body>
</html>