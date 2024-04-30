@props(['motor_image_url', 'customer_name', 'brand'])

<div class="sticky-note fade-in" id="sticky-note" style="position: fixed; bottom: 20px; left: 20px; z-index: 1000;">
    <div
        style="border-radius: 20px; padding: 15px 17px; background-color: #f8f9fa; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); max-width: 400px;">
        <div class="d-flex align-items-center">
            <img src="{{ $motor_image_url ? $motor_image_url : 'https://www.kuchaimotor.com/frontend/img/gallery/gallery5.jpg' }}"
                alt="{{ $brand }}"
                style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%; border: 2px solid rgba(255, 255, 255, 0.5); margin-right: 10px;">
            <span style="flex: 1;">{{ $customer_name }} has just purchased a {{ $brand }}</span>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        let stickyNote = document.getElementById('sticky-note');
        stickyNote.classList.remove('fade-in');
        stickyNote.classList.add('fade-out');
        setTimeout(function() {
            stickyNote.parentNode.removeChild(stickyNote);
        }, 500);
    }, 5000);
</script>