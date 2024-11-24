import "./bootstrap";

import.meta.glob(["../images/**"]);

import Slider from "./components/slider";
import Tabs from "./components/tabs";
import Carousel from "./components/carousel";

document.addEventListener("DOMContentLoaded", () => {
    new Slider();
    new Tabs();
    new Carousel();
});
