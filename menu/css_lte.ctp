<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- Google Fonts -->
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

<!-- Ionicons -->
<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

<!-- jvectormap -->
<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="plugins/select2/select2.min.css">

<!-- Theme style -->
<link rel="stylesheet" href="css/AdminLTE.min.css">
<link rel="stylesheet" href="plugins/iCheck/square/blue.css">
<link rel="stylesheet" href="css/skins/skin-blue.min.css">

<style>
    @media (min-width: 768px){
        .sidebar-mini.sidebar-collapse .main-header .logo>.logo-mini {
            display: block;
            margin-left: -15px;
            margin-right: -15px;
            font-size: 14px;
        }
    }

    .skin-yellow .main-header .logo {
        background-color: #9390FF;
        color: #fff;
        border-bottom: 0 solid transparent;
    }
    .skin-yellow .main-header .logo:hover {
        background-color: #7B76FF;
        color: #fff;
        border-bottom: 0 solid transparent;
    }
    .skin-yellow .main-header .navbar .sidebar-toggle {
        color:#fff;
    }

    .skin-yellow .main-header .navbar .sidebar-toggle:hover {
        background-color: #7B76FF;
        color:#fff;
    }
    .skin-yellow .main-header .navbar {
        background-color: #AEABFF;
    }

    .skin-yellow .main-header .navbar .nav>li>a {
        color: #fff;
    }

    .skin-blue .main-header li.user-header {
        background-color: lightgray;
    }

    .navbar-nav>.user-menu>.dropdown-menu>li.user-header>p {
        z-index: 5;
        color: #1e282c;
        font-size: 17px;
        margin-top: 10px;
    }

    .navbar-nav>.user-menu>.dropdown-menu>.user-footer {
        background-color: darkgray;
        padding: 10px;
    }

    .skin-yellow .sidebar-menu>li:hover>a, .skin-yellow .sidebar-menu>li.active>a {
        color: #fff;
        background: #1e282c;
        border-left-color: #AEABFF;
    }

    .alert-info {
        color: #31708f !important;
        background-color: #d9edf7 !important;
        border-color: #bce8f1 !important;
    }
    .alert-warning {
        color: #8a6d3b !important;
        background-color: #fcf8e3 !important;
        border-color: #faebcc !important;
    }
    .alert-danger {
        color: #a94442 !important;
        background-color: #f2dede !important;
        border-color: #ebccd1 !important;
    }
    .alert-success {
        color: #3c763d !important;
        background-color: #dff0d8 !important;
        border-color: #d6e9c6 !important;
    }
</style>

<style>
    .login-box{
        width: 360px;
        margin: 5% auto;
    }
    .login-page, .register-page {
        background: #d2d6de;
    }
</style>

<style>
    @media only screen and (max-width: 800px) {

        /* Force table to not be like tables anymore */
        #no-more-tables table, 
        #no-more-tables thead, 
        #no-more-tables tbody, 
        #no-more-tables th, 
        #no-more-tables td, 
        #no-more-tables tr { 
            display: block; 
        }

        /* Hide table headers (but not display: none;, for accessibility) */
        #no-more-tables thead tr { 
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        #no-more-tables tr { border: 1px solid #ccc; }

        #no-more-tables td { 
            /* Behave  like a "row" */
            border: none;
            border-bottom: 1px solid #eee; 
            position: relative;
            padding-left: 50%; 
            white-space: normal;
            text-align:left;
        }

        #no-more-tables td:before { 
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%; 
            padding-right: 10px; 
            white-space: nowrap;
            text-align:left;
            font-weight: bold;
        }

        #no-more-tables td:before { content: attr(data-title); }
    }
</style>

<style>
    #IrArriba {
        position: fixed;
        bottom: 30px;
        right: 50%;
        background-color: transparent;
        opacity: 0.7;
    }
    #IrArriba a {
        text-decoration: none;
        color: #fff;
        text-shadow:none !important;
    }
    #IrArriba span {
        width: 66px;
        height: 66px;
        display: block;
        background: url(img/subir.png) no-repeat center center;
        cursor:pointer;
    }
</style>

<style>
    /* Tabs panel */
    .tabbable-panel {
        border:1px solid #eee;
        padding: 10px;
    }

    /* Default mode */
    .tabbable-line > .nav-tabs {
        border: none;
        margin: 0px;
    }
    .tabbable-line > .nav-tabs > li {
        margin-right: 2px;
    }
    .tabbable-line > .nav-tabs > li > a {
        border: 0;
        margin-right: 0;
        color: #737373;
    }
    .tabbable-line > .nav-tabs > li > a > i {
        color: #a6a6a6;
    }
    .tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
        border-bottom: 4px solid #fbcdcf;
    }
    .tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
        border: 0;
        background: none !important;
        color: #333333;
    }
    .tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
        color: #a6a6a6;
    }
    .tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
        margin-top: 0px;
    }
    .tabbable-line > .nav-tabs > li.active {
        border-bottom: 4px solid #f3565d;
        position: relative;
    }
    .tabbable-line > .nav-tabs > li.active > a {
        border: 0;
        color: #333333;
    }
    .tabbable-line > .nav-tabs > li.active > a > i {
        color: #404040;
    }
    .tabbable-line > .tab-content {
        margin-top: -3px;
        background-color: #fff;
        border: 0;
        border-top: 1px solid #eee;
        padding: 15px 0;
    }
    .portlet .tabbable-line > .tab-content {
        padding-bottom: 0;
    }


    .tabbable-line.tabs-below > .nav-tabs > li {
        border-top: 4px solid transparent;
    }
    .tabbable-line.tabs-below > .nav-tabs > li > a {
        margin-top: 0;
    }
    .tabbable-line.tabs-below > .nav-tabs > li:hover {
        border-bottom: 0;
        border-top: 4px solid #fbcdcf;
    }
    .tabbable-line.tabs-below > .nav-tabs > li.active {
        margin-bottom: -2px;
        border-bottom: 0;
        border-top: 4px solid #f3565d;
    }
    .tabbable-line.tabs-below > .tab-content {
        margin-top: -10px;
        border-top: 0;
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
    }
</style>