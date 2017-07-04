<!DOCTYPE html>
<html lang="en" ng-app="trans" ng-controller="en">



@include('layouts.header')



<body lang="<%lang%>" dir="<%dir%>">

  <div class="loading">

    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
      

      <span class="sr-only">Loading...</span>
  
  </div>
  

  <div class="lang"><a>ar</a></div>
  



@include("layouts.nav")





@yield('content')



@include('layouts.footer')



</body>

</html>