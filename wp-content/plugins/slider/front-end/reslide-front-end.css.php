<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Php driven styles for front-end
 */
?>
<style>

/* Lightbox styles */

.lightbox_iframe_cover {position:absolute;width:100%;height:100%;z-index:999}
a.slider_lightbox > div {width: 100% !important; height: 100% !important; padding: 0 !important}
.rwd-object{border:10px solid white}
.rwd-icon{speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.rwd-arrows .rwd-next,.rwd-arrows .rwd-prev{background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.rwd-arrows .rwd-next.disabled,.rwd-arrows .rwd-prev.disabled{pointer-events:none;opacity:.5}
.rwd-toolbar{z-index:1082;left:0;position:absolute;top:0;width:100%}
.rwd-bar .rwd-icon,.rwd-toolbar .rwd-icon{cursor:pointer;color:#999;float:right;font-size:24px;line-height:27px;text-align:center;text-decoration:none!important;outline:0;-webkit-transition:color .2s linear;-o-transition:color .2s linear;transition:color .2s linear}
.rwd-bar .rwd-icon{position:absolute;bottom:0;z-index:1081}
.rwd-icon svg{cursor:pointer}
.rwd-bar .rwd-icon:hover,.rwd-toolbar .rwd-icon:hover{color:#FFF}
.rwd-bar .rwd-icon0:hover,.rwd-toolbar .rwd-icon0:hover,.rwd-arrows .rwd-icon0:hover{color:#000}
.rwd-arrows .rwd-prev, .rwd-arrows .rwd-next, .rwd-close {width: 46px;height: 46px;background:url(<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES .  '/arrows/rslightbox_arrows.png' ?>);}
.rwd-arrows.arrows_1 .rwd-next {background-position: 227px 164px;}
.rwd-arrows.arrows_1 .rwd-prev {background-position: 277px 164px;}
.rwd-close.arrows_1 {width: 25px;height: 25px;background-position: 266px 194px;background-color: #fff;border-radius: 50%;}
.rwd-arrows.arrows_2 .rwd-next {background-position: 227px 110px;}
.rwd-arrows.arrows_2 .rwd-prev {background-position: 277px 110px;}
.rwd-close.arrows_2 {width: 25px;height: 25px;background-position: 266px 194px;background-color: #fff;border-radius: 50%;}
.rwd-arrows.arrows_3 .rwd-next {background-position: 227px 63px;}
.rwd-arrows.arrows_3 .rwd-prev {background-position: 277px 63px;}
.rwd-close.arrows_3 {width: 25px;height: 25px;background-position: 217px 195px;background-color: #fff;border-radius: 50%;}
.rwd-arrows.arrows_4 .rwd-next {background-position: 90px 167px;}
.rwd-arrows.arrows_4 .rwd-prev {background-position: 131px 167px;}
.rwd-close.arrows_4 {width: 30px;height: 30px;background-position: 38px 158px;}
.rwd-arrows.arrows_5 .rwd-next {background-position: 97px 108px;}
.rwd-arrows.arrows_5 .rwd-prev {background-position: 140px 108px;}
.rwd-close.arrows_5 {width: 25px;height: 25px;background-position: 43px 100px;}
.rwd-arrows.arrows_6 .rwd-next {background-position: 95px 63px;}
.rwd-arrows.arrows_6 .rwd-prev {background-position: 139px 63px;}
.rwd-close.arrows_6 {width: 35px;height: 35px;background-position: 48px 57px;}
.barCont{background:rgba(0,0,0,.9);width:100%;height:45px;position:absolute;bottom:0;z-index:1071}
#rwd-counter{color:#999;display:inline-block;font-size:16px;padding-top:12px;vertical-align:middle}
.rwd-bar #rwd-counter{position:absolute;bottom:11px;left:50%;transform:translateX(-50%);z-index:1090}
.rwd-next,.rwd-prev,.rwd-toolbar{opacity:1;-webkit-transition:-webkit-transform .35s cubic-bezier(0,0,.25,1) 0s,opacity .35s cubic-bezier(0,0,.25,1) 0s,color .2s linear;-moz-transition:-moz-transform .35s cubic-bezier(0,0,.25,1) 0s,opacity .35s cubic-bezier(0,0,.25,1) 0s,color .2s linear;-o-transition:-o-transform .35s cubic-bezier(0,0,.25,1) 0s,opacity .35s cubic-bezier(0,0,.25,1) 0s,color .2s linear;transition:transform .35s cubic-bezier(0,0,.25,1) 0s,opacity .35s cubic-bezier(0,0,.25,1) 0s,color .2s linear}
.rwd-cont .rwd-video-cont{display:inline-block;vertical-align:middle;max-width:1140px;max-height:100%;width:100%;padding:0 5px;top:50%;transform:translateY(-50%);position:relative}
.rwd-cont .rwd-container,.rwd-cont .rwd-image{max-width:100%;max-height:100%;transform:translateY(-50%);-ms-transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-o-transform: translateY(-50%);}
.rwd-cont .rwd-video{width:100%;height:0;padding-bottom:56.25%;overflow:hidden;position:relative}
.rwd-cont .rwd-video .rwd-object{display:inline-block;position:absolute;top:0;left:0;width:100%!important;height:100%!important}
.rwd-cont .rwd-video .rwd-video-play{width:84px;height:59px;position:absolute;left:50%;top:50%;margin-left:-42px;margin-top:-30px;z-index:1080;cursor:pointer}
.rwd-cont .rwd-video-object{width:100%!important;height:100%!important;position:absolute;top:0;left:0}
.rwd-cont .rwd-has-video .rwd-video-object{visibility:hidden}
.rwd-cont .rwd-has-video.rwd-video-playing .rwd-object,.rwd-cont .rwd-has-video.rwd-video-playing .rwd-video-play{display:none}
.rwd-cont .rwd-has-video.rwd-video-playing .rwd-video-object{visibility:visible}
.rwd-autoplay-button{left:50px}
.rwd-autoplay-button > .pause_bg{display:none}
.rwd-cont .rwd-caret{border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px dashed;bottom:-10px;display:inline-block;height:0;left:50%;margin-left:-5px;position:absolute;vertical-align:middle;width:0}
.rwd-cont{width:100%;height:100%;position:fixed;top:0;left:0;z-index:9999999;opacity:0;-webkit-transition:opacity .15s ease 0s;-o-transition:opacity .15s ease 0s;transition:opacity .15s ease 0s}
.rwd-cont *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
.rwd-cont.rwd-visible{opacity:1}
.rwd-cont.rwd-support .rwd-item.rwd-current,.rwd-cont.rwd-support .rwd-item.rwd-next-slide,.rwd-cont.rwd-support .rwd-item.rwd-prev-slide{-webkit-transition-duration:inherit!important;transition-duration:inherit!important;-webkit-transition-timing-function:inherit!important;transition-timing-function:inherit!important}
.rwd-cont .rwd-container{height:100%;width:100%;position:relative;overflow:hidden;margin-left:auto;margin-right:auto;top:50%;overflow:inherit}
.rwd-cont .cont-inner{width:100%;height:100%;position:absolute;left:0;top:0;white-space:nowrap}
.rwd-cont .contInner{width:40%;height:100%;position:absolute;left:60%;white-space:nowrap;z-index: 1200;background: black}
.rwd-cont.rwd-noSupport .rwd-current,.rwd-cont.rwd-support .rwd-current,.rwd-cont.rwd-support .rwd-next-slide,.rwd-cont.rwd-support .rwd-prev-slide{display:inline-block!important}
.rwd-cont .rwd-img-wrap,.rwd-cont .rwd-item{display:inline-block;text-align:center;position:absolute;width:100%;height:100%}
.rwd-cont .rwd-img-wrap{position:absolute;padding:0 5px;left:0;right:0;top:0;bottom:0}
.rwd-cont .rwd-item.rwd-complete{background-image:none}
.rwd-cont .rwd-item.rwd-current{z-index:1060}
.rwd-cont .rwd-image{display:inline-block;vertical-align:middle;width:auto !important;height:auto !important;top:50%;position:relative}
.rwd-cont.rwd-show-after-load .rwd-item .rwd-object,.rwd-cont.rwd-show-after-load .rwd-item .rwd-video-play{opacity:0;-webkit-transition:opacity .15s ease 0s;-o-transition:opacity .15s ease 0s;transition:opacity .15s ease 0s}
.rwd-cont.rwd-show-after-load .rwd-item.rwd-complete .rwd-object,.rwd-cont.rwd-show-after-load .rwd-item.rwd-complete .rwd-video-play{opacity:1}
.rwd-overlay{position:fixed;top:0;left:0;right:0;bottom:0;z-index:9999997;background:rgba(0,0,0,.7);opacity:0;-webkit-transition:opacity .15s ease 0s;-o-transition:opacity .15s ease 0s;transition:opacity .15s ease 0s}
.rwd-overlay.in{opacity:1}
.rwd-container .rwd-thumb-cont {position: absolute;width: 100%;z-index: 1080}
.rwd-container .rwd-thumb {padding: 10px 0;height: 100%}
.rwd-container .rwd-thumb-item {border-radius: 5px;float: left;overflow: hidden;cursor: pointer;height: 100%;margin-bottom: 5px;}
@media (min-width: 768px) {.rwd-container .rwd-thumb-item {-webkit-transition: border-color 0.25s ease;-o-transition: border-color 0.25s ease;transition: border-color 0.25s ease;}}
.rwd-container .rwd-thumb-item img {width: 100%;height: 100%;object-fit: cover;}
.rwd-container .rwd-toggle-thumb {background-color: #0D0A0A;border-radius: 2px 2px 0 0;color: #999;cursor: pointer;font-size: 24px;height: 39px;line-height: 27px; padding: 5px 0;position: absolute;left: 20px;text-align: center;top: -39px;width: 50px;}

/* Open/Close effects */
.rwd-container.open_1 {animation: unfoldIn 1s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_1 {animation: unfoldOut 1s .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes unfoldIn {0% {transform: translateY(-50%) scaleY(.002);}50% {transform: translateY(-50%) scaleY(.002);}100% {transform: translateY(-50%) scaleY(1);}}
@keyframes unfoldOut {0% {transform: translateY(-50%) scaleY(1);}50% {transform: translateY(-50%) scaleY(.002);}100% {transform: translateY(-50%) scaleY(.002);}}
.rwd-container.open_2 {animation: blowUpIn .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_2 {animation: blowUpOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes blowUpIn {0% {transform: translateY(-50%) scale(0);}100% {transform: translateY(-50%) scale(1);}}
@keyframes blowUpOut {0% {transform: translateY(-50%) scale(1);opacity:1;}100% {transform: translateY(-50%) scale(0);opacity:0;}}
.rwd-container.open_3 {animation: roadRunnerIn .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_3 {animation: roadRunnerOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes roadRunnerIn {0% {transform:translate(-1500px, -50%) skewX(50deg) scaleX(1.3);}70% {transform:translate(30px, -50%) skewX(-25deg) scaleX(.9);}100% {transform:translate(0px, -50%) skewX(0deg) scaleX(1);}}
@keyframes roadRunnerOut {0% {transform:translate(0px, -50%) skewX(0deg) scaleX(1);}30% {transform:translate(-30px, -50%) skewX(-25deg) scaleX(.9);}100% {transform:translate(1500px, -50%) skewX(50deg) scaleX(1.3);}}
.rwd-container.open_4 {animation: runnerIn .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_4 {animation: runnerOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes runnerIn {0% {transform:translate(-1500px, -50%);}70% {transform:translate(30px, -50%);}100% {transform:translate(0px, -50%);}}
@keyframes runnerOut {0% {transform:translate(0px, -50%);}30% {transform:translate(-30px, -50%);}100% {transform:translate(1500px, -50%);}}
.rwd-container.open_5 {animation: rotateIn .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_5 {animation: rotateOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@-ms-keyframes rotateIn {from {-ms-transform: translateY(-50%) rotate(0deg);} to { -ms-transform: translateY(-50%)rotate(360deg);}}
@-moz-keyframes rotateIn {from {-moz-transform: translateY(-50%) rotate(0deg);} to { -moz-transform: translateY(-50%)rotate(360deg);}}
@-webkit-keyframes rotateIn {from {-webkit-transform: translateY(-50%) rotate(0deg);} to { -webkit-transform: translateY(-50%)rotate(360deg);}}
@keyframes rotateIn {from {transform: translateY(-50%) rotate(0deg);} to { transform: translateY(-50%)rotate(360deg);}}
@-ms-keyframes rotateOut {from {-ms-transform: translateY(-50%) rotate(360deg);} to { -ms-transform: translateY(-50%)rotate(0deg);}}
@-moz-keyframes rotateOut {from {-moz-transform: translateY(-50%) rotate(360deg);} to { -moz-transform: translateY(-50%)rotate(0deg);}}
@-webkit-keyframes rotateOut {from {-webkit-transform: translateY(-50%) rotate(360deg);} to { -webkit-transform: translateY(-50%)rotate(0deg);}}
@keyframes rotateOut {from {transform: translateY(-50%) rotate(360deg);} to { transform: translateY(-50%)rotate(0deg);}}
.rwd-container.open_1_r {animation: unfold_In 1s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_1_r {animation: unfold_Out 1s .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes unfold_In {0% {transform: translateY(-50%) scaleX(.002);}50% {transform: translateY(-50%) scaleX(.002);}100% {transform: translateY(-50%) scaleX(1);}}
@keyframes unfold_Out {0% {transform: translateY(-50%) scaleX(1);}50% {transform: translateY(-50%) scaleX(.002);}100% {transform: translateY(-50%) scaleX(.002);}}
.rwd-container.open_2_r {animation: blowUp_In .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_2_r {animation: blowUp_Out .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes blowUp_In {0% {transform: translateY(-50%) scale(2);}100% {transform: translateY(-50%) scale(1);}}
@keyframes blowUp_Out {0% {transform: translateY(-50%) scale(1);opacity:1;}100% {transform: translateY(-50%) scale(2);opacity:0;}}
.rwd-container.open_3_r {animation: roadRunner_In .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_3_r {animation: roadRunner_Out .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes roadRunner_In {0% {transform:translate(1500px, -50%) skewX(50deg) scaleX(1.3);}70% {transform:translate(-30px, -50%) skewX(-25deg) scaleX(.9);}100% {transform:translate(0px, -50%) skewX(0deg) scaleX(1);}}
@keyframes roadRunner_Out {0% {transform:translate(0px, -50%) skewX(0deg) scaleX(1);}30% {transform:translate(30px, -50%) skewX(-25deg) scaleX(.9);}100% {transform:translate(-1500px, -50%) skewX(50deg) scaleX(1.3);}}
.rwd-container.open_4_r {animation: runner_In .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_4_r {animation: runner_Out .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes runner_In {0% {transform:translate(1500px, -50%);}70% {transform:translate(-30px, -50%);}100% {transform:translate(0px, -50%);}}
@keyframes runner_Out {0% {transform:translate(0px, -50%);}30% {transform:translate(30px, -50%);}100% {transform:translate(-1500px, -50%);}}
.rwd-container.open_5_r {animation: rotate_In .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_5_r {animation: rotate_Out .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@-ms-keyframes rotate_In {from {-ms-transform: translateY(-50%) rotate(360deg);} to { -ms-transform: translateY(-50%)rotate(0deg);}}
@-moz-keyframes rotate_In {from {-moz-transform: translateY(-50%) rotate(360deg);} to { -moz-transform: translateY(-50%)rotate(0deg);}}
@-webkit-keyframes rotate_In {from {-webkit-transform: translateY(-50%) rotate(360deg);} to { -webkit-transform: translateY(-50%)rotate(0deg);}}
@keyframes rotate_In {from {transform: translateY(-50%) rotate(360deg);} to { transform: translateY(-50%)rotate(0deg);}}
@-ms-keyframes rotate_Out {from {-ms-transform: translateY(-50%) rotate(0deg);} to { -ms-transform: translateY(-50%)rotate(360deg);}}
@-moz-keyframes rotate_Out {from {-moz-transform: translateY(-50%) rotate(0deg);} to { -moz-transform: translateY(-50%)rotate(360deg);}}
@-webkit-keyframes rotate_Out {from {-webkit-transform: translateY(-50%) rotate(0deg);} to { -webkit-transform: translateY(-50%)rotate(360deg);}}
@keyframes rotate_Out {from {transform: translateY(-50%) rotate(0deg);} to { transform: translateY(-50%)rotate(360deg);}}

/* Effects */
.rwd-support.rwd-no-trans .rwd-current,.rwd-support.rwd-no-trans .rwd-next-slide,.rwd-support.rwd-no-trans .rwd-prev-slide{-webkit-transition:none 0s ease 0s!important;-moz-transition:none 0s ease 0s!important;-o-transition:none 0s ease 0s!important;transition:none 0s ease 0s!important}
.rwd-support.rwd-animation .rwd-item,.rwd-support.rwd-use .rwd-item{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;backface-visibility:hidden}
.rwd-support.rslider_effect_1 .rwd-item,.rwd-support.rslider_effect_3 .rwd-item,.rwd-support.rslider_effect_4 .rwd-item,.rwd-support.rslider_effect_5 .rwd-item,.rwd-support.rslider_effect_6 .rwd-item,.rwd-support.rslider_effect_7 .rwd-item,.rwd-support.rslider_effect_8 .rwd-item,.rwd-support.rslider_effect_9 .rwd-item,.rwd-support.rslider_effect_10 .rwd-item{opacity:0}
.rwd-support.rslider_effect_1 .rwd-item.rwd-current{opacity:1}
.rwd-support.rslider_effect_1 .rwd-item.rwd-current,.rwd-support.rslider_effect_1 .rwd-item.rwd-next-slide,.rwd-support.rslider_effect_1 .rwd-item.rwd-prev-slide{-webkit-transition:opacity .1s ease 0s;-moz-transition:opacity .1s ease 0s;-o-transition:opacity .1s ease 0s;transition:opacity .1s ease 0s}
.rwd-support.rslider_effect_2.rwd-use .rwd-item{opacity:0}
.rwd-support.rslider_effect_2.rwd-use .rwd-item.rwd-prev-slide{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}
.rwd-support.rslider_effect_2.rwd-use .rwd-item.rwd-next-slide{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}
.rwd-support.rslider_effect_2.rwd-use .rwd-item.rwd-current{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}
.rwd-support.rslider_effect_2.rwd-use .rwd-item.rwd-current,.rwd-support.rslider_effect_2.rwd-use .rwd-item.rwd-next-slide,.rwd-support.rslider_effect_2.rwd-use .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.rslider_effect_2.rwd-animation .rwd-item{opacity:0;position:absolute;left:0}
.rwd-support.rslider_effect_2.rwd-animation .rwd-item.rwd-prev-slide{left:-100%}
.rwd-support.rslider_effect_2.rwd-animation .rwd-item.rwd-next-slide{left:100%}
.rwd-support.rslider_effect_2.rwd-animation .rwd-item.rwd-current{left:0;opacity:1}
.rwd-support.rslider_effect_2.rwd-animation .rwd-item.rwd-current,.rwd-support.rslider_effect_2.rwd-animation .rwd-item.rwd-next-slide,.rwd-support.rslider_effect_2.rwd-animation .rwd-item.rwd-prev-slide{-webkit-transition:left 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:left 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:left 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:left 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.rslider_effect_3 .rwd-item.rwd-prev-slide{-moz-transform:scale3d(1,0,1) translate3d(-100%,0,0);-o-transform:scale3d(1,0,1) translate3d(-100%,0,0);-ms-transform:scale3d(1,0,1) translate3d(-100%,0,0);-webkit-transform:scale3d(1,0,1) translate3d(-100%,0,0);transform:scale3d(1,0,1) translate3d(-100%,0,0)}
.rwd-support.rslider_effect_3 .rwd-item.rwd-next-slide{-moz-transform:scale3d(1,0,1) translate3d(100%,0,0);-o-transform:scale3d(1,0,1) translate3d(100%,0,0);-ms-transform:scale3d(1,0,1) translate3d(100%,0,0);-webkit-transform:scale3d(1,0,1) translate3d(100%,0,0);transform:scale3d(1,0,1) translate3d(100%,0,0)}
.rwd-support.rslider_effect_3 .rwd-item.rwd-current{-moz-transform:scale3d(1,1,1) translate3d(0,0,0);-o-transform:scale3d(1,1,1) translate3d(0,0,0);-ms-transform:scale3d(1,1,1) translate3d(0,0,0);-webkit-transform:scale3d(1,1,1) translate3d(0,0,0);transform:scale3d(1,1,1) translate3d(0,0,0);opacity:1}
.rwd-support.rslider_effect_3 .rwd-item.rwd-current,.rwd-support.rslider_effect_3 .rwd-item.rwd-next-slide,.rwd-support.rslider_effect_3 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.rslider_effect_4 .rwd-item.rwd-prev-slide{-moz-transform:rotate(-360deg);-o-transform:rotate(-360deg);-ms-transform:rotate(-360deg);-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}
.rwd-support.rslider_effect_4 .rwd-item.rwd-next-slide{-moz-transform:rotate(360deg);-o-transform:rotate(360deg);-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)}
.rwd-support.rslider_effect_4 .rwd-item.rwd-current{-moz-transform:rotate(0deg);-o-transform:rotate(0deg);-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);opacity:1}
.rwd-support.rslider_effect_4 .rwd-item.rwd-current,.rwd-support.rslider_effect_4 .rwd-item.rwd-next-slide,.rwd-support.rslider_effect_4 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.rslider_effect_5 .rwd-item.rwd-prev-slide{-moz-transform:rotate(360deg);-o-transform:rotate(360deg);-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)}
.rwd-support.rslider_effect_5 .rwd-item.rwd-next-slide{-moz-transform:rotate(-360deg);-o-transform:rotate(-360deg);-ms-transform:rotate(-360deg);-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}
.rwd-support.rslider_effect_5 .rwd-item.rwd-current{-moz-transform:rotate(0deg);-o-transform:rotate(0deg);-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);opacity:1}
.rwd-support.rslider_effect_5 .rwd-item.rwd-current,.rwd-support.rslider_effect_5 .rwd-item.rwd-next-slide,.rwd-support.rslider_effect_5 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.rslider_effect_6 .rwd-item.rwd-prev-slide{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}
.rwd-support.rslider_effect_6 .rwd-item.rwd-next-slide{-moz-transform:translate3d(0,0,0) scale(.5);-o-transform:translate3d(0,0,0) scale(.5);-ms-transform:translate3d(0,0,0) scale(.5);-webkit-transform:translate3d(0,0,0) scale(.5);transform:translate3d(0,0,0) scale(.5)}
.rwd-support.rslider_effect_6 .rwd-item.rwd-current{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}
.rwd-support.rslider_effect_6 .rwd-item.rwd-current,.rwd-support.rslider_effect_6 .rwd-item.rwd-next-slide,.rwd-support.rslider_effect_6 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.rslider_effect_7 .rwd-item.rwd-prev-slide{-moz-transform:translate3d(0,0,0) scale(.5);-o-transform:translate3d(0,0,0) scale(.5);-ms-transform:translate3d(0,0,0) scale(.5);-webkit-transform:translate3d(0,0,0) scale(.5);transform:translate3d(0,0,0) scale(.5)}
.rwd-support.rslider_effect_7 .rwd-item.rwd-next-slide{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}
.rwd-support.rslider_effect_7 .rwd-item.rwd-current{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}
.rwd-support.rslider_effect_7 .rwd-item.rwd-current,.rwd-support.rslider_effect_7 .rwd-item.rwd-next-slide,.rwd-support.rslider_effect_7 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.rslider_effect_8 .rwd-item.rwd-prev-slide{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}
.rwd-support.rslider_effect_8 .rwd-item.rwd-next-slide{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}
.rwd-support.rslider_effect_8 .rwd-item.rwd-current{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1);opacity:1}
.rwd-support.rslider_effect_8 .rwd-item.rwd-current,.rwd-support.rslider_effect_8 .rwd-item.rwd-next-slide,.rwd-support.rslider_effect_8 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity 1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity 1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity 1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity 1s ease 0s}
.rwd-support.rslider_effect_9 .rwd-item.rwd-prev-slide{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}
.rwd-support.rslider_effect_9 .rwd-item.rwd-next-slide{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}
.rwd-support.rslider_effect_9 .rwd-item.rwd-current{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}
.rwd-support.rslider_effect_9 .rwd-item.rwd-current,.rwd-support.rslider_effect_9 .rwd-item.rwd-next-slide,.rwd-support.rslider_effect_9 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.rslider_effect_10 .rwd-item.rwd-prev-slide {-moz-transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);-o-transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);-ms-transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);-webkit-transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);}
.rwd-support.rslider_effect_10 .rwd-item.rwd-next-slide {-moz-transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);-o-transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);-ms-transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);-webkit-transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);}
.rwd-support.rslider_effect_10 .rwd-item.rwd-current {-moz-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);-o-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);-ms-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);-webkit-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);transform: scale3d(1, 1, 1) translate3d(0, 0, 0);opacity: 1;}
.rwd-support.rslider_effect_10 .rwd-item.rwd-prev-slide, .rwd-support.rslider_effect_10 .rwd-item.rwd-next-slide, .rwd-support.rslider_effect_10 .rwd-item.rwd-current {-webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;=moz-transition: -moz-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;-o-transition: -o-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;transition: transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;}

/* Lightbox styles end */

.frame_container_<?php echo $sliderID ;?> {
<?php
switch( $params->imageframes ) {
case '1':
    echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_1.png") 90 95 95 90 stretch stretch; 
          border-style: inset;
          border-width: 60px;';
    break;
case '7':
    echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_7.png") 93 92 87 92 stretch stretch; 
          border-style: inset;
          border-width: 60px;';
    break;
case '8':
    echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_8.png") 90 123 85 129 stretch stretch; 
          border-style: inset;
          border-width: 60px;';
    break;
}
?>
}

#slider<?php echo $sliderID;?>_container {
    margin: 0 auto;
    position: relative;
    top: 0;
    left: 0;
    display: none;
    overflow:hidden;
}

.socialIcons<?php echo $sliderID;?> {
    width: auto;
    margin: 20px 0;
}

.share-buttons<?php echo $sliderID;?>{
    list-style-type:none;
    position:relative;
    top:5px;
    padding:0 !important;
    margin: 0 !important;
}

.share-buttons<?php echo $sliderID;?> li,.share-buttons<?php echo $sliderID;?> li a{
    display:inline-block;
    width:35px;
    height:35px;
    margin-right:5px;
    outline: none;
    box-shadow: none !important;
    border: none !important;
}

.share-buttons<?php echo $sliderID;?> a#share-facebook {
    display: block;
    position: absolute;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-image: url(<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES;?>/sharing/sharing-<?php echo $params->sharing->type;?>.png);
    background-position: 0 0;
    background-size: 200px 35px;
    overflow: hidden;
    z-index: 9;
}
.share-buttons<?php echo $sliderID;?> a#share-twitter {
    display: block;
    position: absolute;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-image: url(<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES;?>/sharing/sharing-<?php echo $params->sharing->type;?>.png);
    background-position: -35px 0;
    background-size: 200px 35px;
    overflow: hidden;
    z-index: 9;
}
.share-buttons<?php echo $sliderID;?> a#share-googleplus {
    display: block;
    position: absolute;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-image: url(<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES;?>/sharing/sharing-<?php echo $params->sharing->type;?>.png);
    background-position: -67px 0;
    background-size: 200px 35px;
    overflow: hidden;
    z-index: 9;
}
.share-buttons<?php echo $sliderID;?> a#share-pinterest {
    display: block;
    position: absolute;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-image: url(<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES;?>/sharing/sharing-<?php echo $params->sharing->type;?>.png);
    background-position: -99px 0;
    background-size: 200px 35px;
    overflow: hidden;
    z-index: 9;
}
.share-buttons<?php echo $sliderID;?> a#share-linkedin {
    display: block;
    position: absolute;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-image: url(<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES;?>/sharing/sharing-<?php echo $params->sharing->type;?>.png);
    background-position: -131px 0;
    background-size: 200px 35px;
    overflow: hidden;
    z-index: 9;
}
.share-buttons<?php echo $sliderID;?> a#share-tumblr {
    display: block;
    position: absolute;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-image: url(<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES;?>/sharing/sharing-<?php echo $params->sharing->type;?>.png);
    background-position: -164px 0;
    background-size: 200px 35px;
    overflow: hidden;
    z-index: 9;
}

#slider<?php echo $sliderID;?>_container .reslide_slides img {
    display: none;
<?php switch( $params->imagefilters ) {
    case '1':
        echo '-webkit-filter: grayscale(1);
             filter: grayscale(1);';
        break;
    case '2':
        echo '-webkit-filter: sepia(1);
             filter: sepia(1);';
        break;
    case '3':
        echo '-webkit-filter: saturate(4);
                filter: saturate(4);';
        break;
    case '4':
        echo '-webkit-filter: hue-rotate(90deg);
            filter: hue-rotate(90deg);';
        break;
}?>
}
#slider<?php echo $sliderID;?>_container .reslide_loading {
    position: absolute;
    top: 0;
    left: 0;
}
#slider<?php echo $sliderID;?>_container .reslide_loading  > div {
    width:100%;
    height:100%;
    position: absolute;
    background: #ccc;
}
#slider<?php echo $sliderID ;?>_container .reslide_slides {
    width: <?php echo  absint($style->width);?>px;
    height: <?php echo  absint($style->height);?>px;
    position: absolute;
    left: 0;
    top: 0;
    overflow: hidden;
    cursor: move;
}

/*Title and description defaults ***/

#slider<?php echo $sliderID ;?>_container .reslidetitle,#slider<?php echo $sliderID ;?>_container .reslidedescription  {
    position: absolute;
    overflow: hidden;
    z-index: 2;
}
#slider<?php echo $sliderID ;?>_container .reslidetitle > div ,#slider<?php echo $sliderID ;?>_container .reslidedescription > div {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    font-size: 14px;
}
#slider<?php echo $sliderID ;?>_container .reslidetitle > span ,#slider<?php echo $sliderID ;?>_container .reslidedescription > span {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;
    padding: 10px;

}

