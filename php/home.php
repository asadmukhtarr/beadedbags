<?php 
    include('includes/header.php'); // header .. 
    // 
    //session_start(); /// because i already started in header.php ...
    if(empty($_SESSION['user'])){
        header('Location:./index.php');
    }
?>
    <div class="bg-info p-5">
            <h2 class="text-white"> <i class="fa-solid fa-thumbs-up"></i> Welcome <?php echo ucfirst($_SESSION['user']['name']); ?></h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus esse repellat, cum unde porro minima tempore fuga laboriosam quia, ea iure sunt hic. Suscipit voluptas deleniti perferendis provident assumenda porro voluptates, quibusdam dignissimos dolore iste illo minima aliquam, repellendus animi explicabo? Qui eaque beatae adipisci. Facilis enim ab aperiam illo!
            </p>
    </div>
<?php include('includes/footer.php'); // footer .. ?>