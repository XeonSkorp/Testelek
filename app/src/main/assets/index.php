<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css">
  
<style>
*, *:before, *:after {
  box-sizing: border-box;
}

html {
  min-height: 100%;
}

body {
  background: #eee url("img/82fLDu4.jpg") no-repeat center;
  background-size: cover;
  font-family: "Open Sans", sans-serif;
}

.music-player {
  position: relative;
  width: 350px;
  height: 290px;
  margin: 150px auto;
  box-shadow: 0 0 60px rgba(0, 0, 0, 0.8);
  border-radius: 10px;
  background: #222;
  overflow: hidden;
  z-index: 0;
}
.music-player img {
  position: absolute;
  top: 0px;
  left: 0px;
  bottom: 0px;
  right: 0px;
  z-index: -1;
  display: block;
  width: 100% !important;
  height: 100% !important;
  filter: blur(2px);
}
.music-player .info {
  width: 100%;
  height: 100px;
  background: #222;
  background: rgba(0, 0, 0, 0.8);
  text-align: center;
  position: relative;
}
.music-player .info .jp-playlist li {
  display: none;
}
.music-player .info .jp-playlist li a {
  font-size: 30px;
  font-weight: 300;
  text-decoration: none;
  color: #fff;
  color: rgba(225, 225, 225, 0.4);
}
.music-player .info .jp-playlist li a span {
  font-size: 14px;
  display: block;
  margin-top: 10px;
}
.music-player .info .jp-playlist li.jp-playlist-current {
  display: block;
}
.music-player .info .jp-playlist li .jp-free-media, .music-player .info .jp-playlist li .jp-playlist-item-remove {
  display: none;
}
.music-player .info .left, .music-player .info .right {
  width: 25px;
  position: absolute;
  top: 30px;
  left: 30px;
}
.music-player .info .right {
  left: auto;
  right: 30px;
}
.music-player .info [class^=icon-] {
  margin: 0 0 10px;
}
.music-player .info .center {
  padding: 20px 0 0;
}
.music-player .progress, .music-player .volume-level {
  width: 100%;
  height: 5px;
  display: block;
  background: #000;
  position: absolute;
  bottom: 0px;
  cursor: pointer;
  border: none;
}
.music-player .progress .ui-slider-range, .music-player .volume-level .ui-slider-range {
  display: block;
  background: #ed553b;
  height: 5px;
  border-radius: 0;
}
.music-player .progress .ui-slider-handle, .music-player .volume-level .ui-slider-handle {
  position: absolute;
  top: -8px;
  width: 8px;
  height: 22px;
  background: url("img/tsqwz1N.png") no-repeat center;
  border: none;
  outline: none;
  margin: 0 0 0 -3px;
  cursor: move;
}
.music-player .controls {
  text-align: center;
  width: 100%;
  height: 190px;
  background: #982e4b;
  background: rgba(152, 46, 75, 0.6);
}
.music-player .controls .current {
  font-size: 48px;
  color: #fff;
  color: rgba(225, 225, 225, 0.4);
  padding: 15px 0 20px;
}
.music-player .controls .play-controls a {
  display: inline-block;
  width: 35px;
  height: 40px;
  margin: 0 30px;
}
.music-player .controls .volume-level {
  position: relative;
  bottom: auto;
  width: 200px;
  height: 2px;
  margin: 30px auto 0;
  background: rgba(225, 225, 225, 0.3);
}
.music-player .controls .volume-level .ui-slider-range {
  height: 2px;
}
.music-player .controls .volume-level .ui-slider-handle {
  top: -8px;
  margin-left: -9px;
  width: 22px;
  height: 22px;
  background-image: url("img/V5i67V2.png");
}
.music-player .controls .volume-level .icon-volume-up, .music-player .controls .volume-level .icon-volume-down {
  position: absolute;
  right: -34px;
  top: -8px;
  width: 22px;
}
.music-player .controls .volume-level .icon-volume-down {
  right: auto;
  left: -27px;
}

[class^=icon-] {
  width: 18px;
  height: 18px;
  background: url("img/E09T8tf.png") no-repeat center;
  display: block;
}

