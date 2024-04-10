let loading = document.querySelector(".preload")
let content = document.getElementById("main")

window.addEventListener('load', function() {
    setTimeout(function() {
        loading.style.display = "none";
        content.style.display = "block";
    }, 1)
})