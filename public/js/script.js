document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", function () {
            const text = this.nextElementSibling;
            if (this.checked) {
                text.classList.add("coret");
            } else {
                text.classList.remove("coret");
            }
        });
    });
});
