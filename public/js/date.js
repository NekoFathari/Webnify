window.onload = function() {
    function getday() {
        const currentDate = new Date().getDate();
        return currentDate;
    }

    function getmonth() {
        const currentday = new Date().getMonth();
        const currentyear = new Date().getFullYear();
        const month = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        return month[currentday] + ' ' + currentyear;
    }

const tanggal = getday();
document.getElementById('tanggal').innerHTML = tanggal;
document.getElementById('hari').innerHTML = getmonth();
}