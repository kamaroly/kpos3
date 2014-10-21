<!doctype html>
<html lang="en" >
@include('partials/head')
<body>
 <div class="im_page_wrap">
  @include('partials/header')

   
  <div class="im_page_wrap" >

  <div class="im_page_split clearfix">

    @include('partials/leftside')

 <div class="im_history_col_wrap">
    <!-- Content -->
    @yield('content')
  </div>

  </div>
     

  </div>
@include('partials/foot')
</body>
</html>
