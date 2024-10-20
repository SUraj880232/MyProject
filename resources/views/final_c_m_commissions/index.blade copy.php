<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final CM Commission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        body {
            background-color: #f1f3f5;
            font-family: Arial, sans-serif;
        }

        .container-fluid {
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .search-box-container {
            position: relative;
            margin-bottom: 20px;
        }

        .search-box {
            padding: 10px 40px;
            border-radius: 30px;
            border: 1px solid #ced4da;
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
            transition: background-color 0.3s;
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
            background-color: #e9ecef;
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
            display: none; /* Initially hidden */
            margin-top: 20px;
            font-size: 1.2em;
            color: #dc3545; /* Bootstrap's danger color */
            text-align: center;
        }

        .alert-message {
            display: none; /* Initially hidden */
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h2 class="text-center mb-4">Final CM Commission</h2>

        <div class="search-box-container">
            <input type="text" class="form-control search-box" id="search"
                placeholder="Search by AGT_CODE, CODE or PAN NUMBER" onkeyup="debouncedSearch()">
            <i class="fas fa-search search-icon"></i>
            <button class="btn-search" onclick="debouncedSearch()"><i class="fas fa-search"></i></button>
        </div>

        <div class="alert alert-danger alert-message" id="alert-message">Please enter Trainer Id or Referral code or PAN Number</div>
        <div class="no-records" id="no-records">No CM Commission records found for this trainer.</div>

        <div class="table-container table-responsive" id="table-container" style="display: none;">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th onclick="sortTable(0)">DO_NAME</th>
                        <th onclick="sortTable(1)">CSC_NAME</th>
                        <th onclick="sortTable(2)">PAN NUMBER</th>
                        <th onclick="sortTable(3)">AGT_CODE</th>
                        <th onclick="sortTable(4)">CODE</th>
                        <th onclick="sortTable(5)">NAME</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody id="commissionTableBody">
                    @php
                    $groupedCommissions = $commissions->groupBy(function ($item) {
                        return $item->do_name . '|' . $item->csc_name . '|' . $item->pan_number . '|' . $item->agt_code . '|' . $item->code . '|' . $item->name;
                    });
                    @endphp

                    @foreach($groupedCommissions as $key => $group)
                    @php
                    $keyParts = explode('|', $key);
                    @endphp
                    <tr class="group-row">
                        <td>{{ $keyParts[0] }}</td>
                        <td>{{ $keyParts[1] }}</td>
                        <td>{{ $keyParts[2] }}</td>
                        <td>{{ $keyParts[3] }}</td>
                        <td>{{ $keyParts[4] }}</td>
                        <td>{{ $keyParts[5] }}</td>
                        <td>
                            <button class="btn btn-sm btn-info" onclick="toggleDetails(this)"><i class="fas fa-chevron-down"></i> Show Details</button>
                        </td>
                    </tr>
                    <tr class="details-row" style="display: none;">
                        <td colspan="7">
                            <table class="table table-bordered table-sm details-table">
                                <thead>
                                    <tr>
                                        <th>MONTH NAME</th>
                                        <th>AMOUNT PAYABLE</th>
                                        <th>TDS AMOUNT</th>
                                        <th>FINAL PAYABLE</th>
                                        <th>CLEARING DATE</th>
                                        <th>BANK NAME</th>
                                        <th>ACCOUNT NO</th>
                                        <th>IFSC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($group as $commission)
                                    <tr>
                                        <td>{{ $commission->remark_3 }}</td>
                                        <td>{{ $commission->amount_payable }}</td>
                                        <td>{{ $commission->tds_amount }}</td>
                                        <td>{{ $commission->final_payable_amount }}</td>
                                        <td>{{ $commission->clearing_date }}</td>
                                        <td>{{ $commission->bank_name }}</td>
                                        <td>{{ $commission->account_no }}</td>
                                        <td>{{ $commission->ifsc }}</td>
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

        <div id="pagination" class="mt-3">
            <span id="page-number"></span>
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
            const rows = document.querySelectorAll('#commissionTableBody .group-row');
            let foundAny = false; // Flag to check if any row is found

            // Show alert if the input is empty
            const alertMessage = document.getElementById('alert-message');
            if (input.trim() === '') {
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
                const found = [...cells].some(cell =>
                    cell.innerText.toLowerCase().includes(input)
                );

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
                const isHidden = detailsRow.style.display === 'none';
                detailsRow.style.display = isHidden ? '' : 'none';
                button.innerHTML = isHidden ? '<i class="fas fa-chevron-up"></i> Hide Details' : '<i class="fas fa-chevron-down"></i> Show Details';
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