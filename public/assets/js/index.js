$(document).ready(function () {

    Handlebars.registerHelper('ifeq', (a, b, options) => {
        if (a == b) {
            return options.fn(this)
        }
        return options.inverse(this)
    });

    Handlebars.registerHelper('ifop', (v1, operator, v2, options) => {

        switch (operator) {
            case '==':
                return (v1 == v2) ? options.fn(this) : options.inverse(this);
            case '===':
                return (v1 === v2) ? options.fn(this) : options.inverse(this);
            case '!=':
                return (v1 != v2) ? options.fn(this) : options.inverse(this);
            case '!==':
                return (v1 !== v2) ? options.fn(this) : options.inverse(this);
            case '<':
                return (v1 < v2) ? options.fn(this) : options.inverse(this);
            case '<=':
                return (v1 <= v2) ? options.fn(this) : options.inverse(this);
            case '>':
                return (v1 > v2) ? options.fn(this) : options.inverse(this);
            case '>=':
                return (v1 >= v2) ? options.fn(this) : options.inverse(this);
            case '&&':
                return (v1 && v2) ? options.fn(this) : options.inverse(this);
            case '||':
                return (v1 || v2) ? options.fn(this) : options.inverse(this);
            default:
                return options.inverse(this);
        }
    });

    let orderTable = '';
    let data = {};

    // compile packages table
    $.get('/assets/templates/package-listings.hbs', function (data) {
        orderTable = Handlebars.compile(data);
    }, 'html');

    $.when(

        // get providers
        $.get('/dashboard/api/providers/read.php',
            (result) => {
                data.providers = result.data.filter(x => x.name != 'Fibre Compare');
            }
        ),

        // get packages
        $.get('/dashboard/api/packages/read.php',
            (result) => {

                // append to data object
                data.packages = result.data;

            }
        ),


    ).then(function () {

        $('.result').html(orderTable(data));

        orderTable, data = null;

    });

    // order submit button
    $("body").on("click", "#order", function (event) {
        event.preventDefault();
        var provider = $(this).attr("data-provider");
        var packageID = $(this).attr("data-id");

        // insert provider and package details into browser session storage
        if (sessionStorage.getItem("packID") != null) {
            sessionStorage.clear();
            sessionStorage.setItem("packID", packageID)
            sessionStorage.setItem("provider", provider)
        } else {
            sessionStorage.setItem("packID", packageID)
            sessionStorage.setItem("provider", provider)
        }
        window.location = "order.php";

        provider, packageID = null;
    })


    $("body").on("click", "#show-all", function (event) {
        var target = $(this).attr("data-id");
        document.getElementById("table-" + target).style.display = "none";
        document.getElementById("more-" + target).style.display = "block";

        target = null;

    });

    $("body").on("click", "#close-btn", function (event) {
        var target = $(this).attr("data-id");
        document.getElementById("table-" + target).style.display = "block";
        document.getElementById("more-" + target).style.display = "none";

        target = null;

    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                loop: true
            },
            1440: {
                loop: true
            }
        }
    });

});
