const phone = document.querySelector('input[name="phone"]');
const submit = document.querySelector('input[type="submit"]');

const allowed_symbols = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "Backspace", "F5", "Tab", "Enter"];
const banned_symbols = /[#*^<>/_()?-]| |%|/g;

phone.addEventListener('keydown', (e) => {
    if (allowed_symbols.indexOf(e.key) == -1) {
        e.preventDefault();
    } else {
        if (phone.value.length == 0 && e.key != "Tab") {
            phone.value += "+";
        }
    }
});

phone.addEventListener('input', () => {
    if (phone.value[0] != "+" && phone.value.length != 0) {
        phone.value = "+" + phone.value;
    }

    phone.value = phone.value.replace(banned_symbols, '');

    if (phone.value.length >= 12) {
        submit.removeAttribute("disabled");
        submit.setAttribute("id", "available");
    } else {
        submit.setAttribute("disabled", "true");
        submit.removeAttribute("id");
    }
});

