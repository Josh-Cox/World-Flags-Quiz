
document.addEventListener("keydown", test);

let currentFlags = shuffle([
    "albania",
    "andorra",
    "armenia",
    "austria",
    "azerbaijan",
    "belarus",
    "belgium",
    "bosnia and herzegovina",
    "bulgaria",
    "croatia",
    "cyprus",
    "czech republic",
    "denmark",
    "estonia",
    "finland",
    "france",
    "georgia",
    "germany",
    "greece",
    "hungary",
    "iceland",
    "ireland",
    "italy",
    "kosovo",
    "latvia",
    "liechtenstein",
    "lithuania",
    "luxembourg",
    "macedonia",
    "malta",
    "moldova",
    "monaco",
    "montenegro",
    "the netherlands",
    "norway",
    "poland",
    "portugal",
    "romania",
    "russia",
    "san marino",
    "serbia",
    "slovakia",
    "slovenia",
    "spain",
    "sweden",
    "switzerland",
    "turkey",
    "ukraine",
    "uk",
    "vatican city"]);

let score = 0;

function gameStart() {
    displayFlag();
}

function test(keydown) {
    switch (keydown.key) {
        case "Enter":
            document.getElementById("entryButton").click();
            keydown.preventDefault();
            break;    
    }
}

function skipFlag() {
    let temp = currentFlags[0];
    currentFlags.shift();
    currentFlags.push(temp);
    displayFlag();
}

function entrySubmit() {
    let entryVal = (document.getElementById("entryBox").value).toLowerCase();
    document.getElementById("entryButton").disabled = true;

    switch(currentFlags[0]) {

        case "bosnia and herzegovina":
            if ((entryVal == currentFlags[0]) || (entryVal == "bosnia")) {
                correctAnswer();
            }
            else {
                incorrectAnswer();
            }
            break;

        case "czech republic":
            if ((entryVal == currentFlags[0]) || (entryVal == "czechia")) {
                correctAnswer();
            }
            else {
                incorrectAnswer();
            }
            break;

        case "macedonia":
            if ((entryVal == currentFlags[0]) || (entryVal == "north macedonia")) {
                correctAnswer();
            }
            else {
                incorrectAnswer();
            }
            break;
        
        case "the netherlands":
            if ((entryVal == currentFlags[0]) || (entryVal == "holland") || (entryVal == "netherlands")) {
                correctAnswer();
            }
            else {
                incorrectAnswer();
            }
            break;

        case "uk":
            if ((entryVal == currentFlags[0]) || (entryVal == "united kingdom") || (entryVal == "the united kingdom") || (entryVal == "the uk")) {
                correctAnswer();
            }
            else {
                incorrectAnswer();
            }
            break;

        default:
            if (entryVal == currentFlags[0]) {
                correctAnswer();
            }
            else {
                incorrectAnswer();
            }
    }
}

function correctAnswer() {
    score += 1;
    let entry = document.getElementById("entryBox");
    entry.style.color = "#27AE60";
    setTimeout(() => { entry.style.color = "white"; document.getElementById("entryBox").value = ""; currentFlags.shift();
    document.getElementById("entryButton").disabled = false; displayFlag(); }, 1000);
}

function incorrectAnswer() {
    let entry = document.getElementById("entryBox");
    entry.style.color = "red";
    setTimeout(() => { entry.style.color = "white"; document.getElementById("entryBox").value = ""; document.getElementById("entryButton").disabled = false; }, 1000);
}

function shuffle(array) {

    let currentIndex = array.length, randomIndex;

    // While there remain elements to shuffle.
    while (currentIndex != 0) {

        // Pick a remaining element.
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;

        // And swap it with the current element.
        [array[currentIndex], array[randomIndex]] = [
        array[randomIndex], array[currentIndex]];
    }

  return array;
}

function displayFlag() {
    if (currentFlags.length > 0) {
        document.getElementById("flag").src = "../../img/" + (currentFlags[0] + ".png");
    }

    else {
        gameOver();
    }
}

function gameOver() {
    console.log("POST");

    $.ajax({

        type: "POST",
        url: "../php/leaderboard.php",
        dataType: "json",
        data: {Score: score},
        success : function(data){
            if (data.code == "200"){
                alert("Success: " +data.msg);
            } else {
                $(".display-error").html("<ul>"+data.msg+"</ul>");
                $(".display-error").css("display","block");
            }
        },
        async: true,
    });

    setTimeout(() => { location.href = "../php/leaderboard.php"; }, 10);
}