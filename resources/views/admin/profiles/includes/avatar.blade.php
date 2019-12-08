<div class="tile">
    <form action="{{ route('admin.profiles.avatarUpdate') }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="profile_id" value="{{ $profile->id }}">
        <h3 class="tile-title">Profil Resmi</h3>
        <hr>
        <div class="tile-body">
            <div class="row">
                <div class="col-3">
                    @if ($profile->avatar != null)
                        <img src="{{ asset('storage/'.$profile->avatar) }}" id="avatar" style="width: 80px; height: auto;">
                    @else
                        <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="avatar" style="width: 80px; height: auto;">
                    @endif
                </div>
                <div class="col-9">
                    <div class="form-group">
                        <label class="control-label">Profil Resmi</label>
                        <input class="form-control" type="file" name="avatar" onchange="loadFile(event,'avatar')"/>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Güncelle</button>
                </div>
            </div>
        </div>
    </form>
</div>
@push('scripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush
