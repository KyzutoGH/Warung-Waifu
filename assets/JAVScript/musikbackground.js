document.addEventListener("DOMContentLoaded", function () {
  // Baca hardware dan software pengguna
  var browser = navigator.appName;
  var version = navigator.appVersion;
  var os = navigator.platform;

  var lengkaps = browser + " " + version + " " + os;
  var singkatInfo = lengkaps.match(/Chrome\/[\d.]+/);
  var browserInfo = singkatInfo ? singkatInfo[0] : "Tidak Dikenal";

  console.log("Browser: " + browserInfo);

  document.querySelector(".agensi").innerText =
    "Copyright, 2023 UNISBA Blitar. Made by KyzutoXT. Dibuka pada browser " +
    browserInfo;

  const backgroundMusic = document.getElementById("backgroundMusic");
  const musicSource = document.getElementById("musicSource");
  const playButton = document.getElementById("playButton");
  const pauseButton = document.getElementById("pauseButton");
  const stopButton = document.getElementById("stopButton");
  const nextButton = document.getElementById("nextButton");
  const prevButton = document.getElementById("prevButton");
  const musicTitle = document.getElementById("musicTitle");

  let currentTrack = 0;
  const tracks = [
    {
      title: "Houkago Tea Time - Cagayake!GIRLS",
      src: "assets/music/Cagayake!GIRLS.mp3",
    },
    { title: "Centimillimental - Kizuato", src: "assets/music/Kizuato.mp3" },
    {
      title: "Porno Grafiti - Mellisa - Indonesian Cover",
      src: "assets/music/Melissa (Indonesian Cover).mp3",
    },
    {
      title: "YOASOBI - Yoru Ni Kakeru",
      src: "assets/music/YOASOBI - 夜に駆ける.flac",
    },
    {
      title: "SUPER JUNIOR - Bonamana",
      src: "assets/music/SUPER JUNIOR 슈퍼주니어 '미인아 (Bonamana)' MV.mp3",
    },
  ];

  function loadTrack(trackIndex) {
    currentTrack = trackIndex;
    musicSource.src = tracks[currentTrack].src;
    musicTitle.innerText =
      "Selamat datang di website saya. Musik : " + tracks[currentTrack].title;
    backgroundMusic.load();
  }

  function playMusic() {
    backgroundMusic.play();
  }

  function pauseMusic() {
    backgroundMusic.pause();
  }

  function stopMusic() {
    backgroundMusic.pause();
    backgroundMusic.currentTime = 0;
  }

  function nextTrack() {
    currentTrack = (currentTrack + 1) % tracks.length;
    loadTrack(currentTrack);
    playMusic();
  }

  function prevTrack() {
    currentTrack = (currentTrack - 1 + tracks.length) % tracks.length;
    loadTrack(currentTrack);
    playMusic();
  }

  playButton.addEventListener("click", playMusic);
  pauseButton.addEventListener("click", pauseMusic);
  stopButton.addEventListener("click", stopMusic);
  nextButton.addEventListener("click", nextTrack);
  prevButton.addEventListener("click", prevTrack);

  // Load the first track
  loadTrack(currentTrack);
});
