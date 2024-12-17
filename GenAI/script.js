


function showSection(id) {
    const sections = document.querySelectorAll('section');
    sections.forEach((section) => {
        section.classList.remove('active');
    });

    // Show the clicked section
    const section = document.getElementById(id);
    section.classList.add('active');
}
function generateAIImages() {
    alert('AI image generation feature coming soon!');
}
