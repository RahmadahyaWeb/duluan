<x-layouts.app>
    @section('header')
        <x-header :showTitle="false" :goBack="false" />
    @endsection

    <!-- Wallet Card -->
    <div class="section wallet-card-section pt-1">
        <div class="wallet-card">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <span class="title">Total Balance</span>
                    <h1 class="total">$ 2,562.50</h1>
                </div>
                <div class="right">
                    <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                        <ion-icon name="add-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <!-- * Balance -->
            <!-- Wallet Footer -->
            <div class="wallet-footer">
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                        <div class="icon-wrapper bg-danger">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <strong>Withdraw</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                        <div class="icon-wrapper">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <strong>Send</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="app-cards.html">
                        <div class="icon-wrapper bg-success">
                            <ion-icon name="card-outline"></ion-icon>
                        </div>
                        <strong>Cards</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                        <div class="icon-wrapper bg-warning">
                            <ion-icon name="swap-vertical"></ion-icon>
                        </div>
                        <strong>Exchange</strong>
                    </a>
                </div>

            </div>
            <!-- * Wallet Footer -->
        </div>
    </div>
    <!-- Wallet Card -->

    <!-- Deposit Action Sheet -->
    <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Balance</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account1">From</label>
                                    <select class="form-control custom-select" id="account1">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addona1">$</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount"
                                        value="100">
                                </div>
                            </div>


                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">Deposit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Deposit Action Sheet -->

    <!-- Withdraw Action Sheet -->
    <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Withdraw Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2d">From</label>
                                    <select class="form-control custom-select" id="account2d">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text11d">To</label>
                                    <input type="email" class="form-control" id="text11d" placeholder="Enter IBAN">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addonb1">$</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount"
                                        value="100">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">Withdraw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Withdraw Action Sheet -->

    <!-- Send Action Sheet -->
    <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2">From</label>
                                    <select class="form-control custom-select" id="account2">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text11">To</label>
                                    <input type="email" class="form-control" id="text11"
                                        placeholder="Enter bank ID">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1">$</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount"
                                        value="100">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Send Action Sheet -->

    <!-- Exchange Action Sheet -->
    <div class="modal fade action-sheet" id="exchangeActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Exchange Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="currency1">From</label>
                                            <select class="form-control custom-select" id="currency1">
                                                <option value="1">EUR</option>
                                                <option value="2">USD</option>
                                                <option value="3">AUD</option>
                                                <option value="4">CAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="currency2">To</label>
                                            <select class="form-control custom-select" id="currency2">
                                                <option value="1">USD</option>
                                                <option value="1">EUR</option>
                                                <option value="2">AUD</option>
                                                <option value="3">CAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon2">$</span>
                                    <input type="text" class="form-control" placeholder="Enter an amount"
                                        value="100">
                                </div>
                            </div>



                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">Exchange</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Exchange Action Sheet -->

    <!-- Stats -->
    <div class="section">
        <div class="row mt-2">
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Income</div>
                    <div class="value text-success">$ 552.95</div>
                </div>
            </div>
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Expenses</div>
                    <div class="value text-danger">$ 86.45</div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Total Bills</div>
                    <div class="value">$ 53.25</div>
                </div>
            </div>
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Savings</div>
                    <div class="value">$ 120.99</div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Stats -->

    <!-- Transactions -->
    <div class="section mt-4">
        <div class="section-heading">
            <h2 class="title">Transactions</h2>
            <a href="app-transactions.html" class="link">View All</a>
        </div>
        <div class="transactions">
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Amazon</strong>
                        <p>Shopping</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger"> - $ 150</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Apple</strong>
                        <p>Appstore Purchase</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger">- $ 29</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/avatar/avatar3.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Alex Ljung</strong>
                        <p>Transfer</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price">+ $ 1,000</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/avatar/avatar4.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Beatriz Brito</strong>
                        <p>Transfer</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger">- $ 186</div>
                </div>
            </a>
            <!-- * item -->
        </div>
    </div>
    <!-- * Transactions -->

    <!-- my cards -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">My Cards</h2>
            <a href="app-cards.html" class="link">View All</a>
        </div>

        <!-- carousel single -->
        <div class="carousel-single splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-block bg-primary">
                            <div class="card-main">
                                <div class="card-button dropdown">
                                    <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                        <ion-icon name="ellipsis-horizontal"></ion-icon>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="pencil-outline"></ion-icon>Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="close-outline"></ion-icon>Remove
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                        </a>
                                    </div>
                                </div>
                                <div class="balance">
                                    <span class="label">BALANCE</span>
                                    <h1 class="title">$ 1,256,90</h1>
                                </div>
                                <div class="in">
                                    <div class="card-number">
                                        <span class="label">Card Number</span>
                                        •••• 9905
                                    </div>
                                    <div class="bottom">
                                        <div class="card-expiry">
                                            <span class="label">Expiry</span>
                                            12 / 25
                                        </div>
                                        <div class="card-ccv">
                                            <span class="label">CCV</span>
                                            553
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                    </li>

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-block bg-dark">
                            <div class="card-main">
                                <div class="card-button dropdown">
                                    <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                        <ion-icon name="ellipsis-horizontal"></ion-icon>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="pencil-outline"></ion-icon>Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="close-outline"></ion-icon>Remove
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                        </a>
                                    </div>
                                </div>
                                <div class="balance">
                                    <span class="label">BALANCE</span>
                                    <h1 class="title">$ 1,256,90</h1>
                                </div>
                                <div class="in">
                                    <div class="card-number">
                                        <span class="label">Card Number</span>
                                        •••• 9905
                                    </div>
                                    <div class="bottom">
                                        <div class="card-expiry">
                                            <span class="label">Expiry</span>
                                            12 / 25
                                        </div>
                                        <div class="card-ccv">
                                            <span class="label">CCV</span>
                                            553
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                    </li>

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-block bg-secondary">
                            <div class="card-main">
                                <div class="card-button dropdown">
                                    <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                        <ion-icon name="ellipsis-horizontal"></ion-icon>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="pencil-outline"></ion-icon>Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="close-outline"></ion-icon>Remove
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                        </a>
                                    </div>
                                </div>
                                <div class="balance">
                                    <span class="label">BALANCE</span>
                                    <h1 class="title">$ 1,256,90</h1>
                                </div>
                                <div class="in">
                                    <div class="card-number">
                                        <span class="label">Card Number</span>
                                        •••• 9905
                                    </div>
                                    <div class="bottom">
                                        <div class="card-expiry">
                                            <span class="label">Expiry</span>
                                            12 / 25
                                        </div>
                                        <div class="card-ccv">
                                            <span class="label">CCV</span>
                                            553
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel single -->

    </div>
    <!-- * my cards -->

    <!-- Send Money -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Send Money</h2>
            <a href="#" class="link">Add New</a>
        </div>
        <!-- carousel small -->
        <div class="carousel-small splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                                <strong>Jurrien</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar3.jpg" alt="img" class="imaged w-100">
                                <strong>Elwin</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="img" class="imaged w-100">
                                <strong>Alma</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar5.jpg" alt="img" class="imaged w-100">
                                <strong>Justine</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar6.jpg" alt="img" class="imaged w-100">
                                <strong>Maria</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar7.jpg" alt="img" class="imaged w-100">
                                <strong>Pamela</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar8.jpg" alt="img" class="imaged w-100">
                                <strong>Neville</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar9.jpg" alt="img" class="imaged w-100">
                                <strong>Alex</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar10.jpg" alt="img" class="imaged w-100">
                                <strong>Stina</strong>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- * carousel small -->
    </div>
    <!-- * Send Money -->

    <!-- Monthly Bills -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Monthly Bills</h2>
            <a href="app-bills.html" class="link">View All</a>
        </div>
        <!-- carousel multiple -->
        <div class="carousel-multiple splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="assets/img/sample/brand/1.jpg" alt="img"
                                    class="image-block imaged w48">
                            </div>
                            <div class="price">$ 14</div>
                            <p>Prime Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="assets/img/sample/brand/2.jpg" alt="img"
                                    class="image-block imaged w48">
                            </div>
                            <div class="price">$ 9</div>
                            <p>Music Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <div class="iconbox bg-danger">
                                    <ion-icon name="medkit-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="price">$ 299</div>
                            <p>Monthly Health Insurance</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <div class="iconbox">
                                    <ion-icon name="card-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="price">$ 962</div>
                            <p>Credit Card Statement
                            </p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->
    </div>
    <!-- * Monthly Bills -->


    <!-- Saving Goals -->
    <div class="section mt-4">
        <div class="section-heading">
            <h2 class="title">Saving Goals</h2>
            <a href="app-savings.html" class="link">View All</a>
        </div>
        <div class="goals">
            <!-- item -->
            <div class="item">
                <div class="in">
                    <div>
                        <h4>Gaming Console</h4>
                        <p>Gaming</p>
                    </div>
                    <div class="price">$ 499</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                        aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
            </div>
            <!-- * item -->
            <!-- item -->
            <div class="item">
                <div class="in">
                    <div>
                        <h4>New House</h4>
                        <p>Living</p>
                    </div>
                    <div class="price">$ 100,000</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55"
                        aria-valuemin="0" aria-valuemax="100">55%</div>
                </div>
            </div>
            <!-- * item -->
            <!-- item -->
            <div class="item">
                <div class="in">
                    <div>
                        <h4>Sport Car</h4>
                        <p>Lifestyle</p>
                    </div>
                    <div class="price">$ 42,500</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15"
                        aria-valuemin="0" aria-valuemax="100">15%</div>
                </div>
            </div>
            <!-- * item -->
        </div>
    </div>
    <!-- * Saving Goals -->


    <!-- News -->
    <div class="section full mt-4 mb-3">
        <div class="section-heading padding">
            <h2 class="title">Lastest News</h2>
            <a href="app-blog.html" class="link">View All</a>
        </div>

        <!-- carousel multiple -->
        <div class="carousel-multiple splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">What will be the value of bitcoin in the next...</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">Rules you need to know in business</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">10 easy ways to save your money</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="assets/img/sample/photo/4.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">Follow the financial agenda with...</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->

    </div>
    <!-- * News -->
</x-layouts.app>
