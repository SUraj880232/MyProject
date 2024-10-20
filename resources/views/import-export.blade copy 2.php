<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final CM Commission Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }

        .container-fluid {
             margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background: #343a40;
            position: fixed;
            top: 0;
            left: 0;
            padding: 60px;
            font-size: 17px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
            transition: width 0.3s;
        }

        .sidebar h4 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
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
            transform: scale(1.02);
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .search-box-container {
            position: relative;
            margin-bottom: 20px;
        }

        .search-box {
            padding: 10px 40px;
            border-radius: 30px;
            border: 2px solid #007bff;
            transition: border-color 0.3s;
        }

        .search-box:focus {
            border-color: #007bff;
            outline: none;
        }

        .search-icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .btn-search {
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

        .btn-search:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .table-container {
            background-color: #fff;
            border-radius: 8px;
            /* padding: 20px; */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .group-row:hover {
            background-color: #f8f9fa;
            cursor: pointer;
        }

        .details-row {
            background-color: #f1f3f5;
        }

        .details-table {
            margin-top: 10px;
        }

        .btn-info {
            color: #fff;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .btn {
            transition: all 0.3s;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table thead th {
            background-color: #007bff;
            color: white;
            position: sticky;
            top: 0;
        }

        .table tbody tr:hover {
            background-color: #e2e6ea;
        }

        .details-row {
            display: none;
        }

        .no-records {
            display: none;
            margin-top: 20px;
            font-size: 1.2em;
            color: #dc3545;
            text-align: center;
        }

        .alert-message {
            display: none;
            margin-top: 20px;
        }

        .card {
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.5em;
            text-align: center;
            padding: 5px;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 15px;
        }


        h1 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            background: linear-gradient(90deg, #007bff, #6610f2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

body {
    margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: auto;
    background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgba(255,25,25,1) 98%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
}

@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}


@media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 210px;
            }

            table {
                font-size: 12px;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                display: none;
            }

            .main-content {
                margin-left: 0;
                padding: 10px;
            }

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}
       

        
    </style>
</head>



<body>

    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>


    
    <div class="sidebar">
        <h4 style="font-size: 30px">Dashboard</h4>
        <a href="/#"><i class="fas fa-home"></i> Home</a>
        <a href="/coming"><i class="fas fa-chart-line"></i> Statistics</a>
        <a href="/coming1"><i class="fas fa-user"></i> Users</a>
        <a href="/coming2"><i class="fas fa-cog"></i> Settings</a>
        <a href="/login"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div> 

    <div class="main-content">
        <div class="container-fluid">
            <h1 class="text-center">BM-Commission</h1>
            <div class="search-box-container">
                <input type="text" class="form-control search-box" id="searchInput" placeholder="SEARCH BY AGT_CODE, CODE or PAN NUMBER"
                    onkeyup="searchTable()">
                <button class="btn-search"><i class="fas fa-search"></i></button>
            </div>

            <div class="table-container">
                <table class="table table-bordered table-striped" id="commissionTable" style="display: none;">
                    <thead>
                        <tr>
                            <th>SO Name</th>
                            <th>PAN</th>
                            <th>Trainer ID</th>
                            <th>Trainer Name</th>
                            <th>Code</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody id="commissionTableBody">
                        @php
                            $groupedCommissions = [];
                        @endphp
                        @foreach($commissions as $commission)
                            @php
                                $key = $commission->PAN . $commission->Trainer_ID . $commission->TRAINER_NAME . $commission->Code;
                                if (!isset($groupedCommissions[$key])) {
                                    $groupedCommissions[$key] = [];
                                }
                                $groupedCommissions[$key][] = $commission;
                            @endphp
                        @endforeach

                        @foreach($groupedCommissions as $key => $group)
                            @php
                                $first = $group[0];
                            @endphp
                            <tr class="group-row">
                                <td>{{ $first->SO_Name }}</td>
                                <td>{{ $first->PAN }}</td>
                                <td>{{ $first->Trainer_ID }}</td>
                                <td>{{ $first->TRAINER_NAME }}</td>
                                <td>{{ $first->Code }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm" onclick="toggleDetails(this)">Show Details</button>
                                </td>
                            </tr>
                            <tr class="details-row">
                                <td colspan="6">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Remark 1</th>
                                                <th>Payable Amount</th>
                                                <th>TDS Amount</th>
                                                <th>Final Amount Payable</th>
                                                <th>Clearing Date</th>
                                                <th>Bank Name</th>
                                                <th>Bank Account No</th>
                                                <th>IFSC</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($group as $commission)
                                                <tr>
                                                    <td>{{ $commission->Remark_1 ?? 'N/A' }}</td>
                                                    <td>{{ $commission->Payable_Amount }}</td>
                                                    <td>{{ $commission->TDS_Amount }}</td>
                                                    <td>{{ $commission->Final_Amount_Payable }}</td>
                                                    <td>{{ $commission->CLEARING_DATE }}</td>
                                                    <td>{{ $commission->BANK_NAME }}</td>
                                                    <td>{{ $commission->BANK_AC_NO }}</td>
                                                    <td>{{ $commission->IFSC }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function searchTable() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const rows = document.querySelectorAll('#commissionTableBody > tr:not(.details-row)');
            let hasVisibleRows = false;

            rows.forEach(row => {
                const cells = row.getElementsByTagName('td');
                const rowText = [...cells].map(cell => cell.textContent.toLowerCase()).join(' ');

                // Show or hide the row based on the search input
                if (rowText.includes(filter)) {
                    row.style.display = '';
                    hasVisibleRows = true; // Found at least one matching row
                } else {
                    row.style.display = 'none';
                }

                // Hide the details row if the main row is hidden
                const detailsRow = row.nextElementSibling;
                if (detailsRow && detailsRow.classList.contains('details-row')) {
                    detailsRow.style.display = 'none';
                }
            });

            // Show or hide the entire table based on the search input
            const table = document.getElementById('commissionTable');
            if (filter === '' || !hasVisibleRows) {
                table.style.display = 'none'; // Hide table if search is blank or no matches
            } else {
                table.style.display = ''; // Show table if there are matches
            }
        }

        function toggleDetails(button) {
            const detailsRow = button.closest('tr').nextElementSibling;
            if (detailsRow && detailsRow.classList.contains('details-row')) {
                const isHidden = detailsRow.style.display === 'none' || detailsRow.style.display === '';
                detailsRow.style.display = isHidden ? 'table-row' : 'none';
                button.innerText = isHidden ? 'Hide Details' : 'Show Details';
            }
        }
    </script>
</body>

</html>
