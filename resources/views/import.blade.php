<form action="{{ route('import.populasi') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" accept=".xlsx, .csv">
    <button type="submit">Upload</button>
</form>
