<div class="tile">
    <form action="{{ route('admin.profiles.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Genel Bilgiler</h3>
        <hr>
        <div class="tile-body">
            <input type="hidden" name="profile_id" value="{{ $profile->id }}">
            <div class="form-group">
                <label class="control-label" for="name">Ad Soyad</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Site adı giriniz"
                    id="name"
                    name="name"
                    value="{{ $profile->name }}"
                />
            </div>
          
            <div class="form-group">
                <label class="control-label" for="email">Mail Adresi</label>
                <input
                    class="form-control"
                    type="email"
                    placeholder="Mail adresi giriniz"
                    id="email"
                    name="email"
                    value="{{ $profile->email }}"
                />
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
