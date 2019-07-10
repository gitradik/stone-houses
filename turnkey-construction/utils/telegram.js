$('.telegram').submit(function(e){
    e.preventDefault();
    const loader = document.getElementById('loader_id');
    if(loader) {
        loader.classList.remove('d-none');
    }
    const loaderFormModal = document.getElementById('loaderFormModalId');
    if(loaderFormModal) {
        loaderFormModal.classList.remove('d-none');
    }
    $.ajax({
        type: 'POST',
        url: '/wp-content/themes/stone-houses/turnkey-construction/utils/telegram.php',
        data: $(this).serialize()
    }).done(function(){
        window.location = 'done';
        if(loader) {
            loader.classList.add('d-none');
        }
        if(loaderFormModal) {
            loaderFormModal.add.remove('d-none');
        }
    });
});