/*Title styles ***/


#slider<?php echo $sliderID ;?>_container .reslidetitle {
    max-width: <?php echo absint($title->style->width); ?>px;
    max-height: <?php echo absint($title->style->height); ?>px;
    width: 100%;
    height: 100%;
    top: <?php echo esc_html($title->style->top); ?>;
    left: <?php echo esc_html($title->style->left); ?>;
    border: <?php echo absint($title->style->border->width); ?>px solid #<?php echo sanitize_text_field($title->style->border->color); ?>;
    border-radius: <?php echo intval($title->style->border->radius); ?>px;
    background: <?php list($r,$g,$b) = array_map('hexdec',str_split($title->style->background->color,2));
                    $titleopacity = abs($title->style->opacity) / 100;
                    echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')'; ?>;
}
#slider<?php echo $sliderID ;?>_container .reslidetitle > div {
    filter: alpha(opacity=<?php echo abs($title->style->opacity); ?>);
}
#slider<?php echo $sliderID ;?>_container .reslidetitle > span {
    padding: 10px;
    text-align: center;
    font-size: <?php echo absint($title->style->font->size); ?>px;
    color: <?php echo sanitize_hex_color("#".esc_html($title->style->color)); ?>;
}

/*Description styles ***/

#slider<?php echo $sliderID ;?>_container .reslidedescription {
    max-width: <?php echo absint($description->style->width); ?>px;
    max-height: <?php echo absint($description->style->height); ?>px;
    width: 100%;
    height: 100%;
    top: <?php echo esc_html($description->style->top); ?>;
    left: <?php echo esc_html($description->style->left); ?>;
    border: <?php echo absint($description->style->border->width); ?>px solid <?php echo sanitize_hex_color("#".$description->style->border->color); ?>;
    border-radius: <?php echo absint($description->style->border->radius); ?>px;
}
#slider<?php echo $sliderID ;?>_container .reslidedescription > div {
    background: <?php echo esc_html("#".$description->style->background->color); ?>;
    opacity: <?php echo abs($description->style->opacity)/100;?>;
    filter: alpha(opacity=<?php echo abs($description->style->opacity); ?>);
}
#slider<?php echo $sliderID ;?>_container .reslidedescription > span {
    font-size: <?php echo absint($description->style->font->size); ?>px;
    color: <?php echo sanitize_hex_color("#".esc_html($description->style->color)); ?>;
}

