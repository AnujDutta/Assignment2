<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <style>/* Style the "Go back" button */
     /* Style the "Go back" button */
.go-back-button {
    background-color: #007bff; /* Button background color */
    color: #fff; /* Text color */
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none;
    border-radius: 5px;
}

/* Position the button in the top right corner */
.go-back-button {
    position: fixed;
    top: 20px; /* Adjust the distance from the top as needed */
    right: 20px; /* Adjust the distance from the right as needed */
}
/* Style the DataTable */
    /* Style the table */
    #datatable {
        font-family: Arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #datatable th, #datatable td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    #datatable tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #datatable th {
        background-color: #007bff; /* Header background color */
        color: white;
    }</style>
</head>
<body>

    <a href="/1" class="btn btn-primary go-back-button">Go back</a>
    <div class="container">
        <h1>Data Table</h1>
        <table id="datatable" class="display">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Course</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($admissions as $admission)
                    <tr>
                        <td>{{ $admission->FirstName }}</td>
                        <td>{{ $admission->LastName }}</td>
                        <td>{{ $admission->email }}</td>
                        <td>{{ $admission->mobile }}</td>
                        <td>{{ $admission->state }}</td>
                        <td>{{ $admission->city }}</td>
                        <td>{{ $admission->course }}</td>
                        <td>{{ $admission->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
</body>
</html>
