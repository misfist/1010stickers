<?php
require getcwd() .'/library/scripts/image-array.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>$10.10 Minimum Wage Business Decal</title>

    <link rel="stylesheet" href="library/css/style.css">
    <script src="library/js/jquery-1.11.1.js"></script>
    <script src="library/js/more-photos.js"></script>
</head>
<body class="home">

    <header class="header">
        <section class="tagline">
            <h3>We are business people who support a federal minimum wage of at least $10.10 an hour that adjusts annually with the rising cost of living.</h3>
        </section>
        <div class="background-image">
            <img alt="" src="library/images/transparent.png" id="placeholder" />
        </div>
    </header>
    <main class="content">
        <section id="intro">
            <article>
                <p>Show your support by displaying a removable window decal or a poster at your place of business. Both are FREE – there is no cost to you for the window decal, poster or shipping and handling.</p>

                <a class="button" href="http://org.salsalabs.com/o/1924/signup_page/1010bizdecal-order-form" target="_blank">Order Free Today</a>
            </article>
        </section>
        <section id="order">
            <article class="intro">
                <div class="images">
                    <figure>
                        <img alt="This business supports $10.10 minimum wage poster" src="library/images/poster_decal.png" />
                    </figure>
                </div>
                <p><a class="button" href="http://org.salsalabs.com/o/1924/signup_page/1010bizdecal-order-form" target="_blank">Order Free Today</a></p>
            </article>
       </section>
        <section id="partners">
            <article>
                <h2><span>Partners</span></h2>
                <ul class="partners">
                    <li class="partner-logo"><a href="http://businessforafairminimumwage.org" target="_blank"><img alt="Business for a Fair Minimum Wage logo" src="library/images/partners/logo_1.png" class="bfmw" /></a></li>
                    <li class="partner-logo"><a href="http://mainstreetalliance.org" target="_blank"><img alt="The Main Street Alliance logo" src="library/images/partners/logo_2.png" class="msa" /></a></li>
                    <li class="partner-logo"><a href="http://uncommongoods.com/" target="_blank"><img alt="Uncommon Goods logo" src="library/images/partners/logo_4.png" class="ug" /></a></li>
                </ul>
            </article>
        </section>
        <section id="photos">
            <article>
                <h2><span>Your Photos</span></h2>
                <ul class="photos">
                    <li class="business-photo"><div class="embed-container"><iframe src="http://www.youtube.com/embed/5qkH4qqSYiU" frameborder="0" allowfullscreen></iframe></div></li>
                    <?php $images = build_image_list(); ?>
                    <?php echo "$images"; ?>
                </ul>
                
                <p><a id="loadMore" class="button">Load More Images</a></p>
                <p><a href="mailto:photos@1010bizdecal.com?subject=Photo%20Submission" class="button">Submit a Photo</a></p>
            </article>
        </section>
    </main>
    <footer class="footer">
        <section id="footer">
            <div class="copyright">&#0169; 2014 Business for a Fair Minimum Wage. All Rights Reserved.</div>
            <h4 class="footer-nav">Contact Us</h4>
            <ul class="contacts">
                <li>
                    <p><strong>Business for a Fair Minimum Wage</strong></p>
                    <p><a href="http://businessforafairminimumwage.org" target="_blank">businessforafairminimumwage.org</a></p>
                    <p><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#98;&#117;&#115;&#105;&#110;&#101;&#115;&#115;&#102;&#111;&#114;&#97;&#102;&#97;&#105;&#114;&#109;&#105;&#110;&#105;&#109;&#117;&#109;&#119;&#97;&#103;&#101;&#46;&#111;&#114;&#103;&#63;&#115;&#117;&#98;&#106;&#101;&#99;&#116;&#61;&#67;&#111;&#110;&#116;&#97;&#99;&#116;&#37;&#50;&#48;&#83;&#117;&#98;&#109;&#105;&#115;&#115;&#105;&#111;&#110;"><!--comment-->&#105;&#110;&#102;&#111;&#64;&#98;&#117;&#115;&#105;&#110;&#101;&#115;&#115;<!--comment-->&#102;&#111;&#114;&#97;&#102;&#97;&#105;&#114;&#109;&#105;&#110;&#105;&#109;&#117;&#109;&#119;&#97;&#103;&#101;&#46;&#111;&#114;&#103;</a></p>
                    <p>617.610.6766 (Bob Keener)</p>
                </li>
                <li>
                    <p><strong>Main Street Alliance</strong></p>
                    <p><a href="http://mainstreetalliance.org" target="_blank">mainstreetalliance.org</a></p>
                    <p><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#109;&#97;&#105;&#110;&#115;&#116;&#114;&#101;&#101;&#116;&#97;&#108;&#108;&#105;&#97;&#110;&#99;&#101;&#46;&#111;&#114;&#103;&#63;&#115;&#117;&#98;&#106;&#101;&#99;&#116;&#61;&#67;&#111;&#110;&#116;&#97;&#99;&#116;&#37;&#50;&#48;&#83;&#117;&#98;&#109;&#105;&#115;&#115;&#105;&#111;&#110;"><!--comment-->&#105;&#110;&#102;&#111;&#64;&#109;&#97;&#105;&#110;&#115;&#116;&#114;&#101;&#101;&#116;&#97;&#108;&#108;&#105;&#97;&#110;&#99;<!--comment-->&#101;&#46;&#111;&#114;&#103;</a></p>
                    <p>206.568.5400</p>
                </li>
            </ul>
        </section>
    </footer>

</body>
</html>