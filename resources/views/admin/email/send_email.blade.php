<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coin Me</title>
    @include('adminLayouts.header')
</head>

<body>
    <div class="main-wrapper">
        @include('adminLayouts.nav')


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="{{url('admin/dashboard')}}"><i class="fa fa-home back-icon"></i> <span>Back to Home</span></a>
                        </li>
                        <li class="menu-title"><a href="{{url('admin/email/compose')}}" class="btn btn-primary btn-block">Compose</a></li>
                        <li class="active">
                            <a href="#">Sent Mail</a>
                        </li>
                        <li>
                            <a href="#">Trash</a>
                        </li>
                       
                       
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Blank Page</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    @include('adminLayouts.footer')
</body>

</html>
