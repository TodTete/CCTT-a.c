$(document).ready(function() {
    $('#updateModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var name = button.data('name');
        var description = button.data('description');
        
        var modal = $(this);
        modal.find('#updateId').val(id);
        modal.find('#updateName').val(name);
        modal.find('#updateDescription').val(description);
    });

    $('#updateForm').on('submit', function(event) {
        event.preventDefault();

        var id = $('#updateId').val();
        var name = $('#updateName').val();
        var description = $('#updateDescription').val();
        var picture = $('#updatePicture')[0].files[0];

        var formData = new FormData();
        formData.append('id', id);
        formData.append('name', name);
        formData.append('description', description);
        formData.append('picture', picture);

        $.ajax({
            url: '../../App/Controllers/UpdateDetailsController.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                toastr.success('Datos actualizados correctamente');
                $('#updateModal').modal('hide');
                setTimeout(function() {
                    location.reload();
                }, 2000);
            },
            error: function(error) {
                toastr.error('Error al actualizar los datos');
            }
        });
    });

    document.querySelector('.las.la-bars').addEventListener('click', () => {
        document.querySelector('.sidebar').classList.toggle('hidden');
        document.querySelector('.main-content').classList.toggle('expanded');
    });
});
