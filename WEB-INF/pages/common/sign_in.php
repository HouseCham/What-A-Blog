<div class="sign_in col-sm-12 col-md-3">
    <div class="sign_in_section">
        <h3 class="sign_in_title text-white">Sign Up</h3>
        <form action="php/register.php" method="POST">
            <div class="mb-3">
                <span class="sign_error">
                    <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'name') : '' ?>
                </span>
                <label for="name" class="form-label text-white">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <span class="sign_error">
                    <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'lastname') : '' ?>
                </span>
                <label for="lastname" class="form-label text-white">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="mb-3">
                <span class="sign_error">
                    <?php echo isset($_SESSION['errors']) ? showError($_SESSION['errors'], 'email') : '' ?>
                </span>
                <label for="email" class="form-label text-white">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
                <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn sign_in_btn">Register</button>
        </form>
    </div>
    <?php deleteErrors(); ?>
    <h2 class="login_title text-center text-white mb-3">Already part of us?</h2>
    <?php include_once 'WEB-INF/pages/common/login.php' ?>
</div>