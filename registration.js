
function check_name() {
    let name = document.getElementById("name").value;
    if (isNaN(name) == false) {
        if (name.length >= 1) {
            document.getElementById("name").style.borderColor = "red";
            document.getElementById("lebel").style.color = "red";
            // document.getElementById("btn").disabled = true;
        }
        else {
            document.getElementById("name").style.borderColor = "white";
            document.getElementById("lebel").style.color = "#3dcfd3";
            // document.getElementById("btn").disabled = false;

        }
    }
    else {
        let count = 0;
        // let email = document.getElementById("name ").value;
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
            document.getElementById("lebel").style.color = "red";
        }
    }

}

function check_phone_number() {
    let phno = document.getElementById("phno").value;
    if (phno.length != 10) {

        if (phno >= 1 || isNaN(phno) == true) {
            document.getElementById("phno").style.borderColor = "red";
            document.getElementById("lebel_ph").style.color = "red";

        }
        else {
            document.getElementById("phno").style.borderColor = "white";
            document.getElementById("lebel_ph").style.color = "white";

        }
    }
    else {
        if (phno > 9) {
            document.getElementById("phno").style.borderColor = "green";
            document.getElementById("lebel_ph").style.color = "green";


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
            document.getElementById("lebel_email").style.color = "red";
        }
        else {
            document.getElementById("email").style.borderColor = "green";
            document.getElementById("lebel_email").style.color = "green";
        }
    }
    else {
        document.getElementById("email").style.borderColor = "white";
        document.getElementById("lebel_email").style.color = "white";
    }
}
function check_age() {
    let age = document.getElementById("age").value;
    if (age) {
        if (age != 2) {
            if (age >= 18 && age <= 55) {
                document.getElementById("lebel_age").style.color = "green";
                document.getElementById("age").style.borderColor = "green";

                // console.log("sou");

            }
            else {
                document.getElementById("lebel_age").style.color = "red";
                document.getElementById("age").style.borderColor = "red";
                // document.getElementById("lebel_age").innerHTML="your age is not under 18 to 55";


            }

        }
    }
    else {
        document.getElementById("lebel_age").style.color = "white";
        document.getElementById("age").style.borderColor = "white";
    }

}
function check_gender() {
    let gender = document.getElementById("gender").value;
    console.log(gender);
    if (gender == "Select Gender") {
        document.getElementById("gender").style.borderColor = "red";
    }
    else {
        document.getElementById("gender").style.borderColor = "green";
    }
}
function check_blood_group() {
    let blood = document.getElementById("blood").value;
    // console.log(gender);
    if (blood === "Select blood group") {
        document.getElementById("blood").style.borderColor = "red";
    }
    else {
        document.getElementById("blood").style.borderColor = "green";
    }
}



function name_check() {
    // console.log("sou");
    let name = document.getElementById("name2").value;
    if (isNaN(name) == false) {
        if (name.length >= 1) {
            document.getElementById("name2").style.borderColor = "red";
            document.getElementById("lebel2").style.color = "red";
            // document.getElementById("btn").disabled = true;
        }
        else {
            document.getElementById("name2").style.borderColor = "white";
            document.getElementById("lebel2").style.color = "#3dcfd3";
            // document.getElementById("btn").disabled = false;

        }
    }
    else {
        let count = 0;
        // let email = document.getElementById("name ").value;
        for (let i = 0; i < name.length; i++) {
            let ch = name.charAt(i)
            if (ch.match(/[0-9,!,@,#,$,%,^,&,*,(,),_,-,+,=,{,},/,.,>,<,:,;,",',[,|,?]/i)) {
                count++;
            }
        }
        if (count == 0) {
            document.getElementById("name2").style.borderColor = "green";
            document.getElementById("lebel2").style.color = "green";

        }
        else {
            document.getElementById("name2").style.borderColor = "red";
            document.getElementById("lebel2").style.color = "red";
        }
    }

}
function phone_number_check() {
    let phno = document.getElementById("phno2").value;
    if (phno.length != 10) {

        if (phno >= 1 || isNaN(phno) == true) {
            document.getElementById("phno2").style.borderColor = "red";
            document.getElementById("lebel_phno2").style.color = "red";

        }
        else {
            document.getElementById("phno2").style.borderColor = "white";
            document.getElementById("lebel_phno2").style.color = "white";

        }
    }
    else {
        if (phno > 9) {
            document.getElementById("phno2").style.borderColor = "green";
            document.getElementById("lebel_phno2").style.color = "green";


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
                document.getElementById("phno2").style.borderColor = "green";
                document.getElementById("lebel_phno2").style.color = "green";

            }
            else {
                document.getElementById("phno2").style.borderColor = "red";
                document.getElementById("lebel_phno2").style.color = "red";
            }
        }
    }
}
function email_check() {
    let count = 0;
    let email = document.getElementById("email2").value;
    if (email) {
        for (let i = 0; i < email.length; i++) {
            let ch = email.charAt(i)
            if (ch.match(/[!,#,$,%,^,&,*,(,),_,-,+,=,{,},/,>,<,:,;,",',[,|,?]/i)) {

                count++;
                break;
            }
        }
        if (count) {

            document.getElementById("email2").style.borderColor = "red";
            document.getElementById("lebel_email2").style.color = "red";
        }
        else {
            document.getElementById("email2").style.borderColor = "green";
            document.getElementById("lebel_email2").style.color = "green";
        }
    }
    else {
        document.getElementById("email2").style.borderColor = "white";
        document.getElementById("lebel_email2").style.color = "white";
    }
}
function check_addr() {
    let addr = document.getElementById("add").value.length;
    if (addr) {
        // console.log("sou");
        document.getElementById("add").style.borderColor = "green";
        document.getElementById("lebel_add2").style.color = "green";
    }
    else {
        document.getElementById("add").style.borderColor = "white";
        document.getElementById("lebel_add2").style.color = "white";

    }

}
function hospital() {
    let value = document.querySelector('#for_hospital:checked')!==null;
    // console.log(value);
    if (value==true) {
        document.getElementById("lebel_add2").innerHTML = "Vanu of the hospital";
    }
    else{
        document.getElementById("lebel_add2").innerHTML = "Vanu of the vanu";
    }
}