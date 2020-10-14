// This js file will be loaded last in the body of every page that includes footer.php

// Disable some attributes from input tags for mobile friendliness
var inputs = document.querySelectorAll('input');
inputs.forEach(input => {
    input.setAttribute('autocomplete', 'off');
    input.setAttribute('autocorrect', 'off');
    input.setAttribute('autocapitalize', 'off');
    input.setAttribute('spellcheck', false);
});
