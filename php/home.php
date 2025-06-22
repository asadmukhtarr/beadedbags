<?php 
    include('includes/header.php'); // header .. 
    // 
    //session_start(); /// because i already started in header.php ...
    if(empty($_SESSION['user'])){
        header('Location:./index.php');
    }
    include('./actions/cn.php');
    $query = "SELECT * FROM `users` ORDER BY id DESC"; // through modal in laravel ...
    $result = mysqli_query($cn,$query) or die('cant run query'.mysqli_error($cn));
   // $rows = mysqli_num_rows($result);
?>
<div class="bg-info p-5">
    <h2 class="text-white"> <i class="fa-solid fa-thumbs-up"></i> Welcome
        <?php echo ucfirst($_SESSION['user']['name']); ?></h2>
    <p class="text-white">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus esse repellat, cum unde porro minima
        tempore fuga laboriosam quia, ea iure sunt hic. Suscipit voluptas deleniti perferendis provident assumenda porro
        voluptates, quibusdam dignissimos dolore iste illo minima aliquam, repellendus animi explicabo? Qui eaque beatae
        adipisci. Facilis enim ab aperiam illo!
    </p>
</div>
<div class="p-5 mt-1">
    <div class="card rounded-0">
        <div class="card-header bg-danger text-white">
            <i class="fa fa-users"></i> Users List
        </div>
        <table class="table table-bordered table-hover table-stripped">
            <tr>
                <th><i class="fa fa-id-badge"></i> ID</th>
                <th><i class="fa fa-user"></i> Name</th>
                <th><i class="fa fa-whatsapp"></i> What's App</th>
                <th><i class="fa fa-envelope"></i> Email</th>
            </tr>
            <?php 
            while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['whatsapp'] ?></td>
                <td><?php echo $row['email'] ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
<?php include('includes/footer.php'); // footer .. ?>