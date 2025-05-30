
<?php include('includes/header.php'); // header .. ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                    <div class="card shadow">
                        <div class="card-header bg-danger text-white">
                             <h4> <i class="fa fa-sign-in"></i> Register</h4>
                        </div>
                        <form class="card-body" action="actions/register.php" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label"> <i class="fa fa-user-circle"></i> Name</label>
                                <input type="text" class="form-control" id="email" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"> <i class="fa fa-phone"></i> What's App</label>
                                <input type="text" class="form-control" id="email" name="whatsapp" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"> <i class="fa fa-envelope"></i> Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"> <i class="fa fa-key"></i> Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                             <div class="mb-3">
                                <label for="password" class="form-label"> <i class="fa fa-key"></i> Confirm Password</label>
                                <input type="password" class="form-control" id="password" name="confirm_password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger"> <i class="fa fa-sign-in"></i> Register</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); // footer .. ?>
