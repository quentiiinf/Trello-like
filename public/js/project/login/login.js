$('#login-form').submit( function (e) {

    e.preventDefault();

    if($('#username').val().length  == 0) {
        $('#username').addClass('is-invalid')
        return false;
    }

    if($('#password').val().length  == 0) {
        $('#password').addClass('is-invalid')
        return false;
    }


    $.ajax({
        url      : "http://92.222.69.104/todo/listes/",
        cache    : false,
        dataType : "json",
        async    : true,
        crossDomain: true,
        method : "GET",
        headers: {
            'login': $('#username').val(),
            'password': sha256($('#password').val()),
        },
        error    : function(request, error) { // Info Debuggage si erreur         
                     $("#errors").html(`<div style="margin-top: 70px;" class='alert alert-success'> Erreur ! Vos indentifiants sont incorrectes. Vous-êtes vous   
                        <a href="inscription">inscrit</a> ?
                     </div>`);
                   },
        success  : function(data) {
                    $('#password').addClass('is-valid disabled');
                    $('#username').addClass('is-valid disabled');
                    $("#errors").html("<div style='margin-top: 70px;' class='alert alert-success'> Super, connexion réussie. <strong> Vous pouvez retourner sur la page principal à l'aide du menu. </strong><br/>Redirection dans 1 seconde</div>");
                    $('#submit').addClass('disabled');
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