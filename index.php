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

    <!--check for mobile browser-->
    <?
    if($_GET["mobile"] === null) {
        echo "
                <script>
                    (function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))window.location=b})(navigator.userAgent||navigator.vendor||window.opera,'mobile.php');
                </script>
                ";
    }
    ?>

    <script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.mousewheel.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.simplr.smoothscroll.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        $(function () {
            $.srSmoothscroll()
        })
    </script>

    <title>Wifon</title>

    <link href="styles/style.css" rel="stylesheet" type="text/css" />

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
            <video id="bgr_video" muted preload="true" autobuffer autoplay loop muted
                   poster="images/bgr_video.png">
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
                    <video id="video_conversation" muted preload="auto" autobuffer poster="images/mock1.png">
                        <source src="videos/wifon_conversation.ogv" type='video/ogg; codecs="theora, vorbis"'/>
                        <source src="videos/wifon_conversation.webm" type='video/webm'>
                        <source src="videos/wifon_conversation.mp4" type='video/mp4'>
                        <p>Video is not visible, most likely your browser does not support HTML5 video</p>
                    </video>
                </div>

                <div id="messaging_title"><?echo $lngtxt['Messaging_Title']?></div>
                <div id="messaging_text">
                    <?php include "".$lang."/messaging_text.php" ?>
                </div>
            </div>
        </section>

        <section id="comments_title"
                 data-center-top=
                 "-ms-transform: rotate(0deg);
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);"
                 data-100-top=
                 "-ms-transform: rotate(-3deg);
                    -webkit-transform: rotate(-3deg);
                    transform: rotate(-3deg);"
                 data-anchor-target="#comments_title">

            <img id="notebook" src="images/notebook.png" data-800-top="left:-400px" data-500-top="left:-270px" data-anchor-target="#comments_title"/>
            <div class="comments_title_text"><?echo $lngtxt['Comments_Title']?></div>

        </section>

        <section id="comments">
            <div id="city_left" data-600-top="left:-150px" data--150-top="left:0px" data-anchor-target="#comments"></div>
            <div id="city_right" data-600-top="right:-150px" data--150-top="right:0px" data-anchor-target="#comments"></div>

            <div class="container">
                <div class="half_container">
                    <div id="comments_phone1">
                        <video id="video_status_change" muted preload="auto" autobuffer poster="images/mock3.png">
                            <source src="videos/wifon_status_change.ogv" type='video/ogg; codecs="theora, vorbis"'/>
                            <source src="videos/wifon_status_change.webm" type='video/webm'>
                            <source src="videos/wifon_status_change.mp4" type='video/mp4'>
                            <p>Video is not visible, most likely your browser does not support HTML5 video</p>
                        </video>
                    </div>
                </div>
                <div class="half_container">
                    <div id="comments_phone2">
                        <video id="video_like" muted preload="auto" autobuffer poster="images/mock2.png">
                            <source src="videos/wifon_like.ogv" type='video/ogg; codecs="theora, vorbis"'/>
                            <source src="videos/wifon_like.webm" type='video/webm'>
                            <source src="videos/wifon_like.mp4" type='video/mp4'>
                            <p>Video is not visible, most likely your browser does not support HTML5 video</p>
                        </video>
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
                    <img src="images/phone_share.png" class="share_phone" id="share_phone1"
                         data-center-top="width:25%" data--60-top="width:35%" data-anchor-target="#share">
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
                    <img src="images/phone_share2.png" class="share_phone" id="share_phone2"
                         data-center-top="width:25%" data--60-top="width:35%" data-anchor-target="#share">
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
            <a href="mailto:info@wifon.sk"><div id="letter" data-center-top="bottom:-100px" data-bottom="bottom:100px" data-anchor-target="#contact">
                    <div id="email">info@wifon.sk</div>
                </div></a>
            <div id="hands" data-center-top="bottom:-100px" data-bottom="bottom:0px" data-anchor-target="#contact"></div>
        </section>

        <footer>
            <div class="container">
                <div class="footer_text"><?echo $lngtxt['Footer_Text']?><a href="http://www.freepik.com/free-vector/modern-arrows-and-reload-icons_802831.htm">Designed by Freepik</a></div>
                <div class="footer_text"><a href="mobile.php"><?echo $lngtxt['Footer_Text_Mobile']?></a></div>
                <div class="footer_text"><a href="http://jorsino.com/portfolio"><?echo $lngtxt['Footer_Text_Webdesign']?></a></div>
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
        var padding = 80;
        var textHeight = $("#faq_text").height();
        if($("#faq").height() === faqHeight) {
            $("#faq").animate({height: textHeight + faqHeight + padding}); //animate to text height + original #faq height + padding
            $("#faq_text").fadeIn();
            $("body").height($("body").height() + textHeight + padding); //add text height and padding to the body
        } else {
            $("#faq").animate({height: faqHeight});
            $("#faq_text").fadeOut();
            $("body").height($("body").height() - textHeight -padding); //remove text height and padding from the body
        }
    })
</script>

<!--video handling-->
<script>
    <!--loading-->
    var messagingVideo = document.getElementById("video_conversation");
    var statusChangeVideo = document.getElementById("video_status_change");
    var likeVideo = document.getElementById("video_like");

    messagingVideo.load();
    messagingVideo.oncanplay  = function() {
        messagingVideo.style.display = 'block';
    };
    statusChangeVideo.load();
    statusChangeVideo.oncanplay  = function() {
        statusChangeVideo.style.display = 'block';
    };
    likeVideo.load();
    likeVideo.oncanplay  = function() {
        likeVideo.style.display = 'block';
    };

    var scrollTop;
    var screenHeight = document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight;

    window.onscroll = function() {playVideo()};

    function playVideo() {
        scrollTop = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop;

        if(messagingVideo.getBoundingClientRect().top > 80 && messagingVideo.getBoundingClientRect().bottom < screenHeight) {
            if(messagingVideo.currentTime <= 0)
                messagingVideo.play();
        } else if(messagingVideo.currentTime > 0) {
            messagingVideo.pause();
            messagingVideo.currentTime = 0;
        }

        if(statusChangeVideo.getBoundingClientRect().top > 80 && statusChangeVideo.getBoundingClientRect().bottom < screenHeight) {
            if(statusChangeVideo.currentTime <= 0) {
                statusChangeVideo.play();
                likeVideo.play();
            }
        } else if(statusChangeVideo.currentTime > 0 || likeVideo.currentTime > 0) {
            statusChangeVideo.pause();
            statusChangeVideo.currentTime = 0;
            likeVideo.pause();
            likeVideo.currentTime = 0;
        }
    }
</script>

<script type="text/javascript" src="js/plugins/CSSPlugin.min.js"></script>
<script type="text/javascript" src="js/TweenMax.min.js"></script>

<script>
    window.onload = function() {
        playVideo();
        var arrows = document.getElementById("arrows");
        TweenMax.to(arrows, 1.75, {left:"17.5%", repeat:-1});
    }
</script>

<script src="js/imagesloaded.js"></script>
<script src="js/skrollr.js"></script>
<script src="js/_main.js"></script>

<!--add controls to videos on mobile devices-->
<script>
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

    if(userAgent.match( /iPad/i ) || userAgent.match( /iPhone/i ) || userAgent.match( /Android/i )) {
        document.getElementById("video_conversation").setAttribute("controls", "controls");
        document.getElementById("video_like").setAttribute("controls", "controls");
        document.getElementById("video_status_change").setAttribute("controls", "controls");
        document.getElementById("bgr_video").setAttribute("controls", "controls");
    }
</script>

</body>
</html>