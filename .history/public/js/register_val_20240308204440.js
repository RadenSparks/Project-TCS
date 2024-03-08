
function Validator(options) {

    let selectorRules = {};
    const formElement = document.querySelector(options.form);
    // Đưa errorMessage ra ngoài 
    var errorMessage;
    function validate(inputField, rule) {
        // console.log(inputField, 'CheckInputfieldssss');
        let parentInput = inputField.closest('.field');
        var notificationError = parentInput.querySelector(options.errorSelector);
        // console.log(notificationError, 'CheckError');
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
        formElement.onsubmit = function (e) {
            e.preventDefault();
            var isFormValid = true; // Đặt giá trị mặc định là true
            options.rules.forEach((rule) => {
                let inputField = formElement.querySelector(rule.selector);
                let isValid = validate(inputField, rule);
                if (isValid !== true) {
                    isFormValid = false; // Đặt thành false nếu có lỗi
                }
            });
            if (isFormValid) {
                console.log('Form is valid'); // Nếu form hợp lệ
            } else {
                console.log('Form is invalid'); // Nếu form không hợp lệ
            }
        };
    }
    
}

// Định nghĩa Phương Thức isRequired của hàm Validator
Validator.isRequired = function (selector, message) {
    // console.warn(message, "Check")
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