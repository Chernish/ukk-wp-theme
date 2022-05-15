import Inputmask from "inputmask";

let phone = document.querySelectorAll(".form-phone");
let im = new Inputmask("+7 (999)-999-99-99");
im.mask(phone);
