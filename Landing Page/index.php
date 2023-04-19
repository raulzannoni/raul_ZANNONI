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
            <div id="header_kucra"> 
                <h2>Kucra</h2>
            </div>
            <div class="header_search">
            <?php  
                $array_search = [   "HOME",
                                    "FEATURES",
                                    "CLIENT",
                                    "PRICING",
                                    "FAQ",
                                    "ABOUT",
                                    "BLOG",
                                    "CONTACT"
                                ];
                
                $result = "";

                foreach($array_search as $mot)
                    {
                        $result .=  "<div id=".$mot.">
                                        <h5>".$mot."</h5>
                                    </div>";
                    }
                
                echo $result;
            ?>
            </div>
            <div id="header_social">
                <div id="home_logo">
                    <i id="fa-brands fa-facebook"></i>
                </div>
                <div id="home_logo">
                    <i id="fa-brands fa-twitter"></i>
                </div>
                <div id="home_logo">
                    <i id="fa-brands fa-instagram"></i>
                </div>
            </div>
        </header>
        <main id="home_container">
            <div class="text">
                <h1>We are a StartUp Creative Kucra Agency</h1>
                <p>Carefully crafted after analysing the needs of different industries and the design achieves a greeat balance between purpose & presentation</p>
                <div>
                    <form id = "form_mail" action="">
                        <label for=""></label>
                            <input id="input_mail" type='text' placeholder='Enter your email'>
                            <input id="submit_mail" type='submit' value='SUBSCRIBE'>
                    </form>
                </div>
            </div>
            <div class="svg_image">
                <img src="illustration.svg" alt="image.svg" id="svg"/> 
            </div>
        </main>
    </section>
    <section id="features">
        <header id="features_header">
            <div>
                <h2>Product Features</h2>
            </div>
            <div>
                <h5>It is a long established fact that a reader will be of a page when established fact looking at its layout</h5>
            </div>
        </header>
        <main id="features_container">
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