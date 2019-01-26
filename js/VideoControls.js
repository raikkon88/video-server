function changeVolume(id){
  console.log(id);
  var video = document.getElementById(id);
  var value = document.getElementById("volumeControl").value / 100;
  console.log(value);
  video.volume = value;
}
