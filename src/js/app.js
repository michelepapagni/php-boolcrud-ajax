var $ = require('jquery');

import Handlebars from 'handlebars/dist/cjs/handlebars.js';

$(document).ready(function() {

    $.ajax({
        url: 'http://localhost/Boolean/ospiti-crud-ajax/database/all.php',
        method: 'GET',
        success: function(data)
        {
            var results = JSON.parse(data);

            printGuests(results);
        },
        error: function()
        {
            alert('Si è verificato un errore');
        }
    });

});

function printGuests(results)
{
    for (var i = 0; i < results.length; i++) {
        var ospite = results[i];

        var source   = $('#row-ospite').html();
        var template = Handlebars.compile(source);
        var context = {
            id: ospite.id,
            name: ospite.name,
            lastname: ospite.lastname
        };

        var html    = template(context);

        $('tbody').append(html);
    }
}