/* slide static elements ***/

<?php
foreach($_reslides as $slide){
    if($slide->published == 0) continue;
    $customSlide = json_decode($slide->custom);
    foreach($customSlide as $customSlide) {
        switch($customSlide->type) {
            case 'h3':
                ?>
            .slide<?php echo $slide->id;?>h3<?php echo $customSlide->id;?>  {
                margin: 0;
                padding: 0;
                z-index: 2;
                position: absolute;
                background: none;
                width: <?php echo absint($customSlide->style->width); ?>px;
                height: <?php echo absint($customSlide->style->height); ?>px;
                border: <?php echo absint($customSlide->style->border->width); ?>px solid <?php echo sanitize_hex_color("#".$customSlide->style->border->color); ?>;
                top: <?php echo esc_html($customSlide->style->top); ?>;
                left: <?php echo esc_html($customSlide->style->left); ?>;
                border-radius: <?php echo absint($customSlide->style->border->radius); ?>px;
                overflow: hidden;
                cursor: text;
            }
            .slide<?php echo $slide->id;?>h3<?php echo $customSlide->id;?> > span {
                width: 100%;
                height: 100%;
                z-index: 2;
                position: absolute;
                top: 0;
                left: 0;
                opacity: <?php echo abs($customSlide->style->opacity)/100;?>;
                filter: alpha(opacity=<?php echo abs($customSlide->style->opacity); ?>);
                background: <?php echo sanitize_hex_color("#".$customSlide->style->background->color); ?>;
            }
            .slide<?php echo $slide->id;?>h3<?php echo $customSlide->id;?>:hover > span:first-child {
                opacity: <?php echo abs($customSlide->style->opacity)/100;?>;
                filter: alpha(opacity=<?php echo abs($customSlide->style->opacity); ?>);
                background: <?php echo sanitize_hex_color("#".$customSlide->style->background->hover); ?>;
            }
            .slide<?php echo $slide->id;?>h3<?php echo $customSlide->id;?> > span:first-child {
                background: <?php echo sanitize_hex_color("#".$customSlide->style->background->color); ?>;
            }
            .slide<?php echo $slide->id;?>h3<?php echo $customSlide->id;?> .gg {
                width: 100%;
                height: 100%;
                display: block;
                position: absolute;
                text-align: center;
                background: none;
                opacity: 1;
                top: 0;
                left: 0;
                font-size: <?php echo absint($customSlide->style->font->size); ?>px;
                z-index: 2;
                color: <?php echo sanitize_hex_color("#".$customSlide->style->color); ?>;
                line-height: 1.5;
            }
            <?php
                break;
                case 'button':
            ?>
            #slider<?php echo $sliderID ;?>_container  .slide<?php echo $sliderID ;?>_<?php echo $slide->id;?> 	.slide<?php echo $slide->id;?>button<?php echo $customSlide->id;?>.reslidebutton {
                padding: 0px;
                z-index: 2;
                position: absolute;
                border: 2px solid rgb(0, 0, 36);
                top: 0;
                left: 0;
                border-radius: 0;
                background: none;
                width: <?php echo absint($customSlide->style->width); ?>px;
                height: <?php echo absint($customSlide->style->height); ?>px;
                border: <?php echo absint($customSlide->style->border->width); ?>px solid #<?php echo absint($customSlide->style->border->color); ?>;
                top: <?php echo esc_html($customSlide->style->top); ?>;
                left: <?php echo esc_html($customSlide->style->left); ?>;
                border-radius: <?php echo absint($customSlide->style->border->radius); ?>px;
                overflow: hidden;
            }
            #slider<?php echo $sliderID ;?>_container  .slide<?php echo $sliderID ;?>_<?php echo $slide->id;?> 	.slide<?php echo $slide->id;?>button<?php echo $customSlide->id;?> div {
                width: 100%;
                height: 100%;
                z-index: 2;
                position: absolute;
                top: 0px;
                left: 0px;
                opacity: <?php echo abs($customSlide->style->opacity)/100;?>;
                filter: alpha(opacity=<?php echo abs($customSlide->style->opacity); ?>);
                background: <?php echo sanitize_hex_color("#".$customSlide->style->background->color); ?>;
            }
            #slider<?php echo $sliderID ;?>_container  .slide<?php echo $sliderID ;?>_<?php echo $slide->id;?> 	.slide<?php echo $slide->id;?>button<?php echo $customSlide->id;?>:hover div {
                opacity: <?php echo abs($customSlide->style->opacity)/100; ?>;
                filter: alpha(opacity=<?php echo abs($customSlide->style->opacity); ?>);
                background: <?php echo sanitize_hex_color("#".$customSlide->style->background->hover); ?>;
            }
            #slider<?php echo $sliderID ;?>_container  .slide<?php echo $sliderID ;?>_<?php echo $slide->id;?> 	.slide<?php echo $slide->id;?>button<?php echo $customSlide->id;?> .gg {
                font-size: <?php echo absint($customSlide->style->font->size); ?>px;
                width: 100%;
                height: 100%;
                z-index: 2;
                color: <?php echo sanitize_hex_color("#".$customSlide->style->color);?>;
                display: block;
                position: absolute;
                text-align: center;
                top: 0;
                left: 0;
                text-decoration: none;
            }
            #slider<?php echo $sliderID ;?>_container  .slide<?php echo $sliderID ;?>_<?php echo $slide->id;?> 	.slide<?php echo $slide->id;?>button<?php echo $customSlide->id;?> .gg span {
                width: 100%;
                display: block;
                height: auto;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                text-align: center;
                word-wrap: break-word;
                font-size: <?php echo absint($customSlide->style->font->size);?>px;
                color: <?php echo sanitize_hex_color("#".$customSlide->style->color);?>;
            }

            <?php
                break;
                case 'img':
            ?>
            #slider<?php echo $sliderID ;?>_container .slide<?php echo $sliderID ;?>_<?php echo $slide->id;?> .slide<?php echo $slide->id;?>img<?php echo $customSlide->id;?>.reslideimg {
                position: absolute;
                z-index: 1;
                overflow: hidden;
                width: <?php echo absint($customSlide->style->width);?>px;
                height: <?php echo absint($customSlide->style->height);?>px;
                border: <?php echo absint($customSlide->style->border->width);?>px solid <?php echo sanitize_hex_color("#".$customSlide->style->border->color);?>;
                top: <?php echo esc_html($customSlide->style->top);?>;
                left: <?php echo esc_html($customSlide->style->left);?>;
                border-radius: <?php echo absint($customSlide->style->border->radius);?>px;
            }
            #slider<?php echo $sliderID ;?>_container  .slide<?php echo $sliderID ;?>_<?php echo $slide->id;?> 	.slide<?php echo $slide->id;?>img<?php echo $customSlide->id;?>.reslideimg img {
                width: 100%;
                height: 100%;
                z-index: 0;
                opacity: <?php echo abs($customSlide->style->opacity)/100;?>;
                filter: alpha(opacity=<?php echo  abs($customSlide->style->opacity);?>);
            }

            <?php break;
        }
    }
}
?>

#slider<?php echo $sliderID ;?>_container	#slider<?php echo $sliderID ;?>_container .reslide_any {
    width: 100px;
    height: 26px;
    position: absolute;
    top: 10px;
    left: 400px;
}
/* Sliders Customs Statics***/
<?php
		foreach($customs as $custom){ ?>
<?php switch($custom->type) {
            case 'h3':
        ?>
#slider<?php echo $sliderID ;?>_container	.reslideh3<?php echo $custom->id;?> {
    margin: 0;
    padding: 0;
    z-index: 2;
    position: absolute;
    background: none;
    max-width: <?php echo absint($custom->style->width);?>px;
    max-height: <?php echo absint($custom->style->height);?>px;
    width: 100%;
    height: 100%;
    border: <?php echo absint($custom->style->border->width);?>px solid <?php echo sanitize_hex_color("#".$custom->style->border->color);?>;
    top: <?php echo esc_html($custom->style->top);?>;
    left: <?php echo esc_html($custom->style->left);?>;
    border-radius: <?php echo abs($custom->style->border->radius);?>px;
    overflow: hidden;
}
#slider<?php echo $sliderID ;?>_container	.reslideh3<?php echo $custom->id;?> span:first-child {
    width: 100%;
    height: 100%;
    z-index: 2;
    position: absolute;
    top: 0;
    left: 0;
    opacity: <?php echo abs($custom->style->opacity)/100;?>;
    filter: alpha(opacity=<?php echo abs($custom->style->opacity);?>);
    background: <?php echo sanitize_hex_color("#".$custom->style->background->color);?>;
}
#slider<?php echo $sliderID ;?>_container	.reslideh3<?php echo $custom->id;?>:hover span:first-child {
    background: <?php echo sanitize_hex_color("#".$custom->style->background->hover);?>;
}
#slider<?php echo $sliderID ;?>_container	.reslideh3<?php echo $custom->id;?> .gg {
    width: 100%;
    height: 100%;
    display: block;
    position: absolute;
    text-align: center;
    top: 0;
    left: 0;
    font-size: <?php echo absint($custom->style->font->size);?>px;
    z-index: 2;
    color: <?php echo sanitize_hex_color("#".$custom->style->color);?>;
    line-height: 1.5;
}
<?php
    break;
    case 'button':
