let frt_name = document.getElementById("frt_name");
let frt_price = document.getElementById("frt_price");

let drp_pay_div = document.querySelector(".drp_pay_div");
function flipIt(){
    drp_pay_div.classList.toggle("drp_pay_div_toggle");
}

// order buttons
let order_1 = document.querySelector("#order1");
let order_2 = document.querySelector("#order2");
let order_3 = document.querySelector("#order3");
let order_4 = document.querySelector("#order4");
let order_5 = document.querySelector("#order5");
let order_6 = document.querySelector("#order6");


order_1.addEventListener("click", ()=>{
    flipIt();
    // assign details
    frt_name.textContent = "NPK";
    frt_price.textContent = 1950;
});

order_2.addEventListener("click", ()=>{
    flipIt();
    // assign details
    frt_name.textContent = "azospirillium";
    frt_price.textContent = 950;
});

order_3.addEventListener("click", ()=>{
    flipIt();
    // assign details
    frt_name.textContent = "zinc sulphate";
    frt_price.textContent = 850;
});

order_4.addEventListener("click", ()=>{
    flipIt();
    // assign details
    frt_name.textContent = "ferrous sulphate";
    frt_price.textContent = 550;
});

order_5.addEventListener("click", ()=>{
    flipIt();
    // assign details
    frt_name.textContent = "MAP (mono-ammonium phosphate)";
    frt_price.textContent = 1700;
});

order_6.addEventListener("click", ()=>{
    flipIt();
    // assign details
    frt_name.textContent = "pottasuim nitrate";
    frt_price.textContent = 1500;
});

// Back to buying
document.getElementById("flipUp").addEventListener("click", ()=>{
    flipIt();
});


