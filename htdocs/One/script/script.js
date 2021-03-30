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

    // var name = document.getElementById("v1").value
    // var id = document.getElementById("v2").value
    // var password = document.getElementById("v3").value
    // var email = document.getElementById("v4").value
    // var age = document.getElementById("v5").value
    // var branch = document.getElementById("branch").value
    // var address = document.getElementById("v6").value
    // var resumepath = document.getElementById("v7").value
}