@extends('layouts.app')
@section('content')
    @include('layouts.nav')
    <main id="articulos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 d-inline-flex justify-content-between p-1">
                    <div class="form-inline">
                        @{{ familias }}
                        <label>Familia:&nbsp;</label>
                        <select class="form-control form-control-sm">

                        </select>
                    </div>
                    <div class="form-inline">
                        <label>Categoria:&nbsp;</label>
                        <select class="form-control form-control-sm">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-inline">
                        <label>Marca:&nbsp;</label>
                        <select class="form-control form-control-sm">
                            <option value=""></option>
                        </select>
                    </div>
                    <button class="btn btn-dark">Buscar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card m-1">
                        <img src="http://lorempixel.com/400/200/" class="card-img-top" alt="">
                        <div class="card-body">
                            <div class="card-title">Titulo</div>
                            <div class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum exercitationem in
                                molestias nam possimus quasi. Deserunt dolorum eum fuga fugit ipsum laudantium,
                                molestiae nihil odit porro provident quidem quo, tempore!
                            </div>
                            <a href="#" class="btn btn-block btn-outline-dark">Lo quiero!</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    <script>
        var articulos = new Vue({
            el: '#articulos',
            data(){
                return {
                    familias: []
                }
            },
            methods: {
                getFamilias: function () {
                    axios.get("{{route('api.familias')}}").then(function (res) {
                        this.familias = res.data;
                    });
                }
            },
            mounted: function () {
                this.getFamilias();
            }
        });
    </script>
@endsection