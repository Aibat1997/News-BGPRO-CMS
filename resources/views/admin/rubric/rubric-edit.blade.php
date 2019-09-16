@extends('admin.layouts.layout')

@section('css')

@endsection

@section('content')
<div class="page-wrapper" style="min-height: 319px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-8 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">
                    Добавить рубрику
                </h3>
            </div>
            <div class="col-md-4 col-4 align-self-center text-right">
                <a href="/admin/rubric" class="btn btn-danger">Назад</a>
            </div>
        </div>
        <div class="row">
            <form class="col-lg-12 col-md-12 row" action="/admin/rubric" method="POST">
                @csrf
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-block">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Название(ru)</label>
                                    <input type="text" class="form-control" name="rubric_name_ru" placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label>Название(kz)</label>
                                    <input type="text" class="form-control" name="rubric_name_kz" placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label>Название(en)</label>
                                    <input type="text" class="form-control" name="rubric_name_en" placeholder="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 text-right">
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection