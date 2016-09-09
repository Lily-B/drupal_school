$(document).ready(function(){
    $("body").css({
            'background-color':'#c1bdba',
            'font-family':  'SansSerif, sans-serif',
            'font-size': '15px'
        }
    );



    $("#signUp").css({
            'background-color': '#24323d',
            'display': 'inline-block',
            'width':'385px',
            'height':'385px',
            'color': '#ffffff',
            'border-radius': '4px',
            'margin': '8px 30px',
            'padding': '30px',

            '-webkit-box-shadow': '0 0 10px 0 rgba(0,0,0,0.6)',
            '-moz-box-shadow': '0 0 10px 0 rgba(0,0,0,0.6)',
            'box-shadow': '0 0 10px 0 rgba(0,0,0,0.6)'
        }
    );

    $("form a").css({
        'text-decoration': 'none',
        'display': 'inline-block',
        'width': '50%',
        'height': '22px',
        'text-align': 'center',
        'padding': '16px 0 10px',
        'background-color': '#1ab188'
        }
    );
    $("form a:active, form a:visited, form a:link").css({
        'color': '#ffffff'
        }
    );
    $("form a:nth-of-type(2)").css({
        'background-color': '#435259',
        'color': '#798790'
        }
    );

    $("form input").css({
        'background-color': 'inherit',
        'color': '#ffffff',
        'border': '1px solid #798790',
        'border-radius': '0',
        'margin': '15px 0',
        'display': 'inline-block',
        'width': '95%',
        'height': '15px',
        'padding': '10px'
        }
    );
    $("form input[type='text']").css({
        'display': 'inline-block',
        'width': '42%',
        'background-color': 'inherit',
        'border': '1px solid #798790',
        'border-radius': '0'
        }
    );
    $("form input[type='text']:nth-of-type(2)").css({
        'float': 'right'
        }
    );
    $("form input[type='submit']").css({
        'border': 'none',
        'background-color': '#1ab188',
        'border-radius': '0',
        'height': '60px',
        'width':'100%',
        'color': '#ffffff',
        'font-size': '24px',
        'font-family':'"Ubuntu Mono", SansSerif, sans-serif'
        }
    );
    $("h1").css({
        'font-size': '25px',
        'text-align': 'center',
        'margin-top': '30px',
        'margin-bottom': '0'
        }
    );
    $("input[type='text']::-webkit-input-placeholder").css({
            'font-size':'15px',
            'color':'#798790',
            'background-image':'url("../css/Satr.png")',
            'background-position': '-25px 35px',
            'background-color': '#24323d'
        }
    );

    // $("input[type='text']::-moz-placeholder").css({
    //     'font-size': '15px',
    //     'color': '#798790',
    //     'background-image': 'url("../css/Satr.png")',
    //     'background-position': '8% 50%',
    //     'background-color': '#24323d'
    //     }
    // );
    // $("input[type='text']:-moz-placeholder").css({
    //     // 'font-size': '15px',
    //     // 'color': '#798790',
    //     // 'background-image': 'url("../css/Satr.png")',
    //     // 'background-position': '8% 50%',
    //     // 'background-color': '#24323d'
    //     }
    // );
    // $("input[type='text']:-ms-input-placeholder  ").css({
    //     'font-size': '15px',
    //     'color': '#798790',
    //     'background-image': 'url("../css/Satr.png")',
    //     'background-position': '8% 50%',
    //     'background-color': '#24323d'
    //     }
    // );
    $("input[type='email']::-webkit-input-placeholder ").css({
            'font-size': '15px',
            'color': '#798790',
            'background-image': 'url("../css/Satr.png")',
            'background-position': '0% 50%',
            'background-color': '#24323d'
        }
    );
    // $("input[type='email']::-moz-placeholder").css({
    //         'font-size': '15px',
    //         'color': '#798790',
    //         'background-image': 'url("Satr.png")',
    //         'background-position': '-15% 50%',
    //         'background-color': '#24323d'
    //     }
    // );
    // $("input[type='email']:-moz-placeholder").css({
    //         'font-size': '15px',
    //         'color': '#798790',
    //         'background-image': 'url("Satr.png")',
    //         'background-position': '-15% 50%',
    //         'background-color': '#24323d'
    //     }
    // );
    // $("input[type='email']:-ms-input-placeholder  ").css({
    //         'font-size': '15px',
    //         'color': '#798790',
    //         'background-image': 'url("Satr.png")',
    //         'background-position': '0% 50%',
    //         'background-color': '#24323d'
    //     }
    // );
    $("input[type='password']::-webkit-input-placeholder ").css({
            'font-size': '15px',
            'color': '#798790',
            'background-image': 'url("../css/Satr.png")',
            'background-position': '-23% 50%',
            'background-color': '#24323d'
        }
    );
    // $("input[type='password']::-moz-placeholder").css({
    //         'font-size': '15px',
    //         'color': '#798790',
    //         'background-image': 'url("Satr.png")',
    //         'background-position': '-45% 50%',
    //         'background-color': '#24323d'
    //     }
    // );
    // $("input[type='password']:-moz-placeholder").css({
    //         'font-size': '15px',
    //         'color': '#798790',
    //         'background-image': 'url("Satr.png")',
    //         'background-position': '-45% 50%',
    //         'background-color': '#24323d'
    //     }
    // );
    // $("input[type='password']:-ms-input-placeholder  ").css({
    //         'font-size': '15px',
    //         'color': '#798790',
    //         'background-image': 'url("Satr.png")',
    //         'background-position': '-23% 50%',
    //         'background-color': '#24323d'
    //     }
    // );

});

