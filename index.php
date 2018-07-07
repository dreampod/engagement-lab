<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#HoustonStrong | Rebuilding Together</title>
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="tweetie.js"></script>
    <!--the script to get the image array-->
    <script type="text/javascript" src="https://dreampod-cdn-dx3qfdq.stackpathdns.com/images/houstonstrong-images.js"></script>
</head>
<body style="background-size:cover;overflow-x: hidden;">
    <!--Sets the background image script-->
    <script>document.body.style.backgroundImage = "url("+imgRandom("image_goes_here")+")";</script>    
    <div class="example1" style="display: none">
        <div class="tweet"></div>
    </div>

    <script type="text/javascript">
        $('.example1 .tweet').twittie({
            dateFormat: '%b. %d, %Y',
            template: '{{tweet}} <div class="date">{{date}}</div>',
            count: 1,
            loadingText: 'Loading!'
        });
    </script>

    <div align="center" class="title">
        <img src="https://dreampod-cdn-dx3qfdq.stackpathdns.com/images/houstonstrong/houston-strong-patch.png" alt="Houston Strong Hashtag on Twitter. One in this together" class="main-image" />
    </div>

    <div class="example2">
        <div class="tweet"></div>
    </div>
    <div class="strong-pattern">
    </div>

    <div class="example1">
        <div class="button"></div>
    </div>

    <script type="text/javascript">
        $('.example2 .tweet').twittie({
            hashtag: 'HoustonStrong',
            dateFormat: '%b. %d, %Y',
            template: '<strong class="date">{{date}}</strong> - {{screen_name}} {{tweet}}',
            count: 10
        }, function() {
            setInterval(function() {
                var item = $('.example2 .tweet ul').find('li:first');

                item.animate({
                    marginLeft: '-220px',
                    'opacity': '0'
                }, 500, function() {
                    $(this).detach().appendTo('.example2 .tweet ul').removeAttr('style');
                });
            }, 5000);
        });
    </script>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106743231-1"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        };
        gtag('js', new Date());

        gtag('config', 'UA-106743231-1');
    </script>

</body>

</html>