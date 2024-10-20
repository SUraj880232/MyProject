<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CM Commission Management Dashboard</title>
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
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        header button, .export-link {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        header button {
            background-color: #28a745;
            color: white;
        }
        header button:hover {
            background-color: #218838;
        }
        .export-link {
            background-color: #007bff;
            color: white;
            text-decoration: none;
            margin-top: 10px;
        }
        .export-link:hover {
            background-color: #0056b3;
        }
        .search-container {
            margin: 20px 0;
            display: flex;
            justify-content: flex-end;
        }
        input[type="file"], input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
            width: 250px;
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
            background-color: #007bff;
            color: white;
            font-weight: bold;
            font-size: 16px;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .no-data {
            text-align: center;
            color: #777;
            font-style: italic;
        }
        .alert {
            margin-top: 20px;
        }
        @media (max-width: 768px) {
            input[type="file"], input[type="text"] {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            }
            header {
                flex-direction: column;
                align-items: flex-start;
            }
            header button {
                width: 100%;
                margin-top: 10px;
            }
            table {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Import Circular Commission Data</h1>
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" required aria-label="Upload file">
                <button type="submit">Import</button>
            </form>
        </header>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <a href="{{ route('export') }}" class="export-link">Export Data</a>

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search for names or SO Codes..." onkeyup="filterTable()" aria-label="Search table">
        </div>

        @if ($circularCommissions->isEmpty())
            <p class="no-data">No data available.</p>
        @else
            <table id="commissionTable">
                <thead>
                    <tr>
                        <th scope="col">SO Code</th>
                        <th scope="col">DO</th>
                        <th scope="col">SO Name</th>
                        <th scope="col">Trainer ID</th>
                        <th scope="col">Reference ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Total Business</th>
                        <th scope="col">Prize Amount</th>
                        <th scope="col">Recovery</th>
                        <th scope="col">Net Payable Amount</th>
                        <th scope="col">TDS Deduction</th>
                        <th scope="col">Final Amount</th>
                        <th scope="col">Bank Name</th>
                        <th scope="col">IFSC Code</th>
                        <th scope="col">CIR No</th>
                        <th scope="col">Date</th>
                        <th scope="col">Remarks</th>
                        <th scope="col">CH No</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($circularCommissions as $commission)
                        <tr>
                            <td>{{ $commission->so_code }}</td>
                            <td>{{ $commission->do }}</td>
                            <td>{{ $commission->so_name }}</td>
                            <td>{{ $commission->trainer_id }}</td>
                            <td>{{ $commission->reference_id }}</td>
                            <td>{{ $commission->name }}</td>
                            <td>{{ $commission->total_business }}</td>
                            <td>{{ $commission->one_day_cash_incentive }}</td>
                            <td>{{ $commission->recovery }}</td>
                            <td>{{ $commission->net_payable_amount }}</td>
                            <td>{{ $commission->tds_deduction }}</td>
                            <td>{{ $commission->final_amount }}</td>
                            <td>{{ $commission->bank_name }}</td>
                            <td>{{ $commission->ifsc_code }}</td>
                            <td>{{ $commission->cir_no }}</td>
                            <td>{{ $commission->date ? $commission->date->format('Y-m-d') : 'N/A' }}</td>
                            <td>{{ $commission->remarks }}</td>
                            <td>{{ $commission->ch_no }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <div id="pagination" class="pagination-container">
            <!-- Pagination logic will be added here -->
        </div>
    </div>

    <script>
        function filterTable() {
            const input = document.getElementById("searchInput");
            const filter = input.value.toLowerCase();
            const table = document.getElementById("commissionTable");
            const tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                const tds = tr[i].getElementsByTagName("td");
                let found = false;

                for (let j = 0; j < tds.length; j++) {
                    if (tds[j]) {
                        const txtValue = tds[j].textContent || tds[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            found = true;
                            break;
                        }
                    }
                }

                tr[i].style.display = found ? "" : "none";
            }
        }
    </script>
</body>
</html>
