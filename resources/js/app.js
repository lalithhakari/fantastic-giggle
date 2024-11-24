import "./bootstrap";
import.meta.glob(["../images/**"]);

import Slider from "./components/slider";
import Tabs from "./components/tabs";
import Carousel from "./components/carousel";

document.addEventListener("DOMContentLoaded", () => {
    new Slider();
    const carousel = new Carousel();
    new Tabs((pane) => {
        // Callback to reinitialize carousel for the active pane
        carousel.reinitializeForPane(pane);
    });
});
