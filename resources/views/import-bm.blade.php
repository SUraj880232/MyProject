<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Final CM Commission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        /* Custom styles */
        body {
            background: linear-gradient(45deg, #6dd5ed, #2193b0);
            color: #333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container-fluid {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            animation: fadeIn 1s ease-in-out;
        }

        h2 {
            margin-top: 20px;
            color: #333;
            font-weight: bold;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Table Styles */
        .table-container {
            overflow-x: auto;
            animation: fadeIn 1.5s ease;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            animation: slideUp 1.5s ease-in-out;
        }

        th,
        td {
            text-align: center;
            padding: 16px; /* Increased padding for a better look */
            border: 1px solid #dee2e6;
            white-space: nowrap;
            transition: background-color 0.3s ease;
        }

        th {
            background: linear-gradient(90deg, #fdcb4d, #fdcb4d); /* Enhanced gradient */
            color: #ffffff; 
            font-weight: bold;
            position: sticky;
            top: 0;
            z-index: 10;
            border-bottom: 2px solid #94d2bd; /* Bottom border for separation */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); Subtle shadow for depth
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #e2f0f9;
        }

        @keyframes slideUp {
            from {
                transform: translateY(40px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .table-responsive {
            max-height: 500px;
            overflow-y: auto;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 4px;
        }

        .action-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .input-group {
            width: auto;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #17a2b8;
            border-color: #17a2b8;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #138496;
            border-color: #138496;
        }

        .search-box {
            padding: 10px 40px;
            border: 2px solid #d9f0f1;
            border-radius: 6px;
            outline: none;
            width: 100%;
            max-width: 300px;
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #333;
            pointer-events: none;
        }

        .btn-search {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #17a2b8;
            border: none;
            color: white;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-search:hover {
            background-color: #138496;
        }

        .search-box:focus {
            border-color: #17a2b8;
            box-shadow: 0 0 5px rgba(23, 162, 184, 0.5);
            transition: border-color 0.3s ease;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="action-row">
            <form action="{{ route('importBMCommission') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" name="file" class="form-control" required>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>

            <div style="position: relative;">
                <input type="text" class="search-box" id="search" placeholder="Search..." onkeyup="debouncedSearch()" >
                <i class="fas fa-search search-icon"></i>
                <button class="btn-search" onclick="debouncedSearch()"><i class="fas fa-search"></i></button>
            </div>

                      <!-- Export Button -->
                      <div class="action-item">
                        <a href="{{ route('export') }}" class="btn btn-primary">Export Data</a>
                    </div>
        </div>

        <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>MTH</th>
                        <th>FYEAR</th>
                        <th>SO Code</th>
                        <th>SO Name</th>
                        <th>DO Name</th>
                        <th>Reference ID</th>
                        <th>Trainer ID</th>
                        <th>Code</th>
                        <th>RANK</th>
                        <th>TRAINER NAME</th>
                        <th>VCHRNO</th>
                        <th>FAT</th>
                        <th>SNF</th>
                        <th>Fat Rate</th>
                        <th>RATE</th>
                        <th>Quantity</th>
                        <th>Net Amount</th>
                        <th>Prev Balance</th>
                        <th>Total Pay</th>
                        <th>Recover 1</th>
                        <th>Recovery 2</th>
                        <th>Paid From SO</th>
                        <th>Payable Amount</th>
                        <th>TDS Amount</th>
                        <th>ADV PAID</th>
                        <th>Final Amount Payable</th>
                        <th>BANK AC NO</th>
                        <th>BANK NAME</th>
                        <th>IFSC</th>
                        <th>PAN</th>
                        <th>Remark 1</th>
                        <th>Remark 2</th>
                        
                    </tr>
                </thead>
                <tbody id="commissionTableBody">
                    @foreach($bmCommissions as $index => $commission)
                    <tr style="{{ $index === 0 ? 'display:none;' : '' }}">
                        <td>{{ $commission['MTH'] }}</td>
                <td>{{ $commission['FYEAR'] }}</td>
                <td>{{ $commission['SO_Code'] }}</td>
                <td>{{ $commission['SO_Name'] }}</td>
                <td>{{ $commission['DO_Name'] }}</td>
                <td>{{ $commission['Reference_ID'] }}</td>
                <td>{{ $commission['Trainer_ID'] }}</td>
                <td>{{ $commission['Code'] }}</td>
                <td>{{ $commission['RANK'] }}</td>
                <td>{{ $commission['TRAINER_NAME'] }}</td>
                <td>{{ $commission['VCHRNO'] }}</td>
                <td>{{ $commission['FAT'] }}</td>
                <td>{{ $commission['SNF'] }}</td>
                <td>{{ $commission['fat_rate'] }}</td>
                <td>{{ $commission['RATE'] }}</td>
                <td>{{ $commission['Quantity'] }}</td>
                <td>{{ $commission['NETAMOUNT'] }}</td>
                <td>{{ $commission['PREV_BALANCE'] }}</td>
                <td>{{ $commission['TOTAL_PAY'] }}</td>
                <td>{{ $commission['Recover_1'] }}</td>
                <td>{{ $commission['Recovery_2'] }}</td>
                <td>{{ $commission['Paid_From_SO'] }}</td>
                <td>{{ $commission['Payable_Amount'] }}</td>
                <td>{{ $commission['TDS_Amount'] }}</td>
                <td>{{ $commission['ADV_PAID'] }}</td>
                <td>{{ $commission['Final_Amount_Payable'] }}</td>
                <td>{{ $commission['BANK_AC_NO'] }}</td>
                <td>{{ $commission['BANK_NAME'] }}</td>
                <td>{{ $commission['IFSC'] }}</td>
                <td>{{ $commission['PAN'] }}</td>
                <td>{{ $commission['Remark_1'] }}</td>
                <td>{{ $commission['Remark_2'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        let timeout = null;

        // Debounced search function
        function debouncedSearch() {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                searchTable();
            }, 300); // Delay for 300ms
        }

        function searchTable() {
            const input = document.getElementById('search').value.toLowerCase();
            const table = document.getElementById('commissionTableBody');
            const rows = Array.from(table.getElementsByTagName('tr'));

            rows.forEach(row => {
                const cells = row.getElementsByTagName('td');
                const found = [...cells].some(cell =>
                    cell.innerText.toLowerCase().includes(input)
                );
                // Use requestAnimationFrame for better performance
                requestAnimationFrame(() => {
                    row.style.display = found ? '' : 'none';
                });
            });
        }
    </script>
</body>

</html>
