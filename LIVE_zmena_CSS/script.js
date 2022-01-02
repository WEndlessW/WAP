window.onload = function one() {
    var count = 1;
    var v = document.getElementById("btn")

    v.onclick = function() {
        count++
        if (count == 1) {
            var link = document.getElementById("pagestyle");


            link.setAttribute('href', "style.scss");

            return false;

        } else if (count == 2) {
            var link = document.getElementById("pagestyle");


            link.setAttribute('href', "style2.scss");

            return false;

        } else if (count == 3) {
            var link = document.getElementById("pagestyle");


            link.setAttribute('href', "style3.scss");

            return false;

        } else if (count == 4) {
            var link = document.getElementById("pagestyle");


            link.setAttribute('href', "style4.scss");

            count = count - 4;

            return false;
        }

    }
}