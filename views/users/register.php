<div class="d-flex justify-content-center mt-3">
    <form class="m-3" method="post" action="<?php echo ROOT_URL; ?>users/register">
        <label class="m-3"><h3>Welcome to ShareBoard</h3></label>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <div class="input-group">
                <input type="submit" value="Register" name="submit" class="btn btn-primary m-2">
            </div>
        </div>
    </form>
</div>