?>
#slider<?php echo $sliderID ;?>_container	.reslidebutton<?php echo $custom->id;?> {
    padding: 0;
    z-index: 2;
    position: absolute;
    border: 2px solid rgb(0, 0, 36);
    top: 0;
    left: 0;
    border-radius: 0;
    background: none;
    max-width: <?php echo $custom->style->width;?>px;
    max-height: <?php echo $custom->style->height;?>px;
    width: 100%;
    height: 100%;
    border: <?php echo absint($custom->style->border->width);?>px solid <?php echo sanitize_hex_color("#".$custom->style->border->color);?>;
    top: <?php echo esc_html($custom->style->top);?>;
    left: <?php echo esc_html($custom->style->left);?>;
    border-radius: <?php echo absint($custom->style->border->radius);?>px;
    overflow: hidden;
}
#slider<?php echo $sliderID ;?>_container	.reslidebutton<?php echo $custom->id;?> > div {
    width: 100%;
    height: 100%;
    z-index: 2;
    position: absolute;
    top: 0;
    left: 0;
    opacity: <?php echo abs($custom->style->border->radius)/100;?>;
    filter: alpha(opacity=<?php echo abs($custom->style->opacity);?>);
    background: <?php echo sanitize_hex_color("#".$custom->style->background->color);?>;
}
#slider<?php echo $sliderID ;?>_container	.reslidebutton<?php echo $custom->id;?>:hover > div {
    opacity: <?php echo abs($custom->style->opacity)/100;?>;
    filter: alpha(opacity=<?php echo abs($custom->style->opacity);?>);
    background: <?php echo sanitize_hex_color("#".$custom->style->background->hover);?>;
}
#slider<?php echo $sliderID ;?>_container	.reslidebutton<?php echo $custom->id;?> .gg {
    font-size: <?php echo abs($custom->style->font->size);?>px;
    width: 100%;
    height: 100%;
    z-index: 2;
    color: <?php echo sanitize_hex_color("#".$custom->style->color);?>;
    display: block;
    position: absolute;
    text-align: center;
    top: 0;
    left: 0;
    text-decoration: none;
}
#slider<?php echo $sliderID ;?>_container	.reslidebutton<?php echo $custom->id;?> .gg span {
    width: 100%;
    display: block;
    height: auto;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    word-wrap: break-word;
    font-size: <?php echo absint($customSlide->style->font->size);?>px;
    color: <?php echo sanitize_hex_color("#".$customSlide->style->color);?>;

}

