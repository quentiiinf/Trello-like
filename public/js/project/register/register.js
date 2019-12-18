$('#register-form').submit( function (e) {

    e.preventDefault();

    if($('#username').val().length  == 0) {
        $('#username').addClass('is-invalid');
        return false;
    } else {
        $('#username').addClass('is-valid');
    }

    if($('#password').val().length  == 0) {
        $('#password').addClass('is-invalid');
        return false;
    } else {
        $('#password').addClass('is-valid');
    }

    if($('#password').val() != $('#password2').val()) {
        $('#password2').addClass('is-invalid');
        $('#password').addClass('is-invalid');
        return false;
    } else {
        $('#password2').addClass('is-valid');
        $('#password').addClass('is-valid');
    }


    $.ajax({
        url      : "http://92.222.69.104/todo/create/" + $('#username').val() + "/" + sha256($('#password').val()),
        cache    : false,
        dataType : "json",
        error    : function(request, error) { // Info Debuggage si erreur         
                     alert("Erreur : responseText: "+request.responseText);
                   },
        success  : function(data) {
                    $('#password').addClass('is-valid disabled');
                    $('#username').addClass('is-valid disabled');
                    $('#submit').addClass('disabled');
                    $("#errors").html("<div style='margin-top: 70px;' class='alert alert-success'> Super, inscription réussie. <strong> Vous pouvez retourner sur la page principal à l'aide du menu. <br/>Redirection dans 1 seconde.</div>");

                    $.cookie('username', $('#username').val());
                    $.cookie('password', sha256($('#password').val()));
                   
                    $('#submit').after(`<i class="fas fa-smile-beam fa-10x"></i>`).slideUp( "slow", function() {
                        // Animation complete.
                    });


                    setTimeout( // L'utilisation de cette méthode permet simplement de simuler de la latence pour voir l'écran de chargement
                    function(){
                            window.location.reload();                    
                        },
                        1000
                    )

                }
   });   

});