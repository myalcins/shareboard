<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">ShareBoard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>shares">Shares</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right mb-2 mb-lg-0">
                <?php if(isset($_SESSION['is_logged_in'])): ?>
                    <li class="nav-item">
                        <a class="nav-link disable" aria-current="page"><?php echo "Welcome " . $_SESSION['user_data']['username']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>users/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL; ?>users/register">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>