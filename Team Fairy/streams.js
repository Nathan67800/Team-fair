const source = "https://demopage.gcdn.co/cmaf/2675_19146/index.mpd";
const player = dashjs.MediaPlayer().create();
player.initialize(
  document.querySelector("#dash"),
  source,
  false
);