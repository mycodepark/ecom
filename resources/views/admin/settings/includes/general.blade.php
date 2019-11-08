<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Genel Ayarlar</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="site_name">Site Adı</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Site adı giriniz"
                    id="site_name"
                    name="site_name"
                    value="{{ config('settings.site_name') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="site_title">Site Başlığı</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Site başlığı giriniz"
                    id="site_title"
                    name="site_title"
                    value="{{ config('settings.site_title') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="default_email_address">Mail Adresi</label>
                <input
                    class="form-control"
                    type="email"
                    placeholder="Mail adresi giriniz"
                    id="default_email_address"
                    name="default_email_address"
                    value="{{ config('settings.default_email_address') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="default_phone_number">Telefon Numarası</label>
                <input
                    class="form-control"
                    type="email"
                    placeholder="Telefon numarası giriniz"
                    id="default_phone_number"
                    name="default_phone_number"
                    value="{{ config('settings.default_phone_number') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="currency_code">Parabirimi Kodu</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Parabirimi kodu giriniz"
                    id="currency_code"
                    name="currency_code"
                    value="{{ config('settings.currency_code') }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="currency_symbol">Parabirimi Simgesi</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Parabirimi simgesi giriniz"
                    id="currency_symbol"
                    name="currency_symbol"
                    value="{{ config('settings.currency_symbol') }}"
                />
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>
