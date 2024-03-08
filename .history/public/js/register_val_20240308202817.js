// const form = document.querySelector("form");
// eField = form.querySelector(".email"),
//     eInput = eField.querySelector("input"),
//     pField = form.querySelector(".password"),
//     pInput = pField.querySelector("input"),
//     dField = form.querySelector(".dis-name"),
//     dInput = dField.querySelector("input"),
//     cField = form.querySelector(".country-name"),
//     cInput = cField.querySelector("input"),
//     fField = form.querySelector(".first_name"),
//     fInput = fField.querySelector("input"),
//     lField = form.querySelector(".last_name"),
//     lInput = lField.querySelector("input");

// form.onsubmit = (e) => {
//     e.preventDefault(); //preventing from form submitting
//     //if email and password is blank then add shake class in it else call specified function
//     (eInput.value == "") ? eField.classList.add("shake", "error") : checkEmail();
//     (pInput.value == "") ? pField.classList.add("shake", "error") : checkPass();
//     (dInput.value == "") ? dField.classList.add("shake", "error") : checkDis_name();
//     (cInput.value == "") ? cField.classList.add("shake", "error") : checkCname();
//     (fInput.value == "") ? fField.classList.add("shake", "error") : checkFname();
//     (lInput.value == "") ? lField.classList.add("shake", "error") : checkLname();

//     setTimeout(() => { //remove shake class after 500ms
//         eField.classList.remove("shake");
//         pField.classList.remove("shake");
//         dField.classList.remove("shake");
//         cField.classList.remove("shake");
//         fField.classList.remove("shake");
//         lField.classList.remove("shake");
//     }, 500);

//     eInput.onkeyup = () => { checkEmail(); } //calling checkEmail function on email input keyup
//     pInput.onkeyup = () => { checkPass(); } //calling checkPassword function on pass input keyup
//     dInput.onkeyup = () => { checkDis_name(); } //calling checkPassword function on display name input keyup
//     cInput.onkeyup = () => { checkCname(); } //calling checkPassword function on display name input keyup
//     fInput.onkeyup = () => { checkFname(); } //calling checkPassword function on f name input keyup
//     lInput.onkeyup = () => { checkLname(); } //calling checkPassword function on last name input keyup

//     function checkEmail() { //checkEmail function
//         let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //pattern for validate email
//         if (!eInput.value.match(pattern)) { //if pattern not matched then add error and remove valid class
//             eField.classList.add("error");
//             eField.classList.remove("valid");
//             let errorTxt = eField.querySelector(".error-txt");
//             //if email value is not empty then show please enter valid email else show Email can't be blank
//             (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address" : errorTxt.innerText = "Email can't be blank";
//         } else { //if pattern matched then remove error and add valid class
//             eField.classList.remove("error");
//             eField.classList.add("valid");
//         }
//     }

//     function checkPass() { //checkPass function
//         if (pInput.value == "") { //if pass is empty then add error and remove valid class
//             pField.classList.add("error");
//             pField.classList.remove("valid");
//         } else { //if pass is empty then remove error and add valid class
//             pField.classList.remove("error");
//             pField.classList.add("valid");
//         }
//     }

//     function checkDis_name() { //checkPass function
//         if (dInput.value == "") { //if pass is empty then add error and remove valid class
//             dField.classList.add("error");
//             dField.classList.remove("valid");
//         } else { //if pass is empty then remove error and add valid class
//             dField.classList.remove("error");
//             dField.classList.add("valid");
//         }
//     }

//     function checkCname() { //checkPass function
//         if (cInput.value == "") { //if pass is empty then add error and remove valid class
//             cField.classList.add("error");
//             cField.classList.remove("valid");
//         } else { //if pass is empty then remove error and add valid class
//             cField.classList.remove("error");
//             cField.classList.add("valid");
//         }
//     }

//     function checkFname() { //checkPass function
//         if (fInput.value == "") { //if pass is empty then add error and remove valid class
//             fField.classList.add("error");
//             fField.classList.remove("valid");
//         } else { //if pass is empty then remove error and add valid class
//             fField.classList.remove("error");
//             fField.classList.add("valid");
//         }
//     }

//     function checkLname() { //checkPass function
//         if (lInput.value == "") { //if pass is empty then add error and remove valid class
//             lField.classList.add("error");
//             lField.classList.remove("valid");
//         } else { //if pass is empty then remove error and add valid class
//             lField.classList.remove("error");
//             lField.classList.add("valid");
//         }
//     }

