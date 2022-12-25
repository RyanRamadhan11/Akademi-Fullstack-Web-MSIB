$(document).ready(function () {
  //hewan unggas
  $("#penguin").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/penguin.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });

  $("#angsa").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/angsa.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });

  $("#ayam").click(function () {
    $("#burung-body").slideToggle("fast");
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/ayam.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });

  $("#burung").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/burung.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });

  //hewan ternak
  $("#kelinci").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/kelinci.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });

  $("#sapi").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/sapi.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });

  $("#kambing").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/kambing.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });

  $("#bebek").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/bebek.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });
  // hewan buas
  $("#beruang").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/beruang.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });

  $("#serigala").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/serigala.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });

  $("#harimau").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/harimau.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });

  $("#singa").click(function () {
    $(this).find("img").removeClass("d-none");
    $("<audio></audio>")
      .attr({
        src: "assets/audio/singa.mp3",
        volume: 1,
        autoplay: "autoplay",
      })
      .appendTo("body");
  });
});
