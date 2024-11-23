export default class Slider {
    constructor() {
        this.init();
    }

    init() {
        this.slidesContainer = document.querySelector(".slides");
        this.buttons = document.querySelectorAll(".slide-navigation-btn");

        if (!this.slidesContainer || !this.buttons) return;

        this.addEventListeners();
    }

    addEventListeners() {
        this.buttons.forEach((button) => {
            button.addEventListener("click", () => {
                const slideNumber = button.getAttribute("data-slide");
                this.goToSlide(slideNumber, button);
            });
        });
    }

    goToSlide(slideNumber, clickedButton) {
        const targetSlide = document.querySelector(`#slide-${slideNumber}`);
        if (targetSlide) {
            this.slidesContainer.scrollTo({
                left: targetSlide.offsetLeft,
                behavior: "smooth",
            });

            this.buttons.forEach((button) =>
                button.classList.remove("active", "border-b-2")
            );
            clickedButton.classList.add("active", "border-b-2");
        }
    }
}
