<style>
    .btn-container {
        display: flex;
        background: rgba(255, 255, 255, 0);
        margin-right: 0rem;
    }

    .nav-item {
        padding: 0 0.5rem;
        font-weight: 300;
        font-size: 1.25vw;
        background: rgba(255, 255, 255, 0);
    }
    
    .nav-link {
        background: rgba(255, 255, 255, 0);
    }

    a {
        text-decoration: none;
        color: black;
        font-size: 1.25vw;
    }

    .navbar-brand {
        margin-left: 2rem;
        font-size: 1.5vw;
        background: rgba(255, 255, 255, 0);
    }

    .navbar-collapse {
        background: rgba(255, 255, 255, 0);
    }

    .navbar-nav {
        background: rgba(255, 255, 255, 0);
    }

    svg {
        background: rgba(255, 255, 255, 0);
    }

    .navbar-toggler-icon {
        background: rgba(255, 255, 255, 0);
    }

    .btn {
        background: rgba(255, 255, 255, 0.45);
        border-radius: 30px;
        margin-left: 0.5rem;
    }

    .material-symbols-outlined {
        background: rgba(255, 255, 255, 0);
        margin-left: 0.4rem;
        margin-right: 0.4rem;
    }

</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<nav class="position-relative navbar navbar-expand-lg w-100 navbar-light bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LapPro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            Categories
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home/index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home/products/all">Products</a>
                </li>
            </ul>
        </div>

        <a href="/home/cart" class="btn btn-outline-dark mx-3" type="button" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
        </a>
        <?php
        if (isset($_SESSION['user_id'])) {
            echo '<a href="/login/logout" class="btn btn-outline-dark"> Logout</a>';
        } else {
            echo '<a href="/login/index" class="btn btn-outline-dark"> Login</a>';
        }
        ?>
        <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            echo '
                <a href="/home/admin" class="btn btn-outline-dark" type="button"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    ADMIN
                </a>';
        }
        ?>
    </div>
    </div>
</nav>