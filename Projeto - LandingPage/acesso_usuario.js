function toggleVideo(videoId) {
  const videoElement = document.getElementById(videoId);
  if (videoElement.style.display === "flex") {
    videoElement.style.display = "none";
  } else {
    videoElement.style.display = "flex";
  }
}