.icon-shuffle {
  background-image: url("img/AQAxRxS.png");
}
.icon-heart {
  background-image: url("img/E09T8tf.png");
}
.icon-repeat {
  background-image: url("img/338F8MX.png");
}
.icon-share {
  background-image: url("img/PGIC6ME.png");
}
.icon-previous {
  background-image: url("img/LIqj0nr.png");
}
.icon-play {
  background-image: url("img/xlBv5aR.png");
}
.icon-pause {
  background-image: url("img/lIhwduj.png");
}
.icon-next {
  background-image: url("img/Mb6Nzj5.png");
}
.icon-volume-up {
  background-image: url("img/qqdoddi.png");
}
.icon-volume-down {
  background-image: url("img/3iirf2f.png");
}

.copyrights {
  text-align: center;
  text-transform: capitalize;
  margin: 50px;
  color: rgba(0, 0, 0, 0.6);
}
.copyrights a {
  color: rgba(152, 46, 75, 0.9);
  text-decoration: none;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">
  <div class="music-player jp-video-270p">

  <div class="info">
    
    <div class="left">
      <a href="javascript:;" class="icon-shuffle"></a>
      <a href="javascript:;" class="icon-heart"></a>
    </div>
    
    <div class="center">
      <div class="jp-playlist">
        <ul style="display: block;"><li class="jp-playlist-current"><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="1">Created <span class="jp-artist"></span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="1">Cro Magnon Man <span class="jp-artist"></span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="1">Bubble</a></div></li></ul>
      </div> 
    </div>
    
    <div class="right">
      <a href="javascript:;" class="icon-repeat"></a>
      <a href="javascript:;" class="icon-share"></a>
    </div>
    
    <div class="progress ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span></div>
    
  </div>
      
  <div class="controls">
    <div class="current jp-current-time">00:00</div>
    <div class="play-controls">
      <a href="javascript:;" class="icon-previous jp-previous" title="previous"></a>
      <a href="javascript:;" class="icon-play jp-play" title="play"></a>
      <a href="javascript:;" class="icon-pause jp-pause" title="pause" style="display: none;"></a>
      <a href="javascript:;" class="icon-next jp-next" title="next"></a>
    </div>
    <div class="volume-level ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
      <a href="javascript:;" class="icon-volume-up" title="max volume"></a>
      <a href="javascript:;" class="icon-volume-down" title="mute"></a>
    <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 80.8081%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 80.8081%;"></span></div>
  </div>
  
  <div id="jquery_jplayer" class="jp-jplayer" style="width: 480px; height: 270px;"><img id="jp_poster_0" style="width: 480px; height: 270px; display: block;" src="./sCbrzQa.png"><audio id="jp_audio_0" preload="metadata" src="http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg"></audio><video id="jp_video_0" preload="metadata" style="width: 0px; height: 0px;"></video></div>
  
</div>


  <script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.jplayer.min.js"></script>
<script src="js/jplayer.playlist.min.js"></script>
      <script id="rendered-js">
$(document).ready(function () {


  var playlist = [{
    title: "Készítette",
    artist: "Mező Gábor",
    mp3: "https://gamershouse.hu/livemega.mp3",
    oga: "https://gamershouse.hu/livemega.mp3",
    poster: "img/sCbrzQa.png" },
];
  var cssSelector = {
    jPlayer: "#jquery_jplayer",
    cssSelectorAncestor: ".music-player" };
  var options = {
    swfPath: "swf/Jplayer.swf",
    supplied: "ogv, m4v, oga, mp3",
    volumechange: function (event) {
      $(".volume-level").slider("value", event.jPlayer.options.volume);
    },
    timeupdate: function (event) {
      $(".progress").slider("value", event.jPlayer.status.currentPercentAbsolute);
    } };
  var myPlaylist = new jPlayerPlaylist(cssSelector, playlist, options);
  var PlayerData = $(cssSelector.jPlayer).data("jPlayer");
  $(".volume-level").slider({
    animate: "fast",
    max: 1,
    range: "min",
    step: 0.01,
    value: $.jPlayer.prototype.options.volume,
    slide: function (event, ui) {
      $(cssSelector.jPlayer).jPlayer("option", "muted", false);
      $(cssSelector.jPlayer).jPlayer("option", "volume", ui.value);
    } });
  $(".progress").slider({
    animate: "fast",
    max: 100,
    range: "min",
    step: 0.1,
    value: 0,
    slide: function (event, ui) {
      var sp = PlayerData.status.seekPercent;
      if (sp > 0) {
        $(cssSelector.jPlayer).jPlayer("playHead", ui.value * (100 / sp));
      } else {
        setTimeout(function () {
          $(".progress").slider("value", 0);
        }, 0);
      }
    } });
    });</script>
</body></html>