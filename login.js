
function clickEvent(first, last) {
    if (first.value.length) {
        document.getElementById(last).focus();
    }
    let fst = document.getElementById("fist").value;
    let sec = document.getElementById("sec").value;
    let third = document.getElementById("third").value;
    let fo = document.getElementById("fourth").value;
    if (fst) {

        if (isNaN(fst)) {
            document.getElementById("fist").style.borderColor = "red";
            document.getElementById("corner").innerHTML = "please enter the correct otp";

        }

        else {
            document.getElementById("fist").style.borderColor = "green";

        }
    }
    else {
        document.getElementById("fist").style.borderColor = "black";

    }
    if (sec) {
        if (isNaN(sec)) {
            document.getElementById("sec").style.borderColor = "red";
            document.getElementById("corner").innerHTML = "please enter the correct otp";

        }
        else {
            document.getElementById("sec").style.borderColor = "green";

        }
    } else {
        document.getElementById("sec").style.borderColor = "black";

    }
    if (third) {
        if (isNaN(third)) {
            document.getElementById("third").style.borderColor = "red";
            document.getElementById("corner").innerHTML = "please enter the correct otp";

        }
        else {
            document.getElementById("third").style.borderColor = "green";

        }
    } else {
        document.getElementById("third").style.borderColor = "black";

    }
    if (fo) {
        if (isNaN(fo)) {
            document.getElementById("fourth").style.borderColor = "red";
            document.getElementById("corner").innerHTML = "please enter the correct otp";

        }
        else {
            document.getElementById("fourth").style.borderColor = "green";
        }
    } else {
        document.getElementById("fourth").style.borderColor = "black";

    }

}
function countdown() {
    let sMin = 1;
    let time = sMin * 60;
    // console.log("Resend otp after: ")
    // document.getElementById("count").innerHTML="you can resend otp after:-";
    let coun = setInterval(update, 1000)
    
    function update() {
        let min = Math.floor(time / 60);
        let sec = time % 60;
        sec = sec < 10 ? '0' + sec : sec;
        console.log(`${min}:${sec}`);
        document.getElementById("count").innerHTML=`you can resend otp after:-${min}:${sec}`;


        time--;
        min == 0 && sec == 0 ? clearInterval(coun) : coun;
    }
}

function check_email() {
    let count = 0;
    let email = document.getElementById("email").value;
    if (email) {
        for (let i = 0; i < email.length; i++) {
            let ch = email.charAt(i)
            if (ch.match(/[!,#,$,%,^,&,*,(,),_,-,+,=,{,},/,>,<,:,;,",',[,|,?]/i)) {

                count++;
                break;
            }
        }
        if (count) {

            document.getElementById("email").style.borderColor = "red";
            // document.getElementById("lebel_email").style.color = "red";
        }
        else {
            document.getElementById("email").style.borderColor = "green";
            // document.getElementById("lebel_email").style.color = "green";
        }
    }
    else {
        document.getElementById("email").style.borderColor = "black";
        // document.getElementById("lebel_email").style.color = "white";
    }
}
