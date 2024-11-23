import "./bootstrap";

import.meta.glob(["../images/**"]);

import Slider from "./components/slider";
import Tabs from "./components/tabs";

document.addEventListener("DOMContentLoaded", () => {
    new Slider();
    new Tabs();
});
