function Themen_01(select) {
    const option = select.value;
    if (option !== "1") {
        Glaube_loadContent_Themen_01(option);
    }
}

function Glaube_loadContent_Themen_01(option) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'themen/cat1/' + option, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('spalte2').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function Themen_02(select) {
    const option = select.value;
    if (option !== "1") {
        Glaube_loadContent_Themen_02(option);
    }
}

function Glaube_loadContent_Themen_02(option) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'themen/cat2/' + option, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('ausgabe').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}