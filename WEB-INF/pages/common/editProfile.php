<button type="button" class="btn edit_btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
    <i class="uil uil-user edit_icon"></i>
    Edit Profile
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content edit_content">
            <div class="edit_section">
                <h3 class="edit_title">Edit Profile</h3>
                <form action="php/editProfile_controller.php" method="POST">
                    <div class="mb-3">
                        <label for="edit_name" class="form-label edit_label">Set name</label>
                        <input type="text" class="form-control" id="edit_name" aria-describedby="emailHelp" name="edit_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_lastname" class="form-label edit_label">Set lastname</label>
                        <input type="text" class="form-control" id="edit_lastname" name="edit_lastname" required>
                    </div>
                    <button type="submit" class="btn edit_form_btn text-white">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>