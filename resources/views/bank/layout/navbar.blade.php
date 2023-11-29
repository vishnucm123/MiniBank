

<nav
    class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"
    id="mainNav">
    <a class="navbar-brand" href="index.html">MINI BANK</a>
    <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navbarResponsive"
        aria-controls="navbarResponsive"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li
                class="nav-item"
                data-toggle="tooltip"
                data-placement="right"
                title="Dashboard"
            >
                <a class="nav-link" href='#'>
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>


            <li
                class="nav-item"
                data-toggle="tooltip"
                data-placement="right"
                title="Dashboard"
            >
                <a class="nav-link" href="{{url('/deposit-index')}}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Deposit</span>
                </a>
            </li>



            <li
                class="nav-item"
                data-toggle="tooltip"
                data-placement="right"
                title="Dashboard"
            >
                <a class="nav-link" href="{{url('/withdraw-index')}}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Withdraw</span>
                </a>
            </li>



            <li
                class="nav-item"
                data-toggle="tooltip"
                data-placement="right"
                title="Dashboard"
            >
                <a class="nav-link" href="{{url('/transfer-index')}}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Transfer</span>
                </a>
            </li>



            <li
                class="nav-item"
                data-toggle="tooltip"
                data-placement="right"
                title="Dashboard"
            >
                <a class="nav-link" href="{{url('/statement-index')}}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Statement</span>
                </a>
            </li>


        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">


            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                <button type="submit"><i class="fa fa-fw fa-sign-out"></i> Logout</button>
            </form>

            </li>

        </ul>
    </div>
</nav>
