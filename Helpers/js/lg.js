$.ajax({
    type: 'POST',
    url: '/cctt-a.c/Views/log/login.php',
    data: formData,
    dataType: 'json',
    success: function(response) {
        if (response.status === 'error') {
            toastr.error(response.message);
        } else {
            window.location.href = 'dashboard.php';
        }
    }
});
