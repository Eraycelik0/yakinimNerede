@extends("panel.layouts.app")
@section("head")
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Kayıtlar</a>
                </li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Kayıt Listesi</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Kayıt Listesi</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                        aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="{{asset("panel/img/team-2.jpg")}}"
                                             class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Laur
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="{{asset("panel/img/small-logos/logo-spotify.svg")}}"
                                             class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New album</span> by Travis Scott
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                   fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(453.000000, 454.000000)">
                                                            <path class="color-background"
                                                                  d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                  opacity="0.593633743"></path>
                                                            <path class="color-background"
                                                                  d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            Payment successfully completed
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            2 days
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <script src="https://unpkg.com/vue@3"></script>
    <div class="container-fluid py-4">
        <div class="row">
            <form id="kayit_formu" enctype="multipart/form-data">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Kayıt Bilgileri</p>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Hayati Durum</label>
                                    <div class="form-check form-check-info text-start">
                                        <input class="form-check-input" type="radio" value="0" name="is_alive">Ölü <br>
                                        <input class="form-check-input" type="radio" value="1" name="is_alive">Yaşıyor <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Cinsiyet</label>
                                    <div class="form-check form-check-info text-start">
                                        <input class="form-check-input" type="radio" value="0" name="gender">Kadın <br>
                                        <input class="form-check-input" type="radio" value="1" name="gender">Erkek <br>
                                        <input class="form-check-input" type="radio" value="" name="gender">Belirsiz <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Yaş</label>
                                    <div class="form-check form-check-info text-start">
                                        <input class="form-check-input" type="radio" value="0" name="is_adult">Yetişkin <br>
                                        <input class="form-check-input" type="radio" value="1" name="is_adult">Çocuk <br>
                                        <input class="form-check-input" type="radio" value="2" name="is_adult">Bebek <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tanınabilirlik</label>
                                    <div class="form-check form-check-info text-start">
                                        <input class="form-check-input" type="radio" value="1" name="recognizability">Kimliği Belirli <br>
                                        <input class="form-check-input" type="radio" value="0" name="recognizability">Kimliği Belirsiz <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Enkaz Bilgileri</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Şehir</label>
                                    <select name="city" id="sehir" class="form-control" onchange="getTowns()">
                                        <option selected disabled>Seçim Yapınız</option>
                                        @foreach($iller as $key => $il)
                                            <option value="{{$key+1}}">{{$il->il_adi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">İlçe</label>
                                    <select name="district" id="ilce" class="form-control">
                                        <option selected disabled>Seçim Yapınız</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Enkazdan Çıkış Saati</label>
                                    <input class="form-control" type="datetime-local" value="" name="date">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Adres</label>
                                    <input name="address" class="form-control" type="text" placeholder="Elazığ, Çaydaçıra Mah. x sokak vs. vs.">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Depremzede Bilgileri</p>
                        <div class="row person-info" style="display: none" >
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Adı </label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Soyadı</label>
                                    <input class="form-control" type="text"  name="surname" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tc No</label>
                                    <input class="form-control" type="number" name="tc" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Yaşı</label>
                                    <input class="form-control" name="age" type="number" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Anne Adı</label>
                                    <input name="motherName" class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Baba Adı</label>
                                    <input name="fatherName" class="form-control" type="text" value="">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Depremzede Fotoğrafları</p>
                        <div class="row person-fotos" id="fotos">
                            <div class="col-md-4"  v-for="(foto, index) in fotos">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">@{{index+1}}. Fotoğraf</label>
                                        <input class="form-control" type="file" value="" name="image_path[]">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" value="" name="image_name[]">
                                        <span class="btn badge bg-gradient-danger" style="margin-top: 10px" @click="removeFoto(index)">Fotoğrafı Kaldır</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <span class="btn badge bg-gradient-success w-auto" @click="addFoto" style="padding: 8px 15px !important; font-size: 16px">Fotoğraf Ekle</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <button type="button" onclick="createForm()"
                    class="btn btn-primary">Kaydet
            </button>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });


        function createForm() {

            var formData = new FormData(document.getElementById('kayit_formu'));

            $.ajax({
                type: 'POST',
                url: '{{route('panel.form.create')}}',
                data: formData,
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Kayıt Oluşturuldu',
                    });
                    table.ajax().reload();
                },
                error: function (data) {
                    var errors = '';
                    for (datas in data.responseJSON.errors) {
                        errors += data.responseJSON.errors[datas] + '<br>';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: '@lang('error/index.error')',
                        html: '<br>' + errors,
                    });
                }
            });
        }
    </script>
    <script>
        const app = Vue.createApp({
            data() {
                return {
                    fotos:[
                        {
                            id:1
                        }
                    ],
                    count:1
                };
            },
            methods: {
                addFoto() {
                    this.count++
                    this.fotos.push({id: this.count})
                },
                removeFoto(index) {
                    this.count--
                    this.fotos.splice(index,1)
                },
            }
        }).mount("#fotos");
    </script>
    <script>
        $("input[name='recognizability']").change(function (event) {
           if(event.currentTarget.value === "1") {
                $(".person-info").css("display","flex")
           }else{
               $(".person-info").css("display","none")
           }
        })
    </script>
    <script>
        function getTowns() {
            $.ajax({
                type: 'GET',
                url: '{{route('get.towns')}}',
                data: {il_id: $("#sehir").val()},
                success: function (data) {
                    $('#ilce').html("<option selected disabled>Seçim Yapınız</option>")

                    data.towns.forEach(val => {
                        $('#ilce').append("<option value=" + val.id + "> "+ val.ilce_adi +"</option>")
                    });


                },
            });
        }

    </script>
@endsection
