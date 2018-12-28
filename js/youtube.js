// youtube api
var script = document.createElement("script");
script.src = "https://www.youtube.com/iframe_api";

var firstScript = document.getElementsByTagName("script")[0];
firstScript.parentNode.insertBefore(script, firstScript);

var player;
var vid = "v_-wSnnhMKE";
var maxTime = 320,
    startTime = Math.ceil((Math.random() * maxTime));

function onYouTubeIframeAPIReady() {
  player = new YT.Player("js-youtube", {
    videoId: vid,
    playerVars: {
      //"autoplay": 1,
      "showinfo": 0,
      "autohide": 1,
      "controls": 0,
      "rel": 0,
      //"loop": 1,
      //"playlist": vid,
      "playsinline": 1,
      "start": startTime
    },
    events: {
      "onReady": onPlayerReady,
      "onStateChange": onPlayerStateChange
    }
  });
}

var playerReady = false;

function onPlayerReady(event) {
  const p = event.target;

  playerReady = true;

  p.mute();
  p.playVideo();
}


function onPlayerStateChange(event) {
  var status = event.data,
      jsYoutube = document.getElementById("js-youtube");

  if (status == -1) { // UNSTARTED
  }
  if (status == 0) { // ENDED
    player.playVideo();
  }
  if (status == 1) { // PLAYING

    if (jsYoutube.classList.contains("js-youtube--top")) {
      document.getElementsByClassName("js-youtube--top")[0].classList.add("show");
    }

    if (jsYoutube.classList.contains("js-youtube--sub")) {
      document.getElementsByClassName("js-youtube--sub")[0].classList.add("dark");
    }

    if (okafujiishi.getDevice() == "sp") {
      player.pauseVideo();
    }
  }
  if (status == 2) { // PAUSED
  }
  if (status == 3) { // BUFFERING

    if (jsYoutube.classList.contains("js-youtube--top")) {
      document.getElementsByClassName("js-youtube--top")[0].classList.remove("show");
    }

    if (jsYoutube.classList.contains("js-youtube--sub")) {
      document.getElementsByClassName("js-youtube--sub")[0].classList.remove("dark");
    }
  }
  if (status == 5) { // CUED
  }
}

if (okafujiishi.getDevice() == "sp") {
  window.addEventListener("load", function() {
    console.log("loaded");
    setTimeout(function() {
      if (playerReady) {
        player.playVideo();
      }
    }, 3000);
  });
}

