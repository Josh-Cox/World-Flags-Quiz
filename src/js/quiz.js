
document.addEventListener("keydown", test);

    function test(keydown) {
        switch (keydown.key) {
            case "Enter":
                document.getElementById("entryButton").click();
                keydown.preventDefault();
                break;    
        }
    }


function entrySubmit() {
    let entryVal = document.getElementById("entryBox").value;
    let entry = document.getElementById("entryBox");
    
    if (1==0) {
        entry.style.color = "red";
    }
    else {
        entry.style.color = "green";
    }
    
    setTimeout(() => { entry.style.color = "white"; document.getElementById("entryBox").value = ""; }, 2000);
}

