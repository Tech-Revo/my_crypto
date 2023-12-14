<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coin Me | Add User</title>
    @include('adminLayouts.header')
</head>

<body>
    <div class="main-wrapper">
        @include('adminLayouts.nav')
        @include('adminLayouts.sidebar')
        <div class="page-wrapper">
            <div class="content">

                <div class="row mt-5">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Create User Account</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" name="address">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile No <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="mobile_no">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group select-focus">
                                        <label>Gender <span class="text-danger">*</span></label>
                                        <select class="select form-control" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                               
                                                            
                            </div>

                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    @include('adminLayouts.footer')
    
</body>

</html>
