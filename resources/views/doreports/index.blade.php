<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoReport</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-primary {
            border-radius: 20px;
        }
        .btn-export {
            background-color: #28a745; /* Green */
            color: white;
            border-radius: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-export:hover {
            background-color: #218838; /* Darker Green */
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        }
        .table {
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .table td {
            background-color: #ffffff;
            text-align: center;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>DoReport Data</h1>

        <!-- Buttons Row -->
        <div class="d-flex mb-4">
            <!-- Import Form -->
            <form action="{{ route('doreports.import') }}" method="POST" enctype="multipart/form-data" class="d-flex">
                @csrf
                <input type="file" name="file" class="form-control me-2" required>
                <button type="submit" class="btn btn-primary me-2">Import</button>
            </form>

            <!-- Export Link -->
            <a href="{{ route('doreports.export') }}" class="btn btn-export ms-auto">Export to Excel</a>
        </div>

        <!-- Reports Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>CSC_CODE</th>
                        <th>CSC_NAME</th>
                        <th>DO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $index => $report)
                        @if ($index > 0) <!-- Skip the first row -->
                            <tr>
                                <td>{{ $report->csc_code }}</td>
                                <td>{{ $report->csc_name }}</td>
                                <td>{{ $report->do }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2024 Broker Management System</p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
