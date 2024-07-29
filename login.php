<!-- <div class="container">
    <form action="api/loginApi.php" method="POST">
        <label for="username">User Name</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Login">
    </form>
</div> -->

<!--Sign up start-->
<section>
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                <div class="card shadow-sm mb-6">
                    <div class="card-body">


                        <form class="needs-validation mb-6" action="api/login-api.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">
                                    username
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" id="username" name="username" required />
                                <div class="invalid-feedback">Please enter username.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="password-field position-relative">
                                    <input type="password" class="form-control fakePassword" id="password" name="password" required />
                                    <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                    <div class="invalid-feedback">Please enter password.</div>
                                </div>
                            </div>


                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">login</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>

</section>
<!--Sign up end-->