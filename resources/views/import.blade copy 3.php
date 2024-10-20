<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CM Commission Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        body {
            background-color: #f2f4f8;
            font-family: 'Arial', sans-serif;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background: #343a40;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
        }

        .sidebar h4 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .container {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .search-input {
            border: 2px solid #007bff;
            border-radius: 30px;
            padding: 10px 20px;
            transition: border-color 0.3s;
        }

        .search-input:focus {
            border-color: #0056b3;
            outline: none;
        }

        .search-button {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 30px;
            padding: 0 20px;
            transition: background-color 0.3s, transform 0.3s;
            display: flex;
            align-items: center;
        }

        .search-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
            vertical-align: middle;
        }

        th {
            background-color: #6c757d;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #d1ecf1;
        }

        .details-row {
            display: none;
        }

        .btn-info {
            transition: all 0.3s;
        }

        .btn-info:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .no-data {
            text-align: center;
            color: #dc3545;
            font-style: italic;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h4>Dashboard</h4>
        <a href="#"><i class="fas fa-home"></i> Home</a>
        <a href="#"><i class="fas fa-chart-line"></i> Statistics</a>
        <a href="#"><i class="fas fa-user"></i> Users</a>
        <a href="#"><i class="fas fa-cog"></i> Settings</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="main-content">
        <div class="container">
            <h1>CM Commission Management Dashboard</h1>
            <div class="mb-3">
                <div class="input-group">
                    <input type="text" id="searchInput" class="form-control search-input" placeholder="Search...">
                    <button class="btn search-button" type="button" id="searchButton">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <table id="commissionTable" class="table table-striped table-bordered" style="display: none;">
                <thead>
                    <tr>
                        <th>so_code</th>
                        <th>do</th>
                        <th>so_name</th>
                        <th>trainer_id</th>
                        <th>name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $groupedData = [];
                    @endphp

                    @foreach ($circularCommissions as $commission)
                        @php
                            $key = $commission->so_code . '|' . $commission->do . '|' . $commission->so_name . '|' . $commission->trainer_id . '|' . $commission->name;
                            if (!isset($groupedData[$key])) {
                                $groupedData[$key] = [
                                    'so_code' => $commission->so_code,
                                    'do' => $commission->do,
                                    'so_name' => $commission->so_name,
                                    'trainer_id' => $commission->trainer_id,
                                    'name' => $commission->name,
                                    'details' => []
                                ];
                            }

                            $groupedData[$key]['details'][] = [
                                'final_amount' => $commission->final_amount,
                                'bank_name' => $commission->bank_name,
                                'ifsc_code' => $commission->ifsc_code,
                                'cir_no' => $commission->cir_no,
                                'date' => $commission->date ? $commission->date->format('Y-m-d') : 'N/A'
                            ];
                        @endphp
                    @endforeach

                    @foreach ($groupedData as $group)
                        <tr>
                            <td>{{ $group['so_code'] }}</td>
                            <td>{{ $group['do'] }}</td>
                            <td>{{ $group['so_name'] }}</td>
                            <td>{{ $group['trainer_id'] }}</td>
                            <td>{{ $group['name'] }}</td>
                            <td><button class="btn btn-info" onclick="toggleDetails(this)">Show Details</button></td>
                        </tr>
                        <tr class="details-row">
                            <td colspan="6">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>date</th>
                                            <th>final_amount</th>
                                            <th>bank_name</th>
                                            <th>ifsc_code</th>
                                            <th>cir_no</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($group['details'] as $detail)
                                            <tr>
                                                <td>{{ $detail['date'] }}</td>
                                                <td>{{ $detail['final_amount'] }}</td>
                                                <td>{{ $detail['bank_name'] }}</td>
                                                <td>{{ $detail['ifsc_code'] }}</td>
                                                <td>{{ $detail['cir_no'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="no-data" style="display: none;">No data available.</p>
        </div>
    </div>

    <script>
        function toggleDetails(button) {
            const detailsRow = button.closest('tr').nextElementSibling;
            if (detailsRow) {
                const isHidden = detailsRow.style.display === "table-row";
                detailsRow.style.display = isHidden ? "none" : "table-row";
                button.textContent = isHidden ? "Show Details" : "Hide Details";
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            const searchButton = document.getElementById('searchButton');
            const table = document.getElementById('commissionTable');
            const noDataMessage = document.querySelector('.no-data');

            // Hide the table by default
            table.style.display = 'none';

            const performSearch = () => {
                const filter = searchInput.value.toLowerCase();
                let hasData = false;

                for (let row of table.tBodies[0].rows) {
                    const rowText = Array.from(row.cells).map(cell => cell.textContent.toLowerCase()).join(' ');

                    // If search input is not empty and matches row data
                    if (filter !== '' && rowText.includes(filter)) {
                        row.style.display = '';
                        hasData = true;
                    } else {
                        row.style.display = 'none';
                    }
                }

                // Show/hide table and no data message based on input
                if (filter === '') {
                    table.style.display = 'none';
                    noDataMessage.style.display = '';
                } else {
                    table.style.display = hasData ? '' : 'none';
                    noDataMessage.style.display = hasData ? 'none' : '';
                }
            };

            // Add event listeners for search input and button
            searchInput.addEventListener('input', performSearch);
            searchButton.addEventListener('click', performSearch);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
