function connexion(){
    email = document.querySelector("#email").value;
    mdp = document.querySelector(".pwd").value;
    
    $.ajax({
        url: 'connexionBack.php',
        dataType: 'JSON',
        type: 'POST',
        data: {
            identifiant: email,
            motdepasse: mdp,

        },
        success: function(response) {
            
            if(response["numero"] == 1){
                document.location.href="menu.php"; 
            }else if(response["numero"] == 2){
                iziToast.error({
                    title: 'Erreur',
                    message: response["msg"],
                    position: 'center',
                    timeout: 2000,
                    progressBar: false,
                });
            }
        },
        error: function() {
            alert('erreur php')
        }
    });
}