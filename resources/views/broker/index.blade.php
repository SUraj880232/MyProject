<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broker Dashboard</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for the dashboard -->
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .dashboard-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            border-bottom: 2px solid #0056b3;
        }
        .table-container {
            background: white;
            /* padding: 20px; */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-height: 480px; /* Limit height */
            overflow-y: auto; /* Enable vertical scrolling */
        }
        .table {
            width: 100%; /* Full width for the table */
            table-layout: auto; /* Allow auto-fitting of columns */
        }
        .table th {
            background: #007bff;
            color: white;
            text-transform: uppercase;
        }
        .table th, .table td {
            white-space: nowrap; /* Prevent text from wrapping */
            padding: 10px 15px; /* Add some padding for better readability */
        }
        .table thead {
            background-color: #007bff;
            color: white;
            position: sticky; /* Make the header sticky */
            top: 0; /* Stick to the top */
            z-index: 10; /* Ensure it stays above other content */
        }
        .import-section {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 20px;
        }
        .search-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            gap: 10px; /* Add gap between input and button */
        }
        .search-btn {
            border-radius: 20px;
        }
        .dashboard-footer {
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
            background-color: #f1f1f1;
            border-top: 1px solid #dee2e6;
            color: #6c757d;
        }
        .pagination {
            justify-content: center; /* Center pagination */
        }
    </style>
</head>
<body>

    <!-- Dashboard Header -->
    <header class="dashboard-header text-center">
        <h1>Broker Management Dashboard</h1>
    </header>

    <!-- Full-Width Container -->
    <div class="container-fluid mt-4">
        <!-- Import Brokers Data and Search Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="import-section text-center">
                {{-- <h2>Import Brokers Data</h2> --}}
                <form action="{{ route('import-brokers') }}" method="POST" enctype="multipart/form-data" class="d-inline-flex justify-content-center align-items-center">
                    @csrf
                    <input type="file" name="file" class="form-control w-auto me-2" required>
                    <button type="submit" class="btn btn-primary">Import</button>
                </form>
            </div>

            <div class="search-container">
                <input type="text" id="searchInput" class="form-control" placeholder="Search Brokers..." onkeyup="searchBrokers()">
                <button class="btn btn-primary search-btn" onclick="searchBrokers()">Search</button>
            </div>
        </div>

        <!-- Brokers List Section -->
        <div class="table-container">
            <table class="table table-bordered table-hover table-striped" id="brokerTable">
                <thead>
                    <tr>
                        <th>Broker ID</th>
                        <th>Broker Name</th>
                        <th>SO/DO/WO</th>
                        <th>Preferred Code</th>
                        <th>Date of Joining</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>PAN No</th>
                        <th>Phone No</th>
                        <th>Driving License No</th>
                        <th>Passport No</th>
                        <th>Bank Name</th>
                        <th>Bank Account</th>
                        <th>IFSC Code</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brokers as $index => $broker)
                        @if ($index > 0) <!-- Skip the first row -->
                        <tr>
                            <td>{{ $broker->broker_id }}</td>
                            <td>{{ $broker->broker_name }}</td>
                            <td>{{ $broker->so_do_wo }}</td>
                            <td>{{ $broker->preffered_code }}</td>
                            <td>{{ $broker->doj }}</td>
                            <td>{{ $broker->dob }}</td>
                            <td>{{ $broker->gender }}</td>
                            <td>{{ $broker->pan_no }}</td>
                            <td>{{ $broker->phone_no }}</td>
                            <td>{{ $broker->driving_lic_no }}</td>
                            <td>{{ $broker->passport_no }}</td>
                            <td>{{ $broker->bank_name }}</td>
                            <td>{{ $broker->bank_account }}</td>
                            <td>{{ $broker->ifsc_code }}</td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Section -->
        <nav aria-label="Page navigation">
            <ul class="pagination mt-3">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <!-- Dashboard Footer -->
    <footer class="dashboard-footer">
        <p>&copy; 2024 Broker Management System | Designed by Suraj Kr.</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Search Functionality -->
    <script>
        function searchBrokers() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const table = document.getElementById('brokerTable');
            const tr = table.getElementsByTagName('tr');

            for (let i = 1; i < tr.length; i++) { // Start from 1 to skip the header
                const td = tr[i].getElementsByTagName('td');
                let rowVisible = false;

                for (let j = 0; j < td.length; j++) {
                    if (td[j]) {
                        const txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            rowVisible = true;
                            break;
                        }
                    }
                }
                tr[i].style.display = rowVisible ? '' : 'none'; // Show or hide row
            }
        }
    </script>

</body>
</html>
