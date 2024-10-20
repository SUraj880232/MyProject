<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Payments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <style>
        /* Style for sticky and colorful header */
        thead th {
            position: sticky;
            top: 0;
            background: linear-gradient(45deg, #42a5f5, #478ed1);
            color: white;
            z-index: 1;
            text-align: center;
        }

        /* Zebra striping for rows */
        tbody tr:nth-child(even) {
            background-color: #f0f7ff;
        }

        tbody tr:nth-child(odd) {
            background-color: #dceeff;
        }

        /* Hover effect for table rows */
        tbody tr:hover {
            background-color: #c5e1f9;
        }

        /* Scrollable table container */
        .table-responsive {
            width: 100%;
            overflow-x: auto; /* Allow horizontal scrolling */
        }

        /* Table cell padding and border styling */
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #dee2e6;
            white-space: nowrap; /* Prevent text from wrapping */
        }

        /* Increase header font size */
        thead th {
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;

        }

        /* Style for colorful buttons */
        .btn-colorful {
            margin: 5px;
            font-size: 20px;
            font-weight: bold;
        }
        .btn-blue { background-color: #007bff; color: white; }
        .btn-red { background-color: #e57373; color: white; }
        .btn-pink { background-color: #f06292; color: white; }
        .btn-purple { background-color: #ba68c8; color: white; }
        .btn-green { background-color: #4db6ac; color: white; }
        .btn-blue:hover { background-color: #0056b3; }
        .btn-red:hover { background-color: #c62828; }
        .btn-pink:hover { background-color: #c2185b; }
        .btn-purple:hover { background-color: #ab47bc; }
        .btn-green:hover { background-color: #00796b; }

        .btn-colorfula {
            margin: 1px;
            font-size: 33px;
            font-weight: bold;
            padding: 5px;
            /* padding-left: 100px;
            padding-right: 100px; */
        }
        .rainbow-text {
	font-family: Arial Black, Gadget, sans-serif;
	text-align: center;
	font-weight: bold;
	font-size: 50px;
	text-shadow: #A3A3A3 1px 1px 0px;
}
.rainbow-text .block-line > span {
	display: inline-block;
}


    </style>
</head>
<body>
    <div class="container-fluid mt-2">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <div class="d-flex">
                <img src="https://pcitechno.com/uploads/galleryimage/5/web%20backup_111741578_5_T.png"alt="Logo" style="height: 80px; width: 280px">

               
                {{-- <button class="btn btn-colorful btn-purple">Settings</button> --}}
                {{-- <button class="btn btn-colorful btn-green">Profile</button> --}}


            </div>
            {{-- <div class=" btn-colorfula"  >FARMER PAYMENT-CM-MONTH (AUGUST)</div> --}}

            {{-- <div class="rainbow-text">
                <span class="block-line"><span><span style="color:#ff0000">F</span><span style="color:#ff3300">A</span><span style="color:#ff6600">R</span><span style="color:#ff9900">M</span><span style="color:#ffcc00">E</span><span style="color:#e6fc26">R&nbsp;</span></span><span><span style="color:#099c09">P</span><span style="color:#0fa175">A</span><span style="color:#66ff00">Y</span><span style="color:#33ff00">M</span><span style="color:#00ff00">E</span><span style="color:#00ff33">N</span><span style="color:#00ff66">T</span><span style="color:#00ff99">-</span><span style="color:#00ffcc">C</span><span style="color:#00ffff">M</span><span style="color:#00ccff">-</span><span style="color:#0099ff">M</span><span style="color:#0066ff">O</span><span style="color:#0033ff">N</span><span style="color:#0000ff">T</span><span style="color:#3300ff">H&nbsp;</span></span><span><span style="color:#6600ff">(</span><span style="color:#9900ff">A</span><span style="color:#cc00ff">U</span><span style="color:#ff00ff">G</span><span style="color:#ff00cc">U</span><span style="color:#ff0099">S</span><span style="color:#ff0066">T</span><span style="color:#ff0033">)</span></span></span>
            </div> --}}

            <div class="rainbow-text">
                <span class="block-line"><span><span><span style="color:#ee1212">C</span><span style="color:#ff00bf">O</span><span style="color:#fc881b">M</span><span style="color:#2166fc">M</span><span style="color:#ad6d0c">I</span><span style="color:#059705">S</span><span style="color:#e95bc5">S</span><span style="color:#fc4b4b">I</span><span style="color:#ec6e6e">O</span><span style="color:#7c10d4">N</span></span></span>
            </div>
            <div>
                <button class="btn btn-colorful btn-blue">Dashboard</button>
                <a href="http://127.0.0.1:8000/brokers">
                <button class="btn btn-colorful btn-red">Reports</button>
                </a>
                <button class="btn btn-colorful btn-pink">Analytics</button>            </div>
        </div>

        <div class="table-responsive">
            <table id="dataTable" class="table table-bordered table-striped">
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
    </div>

    <!-- DataTables and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables Initialization -->
    {{-- <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "pageLength": 12,  // Show 12 entries per page
                "scrollX": true  // Enable horizontal scrolling
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "pageLength": 12,  // Show 12 entries per page
                "scrollX": true,  // Enable horizontal scrolling
                "language": {
                "lengthMenu": "Show _MENU_ Entries"  // Proper case for "Show entries"
                }
            });
        });
    </script>

</body>
</html>
