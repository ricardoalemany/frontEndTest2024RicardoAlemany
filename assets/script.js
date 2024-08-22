document.addEventListener('DOMContentLoaded', function() {
    /**
     * stepper
     */
    const steps = document.querySelectorAll('.step');
    const tabPanes = document.querySelectorAll('.tab-pane');

    /**
     * Function to show the correct step with the styles
     */
    steps.forEach((step) => {
        step.addEventListener('click', function() {
            const target = step.getAttribute('data-target');

            tabPanes.forEach(function(pane) {
                pane.classList.remove('active');
            });

            document.querySelector(target).classList.add('active');

            document.querySelector(".step.step__active").classList.remove("step__active")
            step.classList.add("step__active")
        });
    });

    /**
     * Box
     */
    document.querySelectorAll(".box__btn").forEach((boxBtn) => {
        boxBtn.addEventListener("click", () => {
            const closestBox = boxBtn.closest(".box");
            if (closestBox) {
                closestBox.classList.toggle("box__active");
            }
        });
    });

});
