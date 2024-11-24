export default class Tabs {
    constructor() {
        this.init();
    }

    init() {
        this.tabButtons = document.querySelectorAll("[data-tab-button]");
        this.tabPanes = document.querySelectorAll("[data-tab-pane]");

        if (!this.tabButtons || !this.tabPanes) return;

        this.addEventListeners();
    }

    addEventListeners() {
        this.tabButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const targetTab = button.getAttribute("data-tab");

                this.tabButtons.forEach((btn) =>
                    btn.classList.remove("active", "border-b-2")
                );
                button.classList.add("active", "border-b-2");

                this.tabPanes.forEach((pane) => {
                    if (pane.id === targetTab) {
                        pane.classList.remove("hidden");
                        pane.classList.add("active");
                    } else {
                        pane.classList.add("hidden");
                        pane.classList.remove("active");
                    }
                });
            });
        });
    }
}
