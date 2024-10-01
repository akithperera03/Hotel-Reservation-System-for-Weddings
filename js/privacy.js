document.querySelector('form').addEventListener('submit', function(e) {
    if (!document.getElementById('agree').checked) {
        e.preventDefault();
        alert('Please agree to the privacy and policy statements.');
    }
});
