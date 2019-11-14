@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                <h3 class="tile-title">{{ $subTitle }}</h3>
                <form action="{{ route('admin.outlets.update') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="name">Mağaza adı <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $outlet->name) }}"/>
                            <input type="hidden" name="id" value="{{ $outlet->id }}">
                            @error('name') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="description">Açıklama</label>
                            <textarea class="form-control" rows="4" name="description" id="description">{{ old('description', $outlet->description) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="phone">Telefon <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" value="{{ old('phone', $outlet->phone) }}"/>
                            <input type="hidden" name="id" value="{{ $outlet->id }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="adress">Adres</label>
                            <textarea class="form-control" rows="4" name="adress" id="adress">{{ old('adress', $outlet->adress) }}</textarea>
                        </div>
                       
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    @if ($outlet->image != null)
                                        <figure class="mt-2" style="width: 80px; height: auto;">
                                            <img src="{{ asset('storage/'.$outlet->image) }}" id="categoryImage" class="img-fluid" alt="img">
                                        </figure>
                                    @endif
                                </div>
                                <div class="col-md-10">
                                    <label class="control-label">Mağaza Resmi</label>
                                    <p style="color:red">(Mağaza resmi 640x426px ölçülerinde olacaktır)</p>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"/>
                                    @error('image') {{ $message }} @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Güncelle</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.outlets.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Geri Dön</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
