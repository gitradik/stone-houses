const loader = document.getElementById('loader_id');

$('.telegram').submit(function(e){
    e.preventDefault();
    loader.classList.remove('d-none');
    $.ajax({
        type: 'POST',
        url: '/wp-content/themes/stone-houses/turnkey-construction/utils/telegram.php',
        data: $(this).serialize()
    }).done(function(){
        window.location = 'done';
    });
});