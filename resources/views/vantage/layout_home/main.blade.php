<!DOCTYPE html>
<html lang="en">

@include('vantage.layout_home.headlink')

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<input type="hidden" name="base_url" id="base_url" value="{{url('/')}}">
<!-- Navigation -->
@include('vantage.layout_home.headlink')
@include('vantage.layout_home.menu')

@yield('page_content')

@include('vantage.layout_home.footer')
<footer>
    <p class="text-center">&copy; {{$company[0]->footerText}} <a href="{{$company[0]->footerLindAddress}}">{{$company[0]->footerLink}}</a></p>
</footer>
@include('vantage.layout_home.footerlink')

@yield('page_script')
</body>

</html>
