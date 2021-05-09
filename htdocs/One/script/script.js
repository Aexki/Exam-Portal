var searchBox = document.querySelectorAll('.search-box input[type="text"] + span');

searchBox.forEach((elm) => {
    elm.addEventListener('click', () => {
        elm.previousElementSibling.value = '';
    });
});

function check() {

    var ele = document.getElementsByName('gender');

    for (i = 0; i < ele.length; i++) {
        if (ele[i].checked)
            gender = ele[i].value
    }
}

function logout() {
    $.ajax({
        url: "logout.php",
        method: "POST",
        data: {},
        cache: false,
        success: function (response) {
            if (response == '') { }
            else {
            }
            window.open('login.php', '_self')
        }
    });
}