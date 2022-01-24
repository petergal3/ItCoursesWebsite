function shake() {
    const button = document.querySelector('.btn')
    const form = document.querySelector('.form')

    button.addEventListener('click', function () {
        form.classList.add('form--no')
    });
}

function singup_done() {
    alert("Köszönjük a jelentkezésedet!");
}

function test(params) {
    setInterval(function () {
        var textBox = $.trim($('input[type=text]').val())
        if (textBox == "") {
            $("#error").show('slow');
        }
    }, 1000);
}
