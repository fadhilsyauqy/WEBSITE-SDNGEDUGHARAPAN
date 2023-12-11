$(document).ready(function () {
    // Hilangkan tombol cari
    $('#tombol-cari').hide();

    // Event ketika keyword ditulis
    $('#keyword').on('keyup', function () {
        // Load konten dari guru.php ke dalam container
        $('#container').load('ajax/guru.php?keyword=' + $('#keyword').val(), function () {
            // Setelah konten dimuat, cek apakah keyword tidak kosong
            const keywordValue = $('#keyword').val().trim();
            if (keywordValue !== '') {
                // Jika keyword tidak kosong, sembunyikan pagination
                $('.pagination').hide();
            } else {
                // Jika keyword kosong, tampilkan kembali pagination
                $('.pagination').show();
            }
        });
    });
});
