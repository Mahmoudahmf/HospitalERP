(function() {
    let start = new Date;
    start.setHours(16, 0, 0); // 11pm

    function pad(num) {
        return ("0" + parseInt(num)).substr(-2);
    }

    function tick() {
        let now = new Date;
        if (now > start) { // too late, go to tomorrow
            start.setDate(start.getDate() + 1);
        }
        let remain = ((start - now) / 1000);
        let hh = pad((remain / 60 / 60) % 60);
        let mm = pad((remain / 60) % 60);
        let ss = pad(remain % 60);
        document.getElementById('countdown-hour').innerHTML =
            hh ;
        document.getElementById('countdown-min').innerHTML =
            ":" + mm ;
        document.getElementById('countdown-sec').innerHTML =
            ":" + ss;
        setTimeout(tick, 1000);
    }

    document.addEventListener('DOMContentLoaded', tick);
})();
