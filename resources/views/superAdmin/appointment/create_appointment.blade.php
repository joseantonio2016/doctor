@extends('layout.mainlayout_admin',['activePage' => 'appointment'])

@section('title',__('Add Appointment'))
@section('css')
<style>
    .img_preview {
        width: 192px;
        height: 192px;
        background: no-repeat;
        background-size: cover;
        border-radius: 10px;
    }

    .bx-image-add:before {
        content: "\ed7f";
    }
    .upload-label {
        right: -15px;
        top: -12px;
        font-size: 22px;
        height: 40px;
        width: 40px;
        background-color: #fff;
    }
    .icon
    {
        right: 13px;
    }
</style>
@endsection
@section('content')

<section class="section">
    @include('layout.breadcrumb',[
    'title' => __('Add Appointment'),
    'url' => url('appointment'),
    'urlTitle' => __('Appointment'),
    ])
    <div class="section_body">
        <div class="card">
            <form action="{{ url('store_appointment',$patient->id) }}" method="post" enctype="multipart/form-data" class="myform">
                @csrf
                <div class="card-body">
                    <div class="row mt-4">
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="col-form-label">{{__('Hospital')}}</label>
                            <select name="hospital_id" class="form-control select2" data-placeholder="Hospital">
                                @foreach ($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                @endforeach
                            </select>
                            @error('hospital_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <div class="d-flex justify-content-between">
                                <label class="col-form-label">{{__('Hospital')}}</label>
                                <a href="javascript:void(0)" type="button" class="d-flex-end ms-auto" data-toggle="modal" data-target="#exampleModal">
                                    {{ __('Add address') }}
                                </a>
                            </div>
                            <select class="form-control form-select form-select-sm @error('patient_address') is-invalid @enderror" name="patient_address" id="patient_address" aria-label="Default select example">
                                <option value="">{{ __('Please select The Address') }}</option>
                                @foreach ($patient_addressess as $patient_address)
                                    <option value="{{ $patient_address->id }}">{{ $patient_address->address }}</option>
                                @endforeach
                            </select>
                            <span class="invalid-div text-danger"><span class="patient_address"></span></span>
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="phone_number" class="col-form-label"> {{__('Age')}}</label><br>
                            <input type="age" value="{{ old('age') }}" name="age"
                                class="form-control @error('age') is-invalid @enderror">
                            @error('age')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="col-form-label">{{__('Any Side Effects Of The Drug?')}}</label>
                            <input type="drug_effect" value="{{ old('drug_effect') }}" class="form-control  @error('drug_effect') is-invalid @enderror"  name="drug_effect">
                            @error('drug_effect')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="col-form-label">{{__('Any Note For Doctor ??')}}</label>
                            <input type="note" value="{{ old('note') }}" class="form-control   @error('note') is-invalid @enderror" name="note">
                            @error('note')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="col-form-label">{{__('Illness Information')}}</label>
                            <input type="illness_information" value="{{ old('illness_information') }}"
                                class="form-control  @error('illness_information') is-invalid @enderror"
                                name="illness_information">
                            @error('illness_information')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label for="" class="form-label ">{{__('Appointment Date')}}</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" value="{{ old('date',$date) }}" min="{{ Carbon\Carbon::now(env('timezone'))->format('Y-m-d') }}" name="date">
                            <span class="invalid-div text-danger"><span class="date"></span></span>
                            @error('date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label class="col-form-label">{{__('Time')}}</label>
                            <select name="time" id="appendTimeslot" class="form-control select2 timeSlot">
                                @foreach ($timeslots as $timeslot)
                                    <option  value="{{ $timeslot['start_time'] }}">{{ $timeslot['start_time'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 col-md-12 form-group">
                            <p>{{ __('Upload Patient Image & Report') }}</p>
                            <div class="row g-2">
                                <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                                    <div>
                                        <div class="img_preview avta-prview-1 shadow mt-3">
                                            <div class="position-relative">
                                                <input type="file" id="image1" name="report_image[]" class="d-none" accept=".png, .jpg, .jpeg">
                                                <div class="position-absolute upload-label shadow-sm rounded-circle">
                                                    <label for="image1" class=" position-absolute mb-0 icon"><i class="far fa-solid fa-image "></i></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                                    <div>
                                        <div class="img_preview avta-prview-2 shadow mt-3">
                                            <div class="position-relative">
                                                <input type="file" id="image2" name="report_image[]" class="d-none" accept=".png, .jpg, .jpeg">
                                                <div class="position-absolute upload-label shadow-sm rounded-circle">
                                                    <label for="image2" class=" position-absolute mb-0 icon"><i class="far fa-solid fa-image"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                                    <div>
                                        <div class="img_preview avta-prview-3 shadow mt-3">
                                            <div class="position-relative">
                                                <input type="file" id="image3" name="report_image[]" class="d-none" accept=".png, .jpg, .jpeg">
                                                <div class="position-absolute upload-label shadow-sm rounded-circle">
                                                    <label for="image3" class=" position-absolute mb-0 icon"><i class="far fa-solid fa-image"></i></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right p-2">
                    <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                </div>
            </form>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('User Address') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="addressForm">
                    @csrf
                    <input type="hidden" name="from" value="add_new">
                    <input type="hidden" name="id">
                    <input type="hidden" name="lat" id="lat" value="{{$setting->lat}}">
                    <input type="hidden" name="lang" id="lng" value="{{$setting->lang}}">
                    <input type="hidden" name="user_id" value="{{ $patient->id }}">
                    <div id="map" class="mapClass"></div>
                    <div class="form-group">
                        <textarea name="address" cols="30" class="form-control" rows="30">{{ __('Rajkot , Gujrat') }}</textarea>
                        <span class="invalid-div text-danger"><span class="address"></span></span>
                    </div>
                </form>
                <div class="modal-footer border-0">
                    <button type="button" class="modelCloseBtn btn btn-secondary" data-dismiss="modal">{{ __('Close')}}</button>
                    <button type="button" onclick="addAdd()" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@if (App\Models\Setting::first()->map_key)
<script
    src="https://maps.googleapis.com/maps/api/js?key={{App\Models\Setting::first()->map_key}}&callback=initAutocomplete&libraries=places&v=weekly"
    async></script>
@endif
<script>
    var lat , lng;
    lat = parseFloat($('#lat').val());
    lng = parseFloat($('#lng').val());
    function initAutocomplete()
    {
        const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: lat, lng: lng },
            zoom: 13,
            mapTypeId: "roadmap",
        });

        const a = new google.maps.Marker({
            position: {
                lat: lat,
                lng: lng
            },
            map,
            draggable: true,
        });

        google.maps.event.addListener(a, 'dragend', function() {
            geocodePosition(a.getPosition());
            $('#lat').val(a.getPosition().lat().toFixed(5));
            $('#lng').val(a.getPosition().lng().toFixed(5));
        });
    }
    function geocodePosition(pos)
    {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
        latLng: pos
        }, function(responses) {
        if (responses && responses.length > 0) {
            $('textarea[name=address]').val(responses[0].formatted_address);
        } else {
            $('textarea[name=address]').val('Cannot determine address at this location.');
        }
        });
    }
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#img_preview1").css(
                    "background-image",
                    "url(" + e.target.result + ")"
                );
                $("#img_preview1").hide();
                $("#img_preview1").fadeIn(650);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function () {
        readURL(this);
    });

    function readURL1(input)
    {
        if (input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.avta-prview-1').css('background-image', 'url(' + e.target.result + ')');
                $('.avta-prview-1').hide();
                $('.avta-prview-1').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image1").change(function () {
        readURL1(this);
    });

    function readURL2(input)
    {
        if (input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.avta-prview-2').css('background-image', 'url(' + e.target.result + ')');
                $('.avta-prview-2').hide();
                $('.avta-prview-2').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image2").change(function () {
        readURL2(this);
    });

    function readURL3(input)
    {
        if (input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.avta-prview-3').css('background-image', 'url(' + e.target.result + ')');
                $('.avta-prview-3').hide();
                $('.avta-prview-3').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image3").change(function () {
        readURL3(this);
    });

    $('#date').change(function () {
        $.ajax({
            headers:
            {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data:
            {
                date:this.value,
            },
            url: base_url + '/changeTimeslot',

            success: function (result)
            {
                if (result.data.length > 0)
                {
                    var items="";
                    $.each(result.data, function(index, item)
                    {
                        $("#appendTimeslot").empty().append(items += "<option>" + item.start_time + "</option>");
                    });
                }
                else
                {
                    $("#appendTimeslot").empty().select2({
                            placeholder: "At this time doctor is not availabel please change the date",
                            allowClear: true
                        });
                }
            },
            error: function (err) {
            }
        });
    });

    function addAdd()
    {
        var formData = new FormData($('.addressForm')[0]);
        $.ajax(
        {
            headers:
            {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            url: base_url + '/add-address',

            success: function (result)
            {
                if (result.success == true) {
                    $('#exampleModal').modal('toggle');
                    $('select[name=patient_address]').append(`<option selected value="${result.data.id}">${result.data.address}</option>`);
                }
            },
            error: function (err) {
                $(".invalid-div span").html('');
                for (let v1 of Object.keys( err.responseJSON.errors)) {
                    $(".invalid-div ."+v1).html(Object.values(err.responseJSON.errors[v1]));
                }
            }
        });
    }
</script>

@endsection
