document.addEventListener("DOMContentLoaded", async (event) => {
  const slider = document.querySelector('.slider-wrapper .slider');
  const items = slider.querySelectorAll('.slide');
  const thumbs = document.querySelector('.thumbs');
  const thumb = document.querySelectorAll('.thumb');

  let active = 0;
  const itemWidth = items[active].offsetWidth; // Sửa offsetLeft thành offsetWidth
  const itemLength = items.length; // Sửa itemLength để tính đúng độ dài của mảng
  setInterval(() => {
    han
  }, 3000);
});
