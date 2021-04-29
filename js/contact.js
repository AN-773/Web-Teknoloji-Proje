// Gonder
function validateForm() {
    if (isEmptyOrSpaces(document.forms['form']['name'].value)) {
        alert("Lütfen Adı alanı duldurun");
        return false;
    }

    if (isEmptyOrSpaces(document.forms['form']['reason'].value)) {
        alert("Lütfen iletişim nedeni alanı duldurun");
        return false;
    }

    if (isEmptyOrSpaces(document.forms['form']['details'].value)) {
        alert("Lütfen Detaylay alanı duldurun");
        return false;
    }

    if (isEmptyOrSpaces(document.forms['form']['email'].value)) {
        alert("Lütfen E-posta alanı duldurun");
        return false;
    }

    if (!isEmail(document.forms['form']['email'].value)) {
        alert("Lütfen geçerli bir E-posta girin");
        return false;
    }
    return true;
}

function isEmptyOrSpaces(str) {
    //https://stackoverflow.com/a/10232792
    return str === null || str.match(/^ *$/) !== null;
}

function isEmail(s) {
    var str = String(s);
    var strArr = str.split("@");
    if (strArr.length != 2 || strArr[0].length < 1 || strArr[1] < 1)
        return false;
    var dotArr = strArr[1].split(".");
    for (var i = 0; i < dotArr.length; i++ ) {
        var element = dotArr[i];
        if (element.length < 1) {
            return false;
        }
    }
    return true;
}


// Sil
function eraseForm() {
    document.forms['form']['name'].value = "";
    document.forms['form']['email'].value = "";
    document.forms['form']['reason'].value = "";
    document.forms['form']['details'].value = "";
    document.forms['form']['gender'].selectedIndex = 2;
}