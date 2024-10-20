<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIR Commission Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f2f4f8;
            color: #333;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .container {
            flex: 1;
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: auto;
        }
        h1 {
            color: #007bff;
            margin-bottom: 10px;
            font-weight: 600;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            font-size: 14px;
        }
        th {
            background-color: #6c757d;
            color: white;
            font-weight: bold;
            font-size: 16px;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tr:hover {
            background-color: #d1ecf1;
        }
        .no-data {
            text-align: center;
            color: #777;
            font-style: italic;
            display: none;
        }
        .details-row {
            display: none;
        }
        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CIR Commission Management</h1>
        
        <!-- Search input -->
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Search...">
        </div>

        <table id="commissionTable">
            <thead>
                <tr>
                    <th scope="col">Branch code</th>
                    <th scope="col">DO name</th>
                    <th scope="col">SO name</th>
                    <th scope="col">Trainer ID</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Action</th>
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
                            <table class="table table-bordered" style="margin: 0;">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Final amount</th>
                                        <th scope="col">Bank name</th>
                                        <th scope="col">IFSC code</th>
                                        <th scope="col">Circular number</th>
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

        <p class="no-data">No data available.</p>

        <div id="pagination" class="pagination-container">
            <!-- Pagination logic can be added here -->
        </div>
    </div>

    <script>
        function toggleDetails(button) {
            const detailsRow = button.closest('tr').nextElementSibling;
            if (detailsRow) {
                const isHidden = detailsRow.style.display === "table-row";
                detailsRow.style.display = isHidden ? "none" : "table-row"; // Toggle visibility
                button.textContent = isHidden ? "Show Details" : "Hide Details"; // Toggle button text
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Initially hide the no data message
            document.querySelector('.no-data').style.display = 'none';
            
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('commissionTable');
            const noDataMessage = document.querySelector('.no-data');

            searchInput.addEventListener('input', function() {
                const filter = searchInput.value.toLowerCase();
                let hasData = false;

                for (let row of table.rows) {
                    // Skip header row
                    if (row.rowIndex === 0) continue;

                    const cells = Array.from(row.cells);
                    const rowText = cells.map(cell => cell.textContent.toLowerCase()).join(' ');

                    // Check if any cell in the row contains the search term
                    if (rowText.includes(filter)) {
                        row.style.display = ''; // Show row
                        hasData = true;
                    } else {
                        row.style.display = 'none'; // Hide row
                    }
                }

                // Show/hide the table and no data message
                table.style.display = hasData ? '' : 'none';
                noDataMessage.style.display = hasData ? 'none' : '';
            });
        });
    </script>
</body>
</html>
