<!DOCTYPE html>
<html>
<head>
    <title>Data Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <style>
        thead input {
            width: 100%;
        }
        thead th {
            position: sticky;
            top: 0;
            background-color: #f8f9fa;
            z-index: 10;
        }
        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        tbody tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Data Table</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>MTH</th>
                    <th>FYEAR</th>
                    <th>socode</th>
                    <th>csc_name</th>
                    <th>DO_NAME</th>
                    <th>referenceid</th>
                    <th>AGTCODE</th>
                    <th>code</th>
                    <th>Rank</th>
                    <th>AGTNAME</th>
                    <th>VCHRNO</th>
                    <th>createddate</th>
                    <th>fat</th>
                    <th>snf</th>
                    <th>cm_fat</th>
                    <th>cm_snf</th>
                    <th>fat_rate</th>
                    <th>rate</th>
                    <th>quantity</th>
                    <th>NETAMOUNT</th>
                    <th>PREVIOUS_BALANCE</th>
                    <th>RI_Incentive</th>
                    <th>TOTAL_PAY</th>
                    <th>Recovery_1</th>
                    <th>Recovery_2</th>
                    <th>Amount_Payable</th>
                    <th>TDS_Amount</th>
                    <th>Final_Payable_Amount</th>
                    <th>vPart</th>
                    <th>status</th>
                    <th>accountno</th>
                    <th>bank</th>
                    <th>ifsc</th>
                    <th>pan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr>
                    <td>{{ $row->MTH }}</td>
                    <td>{{ $row->FYEAR }}</td>
                    <td>{{ $row->socode }}</td>
                    <td>{{ $row->csc_name }}</td>
                    <td>{{ $row->DO_NAME }}</td>
                    <td>{{ $row->referenceid }}</td>
                    <td>{{ $row->AGTCODE }}</td>
                    <td>{{ $row->code }}</td>
                    <td>{{ $row->Rank }}</td>
                    <td>{{ $row->AGTNAME }}</td>
                    <td>{{ $row->VCHRNO }}</td>
                    <td>{{ $row->createddate }}</td>
                    <td>{{ $row->fat }}</td>
                    <td>{{ $row->snf }}</td>
                    <td>{{ $row->cm_fat }}</td>
                    <td>{{ $row->cm_snf }}</td>
                    <td>{{ $row->fat_rate }}</td>
                    <td>{{ $row->rate }}</td>
                    <td>{{ $row->quantity }}</td>
                    <td>{{ $row->NETAMOUNT }}</td>
                    <td>{{ $row->PREVIOUS_BALANCE }}</td>
                    <td>{{ $row->RI_Incentive }}</td>
                    <td>{{ $row->TOTAL_PAY }}</td>
                    <td>{{ $row->Recovery_1 }}</td>
                    <td>{{ $row->Recovery_2 }}</td>
                    <td>{{ $row->Amount_Payable }}</td>
                    <td>{{ $row->TDS_Amount }}</td>
                    <td>{{ $row->Final_Payable_Amount }}</td>
                    <td>{{ $row->vPart }}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->accountno }}</td>
                    <td>{{ $row->bank }}</td>
                    <td>{{ $row->ifsc }}</td>
                    <td>{{ $row->pan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
    <script> $(document).ready(function() { $('.table').DataTable({ "scrollX": true, "autoWidth": false }); }); </script>

</body> </html>
