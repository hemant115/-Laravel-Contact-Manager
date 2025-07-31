<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $contact->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" value="{{ old('phone', $contact->phone ?? '') }}" required>
</div>

<button type="submit" class="btn btn-success">Save</button>