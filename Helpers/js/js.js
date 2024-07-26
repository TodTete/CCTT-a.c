
const sidebar = document.querySelector('.sidebar');
const mainContent = document.querySelector('.main-content');
const sidebarToggle = document.querySelector('#sidebar-toggle');

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('hidden');
    mainContent.classList.toggle('expanded');
    if (sidebar.classList.contains('hidden')) {
        sidebarToggle.classList.remove('la-times');
        sidebarToggle.classList.add('la-bars');
    } else {
        sidebarToggle.classList.remove('la-bars');
        sidebarToggle.classList.add('la-times');
    }
});
document.querySelectorAll('.toggle-hide').forEach(item => {
    item.addEventListener('change', function() {
        let clue = this.dataset.id;
        fetch(`toggle_hide.php?clue=${clue}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('Estado de visibilidad cambiado');
                } else {
                    console.error('Error al cambiar el estado de visibilidad');
                }
            })
            .catch(error => console.error('Error:', error));
    });
});