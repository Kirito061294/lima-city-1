function Home_01(select) {
    const option = select.value;
    if (option !== "1") {
        unterhaltung_loadContent_Home_01(option);
    }
}

function unterhaltung_loadContent_Home_01(option) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'Technik/Home/' + option, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('spalte2').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function Home_02(select) {
    const option = select.value;
    if (option !== "1") {
        unterhaltung_loadContent_Home_02(option);
    }
}

function unterhaltung_loadContent_Home_02(option) {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'Technik/Home/' + option, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('ausgabe').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

//############################
