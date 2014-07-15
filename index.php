<?php
require getcwd() .'/library/scripts/image-array.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order a $10.10 Minimum Wage Sticker</title>

    <link rel="stylesheet" href="library/css/style.css">
    <script src="library/js/jquery-1.11.1.js"></script>
    <script src="library/js/more-photos.js"></script>
</head>
<body class="home">

    <header class="header">
        <section class="tagline">
            <h3>We are business people that support a federal minimum wage of at least $10.10 an hour that adjusts annually with the rising cost of living.</h3>
        </section>
        <img alt="" src="library/images/transparent.png" id="placeholder" />
    </header>
    <main class="content">
        <section id="intro">
            <article>
                <p>Show your support by displaying a removable window decal or a poster at your place of business. Both are FREE – there is no cost to you for the window decal, poster or shipping and handling.</p>

                <a class="button">Order Free Today</a>
            </article>
        </section>
        <section id="order">
            <article class="intro">
                <div class="images">
                    <figure>
                        <img alt="This business supports $10.10 minimum wage poster" src="library/images/poster_decal.png" />
                    </figure>

                </div>

                <p><a class="button">Order Free Today</a></p>
            </article>
       </section>
        <section id="partners">
            <article>
                <h2><span>Partners</span></h2>
                <ul class="partners">
                    <li class="partner-logo"><img alt="Business for a Fair Minimum Wage logo" src="library/images/partners/logo_1.png" class="bfmw" /></li>
                    <li class="partner-logo"><img alt="The Main Street Alliance logo" src="library/images/partners/logo_2.png" class="msa" /></li>
                    <li class="partner-logo"><img alt="Smart Capitalists for American Prosperity log" src="library/images/partners/logo_3.png" class="scap" /></li>
                    <li class="partner-logo"><img alt="Uncommon Goods logo" src="library/images/partners/logo_4.png" class="ug" /></li>
                </ul>
            </article>
        </section>
        <section id="photos">
            <article>
                <h2><span>Your Photos</span></h2>
                <ul class="photos">
                  <?php $images = build_image_list(); ?>
                  <?php echo "$images"; ?>
                </ul>
                
                <p><a id="loadMore" class="button">Load More Images</a></p>
                <p><a class="button">Submit a Photo</a></p>
            </article>
        </section>
    </main>
    <footer class="footer">
        <section id="footer">
            <div class="copyright">2014. All Rights Reserved. Brought to you by Business for a Fair Minimum Wage, The Main Street Alliance, Smart Capitalists for American Prosperity, and orders fulfilled by UncommonGoods.</div>
            <div class="footer-nav">Contact Us</div>
            <ul class="contacts">
                <li>
                    <p><strong>Business for a Fair Minimum Wage</strong></p>
                    <p><a>businessforafairminimumwage.org</a></p>
                    <p><a>info@businessforafairminimumwage.org</a></p>
                    <p>617.610.6766</p>
                </li>
                <li>
                    <p><strong>Main Street Alliance</strong></p>
                    <p><a>mainstreetalliance.org</a></p>
                    <p><a>jwelter@mainstreetalliance.org</a></p>
                    <p>206.383.1857</p>
                </li>
                <li>
                    <p><strong>Smart Capitalists for American Prosperity</strong></p>
                    <p><a>smartcapitalists.org</a></p>
                    <p><a>erica@agendaproject.org</a></p>
                    <p>202.446.0489</p>
                </li>
            </ul>
        </section>
    </footer>

</body>
</html>