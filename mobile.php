<!DOCTYPE html>
<?
$lang = 'en';
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
{
	$detectlang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	switch ($detectlang)
	{
		case "sk":
			$lang = 'sk';
			break;
		case "cz":
			$lang = 'sk';
			break;        
		default:
			$lang = 'en';
			break;
	}
}
require $lang.'/txt.php';
?>
<html lang="<?echo $lang?>">
<head>
    <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

    <title>Wifon</title>

    <link href="styles/m_style.css" rel="stylesheet" type="text/css" />
    <script src="js/vendor/jquery-1.9.1.min.js"></script>
</head>
<body>

<div id="skrollr-body">
    <div class="content" class="animation">

        <nav>
            <div class="menu_container">
                <div id="domov_link" class="menu_item"><a href="#"><?echo $lngtxt['TopMenu_Home']?></a></div>
                <div id="wifon_link" class="menu_item"><a href="#"><?echo $lngtxt['TopMenu_Wifon']?></a></div>
                <div id="faq_link" class="menu_item"><a href="#"><?echo $lngtxt['TopMenu_FAQ']?></a></div>
                <div id="wiki_link" class="menu_item"><a href="https://github.com/croconaut/wifon/wiki"><?echo $lngtxt['TopMenu_Wiki']?></a></div>
                <div id="kontakt_link" class="menu_item"><a href="#"><?echo $lngtxt['TopMenu_Contact']?></a></div>
            </div>
        </nav>

        <section id="intro">
            <video style="margin-top: 80px;" muted preload="true" autobuffer autoplay loop controls width="100%"
                   poster="images/bgr_video.png">>
                <source src="videos/wifon_video.ogv" type='video/ogg; codecs="theora, vorbis"'/>
                <source src="videos/wifon_video.webm" type='video/webm' >
                <source src="videos/wifon_video.mp4" type='video/mp4'>
                <img src="images/bgr_video.png" title="Your browser does not support this video">
            </video>
            <div id="intro_container">
                <a href="https://play.google.com/store/apps/details?id=com.croconaut.ratemebuddy"><img id="google_badge" src="images/badge.png"/></a>
            </div>
        </section>

        <section id="messaging">
            <div class="container">
                <div id="messaging_phone">
                    <img src="images/mock1.png" id="video_conversation">
                </div>

                <div id="messaging_title"><?echo $lngtxt['Messaging_Title']?></div>
                <div id="messaging_text">
                    <?php include "".$lang."/messaging_text.php" ?>
                </div>
            </div>
        </section>

        <section id="comments_title">
            <img id="notebook" src="images/notebook.png">
            <div class="comments_title_text"><?echo $lngtxt['Comments_Title']?></div>
        </section>

        <section id="comments">
            <div id="city_left"></div>
            <div id="city_right"></div>

            <div class="container">
                <div class="half_container">
                    <div id="comments_phone1">
                        <img src="images/mock3.png" id="video_status_change">
                    </div>
                </div>
                <div class="half_container"">
                    <div id="comments_phone2">
                        <img src="images/mock2.png" id="video_like">
                    </div>
                </div>
                <img src="images/like.png" id="like">

                <div id="comments_text">
                    <?php include "".$lang."/comments_text.php" ?>
                </div>
            </div>
        </section>

        <section id="share">
            <div class="share_title_text"><?echo $lngtxt['Share_Title']?></div>
            <div class="container" id="share_container">
                <div class="half_container" style="text-align: left;">
                    <img src="images/phone_share.png" class="share_phone" id="share_phone1">
                </div>
                <div class="share_icons" id="share_icons">
                    <a href="https://play.google.com/store/apps/details?id=com.croconaut.ratemebuddy"><img src="images/play.png" class="icon"></a>
                    <a href="files/wifon.apk"><img src="images/download.png" class="icon"></a>
                    <img src="images/at.png" class="icon">
                </div>
                <div id="arrows">
                    <img src="images/arrow.png">
                    <img src="images/arrow.png">
                    <img src="images/arrow.png">
                    <img src="images/arrow.png">
                </div>
                <div class="share_icons" id="share_icons_bottom">
                    <img src="images/wifi.png" class="icon">
                    <img src="images/bluetooth.png" class="icon">
                    <img src="images/nfc.png" class="icon">
                </div>
                <div class="half_container" style="text-align: right;">
                    <img src="images/phone_share2.png" class="share_phone" id="share_phone2">
                </div>

                <div id="share_text">
                    <?php include "".$lang."/share_text.php" ?>
                </div>
            </div>
        </section>

        <section id="faq">
            <div class="faq_title_text"><?echo $lngtxt['FAQ_Title']?></div>
            <img src="images/show_faq.png" id="faq_button">

            <div id="faq_text">
                <?php include "".$lang."/faq_text.php" ?>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div id="contact_title"><?echo $lngtxt['Contact_Title']?></div> 
                <div id="contact_text"><?echo $lngtxt['Contact_Text']?></div>
            </div>
            <a href="mailto:info@wifon.sk"><div id="letter"><div id="email">info@wifon.sk</div></div></a>
            <div id="hands"></div>
        </section>

        <footer>
            <div class="container">
                <div class="footer_text"><?echo $lngtxt['Footer_Text']?><a href="http://www.freepik.com/free-vector/modern-arrows-and-reload-icons_802831.htm">Designed by Freepik</a></div>
                <div class="footer_text"><a href="index.php?mobile=true"><?echo $lngtxt['Footer_Text_Desktop']?></a></div>
                <div class="footer_text"><?echo $lngtxt['Footer_Text_Webdesign']?><a href="http://jorsino.com/portfolio">Juraj Ország</a></div>
                <div id="copyright"><?echo $lngtxt['Footer_Text_Copyright']?></div>
            </div>
        </footer>

    </div>
