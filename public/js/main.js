function enlarge(img) {
    var modal = document.getElementById("myModal");

    var modalImg = document.getElementById("img01");

    modal.style.display = "block";
    modalImg.src = img.src;

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

}

function validation() {
    //var header = document.getElementById("header").value;
    var header = document.storeForm.header.value;
    var content = document.storeForm.main_content.value;
    var score = document.storeForm.score.value;
    //console.log(header);
    if (header == "" || content == "" || score == "") {
        alert("Povinné polia musia byť vyplnené");
        return false;
    }
}
