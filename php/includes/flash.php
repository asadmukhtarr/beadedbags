    <?php 
        if(!empty($_GET['error'])) { 
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> <?php echo $_GET['error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>