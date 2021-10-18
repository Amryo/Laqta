require('./bootstrap');

require('alpinejs');

console.log('jjjjjjjjjjjjjj');
window.Echo.private('contacts')
.listen('.contact.created', function(event) {
    var count = Number($('#num').text());
        count++;
        $('#num').text(count);

        console.log(event.message.url);
        $('#not').append(`    
        <div class="d-flex align-items-center mb-2">
        <div class="symbol symbol-40 symbol-light-info mr-5">
            *
        </div>
        <div class="d-flex flex-column font-weight-bold">
            <a href="http://127.0.0.1:8000/admins/applications/contacts/${event.message.id}" class="text-dark text-hover-primary mb-1 font-size-lg">${event.message.title}</a>
            <span class="text-muted">${event.message.email}</span>
        </div></div>`)
    });
