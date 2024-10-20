<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Payments</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->

    <style>
        body {
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #007bff;
            text-align: center;
            font-weight: bold;
            position: relative;
        }
        h1::after {
            content: '';
            display: block;
            width: 50px;
            height: 4px;
            background: #28a745;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        /* Custom Button and Dropdown Styling */
        .btn-custom {
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1rem;
            text-transform: uppercase;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-custom:hover {
            background-color: #0069d9;
            transform: translateY(-3px);
        }
        .dropdown-menu {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .dropdown-item {
            padding: 12px 20px;
            font-size: 1rem;
            display: flex;
            align-items: center;
        }
        .dropdown-item i {
            margin-right: 8px;
        }

        /* Custom Search Input Styling */
        .input-group .form-control {
            border-radius: 30px 0 0 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding-left: 20px;
            height: 45px;
        }
        .input-group .btn {
            border-radius: 0 30px 30px 0;
            background-color: #28a745;
            transition: background-color 0.3s;
            height: 45px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .input-group .btn:hover {
            background-color: #218838;
        }
        .input-group .btn i {
            font-size: 1.2rem;
        }

        /* Table and Modal Styling */
        .table th {
            background-color: #007bff;
            color: white;
            text-transform: uppercase;
            text-align: center;
        }
        .table td {
            vertical-align: middle;
            text-align: center;
            background-color: #f8f9fa;
        }
        .table tr:hover td {
            background-color: #e2f0f4;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
        }
        .modal-header .btn-close {
            background: none;
            border: none;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Stop Payments</h1>

    <!-- Flash Message -->
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Action Row for Import, Export, Add Record, and Search -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-9">
            <div class="dropdown">
                <button class="btn btn-primary btn-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-cogs"></i> Actions
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li>
                        <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addRecordModal">
                            <i class="fas fa-plus"></i> Add New Stop Payment
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" onclick="toggleImport()">
                            <i class="fas fa-file-upload"></i> Add New File
                        </button>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('stop-payments.export') }}" title="Export to Excel">
                            <i class="fas fa-file-export"></i> Export in Excel
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control search-input" placeholder="Search..." onkeyup="debounceSearch()" title="Search Records">
                <button class="btn btn-success btn-custom" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Import Form (Hidden by Default) -->
    <div class="import-form mb-3" style="display: none;">
        <form action="{{ route('stop-payments.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="file" name="file" class="form-control" required>
                <button type="submit" class="btn btn-primary btn-custom">Import</button>
            </div>
        </form>
    </div>

    <!-- Table for displaying records -->
    <table class="table table-bordered table-hover mt-4">
        <thead>
            <tr>
                <th>s_no</th>
                <th>Broker ID</th>
                <th>PEF Code</th>
                <th>Name</th>
                <th>Remark</th>
                <th>Ref No</th>
            </tr>
        </thead>
        <tbody id="stopPaymentTable">
            @foreach($stopPayments as $index => $stopPayment)
                @if ($index > 0)
                    <tr>
                        <td>{{ $stopPayment->s_no }}</td>
                        <td>{{ $stopPayment->broker_id }}</td>
                        <td>{{ $stopPayment->pef_code }}</td>
                        <td>{{ $stopPayment->name }}</td>
                        <td>{{ $stopPayment->remark }}</td>
                        <td>{{ $stopPayment->ref_no }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript for Improved Search Functionality and Toggle Import Feature -->
<script>
    let debounceTimer;

    function debounceSearch() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(searchTable, 300);
    }

    function searchTable() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const table = document.getElementById('stopPaymentTable');
        const rows = table.getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName('td');
            let found = false;
            for (let j = 0; j < cells.length; j++) {
                if (cells[j].textContent.toLowerCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
            rows[i].style.display = found ? "" : "none";
        }
    }

    function toggleImport() {
        const importForm = document.querySelector('.import-form');
        importForm.style.display = importForm.style.display === 'none' ? 'block' : 'none';
    }

    // Function to convert text to sentence case
    function toSentenceCase(str) {
        return str.charAt(0).toUpperCase() + str.slice(1).toLowerCase();
    }

    // Convert table data to sentence case
    function convertTableDataToSentenceCase() {
        const table = document.getElementById('stopPaymentTable');
        const rows = table.getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName('td');
            for (let j = 0; j < cells.length; j++) {
                cells[j].textContent = toSentenceCase(cells[j].textContent);
            }
        }
    }

    // Call the function to convert table data to sentence case
    convertTableDataToSentenceCase();
</script>
</body>
</html>
