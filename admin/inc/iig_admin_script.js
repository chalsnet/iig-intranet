const currentURL = window.location.origin + window.location.pathname + "?page=iig-intranet";
const headerMenuBtns = document.querySelectorAll(".iig_intranet_wrap .header .row button");
const headerMenuLinks = [
    currentURL,
    currentURL + "&sub=sales_report",
    currentURL + "&sub=store_troubleshoot",
    currentURL + "&sub=supplies_request",
    currentURL + "&sub=emp_training",
];

headerMenuBtns.forEach(function(btns, index) {
    btns.addEventListener("click", function(e) {
        console.log(headerMenuLinks[index]);
        window.location = headerMenuLinks[index];
    });     
});

const href = window.location.href;
const url = new URL(href);
const getSub = url.searchParams.get("sub");

if (getSub != null) {
    console.log(getSub);
    
}

