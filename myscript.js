function toggleMute() {
    var video = document.getElementById("myVideo");
    if (video.muted) {
        video.muted = false;
    } else {
        video.muted = true;
    }
    var muteIcon = document.getElementsByClassName("mute-icon")[0];
    var unmuteIcon = document.getElementsByClassName("unmute-icon")[0];
    if (video.muted) {
        muteIcon.classList.add("hidden");
        unmuteIcon.classList.remove("hidden");
    } else {
        muteIcon.classList.remove("hidden");
        unmuteIcon.classList.add("hidden");
    }
}
