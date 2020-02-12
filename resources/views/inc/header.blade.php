<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>

<!--==========================
    Header
  ============================-->
<header id="header" class="header-scrolled">
    <div class="container">

        <div id="logo1" class="pull-left">
            <a href="{{ url('/') }}" class="scrollto1"><img src="{{ url('/img/logo.png') }}" height="85px"
                    width="120px;" style="padding-bottom: 25px;" alt="" title=""></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                <li><a href="{{ url('/membership') }}">Membership</a></li>
                <li><a href="{{ url('/events') }}">Events</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="{{ url('/search') }}"><i class="fa fa-search"></i></a></li>
                <li class="buy-tickets" id="m">
                <li class="buy-tickets" id="m"><a href="{{ url('/login') }}">Login</a></li>
                </li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->



<script>
    var name=sessionStorage.getItem("username");

 console.log(name)

</script>
<script>
    function logoutsession() {

  alert("Calling Function")
  sessionStorage.clear();

  location.replace('events.php')

    /* }); */
    return vars;
  }

</script>



<!--==========================
    Intro Section
  ============================-->
<section id="intro" class="introtop">
    <div id="imglogo" style="float: left; position: absolute;
    top: 0;
    left: 16px; " class="intro-container2">
        <img src="{{ url('/img/logo11.png') }}" height="170px" width="130px;" style="position: absolute;
        top: 10%;
        left: 2%;width: 90px;
    height: auto;" alt="" title="">
    </div>
    <div class="intro-container1 wow fadeIn"
        style="margin: 60px auto auto; visibility: visible; animation-name: fadeIn;">
        <h1 style="color: white; text-shadow: 3px 3px black"> Northern Territory Indigenous Business Network</h1>
    </div>
</section>
