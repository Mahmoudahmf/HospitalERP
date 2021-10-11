import moment from "moment";



// let date ;
// date = moment().format('dddd D ,MMMM YYYY');
//
// document.getElementById("history").innerHTML = date;



let date = new Date();
let dayInNom = date.getUTCDate()
let month =  date.getMonth().toString();
let year = date.getFullYear().toString();
let stringDay = date.getDay().toString() ;
switch(stringDay){
    case("0"):

        stringDay="Sunday";
        break;

    case("1"):

        stringDay="Monday";
        break;

    case("2"):

        stringDay="Tuseday";
        break;

    case("3"):

        stringDay="Wednesday";
        break;

    case("4"):

        stringDay="Thursday";
        break;

    case("5"):

        stringDay="Friday";
        break;

    case("6"):

        stringDay="Saterday";
        break;

    default:

        "there is no day";
}


switch(month){
    case("0"):

        month="January";
        break;

    case("1"):

        month="February";
        break;

    case("2"):

        month="March";
        break;

    case("3"):

        month="April";
        break;

    case("4"):

        month="May";
        break;

    case("5"):

        month="June";
        break;

    case("6"):

        month="July";
        break;

    case("7"):

        month="August";
        break;

    case("8"):

        month="September";
        break;

    case("9"):

        month="October";
        break;

    case("10"):

        month="November";
        break;

    case("11"):

        month="December";
        break;

    default:

        "there is no day";
}

let dayIn = `${dayInNom} ${stringDay}`
let monthYear = ` , ${month} ${year}` ;
document.querySelector("#historyDay").innerHTML = dayIn ;
document.querySelector("#historyMonYear").innerHTML= monthYear;
