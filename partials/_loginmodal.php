<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginmodalLabel">Login to iDiscuss</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
                <div class="modal-body">
                    <p class="text-center "> If you have not account?<a href="#" data-bs-toggle="modal" data-bs-target="#signupmodal">Signup</a></p>

                <form action="partials\_login.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            
        </div>
    </div>
</div>