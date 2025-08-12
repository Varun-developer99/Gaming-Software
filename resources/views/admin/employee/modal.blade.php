<form action="{{ route('user.store') }}" method="post" id="updateForm" class="modal-content" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="user_id"  value="{{$user->id ?? 0}}">
    <div class="modal-header">
        <h4 class="modal-title" id="mySmallModalLabel">{{$user->id ? 'Edit User' : 'Add User'}}</h4>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
    </div>
    <div class="modal-body dark-modal">
        <div class="row">
            <div class="col-md-6 form-group mb-3">
                <h6>Name</h6>
                <input type="text" name="name"  value="{{ old('name', $user->name ?? '') }}"class="form-control" required>
            </div>
            <div class="col-md-6 form-group mb-3">
                <h6>Email</h6>
                <input type="email" name="email"  value="{{ old('email', $user->email ?? '') }}"class="form-control" required>
            </div>
            <div class="col-md-6 form-group mb-3">
                <h6>Password</h6>
                <input type="password" name="password"  value="{{ old('password', $user->show_password ?? '') }}"class="form-control" required>
                <div class="show-hide toggle-password"><span class="show"></span></div>
            </div>
            <div class="col-md-6 form-group mb-3">
                <h6>Logo</h6>
                <input type="file" name="logo" class="form-control" accept="image/*">
                @if(isset($user->logo) && $user->logo)
                    <div class="mt-2">
                        <img src="{{ asset($user->logo) }}" alt="Current Logo" style="width: 50px; height: 50px; object-fit: cover;">
                        <small class="text-muted">Current Logo</small>
                    </div>
                @endif
            </div>
            <div class="col-md-6 form-group mb-3">
                <h6>Background Colour</h6>
                <input type="color" name="background_colour" value="{{ old('background_colour', $user->background_colour ?? '#ffffff') }}" class="form-control">
            </div>
            <div class="col-md-6 form-group mb-3">
                <h6>Domain</h6>
                <input type="url" name="domain" value="{{ old('domain', $user->domain ?? '') }}" class="form-control" placeholder="https://example.com">
            </div>
            <div class="col-md-6 form-group mb-3">
                <h6>Points</h6>
                <input type="number" name="points" value="{{ old('points', $user->points ?? 0) }}" class="form-control" min="0">
            </div>
            
        </div>
    </div>
    <div class="modal-footer text-end">
        <button type="submit" id="update" class="btn btn-primary">Upload</button>
    </div>
</form>