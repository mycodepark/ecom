<div class="tile">
    <form action="{{ route('admin.profiles.store') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Genel Ayarlar</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="name">Ad Soyad</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Site adı giriniz"
                    id="name"
                    name="name"
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
                />
            </div>  

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Şifre</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" >
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Şifre Tekrar</label>

                <div class="col-md-6">
                    <input id="confirm_password" type="password" class="form-control" name="confirm_password" >
                </div>
            </div>


        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Kaydet</button>
                </div>
            </div>
        </div>
    </form>
</div>
