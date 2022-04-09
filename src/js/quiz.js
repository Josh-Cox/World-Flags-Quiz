
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


function entrySubmit() {
    let entryVal = document.getElementById("entryBox").value;
    let entry = document.getElementById("entryBox");

    if (entryVal == currentFlags[0]) {
        score += 1;
        entry.style.color = "green";
        setTimeout(() => { entry.style.color = "white"; document.getElementById("entryBox").value = ""; currentFlags.shift(); displayFlag(); }, 1000);
    }
    else {
        entry.style.color = "red";
        setTimeout(() => { entry.style.color = "white"; document.getElementById("entryBox").value = ""; }, 1000);
    }
    
   
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
    if (currentFlags.length) {
        document.getElementById("flag").src = "../../img/" + (currentFlags[0] + ".png");
    }

    else {
        gameOver();
    }
}

function gameOver() {
    location.href = "gameOver.php";

}