<div class="d-flex justify-content-between align-items-center mb-4">
    <div class="d-flex gap-2">
        <a href="{{ route('contacts.index') }}" class="btn btn-info text-white">
            📋 Contact List
        </a>
        <a href="{{ route('contacts.create') }}" class="btn btn-success">
            ➕ Add Contact
        </a>
    </div>

    <form action="{{ route('contacts.import') }}" method="POST" enctype="multipart/form-data" class="d-inline-block">
        @csrf
        <input type="file" name="xml_file" accept=".xml" class="d-none" id="xmlUploadInput" onchange="this.form.submit();">
        <button type="button" onclick="document.getElementById('xmlUploadInput').click();" class="btn btn-warning text-dark">
            📁 Import XML
        </button>
    </form>
</div>