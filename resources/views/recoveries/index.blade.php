<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recoveries List and Import Excel File</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* General Body Styling */
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
            color: #007bff;
        }

        /* Styling table */
        .table thead th {
            background-color: #007bff;
            color: white;
            white-space: nowrap; /* Prevents wrapping */
            text-transform: uppercase; /* Converts heading to uppercase */
        }

        .table {
            table-layout: auto; /* Allows auto width adjustment */
            width: 100%; /* Full width */
        }

        /* Specific column styles for auto fitting */
        .table td:nth-child(1), /* Date */
        .table td:nth-child(3), /* Name */
        .table td:nth-child(9) { /* Remark */
            white-space: nowrap; /* Prevents wrapping in these columns */
            overflow: hidden; /* Hides overflow content */
            text-overflow: ellipsis; /* Adds ellipsis for overflow text */
        }

        .table tbody tr {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
            transform: scale(1.02); /* Slight scale effect on hover */
        }

        /* Button hover effect */
        .btn-primary {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Styling for import and search */
        .form-inline {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        /* Styling for file input */
        .custom-file-input ~ .custom-file-label::after {
            content: "Browse";
        }

        /* Search input styling */
        .search-input {
            max-width: 300px;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            background-color: #fff;
            border: 1px solid #ced4da;
            transition: all 0.3s ease;
            position: relative;
        }

        /* Search icon inside input */
        .search-input::before {
            content: "\1F50D"; /* Unicode for magnifying glass */
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            color: #6c757d;
        }

        /* Placeholder styling */
        .search-input::placeholder {
            color: #6c757d;
            font-size: 0.9rem;
        }

        /* Search input hover and focus effect */
        .search-input:hover, .search-input:focus {
            border-color: #80bdff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center">Recoveries List</h1>

        <!-- Import and Search -->
        <div class="form-inline mb-4">
            <!-- Excel Import Form -->
            <form action="{{ route('import.recovery') }}" method="POST" enctype="multipart/form-data" class="d-flex">
                @csrf
                <div class="custom-file">
                    <input type="file" name="file" id="file" class="custom-file-input" required>
                    <label class="custom-file-label" for="file">Choose file</label>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Import</button>
            </form>

            <!-- Search Input -->
            <div class="form-group mb-0">
                <input type="text" id="searchInput" class="form-control search-input" placeholder="🔍 Search recoveries...">
            </div>
        </div>

        <!-- Progress bar for file upload -->
        <div class="progress mb-4" id="uploadProgress" style="display: none;">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" id="progressBar"></div>
        </div>

        <!-- Responsive Recoveries Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="recoveriesTable">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Percentage</th>
                        <th>Name</th>
                        <th>Broker ID</th>
                        <th>Code</th>
                        <th>Amount</th>
                        <th>Recovery Amount</th>
                        <th>Balance</th>
                        <th>Remark</th>
                        <th>ORC Sept 2019</th>
                        <th>ORC Oct 2019</th>
                        <th>Brok Nov 2019</th>
                        <th>ORC Nov 2019</th>
                        <th>ORC Dec 2019</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recoveries as $recovery)
                    <tr>
                        <td>{{ \Illuminate\Support\Str::title($recovery->date) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->per) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->name) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->broker_id) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->code) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->amount) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->recovery_amount) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->balance) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->remark) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->orc_sept_2019) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->orc_oct_2019) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->brok_nov_2019) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->orc_nov_2019) }}</td>
                        <td>{{ \Illuminate\Support\Str::title($recovery->orc_dec_2019) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Search Functionality Script -->
    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            var searchValue = this.value.toLowerCase();
            var tableRows = document.querySelectorAll('#recoveriesTable tbody tr');

            tableRows.forEach(function(row) {
                var rowText = row.innerText.toLowerCase();
                if (rowText.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>

    <!-- File Upload Progress Animation -->
    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault();
            var form = this;
            var progressBar = document.getElementById('progressBar');
            var uploadProgress = document.getElementById('uploadProgress');

            // Show progress bar
            uploadProgress.style.display = 'block';

            // Simulate progress (for demonstration purposes)
            var progress = 0;
            var interval = setInterval(function() {
                progress += 10;
                progressBar.style.width = progress + '%';
                progressBar.textContent = progress + '%';

                if (progress >= 100) {
                    clearInterval(interval);
                    form.submit(); // Submit the form
                }
            }, 300);
        });
    </script>
</body>
</html>