<?php
    break;
    case 'img':
?>
#slider<?php echo $sliderID ;?>_container	.reslideimg<?php echo $custom->id;?> {
    position: absolute;
    z-index: 1;
    overflow: hidden;
    max-width: <?php echo absint($custom->style->width);?>px;
    max-height: <?php echo absint($custom->style->height);?>px;
    width: 100%;
    height: 100%;
    border: <?php echo absint($custom->style->border->width);?>px solid <?php echo sanitize_hex_color("#".$custom->style->border->color);?>;
    top: <?php echo esc_html($custom->style->top);?>;
    left: <?php echo esc_html($custom->style->left);?>;
    border-radius: <?php echo absint($custom->style->border->radius);?>px;
}
#slider<?php echo $sliderID ;?>_container	.reslideimg<?php echo $custom->id;?> img {
    width: 100%;
    height: 100%;
    z-index: 0;
    opacity: <?php echo abs($custom->style->opacity)/100;?>;
    filter: alpha(opacity=<?php echo abs($custom->style->opacity);?>);
}
<?php break;default: ?>
<?php }?>
<?php
}?>

/*** navigator ***/

#slider<?php echo $sliderID ;?>_container .reslide_navigator {
    position: absolute;

}
#slider<?php echo $sliderID ;?>_container .reslide_navigator div,#slider<?php echo $sliderID ;?>_container .reslide_navigator div:hover,#slider<?php echo $sliderID ;?>_container .reslide_navigator .av {
    position: absolute;
    /* size of bullet elment */
    width: 12px;
    height: 12px;
    border-radius: 10px;
    filter: alpha(opacity=70);
    opacity: .7;
    overflow: hidden;
    cursor: pointer;
    border: #4B4B4B 1px solid;
}
#slider<?php echo $sliderID ;?>_container .reslide_navigator div { background-color: <?php echo sanitize_hex_color("#".$params->bullets->style->background->color->link);?>; }
body #slider<?php echo $sliderID ;?>_container .reslide_navigator div:hover { background-color:<?php echo sanitize_hex_color("#".$params->bullets->style->background->color->hover);?>; }
#slider<?php echo $sliderID ;?>_container  .reslide_navigator .reslide_dotav {background-color: #74B8CF !important;  border: #fff 1px solid; }
#slider<?php echo $sliderID ;?>_container  .reslide_navigator .dn,#slider<?php echo $sliderID ;?>_container .reslide_navigator .dn:hover { background-color: #555555; }

