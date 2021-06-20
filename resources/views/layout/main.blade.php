<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<title>@yield('title')</title>

<body>
    <div class="nav">


        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <label class="logo">Loh</label>

        </div>

        <div class="nav-btn">
            <label for="nav-check">
      </label>
        </div>

        <div class="search">
            <form action="#">
                <input type="text" placeholder=" Cari disini" name="search">

            </form>
        </div>
        <div class="nav-links">

            <a href="/" <?php if($thisPage == "home") echo "class='active'"; ?>>Home</a>
            <a href="/profil" <?php if($thisPage == "profile") echo "class='active'"; ?> >Profil</a>
            <a href="/coba">To Do List</a>
            <label class="switch">
                <input onclick="myFunction()" type="checkbox" >
                <span class="slider round"></span>
              </label>

        </div>
    </div>

    <input type="checkbox" id="check">
    <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>

    <div class="sidebar">
        <header>Categori</header>
        <ul>
            <a href="/"><i class="fas fa-qrcode"></i> Dashboard</a>
            <a href="#"><i class="fas fa-fish"></i> Fish</a>
            <a href="#"><i class="fas fa-cookie"></i> Fish Foods</a>
            <a href="#"><i class="fas fa-stream"></i> Overview</a>
            <a href="#"><i class="far fa-question-circle"></i> About</a>
            <a href="#"><i class="fas fa-sliders-h"></i> Services</a>
        </ul>
    </div>


    <div class="right-sidebar">
        <header> Berita Populer</header>

        <ul>
            <img src="img/nemo.png" width="100" height="50">
            <a href="#"> Ikan Nemo Bisa Hidup di Air Tawar</a>
            <img src="img/buntal.jpg" width="100" height="50">
            <a href="#"> Mengenal Ikan Hias Buntal</a>
            <img src="img/barkuda.jpg" width="100" height="50">
            <a href="#"> Karakter Barakuda</a>


        </ul>
    </div>

    <!-- <div class="sidebar1">Some content Some content Some content</div> -->
    <section>

        @yield('content')


    



        

        





<footer class="footer-distributed">

    <div class="footer-right">

        <a href="#"><i class="fa fa-envelope"></i></a>
        <a href="#"><i class="fa fa-question-circle"></i></a>


    </div>

    <div class="footer-left">

        <p class="footer-links">
            <a class="link-1" href="#">. Home</a>

            <a class="link-1" href="#">. Blog</a>

            <a class="link-1" href="#">. Pricing</a>

            <a class="link-1" href="#">. About</a>

            <a class="link-1" href="#">. Faq</a>

            <a class="link-1" href="#">. Contact</a>
        </p>

        <p>Company Name &copy; 2021</p>
    </div>

</footer>
</section>
</body>
<script>
    // function myFunction() {
    //     var element = document.body;
    //     element.classList.toggle("dark-mode");
    // }

    (function() {
        let onpageLoad = localStorage.getItem("theme") || "";
        let element = document.body;
        element.classList.add(onpageLoad);
        document.getElementById("theme").textContent =
            localStorage.getItem("theme") || "light";
    })();

    function myFunction() {
        let element = document.body;
        element.classList.toggle("dark-mode");

        let theme = localStorage.getItem("theme");
        if (theme && theme === "dark-mode") {
            localStorage.setItem("theme", "");
        } else {
            localStorage.setItem("theme", "dark-mode");
        }

        document.getElementById("theme").textContent = localStorage.getItem("theme");
    }
</script>

</html>