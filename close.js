const Close_btn = document.querySelector('.info_icon');
const Content = document.querySelector('.info-btn');

Close_btn.addEventListener("click", (e) => {
    Content.classList.toggle("on");
});