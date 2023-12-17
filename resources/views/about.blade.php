<!DOCTYPE html>
<html lang="en">

<head>
    @include('homeLayouts.header')
    <title>Coin Me | About Us</title>

</head>

<body class="home">

    @include('homeLayouts.nav')


   <!-- section -->
      <section class="layout_padding theme_color_bg white_fonts ambess_section">
         <div class="container">
            <div class="row">
               <div class="offset-md-1 col-md-10 text_align_center">
                  <div class="full">
                     <h2>About Coin Me</h2>
                  </div>
                  <div class="full margin_bottom_30">
                     <p class="large_2"><strong>Trade Smarter, Trade Faster with CoinMe!</strong></p>
                  </div>
                  <div class="full">
                     <p class="large_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam earum, provident ad, porro aperiam dolore, blanditiis, nihil pariatur eius adipisci consequuntur officiis. Excepturi, nostrum? Id incidunt nesciunt officia hic distinctio nihil pariatur eius adipisci consequuntur officiis.</p>
                     <p class="large_2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Perspiciatis unde omnis iste natus error sit.</p>
                  </div>
                  <div class="full margin_top_30 margin_bottom_20">
                     <p class="center"><a class="signup_bt read_more_bt" href="{{url('register-account')}}">Sign up</a></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->

    @include('homeLayouts.footer')
</body>

</html>
