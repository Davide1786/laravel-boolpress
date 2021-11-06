require('./bootstrap');

var deleteForm = document.querySelectorAll('.confirm-delete-post');

deleteForm.forEach(item => {
    item.addEventListener('submit', function(e) {
        const resp = confirm('Sei sicuro di cancellare?');

        if(!resp) {
            e.preventDefault();
        }
    })
})