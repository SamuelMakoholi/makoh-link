@extends('frontend.dashboard.layouts.master')

@section('title')
{{ $settings->site_name }} || User Address
@endsection


@section('content')
<section id="wsus__dashboard">
    <div class="container-fluid">
    @include('frontend.dashboard.layouts.sidebar')

    <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <div class="dashboard_content mt-2 mt-md-0">
            <h3><i class="fal fa-gift-card"></i>create address</h3>
            <div class="wsus__dashboard_add wsus__add_address">
              <form method="POST" action="{{route('user.address.store')}}">
                @csrf
                <div class="row">
                  <div class="col-xl-6 col-md-6">
                    <div class="wsus__add_address_single">
                      <label>name <b>*</b></label>
                      <input type="text" placeholder="Name" name="name">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                    <div class="wsus__add_address_single">
                      <label>email</label>
                      <input type="email" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                    <div class="wsus__add_address_single">
                      <label>phone <b>*</b></label>
                      <input type="text" placeholder="Phone" name="phone">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                    <div class="wsus__add_address_single">
                      <label>country <b>*</b></label>
                      <div class="wsus__topbar_select">
                        <select class="select_2" name="country">
                          <option>Select Country</option>
                          @foreach (config('settings.country_list') as $country)
                          <option>{{$country}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                    <div class="wsus__add_address_single">
                      <label>State <b>*</b></label>
                      <input type="text" placeholder="State" name="state">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                    <div class="wsus__add_address_single">
                      <label>City <b>*</b></label>
                      <input type="text" placeholder="State" name="city">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                    <div class="wsus__add_address_single">
                      <label>zip code <b>*</b></label>
                      <input type="text" placeholder="Zip Code" name="zip">
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                    <div class="wsus__add_address_single">
                      <label>address <b>*</b></label>
                      <input type="text" placeholder="Address" name="address">
                    </div>
                  </div>

                  <div class="col-xl-6">
                    <button type="submit" class="common_btn">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>

@endsection
