<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table CRUD</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
    <div class="mb-3">
            <a href="index.php" class="btn btn-primary">Back to Menu</a>
        </div>
        <h1 class="mb-4">Data Table CRUD</h1>
        
        <!-- Add Data Modal -->
        <div class="modal fade" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDataModalLabel">Add New Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="addDataForm">
                            <div class="form-group">
                                <label for="sppa">SPPA</label>
                                <input type="text" class="form-control" id="sppa" name="sppa" required>
                            </div>
                            <div class="form-group">
                                <label for="uraian">Uraian</label>
                                <input type="text" class="form-control" id="uraian" name="uraian" required>
                            </div>
                            <div class="form-group">
                                <label for="spby">SPBY</label>
                                <input type="text" class="form-control" id="spby" name="spby" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Data Modal -->
        <div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editDataModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="editDataForm">
                            <input type="hidden" id="editId" name="id">
                            <div class="form-group">
                                <label for="editSppa">SPPA</label>
                                <input type="text" class="form-control" id="editSppa" name="sppa" required>
                            </div>
                            <div class="form-group">
                                <label for="editUraian">Uraian</label>
                                <input type="text" class="form-control" id="editUraian" name="uraian" required>
                            </div>
                            <div class="form-group">
                                <label for="editSpby">SPBY</label>
                                <input type="text" class="form-control" id="editSpby" name="spby" required>
                            </div>
                            <div class="form-group">
                                <label for="editJumlah">Jumlah</label>
                                <input type="text" class="form-control" id="editJumlah" name="jumlah" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Table -->
        <div class="mb-4">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addDataModal">Add Data</button>
            <button class="btn btn-danger" id="resetTable">Reset Table</button>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>SPPA</th>
                    <th>Uraian</th>
                    <th>SPBY</th>
                    <th>Jumlah</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="dataTable">
                <!-- Data will be inserted here -->
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            loadTableData();

            function loadTableData() {
                $.ajax({
                    url: 'read_table_data.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#dataTable').empty();
                            response.data.forEach(function (row) {
                                $('#dataTable').append(`
                                    <tr>
                                        <td>${row.id}</td>
                                        <td>${row.sppa}</td>
                                        <td>${row.uraian}</td>
                                        <td>${row.spby}</td>
                                        <td>${formatRupiah(row.jumlah)}</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm edit-btn" data-id="${row.id}">Edit</button>
                                            <button class="btn btn-danger btn-sm delete-btn" data-id="${row.id}">Delete</button>
                                        </td>
                                    </tr>
                                `);
                            });
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function () {
                        alert('Error loading data');
                    }
                });
            }

            $('#addDataForm').submit(function (e) {
                e.preventDefault();
                var formData = $(this).serializeArray();
                var data = {};
                formData.forEach(function (item) {
                    data[item.name] = item.value;
                });

                $.ajax({
                    url: 'save_table_data.php',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify([data]),
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#addDataModal').modal('hide');
                            loadTableData();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function () {
                        alert('Error saving data');
                    }
                });
            });

            $('#resetTable').click(function () {
                if (confirm('Are you sure you want to reset the table?')) {
                    $.ajax({
                        url: 'reset.php',
                        type: 'POST',
                        dataType: 'json',
                        success: function (response) {
                            if (response.success) {
                                loadTableData();
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function () {
                            alert('Error resetting table');
                        }
                    });
                }
            });

            $(document).on('click', '.delete-btn', function () {
                var id = $(this).data('id');
                if (confirm('Are you sure you want to delete this data?')) {
                    $.ajax({
                        url: 'delete_data.php',
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({ id: id }),
                        dataType: 'json',
                        success: function (response) {
                            if (response.success) {
                                loadTableData();
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function () {
                            alert('Error deleting data');
                        }
                    });
                }
            });

            $(document).on('click', '.edit-btn', function () {
                var id = $(this).data('id');
                var row = $(this).closest('tr');
                var sppa = row.find('td:eq(1)').text();
                var uraian = row.find('td:eq(2)').text();
                var spby = row.find('td:eq(3)').text();
                var jumlah = row.find('td:eq(4)').text().replace(/\./g, ''); // Remove dots for editing

                $('#editId').val(id);
                $('#editSppa').val(sppa);
                $('#editUraian').val(uraian);
                $('#editSpby').val(spby);
                $('#editJumlah').val(jumlah);
                $('#editDataModal').modal('show');
            });

            $('#editDataForm').submit(function (e) {
                e.preventDefault();
                var formData = $(this).serializeArray();
                var data = {};
                formData.forEach(function (item) {
                    data[item.name] = item.value;
                });

                $.ajax({
                    url: 'update_data.php',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(data),
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#editDataModal').modal('hide');
                            loadTableData();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function () {
                        alert('Error updating data');
                    }
                });
            });

            // Function to format number as Indonesian Rupiah
            function formatRupiah(angka) {
                var number_string = angka.toString().replace(/[^,\d]/g, ''),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                if (ribuan) {
                    var separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
                return 'Rp. ' + rupiah;
            }

            // Event listener for input field 'Jumlah'
            $('#jumlah').on('input', function () {
                var jumlah = $(this).val().replace(/\./g, ''); // Remove existing dots
                $(this).val(formatRupiah(jumlah));
            });
        });
    </script>
</body>
</html>
