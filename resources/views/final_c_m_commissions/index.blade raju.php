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
            <form action="{{ route('final_cm_commission.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" name="file" class="form-control" required>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>

            <div style="position: relative;">
                <input type="text" class="search-box" id="search" placeholder="Search..." onkeyup="debouncedSearch()">
                <i class="fas fa-search search-icon"></i>
                <button class="btn-search" onclick="debouncedSearch()"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="table-container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>MTH</th>
                        <th>F_YEAR</th>
                        <th>SO_CODE</th>
                        <th>CSC_NAME</th>
                        <th>DO_NAME</th>
                        <th>REFERENCE_ID</th>
                        <th>AGT_CODE</th>
                        <th>CODE</th>
                        <th>RANK</th>
                        <th>NAME</th>
                        <th>VCHR_NO</th>
                        <th>CREATED_DATE</th>
                        <th>FAT</th>
                        <th>SNF</th>
                        <th>CM_FAT</th>
                        <th>CM_SNF</th>
                        <th>FAT_RATE</th>
                        <th>RATE</th>
                        <th>QUANTITY</th>
                        <th>NET AMOUNT</th>
                        <th>PREVIOUS BALANCE</th>
                        <th>RI INCENTIVE</th>
                        <th>TOTAL PAY</th>
                        <th>RECOVERY 1</th>
                        <th>RECOVERY 2</th>
                        <th>AMOUNT PAYABLE</th>
                        <th>TDS AMOUNT</th>
                        <th>FINAL PAYABLE</th>
                        <th>VPART</th>
                        <th>STATUS</th>
                        <th>ACCOUNT NO</th>
                        <th>BANK NAME</th>
                        <th>IFSC</th>
                        <th>PAN NUMBER</th>
                        <th>REF CODE</th>
                        <th>REMARK 1</th>
                        <th>REMARK 2</th>
                        <th>REMARK 3</th>
                        
                    </tr>
                </thead>
                <tbody id="commissionTableBody">
                    @foreach($commissions as $index => $commission)
                    <tr style="{{ $index === 0 ? 'display:none;' : '' }}">
                        <td>{{ $commission->mth }}</td>
                        <td>{{ $commission->f_year }}</td>
                        <td>{{ $commission->so_code }}</td>
                        <td>{{ $commission->csc_name }}</td>
                        <td>{{ $commission->do_name }}</td>
                        <td>{{ $commission->reference_id }}</td>
                        <td>{{ $commission->agt_code }}</td>
                        <td>{{ $commission->code }}</td>
                        <td>{{ $commission->rank }}</td>
                        <td>{{ $commission->name }}</td>
                        <td>{{ $commission->vchr_no }}</td>
                        <td>{{ $commission->created_date }}</td>
                        <td>{{ $commission->fat }}</td>
                        <td>{{ $commission->snf }}</td>
                        <td>{{ $commission->cm_fat }}</td>
                        <td>{{ $commission->cm_snf }}</td>
                        <td>{{ $commission->fat_rate }}</td>
                        <td>{{ $commission->rate }}</td>
                        <td>{{ $commission->quantity }}</td>
                        <td>{{ $commission->netamount }}</td>
                        <td>{{ $commission->previous_balance }}</td>
                        <td>{{ $commission->ri_incentive }}</td>
                        <td>{{ $commission->total_pay }}</td>
                        <td>{{ $commission->recovery_1 }}</td>
                        <td>{{ $commission->recovery_2 }}</td>
                        <td>{{ $commission->amount_payable }}</td>
                        <td>{{ $commission->tds_amount }}</td>
                        <td>{{ $commission->final_payable_amount }}</td>
                        <td>{{ $commission->vpart }}</td>
                        <td>{{ $commission->status }}</td>
                        <td>{{ $commission->account_no }}</td>
                        <td>{{ $commission->bank_name }}</td>
                        <td>{{ $commission->ifsc }}</td>
                        <td>{{ $commission->pan_number }}</td>
                        <td>{{ $commission->ref_code }}</td>
                        <td>{{ $commission->remark_1 }}</td>
                        <td>{{ $commission->remark_2 }}</td>
                        <td>{{ $commission->remark_3 }}</td>
                        
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
