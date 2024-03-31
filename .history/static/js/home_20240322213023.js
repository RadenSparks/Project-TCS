const carosel = document.getElementById('carousel-content');
const dots = carosel.querySelectorAll('.dots .dot');
console.log(dots);
// console.log(dots.length);
// const btnNext = carosel.querySelector('.next');
// const btnPrev = carosel.querySelector(".prev");
let imgChange = carosel.querySelector('.carousel-item img');
// console.log(imgChange, 'sss');
let index = 0;
let clearId = null;
const handleSlider = () => {
  let dotItem = dots[index];
  console.log(dotItem)
//   Array.from(dots).forEach((dot, index) => {
//     if(dot.classList.contains("active")) {
//       dot.classList.remove("active");
//     }
//   })
//   dotItem.classList.add("active")
//   let image = dotItem.querySelector('img').src;
//   imgChange.setAttribute("src", image);
  
}

const handleClick = (obj) => {
  console.log(obj.type);
  switch (obj.type) {
    case "increase":
      console.log('Check12');
      if (index >= dots.length - 1) {
        index = 0;
      } else {
        index = index + 1;
      }
      break;
    case "decrease":
      if (index <= 0) {
        index = dots.length - 1;
      } else {
        index = index - 1;
      }
      break;
  }
  // clearInterval(clearId);
  // console.log("Check ID Clear SetInterval " + clearId);
  handleSlider();
}


// btnNext.onclick = function () { handleClick({ type: "increase" }) }
// btnPrev.onclick = function () { handleClick({ type: "decrease" }) }


// clearId = setInterval(() => {
//   handleClick({ type: "increase" });
// }, 2000);


// console.log("Check 1");
// Lặp qua và lắng nghe sự kiện onClick sau đó gán lại index của từng phần tử cho biến index ở phạm vi Global
const loopDots = () => {
  dots.forEach((dot, indexStart) => {
    dot.addEventListener('click', () => {
      index = indexStart
      handleSlider()
    })
  })
}
// Khởi tạo và chạy hàm starter đầu tiên
function starter() {
  handleSlider()
  loopDots()
}
starter()