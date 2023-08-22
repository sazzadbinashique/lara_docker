<!DOCTYPE html>
<html>
<head>
    <title>Add Image to PDF</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1 class="mb-4">Add Image to PDF</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('pdf.addImage') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="pdfFile">PDF File:</label>
                            <input type="file" class="form-control-file" name="pdfFile" accept=".pdf">
                        </div>
                        <div class="form-group">
                            <label for="imageFile">Image File:</label>
                            <input type="file" class="form-control-file" name="imageFile" accept=".jpg, .jpeg, .png">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Image to PDF</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add Bootstrap JS and jQuery scripts here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
