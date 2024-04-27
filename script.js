const dateNormal = localStorage.getItem('dateNormal');
const sum_price = localStorage.getItem('sum_price');
const race = localStorage.getItem('race');
const thead2 = localStorage.getItem('thead2');
const cars2 = localStorage.getItem('cars2');
const thead3 = localStorage.getItem('thead3');
const cars3 = localStorage.getItem('cars3');

if (dateNormal && sum_price) {
    document.getElementById("prevDate").innerText = "Попередня обрана дата: " + dateNormal;
    document.getElementById("prevResText1").innerText = "Попередній результат запиту:";
    document.getElementById("thead1").innerText = "Дохід";
    document.getElementById("tbody1").innerHTML = sum_price;
}
else {
    document.getElementById("table1").style.opacity = "0";
}

if (race && cars2) {
    document.getElementById("prevParam").innerText = "Попереднє обране значення пробігу: " + race;
    document.getElementById("prevResText2").innerText = "Попередній результат запиту:";
    document.getElementById("thead2").innerHTML = thead2;
    document.getElementById("tbody2").innerHTML = cars2;
}
else {
    document.getElementById("table2").style.opacity = "0";
}

if (cars3) {
    document.getElementById("prevResText3").innerText = "Попередній результат запиту:";
    document.getElementById("thead3").innerHTML = thead3;
    document.getElementById("tbody3").innerHTML = cars3;
}
else {
    document.getElementById("table3").style.opacity = "0";
}