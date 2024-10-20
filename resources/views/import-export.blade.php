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
            background-color: #e9ecef;
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

        h1 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            background: linear-gradient(90deg, #007bff, #6610f2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .sidebar {
    height: 100vh;
    width: 250px;
    background: linear-gradient(145deg, #0f2027, #203a43, #f20f79);
    position: fixed;
    top: 0;
    left: 0;
    padding: 60px 20px;
    font-size: 17px;
    box-shadow: 2px 0 15px rgba(0, 0, 0, 0.5);
    transition: width 0.3s ease-in-out;
    overflow: hidden;
}
 
.sidebar h4 {
    color: #ffffff;
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    font-weight: bold;
    letter-spacing: 1px;
}

.sidebar a {
    color: #ffffff;
    text-decoration: none;
    display: flex;
    align-items: center;
    margin: 15px 0;
    padding: 12px;
    border-radius: 8px;
    transition: background 0.3s ease, transform 0.3s ease;
    font-size: 18px;
    letter-spacing: 0.5px;
}

.sidebar a i {
    margin-right: 10px;
    font-size: 20px;
    transition: transform 0.3s;
}

.sidebar a:hover {
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
    transform: translateX(10px);
}

.sidebar a:hover i {
    transform: rotate(360deg);
}

body {
    background: radial-gradient(circle at top left, #1e3c72, #2a5298);
    color: #fff;
    font-family: 'Poppins', sans-serif;
} 

        .main-content {
            margin-left: 260px;
            padding: 20px;
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
        }

        .table-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
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

        #pagination {
            margin-top: 20px;
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

        .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
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
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }

        .btn-info {
            transition: all 0.3s;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 8px 12px;
        }


        .card-body {
            padding: 15px;
        }
        .table thead th {
            background-color: #007bff;
            color: white;
            position: sticky;
            top: 0;
        }

        
        
        body {
    margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: auto;
    background: linear-gradient(315deg, rgb(100, 1, 94) 10%, rgba(0, 123, 255,1) 58%, rgba(242, 15, 121,1) 68%, rgba(15, 32, 39,1) 98%);
    animation: gradient 40s ease infinite;
    background-size: 210% 210%;
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

            h1 {
                font-size: 1.5em;
            }
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



    <div class="sidebar" style="background-color: #2c3e50; padding: 20px; height: 100vh; color: white;">
        <h4 style="color: #ecf0f1; margin-bottom: 20px;">Performance Summaries</h4>
        <a href="/#" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-home" style="color: #3498db;"></i> Home
        </a>
        <a href="/commission" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-money-check-alt" style="color: #e74c3c;"></i> CM Commission
        </a>
        <a href="/import-export" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-briefcase" style="color: #9b59b6;"></i> BM Commission
        </a>
        <a href="/import" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-building" style="color: #f39c12;"></i> CIR Commission
        </a>
        <a href="/brokers" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-file-alt" style="color: #27ae60;"></i> Broker Register
        </a>
        <a href="/recoveries" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-hand-holding-usd" style="color: #e67e22;"></i> Recovery Report
        </a>
        <a href="/stop-payments" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-ban" style="color: #c42d1c;"></i> Stop Payment
        </a>
        <a href="/login" style="color: #ecf0f1; display: block; margin-bottom: 15px;">
            <i class="fas fa-sign-out-alt" style="color: #a4c8ec;"></i> Logout
        </a>
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
                        @foreach($bmCommissions as $commission)
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
        const input1 = document.getElementById('search').value.toLowerCase(); // First search input
        const input2 = document.getElementById('searchInput').value.toLowerCase(); // Second search input
        const rows = document.querySelectorAll('#commissionTableBody .group-row, #commissionTableBody > tr:not(.details-row)');
        let foundAny = false; // Flag to check if any row is found

        // Show alert if both inputs are empty
        const alertMessage = document.getElementById('alert-message');
        if (input1.trim() === '' && input2.trim() === '') {
            alertMessage.style.display = 'block'; // Show alert message
            const tableContainer = document.getElementById('table-container');
            tableContainer.style.display = 'none'; // Hide the table
            document.getElementById('no-records').style.display = 'none'; // Hide no records message
            return; // Exit the function early
        } else {
            alertMessage.style.display = 'none'; // Hide alert message
        }

        rows.forEach(row => {
            const cells = row.getElementsByTagName('td');
            const rowText = [...cells].map(cell => cell.textContent.toLowerCase()).join(' ');

            // Show/hide the row based on the search input
            const found = rowText.includes(input1) || rowText.includes(input2);

            // Show/hide the details row associated with the current group row
            const detailsRow = row.nextElementSibling;
            row.style.display = found ? '' : 'none';
            if (detailsRow && detailsRow.classList.contains('details-row')) {
                detailsRow.style.display = found ? (detailsRow.style.display === 'none' ? 'none' : '') : 'none';
            }

            // Update the flag
            if (found) {
                foundAny = true;
            }
        });

        // Show or hide the table container and no records message based on search results
        const tableContainer = document.getElementById('table-container');
        const noRecordsMessage = document.getElementById('no-records');

        if (foundAny) {
            tableContainer.style.display = 'block';
            noRecordsMessage.style.display = 'none'; // Hide message
        } else {
            tableContainer.style.display = 'none';
            noRecordsMessage.style.display = 'block'; // Show message
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

    function sortTable(columnIndex) {
        const tableBody = document.getElementById('commissionTableBody');
        const rows = Array.from(tableBody.rows);
        const sortedRows = rows.sort((a, b) => {
            const cellA = a.cells[columnIndex].innerText.toLowerCase();
            const cellB = b.cells[columnIndex].innerText.toLowerCase();
            return cellA.localeCompare(cellB);
        });

        sortedRows.forEach(row => tableBody.appendChild(row));
    }

    // Initial load
    document.addEventListener('DOMContentLoaded', () => {
        // Initially hide the table
        document.getElementById('table-container').style.display = 'none';
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
