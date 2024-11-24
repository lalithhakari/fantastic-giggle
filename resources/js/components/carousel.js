export default class Carousel {
    constructor() {
        this.init();
    }

    init() {
        this.carousels = document.querySelectorAll("[data-carousel]");
        if (!this.carousels.length) return;

        this.carousels.forEach((carousel) => this.setupCarousel(carousel));
    }

    setupCarousel(carousel) {
        const component = carousel.closest("[data-carousel-component]");
        const leftArrow = component.querySelector("[data-carousel-arrow-left]");
        const rightArrow = component.querySelector(
            "[data-carousel-arrow-right]"
        );

        // Initialize button states
        this.updateButtonState(carousel, leftArrow, rightArrow);

        // Add scroll event listener
        carousel.addEventListener("scroll", () =>
            this.updateButtonState(carousel, leftArrow, rightArrow)
        );

        // Add click listeners for arrows
        this.addArrowListeners(carousel, leftArrow, rightArrow);
    }

    addArrowListeners(carousel, leftArrow, rightArrow) {
        [leftArrow, rightArrow].forEach((arrow) => {
            arrow.addEventListener("click", () => {
                const isLeft = arrow.classList.contains("left");
                const scrollAmount = carousel.offsetWidth / 2;

                carousel.scrollBy({
                    left: isLeft ? -scrollAmount : scrollAmount,
                    behavior: "smooth",
                });

                // Update button state after the scroll finishes
                setTimeout(
                    () =>
                        this.updateButtonState(carousel, leftArrow, rightArrow),
                    300
                );
            });
        });
    }

    updateButtonState(carousel, leftArrow, rightArrow) {
        const scrollLeft = carousel.scrollLeft;
        const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;

        // Toggle visibility of the left arrow
        leftArrow.classList.toggle("hidden", scrollLeft <= 0);

        // Toggle visibility of the right arrow
        rightArrow.classList.toggle("hidden", scrollLeft >= maxScrollLeft);
    }

    reinitializeForPane(pane) {
        const carousel = pane.querySelector("[data-carousel]");
        if (carousel) {
            this.setupCarousel(carousel);
        }
    }
}
