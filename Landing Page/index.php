<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Landing Page</title>
</head>
<body>
    <section id="home">
        <header id="home_header">
                <h2>Kucra</h2>
            <nav id="header_nav">
                <div class="header_search">
                    <ul>
                        <li><a class="nav_text">HOME</a></li>
                        <li><a class="nav_text">FEATURES</a></li>
                        <li><a class="nav_text">CLIENT</a></li>
                        <li><a class="nav_text">PRICING</a></li>
                        <li><a class="nav_text">FAQ</a></li>
                        <li><a class="nav_text">ABOUT</a></li>
                        <li><a class="nav_text">BLOG</a></li>
                        <li><a class="nav_text">CONTACT</a></li>
                    <ul>
                </div>
                <div class="header_social">
                    <ul>
                        <li><a class="social_home_header"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a class="social_home_header"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="social_home_header"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div id="home_container">   
                <div class="text">
                    <h1>We are a StartUp Creative Kucra Agency</h1>
                    <p>Carefully crafted after analysing the needs of different industries and the design achieves a greeat balance between purpose & presentation</p>
                    <form id = "form_mail" action="">
                        <input  type='text' placeholder='Enter your email'>
                        <input type='submit' value='SUBSCRIBE'>
                    </form>
                </div>
                <div class="svg_image">
                    <img src="illustration.svg" alt="image.svg" id="svg"/> 
                </div>
            </div>
        </main>
    </section>
    <section id="features">
        <header class="feature_header">
            <div class ="feature_title">
                <h2>Product Features</h2>
            </div>
            <div class="feature_subtitle">
                <h5>It is a long established fact that a reader will be of a page when established fact looking at its layout</h5>
            </div>
        </header>
        <main class="feature_container">
            <div class="card">
                <div class="features_logo">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                    <h3>card</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta dolor non ab molestiae in repellat, reprehenderit earum cupiditate praesentium maxime inventore quae eveniet consequuntur nisi. Nisi repellendus voluptatem ad?</p>
            </div>
            <div class="card">
                <div class="features_logo">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                    <h3>card</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta dolor non ab molestiae in repellat, reprehenderit earum cupiditate praesentium maxime inventore quae eveniet consequuntur nisi. Nisi repellendus voluptatem ad?</p>
            </div>
            <div class="card">
                <div class="features_logo">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                    <h3>card</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam dicta dolor non ab molestiae in repellat, reprehenderit earum cupiditate praesentium maxime inventore quae eveniet consequuntur nisi. Nisi repellendus voluptatem ad?</p>
            </div>
        </main>
    </section>
</body>
</html>