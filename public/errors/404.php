<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>CodePen - Anarchy  -404-</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Merriweather:900);
        * {
            margin: 0;
            padding: 0;
            -webkit-user-select:none;
            -moz-user-select:none;
            -ms-user-select:none;
            user-select:none;
        }

        html {
            height: 100%;
            overflow: hidden;
        }

        canvas {
            z-index: 1;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            font-family: 'Merriweather', serif;
        }

        .container {
            z-index: 3;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            background: radial-gradient(ellipse at center, hsla(0, 0%, 0%, 0) 0%, hsla(0, 0%, 0%, 0) 19%, hsla(0, 0%, 0%, 0.9) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#00000000', endColorstr = '#e6000000', GradientType = 1);
        }

        .container div {
            position: absolute;
            left: 0;
            top: -20%;
            width: 100%;
            height: 20%;
            background-color: hsla(0, 0%, 0%, .09);
            box-shadow: 0 0 10px hsla(0, 0%, 0%, .2);
            -webkit-animation: waves 12s linear infinite;
            animation: waves 12s linear infinite;
        }

        .container div:nth-child(1) {
            -webkit-animation-delay: 0;
            animation-delay: 0;
        }

        .container div:nth-child(2) {
            -webkit-animation-delay: 4s;
            animation-delay: 4s;
        }

        .container div:nth-child(3) {
            -webkit-animation-delay: 8s;
            animation-delay: 8s;
        }

        @-webkit-keyframes waves {
            0% {
                top: -20%;
            }
            100% {
                top: 100%;
            }
        }

        @keyframes waves {
            0% {
                top: -20%;
            }
            100% {
                top: 100%;
            }
        }

        h1 {
            z-index: 3;
            position: absolute;
            font: bold 20vw 'Merriweather', serif;
            left: 50%;
            top: 50%;
            margin-top: -10vh;
            width: 100%;
            margin-left: -50%;
            height: 20vw;
            text-align: center;
            color: transparent;
            text-shadow: 0 0 30px hsla(0, 0%, 0%, .5);
            -webkit-animation: flicks .8s linear infinite;
            animation: flicks .8s linear infinite;
        }

        h2 {
            z-index: 2;
            position: absolute;
            font: bold 5.5vw 'Merriweather', serif;
            left: 51%;
            top: 40%;
            width: 90%;
            margin-left: -45%;
            height: 50vw;
            text-align: center;
            color: transparent;
            text-shadow: 0 0 12px hsla(0, 0%, 0%, .5);
            -webkit-animation: flicks 1.5s linear infinite;
            animation: flicks 1.5s linear infinite;
        }
        span{
            font-size:7.5vw;
            text-shadow: 0 0 24px hsla(0, 0%, 0%, 1);
            -webkit-animation: spanflicks 1s linear infinite;
            animation: spanflicks 1s linear infinite;
        }
        h3{
            z-index:2;
            position: absolute;
            font: bold 3vw 'Merriweather', serif;
            left: 51%;
            top: 30%;
            width: 90%;
            margin-left: -45%;
            height: 50vw;
            text-align: center;
            color: transparent;
            text-shadow: 0 0 12px hsla(0, 0%, 0%, .4);
            -webkit-animation: flicks 1s linear infinite;
            animation: flicks 1s linear infinite;
        }


        @-webkit-keyframes flicks {
            0% {
                text-shadow: 0 0 30px hsla(0, 0%, 0%, .5);
            }
            33% {
                color: hsla(0,0%,0%,.4);
                text-shadow: 0 0 10px hsla(0, 0%, 0%, .4);
            }
            66% {
                color: transparent;
                text-shadow: 0 0 20px hsla(0, 0%, 0%, .2);
            }
            100% {
                color: hsla(0,0%,0%,.5);
                text-shadow: 0 0 40px hsla(0, 0%, 0%, .8);
            }
        }


        @keyframes flicks {
            0% {
                text-shadow: 0 0 30px hsla(0, 0%, 0%, .5);
            }
            33% {
                color: hsla(0,0%,0%,.4);
                text-shadow: 0 0 10px hsla(0, 0%, 0%, .4);
            }
            66% {
                color: transparent;
                text-shadow: 0 0 20px hsla(0, 0%, 0%, .2);
            }
            100% {
                color: hsla(0,0%,0%,.5);
                text-shadow: 0 0 40px hsla(0, 0%, 0%, .8);
            }
        }

        @-webkit-keyframes spanflicks {
            0% {
                text-shadow: 0 0 30px hsla(0, 0%, 0%, .5);
            }
            33% {
                color: hsla(0,0%,0%,.4);
                text-shadow: 0 0 10px hsla(2, 95%, 15%, .5);
            }
            66% {
                color: transparent;
                text-shadow: 0 0 20px hsla(2, 95%, 15%, .2);
            }
            100% {
                color: hsla(0,0%,0%,.5);
                text-shadow: 0 0 40px hsla(2, 95%, 15%, .1);
            }
        }

        @keyframes spanflicks {
            0% {
                text-shadow: 0 0 30px hsla(0, 0%, 0%, .5);
            }
            33% {
                color: hsla(0,0%,0%,.4);
                text-shadow: 0 0 10px hsla(2, 95%, 15%, .5);
            }
            66% {
                color: transparent;
                text-shadow: 0 0 20px hsla(2, 95%, 15%, .2);
            }
            100% {
                color: hsla(0,0%,0%,.5);
                text-shadow: 0 0 40px hsla(2, 95%, 15%, .1);
            }
        }
        p a {
            z-index: 1000;
            opacity: 0.6;
            position: relative;
            margin-top: 5rem;
            margin-left: 5rem;
            padding: 1rem 2rem;
            display: inline-block;
            background: #fff;
            border-radius: 2rem;
            transition: all 0.3s;
            color: #000;
            font-weight: 900;
            text-transform: uppercase;
        }
        p a:hover{
            opacity: 1;
        }
    </style>

</head>
<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div><h1>-404-</h1></div>
        <div></div>
        <div></div>
    </div>
    <canvas id="canv"></canvas>
    <p><a href="<?=PATH;?>">Go back to Home</a></p>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
        window.requestAnimFrame = (function() {
            return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimationFrame ||
                function(callback) {
                    window.setTimeout(callback, 1000 / 60);
                };
        })();

        var noise = (function() {
            var ??_??;
            var ???_???;
            var imgData;
            var px;
            var w;
            var h;
            var static;

            var flicker = function() {
                ??_?? = document.getElementById('canv');
                ???_??? = ??_??.getContext('2d');
                ??_??.width = w = 700;
                ??_??.height = h = 500;
                ???_???.fillStyle = 'hsla(255,255%,255%,1)';
                ???_???.fillRect(0, 0, w, h);
                ???_???.fill();
                imgData = ???_???.getImageData(0, 0, w, h);
                px = imgData.data;
                static();
            };

            static = function() {
                setInterval(function() {
                    window.requestAnimFrame(static);
                    flicks();
                }, 30);
            }
            var flicks = function() {
                for (var i = 0; i < px.length; i += 4) {
                    var col = (Math.random() * 255) + 50;
                    px[i] = col;
                    px[i + 1] = col;
                    px[i + 2] = col;
                }
                ???_???.putImageData(imgData, 0, 0);
            };

            return {
                init: flicker
            };
        }());

        noise.init();
    </script>
</body>
</html>
