import "./bootstrap";

import.meta.glob(["../images/**"]);

import Slider from "./components/slider";

document.addEventListener("DOMContentLoaded", () => {
    new Slider();
});
