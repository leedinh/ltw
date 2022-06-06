<style>
    .btn-container {
        display: flex;
        background: rgba(255, 255, 255, 0);
        margin-right: 0rem;
    }

    .container-fluid {
        margin-top: 1rem;
        padding: 1rem 2rem;
        margin-left: 2rem;
        margin-right: 2rem;
        border-radius: 2rem;
        background: rgba(255, 255, 255, 0.3);
    }

    .nav-item {
        padding: 0 0.5rem;
        font-weight: 600;
        font-size: 1.5rem;
        background: rgba(255, 255, 255, 0);
    }

    .nav-link {
        background: rgba(255, 255, 255, 0);
    }

    .navbar-brand {
        margin-left: 2rem;
        font-weight: 1000;
        font-size: 1.5rem;
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

    .search-container {
        margin: 0.5rem 1rem 0.5rem 0;
        border-radius: 1.5rem;
        background: rgba(255, 255, 255, 0.8);
        padding: 0.3rem;
    }

    .search-bar {
        width: 30rem;
        max-width: 700px;
        background: rgba(255, 255, 255, 0);
        display: flex;
        align-items: center;
        border-radius: 200px;
    }

    .search-bar input {
        background: transparent;
        flex: 1;
        border: 0;
        outline: none;
        font-size: 20px;
        color: #111;
    }

    ::placeholder {
        color: #111;
    }

    .search-bar button span {
        width: 25px;
        margin: 0;
    }

    .search-bar button {
        border: 0;
        width: 2rem;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0);
        cursor: pointer;
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

        <a class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="material-symbols-outlined">shopping_cart</span>
        </a>
        <?php
        if (isset($_SESSION['user_id'])) {
            echo '<a > Logout</a>';
        } else {
            echo '<a > Login</a>';
        }
        ?>
        <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            echo '
                <a href="/home/admin" class="btn" type="button"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    ADMIN
                </a>';
        }
        ?>
    </div>
    </div>
</nav>