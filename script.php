<style>
    /* Awal: elemen tidak terlihat dan bergeser ke bawah */
    .fade-up {
        opacity: 0;
        transform: translateY(50px);
        /* Geser elemen ke bawah */
        transition: opacity 0.4s ease-out, transform 0.4s ease-out;
    }

    /* Saat elemen terlihat: posisi normal */
    .fade-up.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(".fade-up");

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible"); // Tambahkan kelas 'visible' saat elemen terlihat
                    observer.unobserve(entry.target); // Hentikan pengamatan untuk elemen ini setelah terlihat
                }
            });
        }, {
            threshold: 0.2, // Elemen terlihat ketika 20% masuk ke viewport
        });

        elements.forEach((element) => observer.observe(element));
    });

</script>