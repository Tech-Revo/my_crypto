<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coin Me</title>
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
                        <h4 class="page-title">Create Cryto Currency</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Crypto Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="eg: Bitcoin">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Symbol<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="eg: BIT">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Price<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="eg: 100000">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Market Capital<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="eg: 100000">
                                    </div>
                                </div>


                            </div>

                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Submit</button>
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
