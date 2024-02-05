<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url("../assets/images/logos/favicon.png") ?>" />
    <link rel="stylesheet" href="<?= base_url("../assets/css/styles.min.css") ?>" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->

        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                            <i class="ti ti-bell-ringing"></i>
                            <div class="notification bg-primary rounded-circle"></div>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/"
                            target="_blank" class="btn btn-primary">Download Free</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35"
                                    class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">My Profile</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-mail fs-6"></i>
                                        <p class="mb-0 fs-3">My Account</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-list-check fs-6"></i>
                                        <p class="mb-0 fs-3">My Task</p>
                                    </a>
                                    <a href="./authentication-login.html"
                                        class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid">
            <!--  Row 1 -->
            <div class="row">
                <div class="col-lg-8 d-flex align-items-strech">
                    <div class="card w-100">

                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Sales Overview</h5>
                            </div>
                            <div>
                                <select class="form-select">
                                    <option value="1">March 2023</option>
                                    <option value="2">April 2023</option>
                                    <option value="3">May 2023</option>
                                    <option value="4">June 2023</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="row alig n-items-start">
                                    <div class="col-8">


                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <div id="searchResult" style="display:flex; justify-content:flex-end;">
                    <input type="text" id="searchInput" Placeholder="Search..." class="form-control"
                        style="width:275px ">
                    </input>
                </div>
            </div>


            <div class="row">
                <?php foreach ($dt as $td) {
                    ?>
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <a href="javascript:void(0)"><img src="../assets/images/products/s4.jpg"
                                        class="card-img-top rounded-0" alt="..."></a>
                                <a href="javascript:void(0)"
                                    class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                        class="ti ti-basket fs-4"></i></a>
                            </div>
                            <div class="card-body pt-1 p-3">
                                <h6 class="fw-semibold fs-4">
                                    <?php echo $td->makanan ?>

                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">
                                        <?php echo $td->harga ?>
                                    </h6>
                                    <ul class="list-unstyled d-flex align-items-center mb-0">
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-sm btn-primary me-2"
                                                onclick="decrementQuantity(this)">-</button>
                                            <span class="quantity">0</span>
                                            <button class="btn btn-sm btn-primary ms-2"
                                                onclick="incrementQuantity(this)">+</button>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>
<script>
    function incrementQuantity(button) {
        const quantityElement = button.parentElement.querySelector(".quantity");
        let currentQuantity = parseInt(quantityElement.innerText);
        currentQuantity++;
        quantityElement.innerText = currentQuantity;
    }

    function decrementQuantity(button) {
        const quantityElement = button.parentElement.querySelector(".quantity");
        let currentQuantity = parseInt(quantityElement.innerText);
        if (currentQuantity > 0) {
            currentQuantity--;
            quantityElement.innerText = currentQuantity;
        }
    }


</script>