document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.carousel').forEach(track => {

        const item = track.querySelector('.carousel-slide');
        if (!track || !item) return;

        let trackWidth = track.offsetWidth;
        let scrollAmount = item.offsetWidth - 50;

        // ---------------------
        // TOUCH (mobile)
        // ---------------------

        let startX = 0;
        let startY = 0;
        let isSwiping = false;

        track.addEventListener('touchstart', (e) => {
            const touch = e.touches[0];
            startX = touch.clientX;
            startY = touch.clientY;
            isSwiping = false;
        });

        track.addEventListener('touchmove', (e) => {
            const touch = e.touches[0];
            const difX = touch.clientX - startX;
            const difY = touch.clientY - startY;

            if (Math.abs(difX) > Math.abs(difY)) {
                isSwiping = true;
                e.preventDefault(); // só previne se for swipe horizontal
            }
        });

        track.addEventListener('touchend', (e) => {
            const touch = e.changedTouches[0];
            const difX = touch.clientX - startX;

            if (Math.abs(difX) > 50) {
                track.scrollBy({
                    left: difX < 0 ? scrollAmount : -scrollAmount,
                    behavior: 'smooth'
                });
            }
        });

        // ---------------------
        // CLICK (desktop)
        // ---------------------

        track.addEventListener('click', (ev) => {

            if (isSwiping) {
                ev.preventDefault();
                return;
            }

            const rect = track.getBoundingClientRect();
            const clickX = ev.clientX - rect.left;

            if (clickX > rect.width * .9) {
                track.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });

                ev.preventDefault();
            } else if (clickX < rect.width * 0.06) {
                track.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });

                ev.preventDefault();
            }
        });

        // ---------------------
        // RESPONSIVO
        // ---------------------

        window.addEventListener('resize', () => {
            trackWidth = track.offsetWidth;
            scrollAmount = item.offsetWidth - 50;
        });

    });

});