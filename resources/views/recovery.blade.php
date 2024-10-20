<!DOCTYPE html>
<html>
<head>
    <title>Import Excel File</title>
</head>
<body>

    <form action="{{ route('import.recovery') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">Select Excel file:</label>
            <input type="file" name="file" id="file" required>
        </div>
        <button type="submit">Import Data</button>
    </form>

</body>
</html>