/* arrows */

#slider<?php echo $sliderID ;?>_container .reslide_arrow_left,#slider<?php echo $sliderID ;?>_container .reslide_arrow_right {
    display: block;
    position: absolute;
    /* size of arrow element */
    width:  <?php echo absint($params->arrows->style->background->width);?>px;
    height:  <?php echo absint($params->arrows->style->background->height);?>px;
    cursor: pointer;
    background-image: url(<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES;?>/arrows/arrows-<?php echo $params->arrows->type;?>.png);
    overflow: hidden;
    z-index: 9999;
}
#slider<?php echo $sliderID ;?>_container   .reslide_arrow_left { background-position: <?php echo esc_html($params->arrows->style->background->left);?>; }
#slider<?php echo $sliderID ;?>_container .reslide_arrow_left:hover { background-position: <?php echo esc_html($params->arrows->style->background->hover->left);?>; }
#slider<?php echo $sliderID ;?>_container .reslide_arrow_right { background-position: <?php echo esc_html($params->arrows->style->background->right);?>; }
#slider<?php echo $sliderID ;?>_container  .reslide_arrow_right:hover { background-position: <?php echo esc_html($params->arrows->style->background->hover->right);?>; }


#slider<?php echo $sliderID ;?>_container   .reslide_arrow_left.reslide_arrow_leftdn { background-position: <?php echo esc_html($params->arrows->style->background->left);?>; }
#slider<?php echo $sliderID ;?>_container  .reslide_arrow_right.reslide_arrow_leftdn { background-position: <?php echo esc_html($params->arrows->style->background->right);?>; }
/* thumbnail  */

