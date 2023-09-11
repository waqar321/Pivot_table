@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Employee</h2>
        <form id="createEmployeeForm">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="text" class="form-control" id="number" name="number" required>
            </div>

            <button type="button" id="submitEmployeeForm" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () 
        {
           
            $('#submitEmployeeForm').click(function () {
                // Serialize the form data
                var formData = $('#createEmployeeForm').serialize();

                // Send an AJAX POST request to your server
                $.ajax({
                    type: 'POST',
                    url: '{{ route("employee.store") }}', // Replace with your route
                    data: formData,
                    success: function (data) {
                        // Handle the success response here
                        alert(data.message);
                        console.log(data);

                        // Optionally, you can redirect or show a success message
                        // window.location.href = ''; // Redirect
                        // alert('Employee created successfully');

                        // Clear the form fields
                        $('#createEmployeeForm')[0].reset();
                    },
                    error: function (xhr) {
                        // Handle any errors here
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

