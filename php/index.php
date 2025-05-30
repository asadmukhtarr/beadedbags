
<?php include('includes/header.php'); // header .. ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                    <div class="card shadow">
                        <div class="card-header bg-danger text-white">
                             <h4> <i class="fa fa-sign-in"></i> Login</h4>
                        </div>
                        <form class="card-body" action="actions/login.php" method="get">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger"> <i class="fa fa-sign-in"></i> Login</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); // footer .. ?>
