function validateLetters(input) {
    var regex = /^[A-Za-z\s]*$/;
    if (!regex.test(input.value)) {
        input.setCustomValidity("Solo se permiten letras y espacios.");
    } else {
        input.setCustomValidity("");
    }
}
