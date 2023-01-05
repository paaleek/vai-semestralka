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

function checkPasswordStrength(password) {
    var specialCharacters = "!£$%^&*_@#~?";
    var passwordScore = 0;

    // specialne znaky
    for (var i = 0; i < password.length; i++) {
        if (specialCharacters.indexOf(password.charAt(i)) > -1) {
            passwordScore += 20;
            break;
        }
    }
    // cislo
    if (/\d/.test(password))
        passwordScore += 20;

    // maly znak
    if (/[a-z]/.test(password))
        passwordScore += 20;

    // vylky znak
    if (/[A-Z]/.test(password))
        passwordScore += 20;

    if (password.length >= 8)
    passwordScore += 20;

    var strength = "";

    if (passwordScore >= 100) {
        strength = "Silné";
    }
    else if (passwordScore >= 80) {
        strength = "Stredne silné";
    }
    else if (passwordScore >= 60) {
        strength = "Slabé";
    }
    else {
        strength = "Veľmi slabé heslo";
    }

    return strength;
}