//     //if eField and pField doesn't contains error class that mean user filled details properly
//     if (!eField.classList.contains("error") && !pField.classList.contains("error") && !dField.classList.contains("error") && !fField.classList.contains("error") && !lField.classList.contains("error")) {
//         // window.location.href = form.getAttribute("action"); //redirecting user to the specified url which is inside action attribute of form tag
//         let form = document.getElementById("form");
//         form.submit();
//     }
// }

// Định nghĩa các rules
// Định nghĩa các nguyên tắc các rules

// 1.  Nếu có lỗi => đưa ra message lỗi
// 2. Nếu hơp lệ thì => Không trả ra cái gì cả (undefined)
function Validator(options) {

    let selectorRules = {};
    const formElement = document.querySelector(options.form);
    // Đưa errorMessage ra ngoài 
    var errorMessage;
    function validate(inputField, rule) {
        console.log(inputField, 'CheckInputfieldssss');
        let parentInput = inputField.closest('.field');
        var notificationError = parentInput.querySelector(options.errorSelector);
        console.log(notificationError, 'CheckError');
        // Đưa errorMessage ra ngoài
        let rules = selectorRules[rule.selector]
        for (let i = 0; i < rules.length; i++) {
            errorMessage = rules[i](inputField.value)
            if (errorMessage) break;
        }
        if (errorMessage) {
            notificationError.innerText = errorMessage;
            notificationError.style.display = 'block';
        } else {
            notificationError.innerText = "";
        }
    }

    if (formElement) {
        var indexCheck = 0;
        formElement.onsubmit = function (e) {
            e.preventDefault();
            let isFormValid = true;
            options.rules.forEach((rule) => {
                let inputField = formElement.querySelector(rule.selector);
                let isValid = validate(inputField, rule)
                if (isValid != true) {
                    isFormValid = false;
                }
            })
            if (isFormValid) {
                if (typeof options.onSubmit === 'function') {
                    //     let enableInput = formElement.querySelectorAll();
                    //    let formValues = Array.from(enableInput).reduce((values, input) => {
                    //     console.log(input.name, "checkInput");
                    //         return values[input.name] = input.value && values
                    //     }, {})
                    //     console.log('====================================');
                    //     console.log(formValues);
                    //     console.log('====================================');
                    //   }
                    let getValueUser = formElement.querySelector(options.rules.selector);
                    console.log('====================================');
                    console.log(get);
                    console.log('====================================');
                }
            };
            // Lặp qua mỗi rules và xử lý (lắng nghe blur, input);
        }
        // Lặp qua mỗi rules và xử lý (lắng nghe blur, input);
        options.rules.forEach((rule, index) => {
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            let inputField = formElement.querySelector(rule.selector);

            console.log(inputField, 'Check');
            // Lấy trường cha từ thẻ input
            // Query vào phần tử con để đưa thông báo lỗi error vào

            inputField.onblur = function () {
                validate(inputField, rule)
            }

            inputField.oninput = function () {
                let parentInput = inputField.closest('.field');
                let notificationError = parentInput.querySelector(options.errorSelector);
                notificationError.style.display = 'none';
                notificationError.innerText = "";
            }
            // let btnSubmit = formElement.querySelector('button[type="submit"]');
            // console.log(btnSubmit, 'ButtonSubmit');

            console.log(selectorRules, 'SLT Rsssssles');
        })
    }
}

// Định nghĩa Phương Thức isRequired của hàm Validator
Validator.isRequired = function (selector, message) {
    console.warn(message, "Check")
    return {
        selector: selector,
        test: function (value) {
            return value ? undefined : message || "Vui lòng nhập trường này";
        }
    }
}

// Định nghĩa Phương Thức isEmail của hàm Validator
Validator.isEmail = function (selector) {
    return {
        selector: selector,
        test: function (value) {
            let regex = /^[\w\.-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,}$/;
            return regex.test(value) ? undefined : "Trường này phải là Email";
        }
    }
}
// Định nghĩa Phương Thức isConfirmed của hàm Validator
Validator.isConfirmed = function (selector, minlength) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= minlength ? undefined : `Mật khẩu tối thiểu ${minlength} ký tự`;
        }
    }
}