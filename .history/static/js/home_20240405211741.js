document.addEventListener("DOMContentLoaded", async (event) => {
  const slider = document.querySelector('.slider-wrapper .slider');
  const items = slider.querySelectorAll('.slide');
  const thumbs = document.querySelector('.thumbs');
  const thumb = document.querySelectorAll('.thumb');
  let clearId = null;

  let active = 0;
  const itemWidth = items[active].offsetWidth; // Sửa offsetLeft thành offsetWidth
  const itemLength = items.length; // Sửa itemLength để tính đúng độ dài của mảng

  function handleChangeImg() {


    Array.from(thumb).forEach((item, index) => {
      if (item.classList.contains('selected')) {
        item.classList.remove('selected');
        thumb[active].classList.add('selected');
      }
    })


    const translateXValue = -active * itemWidth; // Tính giá trị translateX đúng
    slider.style.transform = `translate3d(${translateXValue}px, 0, 0)`; // Sử dụng giá trị translateX tính được
  }

  Array.from(thumb).forEach((item, index) => {
    item.addEventListener('click', () => {
      active = index;
      handleChangeImg();
      clearInterval(clearId);
      starter();
    })
  })

  function starter() {
    clearId = setInterval(() => {
      if (active >= itemLength - 1) { // Sửa điều kiện kiểm tra active và itemLength
        active = 0;
      } else {
        active += 1;
      }
      handleChangeImg();
    }, 3000);
  }
  starter();
});