</div>

<!--menu scrolling-->
<script>
    function scrollToSection(id) {
        var section = $("section[id='" + id + "']");
        var y = section.offset().top;
        if(id === "messaging") y -= 80;
        else if(id === "faq") y = $("#intro").height() + $("#messaging").height() + $("#comments_title").height() + $("#comments").height() + $("#share").height() - 120;
        $('html,body').animate({scrollTop: y},'slow');
    }

    var page = location.search.split('page=')[1];
    if(page === null) {
    } else if(page === "wifon") {
        scrollToSection("messaging");
    } else if(page === "faq") {
        scrollToSection("faq");
    } else if(page === "kontakt") {
        scrollToSection("contact");
    }

    $("#domov_link").click(function(event) {
        event.preventDefault();
        scrollToSection("intro");
    });
    $("#wifon_link").click(function(event) {
        event.preventDefault();
        scrollToSection("messaging");
    });
    $("#faq_link").click(function(event) {
        event.preventDefault();
        scrollToSection("faq");
    });
    $("#kontakt_link").click(function(event) {
        event.preventDefault();
        scrollToSection("contact");
    });
</script>

<!--faq section scrolling-->
<script language="javascript" type="text/javascript">
    $("#faq_button").click(function() {
        var faqHeight = 300;
        if($("#faq").height() === faqHeight) {
            var textHeight = $("#faq_text").height();
            $("#faq").animate({height: textHeight + faqHeight + 80}); //animate to text height + original #faq height + padding
            $("#faq_text").fadeIn();
        } else {
            $("#faq").animate({height: faqHeight});
            $("#faq_text").fadeOut();
        }
    })
</script>

<script type="text/javascript" src="js/plugins/CSSPlugin.min.js"></script>
<script type="text/javascript" src="js/TweenMax.min.js"></script>

<script>
    window.onload = function() {
        var arrows = document.getElementById("arrows");
        TweenMax.to(arrows, 1.75, {left:"15%", repeat:-1});
    }
</script>

</body>
</html>