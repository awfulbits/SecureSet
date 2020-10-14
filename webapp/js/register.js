validatePass();
function validatePass(passInput) {
    var passInput = document.getElementById("defaultRegisterFormPassword");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    document.getElementById("register-submit").disabled = true;

    // When the user clicks on the password field, show the message box
    passInput.onfocus = function() {
        bofum(!isValid(passInput));
    }

    // When the user clicks outside of the password field, hide the defaultRegisterFormPasswordHelpBlock box
    passInput.onblur = function() {
        showMessage(false);
    }

    // When the user starts to type something inside the password field
    passInput.onkeyup = function() {
        bofum(!isValid(passInput));
    }

    function isValid(passInput) {
        var lowerCaseLetters = /[a-z]/g;
        var upperCaseLetters = /[A-Z]/g;
        var numbers = /[0-9]/g;

        return passInput.value.match(lowerCaseLetters) &&
        passInput.value.match(upperCaseLetters) &&
        passInput.value.match(numbers) &&
        passInput.value.length >= 16
    }

    function disableSubmit(b) {
        document.getElementById("register-submit").disabled = b;
    }

    function showMessage(b) {
        if(!b) {
            document.getElementById("defaultRegisterFormPasswordHelpBlock").style.display = "none";
        } else {
            document.getElementById("defaultRegisterFormPasswordHelpBlock").style.display = "block";
        }
    }

    function bofum(b) {
        disableSubmit(b);
        showMessage(b);
    }
}
