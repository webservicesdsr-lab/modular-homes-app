/**
 * Home Page Script - Modular Homes
 * Path: /wp-content/themes/nexus-shell-theme/pages/home.js
 */

document.addEventListener("DOMContentLoaded", function () {
    const basePrice = 248400;
    const livePriceEl = document.getElementById("mh-live-price");
    const chipGroups = document.querySelectorAll(".mh-option-row");
    const toggleItems = document.querySelectorAll(".mh-toggle-item");
    const sceneButtons = document.querySelectorAll("[data-scene-target]");
    const sceneLayers = document.querySelectorAll(".mh-builder-stage__image");

    function formatCurrency(value) {
        return new Intl.NumberFormat("en-US", {
            style: "currency",
            currency: "USD",
            maximumFractionDigits: 0
        }).format(value);
    }

    function updatePrice() {
        let total = basePrice;

        document.querySelectorAll(".mh-select-chip.is-active").forEach((button) => {
            const amount = parseInt(button.getAttribute("data-price") || "0", 10);
            total += amount;
        });

        document.querySelectorAll(".mh-toggle-item.is-active").forEach((button) => {
            const amount = parseInt(button.getAttribute("data-price") || "0", 10);
            total += amount;
        });

        if (livePriceEl) {
            livePriceEl.textContent = formatCurrency(total);
        }
    }

    chipGroups.forEach((group) => {
        const buttons = group.querySelectorAll(".mh-select-chip");

        buttons.forEach((button) => {
            button.addEventListener("click", function () {
                buttons.forEach((item) => item.classList.remove("is-active"));
                button.classList.add("is-active");
                updatePrice();
            });
        });
    });

    toggleItems.forEach((button) => {
        button.addEventListener("click", function () {
            button.classList.toggle("is-active");
            updatePrice();
        });
    });

    sceneButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const target = button.getAttribute("data-scene-target");

            sceneLayers.forEach((layer) => {
                const scene = layer.getAttribute("data-scene");
                layer.classList.toggle("is-active", scene === target);
            });
        });
    });

    updatePrice();

    const showcase = document.getElementById("mh-showcase");
    const track = document.getElementById("mh-showcase-track");
    const slides = track ? Array.from(track.querySelectorAll(".mh-service-card")) : [];
    const prevBtn = document.querySelector(".mh-showcase-arrow--prev");
    const nextBtn = document.querySelector(".mh-showcase-arrow--next");
    const dotsWrap = document.getElementById("mh-showcase-dots");
    const dots = dotsWrap ? Array.from(dotsWrap.querySelectorAll("button")) : [];

    if (showcase && track && slides.length) {
        let current = 1;
        let autoTimer = null;

        function cleanSlideClasses(slide) {
            slide.classList.remove(
                "is-center",
                "is-left-1",
                "is-right-1",
                "is-left-2",
                "is-right-2",
                "is-hidden"
            );
        }

        function applyCarousel() {
            const width = window.innerWidth;
            const mobile = width < 768;
            const offsetMain = mobile ? 190 : 250;
            const offsetFar = mobile ? 310 : 430;
            const scaleSide = mobile ? 0.88 : 0.9;
            const scaleFar = mobile ? 0.76 : 0.8;

            slides.forEach((slide, index) => {
                cleanSlideClasses(slide);

                const total = slides.length;
                let diff = index - current;

                if (diff > total / 2) diff -= total;
                if (diff < -total / 2) diff += total;

                let transform = "translateX(-50%) scale(0.7)";
                let className = "is-hidden";

                if (diff === 0) {
                    transform = "translateX(-50%) translateX(0px) scale(1)";
                    className = "is-center";
                } else if (diff === -1) {
                    transform = `translateX(-50%) translateX(-${offsetMain}px) scale(${scaleSide}) rotateY(10deg)`;
                    className = "is-left-1";
                } else if (diff === 1) {
                    transform = `translateX(-50%) translateX(${offsetMain}px) scale(${scaleSide}) rotateY(-10deg)`;
                    className = "is-right-1";
                } else if (diff === -2) {
                    transform = `translateX(-50%) translateX(-${offsetFar}px) scale(${scaleFar})`;
                    className = "is-left-2";
                } else if (diff === 2) {
                    transform = `translateX(-50%) translateX(${offsetFar}px) scale(${scaleFar})`;
                    className = "is-right-2";
                }

                slide.style.transform = transform;
                slide.classList.add(className);
            });

            dots.forEach((dot, index) => {
                dot.classList.toggle("is-active", index === current);
            });
        }

        function nextSlide() {
            current = (current + 1) % slides.length;
            applyCarousel();
        }

        function prevSlide() {
            current = (current - 1 + slides.length) % slides.length;
            applyCarousel();
        }

        function startAuto() {
            stopAuto();
            autoTimer = window.setInterval(nextSlide, 4200);
        }

        function stopAuto() {
            if (autoTimer) {
                window.clearInterval(autoTimer);
                autoTimer = null;
            }
        }

        if (nextBtn) {
            nextBtn.addEventListener("click", function () {
                nextSlide();
                startAuto();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener("click", function () {
                prevSlide();
                startAuto();
            });
        }

        dots.forEach((dot, index) => {
            dot.addEventListener("click", function () {
                current = index;
                applyCarousel();
                startAuto();
            });
        });

        showcase.addEventListener("mouseenter", stopAuto);
        showcase.addEventListener("mouseleave", startAuto);
        showcase.addEventListener("touchstart", stopAuto, { passive: true });
        showcase.addEventListener("touchend", startAuto, { passive: true });

        let touchStartX = 0;
        let touchEndX = 0;

        showcase.addEventListener("touchstart", function (event) {
            touchStartX = event.changedTouches[0].clientX;
        }, { passive: true });

        showcase.addEventListener("touchend", function (event) {
            touchEndX = event.changedTouches[0].clientX;
            const delta = touchEndX - touchStartX;

            if (Math.abs(delta) > 40) {
                if (delta < 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
                startAuto();
            }
        }, { passive: true });

        window.addEventListener("resize", applyCarousel);
        applyCarousel();
        startAuto();
    }
});