.reslide-thumbnail<?php echo $sliderID;?> {
    position: absolute;
    /* size of thumbnail navigator container */
    height: 60px;
    width: <?php echo absint($style->width);?>px;
    z-index: 1;
}
#slider<?php echo $sliderID ;?>_container	.reslide-thumbnail<?php echo $sliderID;?> > div {
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    max-width: <?php echo absint($style->width)-10;?>px;
}

#slider<?php echo $sliderID ;?>_container   .reslide-thumbnail<?php echo $sliderID;?> .p {
    position: absolute;
    top: 0;
    left: 0;
    /* max-width: 62px;*/
    height: 32px;
}

#slider<?php echo $sliderID ;?>_container   .reslide-thumbnail<?php echo $sliderID;?> .t {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}

#slider<?php echo $sliderID ;?>_container   .reslide-thumbnail<?php echo $sliderID;?> .w,#slider<?php echo $sliderID ;?>_container .reslide-thumbnail<?php echo $sliderID;?> .pav:hover .w {
    position: absolute;
    /*  max-width: 60px;*/
    height: 30px;
    box-sizing: border-box;
    border: #0099FF 1px solid;
}

#slider<?php echo $sliderID ;?>_container   .reslide-thumbnail<?php echo $sliderID;?> .pdn .w,#slider<?php echo $sliderID ;?>_container .reslide-thumbnail<?php echo $sliderID;?> .pav .w {
    border-style: dashed;
}

#slider<?php echo $sliderID ;?>_container   .reslide-thumbnail<?php echo $sliderID;?> .c {
    position: absolute;
    top: 0;
    left: 0;
    /* max-width: 62px;*/
    height: 30px;
    background-color: #000;
    filter: alpha(opacity=45);
    opacity: .45;
    transition: opacity .6s;
    -moz-transition: opacity .6s;
    -webkit-transition: opacity .6s;
    -o-transition: opacity .6s;
}

#slider<?php echo $sliderID ;?>_container   .reslide-thumbnail<?php echo $sliderID;?> .p:hover .c,  #slider<?php echo $sliderID ;?>_container   .reslide-thumbnail<?php echo $sliderID;?> .pav .c {
    filter: alpha(opacity=0);
    opacity: 0;
}

#slider<?php echo $sliderID ;?>_container   .reslide-thumbnail<?php echo $sliderID;?> .p:hover .c {
    transition: none;
    -moz-transition: none;
    -webkit-transition: none;
    -o-transition: none;
}

* html #slider<?php echo $sliderID ;?>_container .reslide-thumbnail<?php echo $sliderID;?> .w {
    width: 62px;
    height: 32px;
}
</style>
