    window.onload = function () {
        (function () {
            var date = new Date();
            //paneme aja õigel kujul kokku
            var time = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds() + ':' + date.getMilliseconds();
            // otsime lehelt esimese div tag'i
            document.getElementsByTagName('div')[0].innerHTML = "Aeg JS'is: " + time; //null loeb kõik elemendid kokku, inner html loeb sisetagidest
            window.setTimeout(arguments.callee, 1000); //1000 on 1 sekund, kui seknudid ja 1, kui m/sek
    })();
};