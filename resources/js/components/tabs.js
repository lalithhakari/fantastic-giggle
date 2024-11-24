export default class Tabs {
    constructor(onTabChange) {
        this.onTabChange = onTabChange; // Callback for tab change
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

                // Update tab buttons
                this.tabButtons.forEach((btn) =>
                    btn.classList.remove(
                        "active",
                        "border-b-2",
                        "text-gray-900"
                    )
                );
                button.classList.add("active", "border-b-2", "text-gray-900");

                // Update tab panes
                this.tabPanes.forEach((pane) => {
                    if (pane.id === targetTab) {
                        pane.classList.remove("hidden");
                        pane.classList.add("active");

                        // Notify the Carousel class to update its state
                        if (this.onTabChange) {
                            this.onTabChange(pane);
                        }
                    } else {
                        pane.classList.add("hidden");
                        pane.classList.remove("active");
                    }
                });
            });
        });
    }
}
