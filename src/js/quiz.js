document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("entryBox").addEventListener("keypress",
    function(event) {
        if (event.keyCode == 13) {
            document.getElementById("entryButton").click();
        }
    })
})

