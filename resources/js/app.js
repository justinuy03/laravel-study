import './bootstrap';

document.querySelectorAll('.btn-delete').forEach((button) => {
    button.addEventListener('click', function(event){
        event.preventDefault()
        alert('delete')
    })
})
