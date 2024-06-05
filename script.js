document.addEventListener('DOMContentLoaded', (event) => {
    const form = document.querySelector('form');
    const guideSelect = document.getElementById('guide');
    const projectSelect = document.getElementById('project');

    form.addEventListener('submit', (event) => {
        if (guideSelect.value === "" || projectSelect.value === "") {
            event.preventDefault();
            alert("Please select both a guide and a project.");
        }
    });
});
