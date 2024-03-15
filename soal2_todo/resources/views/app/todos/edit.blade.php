@extends('app/app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Todo List</div>
                    <div class="panel-body">
                        <form id="updateForm" role="form" method="POST" action="{{ route('todos.update', ['todo' => $todo->id]) }}">
                        @csrf
                        @method('PUT')

                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $todo->nama }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Keterangan</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="1" name="keterangan"> Sudah
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="0" name="keterangan"> Belum
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Todo</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        document.getElementById('updateForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Serialize form data
            const formData = new FormData(this);

            // Create AJAX request
            const xhr = new XMLHttpRequest();
            xhr.open('PUT', this.action, true);
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Handle successful response
                        console.log(xhr.responseText);
                        // Optionally, redirect to another page or display a success message
                    } else {
                        // Handle error response
                        console.error('Error:', xhr.statusText);
                        // Optionally, display an error message to the user
                    }
                }
            };

            // Send AJAX request with form data
            xhr.send(formData);
        });
    </script> -->
@endsection