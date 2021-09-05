$(function () {
    $(".delete-button").click(function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Delete?",
            text: "Data tersebut akan Didelete!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya!",
            cancelButtonText: "Kembali",
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $("#form").submit();
            }
        });
    });
});
