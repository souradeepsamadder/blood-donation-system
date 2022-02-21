function check_phone_number() {
    let phno = document.getElementById("phno").value;
    if (phno.length != 10) {

        if (phno >= 1 || isNaN(phno) == true) {
            document.getElementById("phno").style.borderColor = "red";
            // document.getElementById("lebel_ph").style.color = "red";

        }
        else {
            document.getElementById("phno").style.borderColor = "gray";
            // document.getElementById("lebel_ph").style.color = "white";

        }
    }
    else {
        if (phno > 9) {
            document.getElementById("phno").style.borderColor = "green";
            // document.getElementById("lebel_ph").style.color = "green";


        }
        else {
            let count = 0;
            // let email = document.getElementById("name ").value;
            for (let i = 0; i < phno.length; i++) {
                let ch = phno.charAt(i)
                if (ch.match(/[a-zA-Z,!,@,#,$,%,^,&,*,(,),_,-,+,=,{,},/,.,>,<,:,;,",',[,|,?]/i)) {
                    count++;
                }
            }
            if (count == 0) {
                document.getElementById("phno").style.borderColor = "green";
                document.getElementById("lebel_ph").style.color = "green";

            }
            else {
                document.getElementById("phno").style.borderColor = "red";
                document.getElementById("lebel_ph").style.color = "red";
            }
        }
    }
}

function check_name() {
    let name = document.getElementById("name").value;
    if (isNaN(name) == false) {
        if (name.length >= 1) {
            document.getElementById("name").style.borderColor = "red";
            document.getElementById("lebel").style.color = "red";
        }
        else {
            document.getElementById("name").style.borderColor = "gray";

        }
    }
    else {
        let count = 0;
        for (let i = 0; i < name.length; i++) {
            let ch = name.charAt(i)
            if (ch.match(/[0-9,!,@,#,$,%,^,&,*,(,),_,-,+,=,{,},/,.,>,<,:,;,",',[,|,?]/i)) {
                count++;
            }
        }
        if (count == 0) {
            document.getElementById("name").style.borderColor = "green";
            document.getElementById("lebel").style.color = "green";

        }
        else {
            document.getElementById("name").style.borderColor = "red";

        }
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
        }
        else {
            document.getElementById("email").style.borderColor = "green";
        }
    }
    else {
        document.getElementById("email").style.borderColor = "gray";
    }
}