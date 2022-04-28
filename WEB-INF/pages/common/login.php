<button type="button" class="btn login_btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Login</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content login_content">
            <div class="login_section">
                <h3 class="login_title">Login</h3>
                <form action="php/login_controller.php" method="POST">
                    <div class="mb-3">
                        <label for="login_email" class="form-label login_label">Email address</label>
                        <input type="email" class="form-control" id="login_email" aria-describedby="emailHelp" name="login_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="login_password" class="form-label login_label">Password</label>
                        <input type="password" class="form-control" id="login_password" name="login_password" required>
                    </div>
                    <button type="submit" class="btn login_form_btn text-white">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>