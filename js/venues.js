document.addEventListener("DOMContentLoaded", function () {
    // Smooth Scroll for 'View Venues' button
    document.getElementById('scrollButton').addEventListener('click', function () {
        document.getElementById('venues').scrollIntoView({ behavior: 'smooth' });
    });

    // Modal functionality
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const captionText = document.getElementById('caption');
    const closeModal = document.getElementsByClassName('close')[0];

    // When a venue is clicked, open the modal with the image and description
    document.querySelectorAll('.venue').forEach(venue => {
        venue.addEventListener('click', function () {
            modal.style.display = "block";
            modalImg.src = this.dataset.image;
            captionText.innerHTML = this.dataset.description;
        });
    });

    // When the user clicks on <span> (x), close the modal
    closeModal.onclick = function () {
        modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});
