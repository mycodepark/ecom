<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Şifre Değiştirme İşlemi</div>
   
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.profiles.changePassword') }}">
                        @csrf 
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Eski Şifre</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" >
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Yeni Şifre</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" >
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Yeni Şifre Tekrar</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" >
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Şifre Güncelle
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>