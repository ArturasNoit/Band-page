$(document).ready(function() {
        $('#formLogin').submit(function() {
            $.ajax({
                data: {
                    username: nitrammit,
                    password: 123
                },
                type: "POST",
                dataType : "json",
                success: function( json ) {
                    // do what ever you want here. add content to <div> if it was not 1 . 
                    console.log(json);
                },
                error: function( xhr, status, errorThrown ) {
                    console.log( "Sorry, there was a problem!" );
                }
            });
            json = '';
            return false;
        });
    });