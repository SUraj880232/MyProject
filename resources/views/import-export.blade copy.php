<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BM Commissions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        h1 {
            color: #343a40;
        }

        .table thead th {
            background-color: #007bff;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #e2e6ea;
        }

        .search-bar {
            margin-bottom: 20px;
        }

        .details-row {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">BM Commissions</h1>
        <div class="search-bar">
            <input type="text" class="form-control" id="searchInput" placeholder="Search..." onkeyup="searchTable()">
        </div>
        <table class="table table-bordered table-striped" style="display: none;">
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
                    <tr>
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
            const table = document.querySelector('.table');
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
