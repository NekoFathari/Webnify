window.onload = function(){

function getTimeOfDay() {
    const currentHour = new Date().getHours();

    if (currentHour >= 5 && currentHour < 11) {
        return "Pagi!";
    } else if (currentHour >= 11 && currentHour < 15) {
        return "Siang!";
    } else if (currentHour >= 15 && currentHour < 18) {
        return "Sore!";
    } else {
        return "Malam!";
    }
}

const timeOfDay = getTimeOfDay();
document.getElementById('time-output').innerHTML = 'Selamat ' + timeOfDay;

}