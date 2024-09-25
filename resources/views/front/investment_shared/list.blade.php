@if($properties->count() > 0)
    @foreach($properties as $room)
        <div data-axis="row" class="col-12 main-ap-box-row" data-aos="fade">
            <div class="main-ap-box-container">
                <!-- bg-success - dostępne -->
                <!-- bg-warning - rezerwacja -->
                <!-- bg-danger - sprzedane -->
                <div class="ap-tag bg-success">dostępne</div>
                <div class="ap-info-box">
                    <div class="ap-info-name">
                        <div class="ap-info-svg">
                            <img src="{{ asset('images/logo-sm-black.svg') }}" alt="Logo Osiedle Versus" width="26" height="18"/>
                        </div>
                        <span>{{$room->name_list}}</span>
                        <div class="number">{{$room->number}}</div>
                    </div>
                    <div class="ap-info-image">
                        @if($room->file)
                            <picture>
                                <source type="image/webp" srcset="/investment/property/list/webp/{{$room->file_webp}}">
                                <source type="image/jpeg" srcset="/investment/property/list/{{$room->file}}">
                                <img src="/investment/property/list/{{$room->file}}" alt="{{$room->name}}">
                            </picture>
                        @endif
                    </div>
                    <div class="ap-info-price">
                        @if($room->price_promotion)
                        <span class="promotion">Promocja</span>
                        @endif
                        <span class="tag">Cena:</span>
                            @if($room->price_promotion)
                            <span class="price">@money($room->price_promotion)</span>
                            <span class="price-cross">@money($room->price)</span>
                            @if($room->price_30)<span class="signature text-center">najniższa cena sprzed 30 dni:<br> @money($room->price_30)</span>@endif
                        @else
                            <span class="price">{{ $room->price }} zł</span>
                        @endif
                    </div>
                    <div class="ap-info-data">
                        <span class="tag">Liczba pokoi:</span>
                        <span class="data">{{$room->rooms}}</span>
                    </div>
                    <div class="ap-info-data">
                        <span class="tag">Powierzchnia:</span>
                        <span class="data">{{$room->area}} m<sup>2</sup></span>
                    </div>
                    <div class="ap-info-data">
                        <span class="tag">Piętro:</span>
                        <span class="data">{{$room->floor->number}}</span>
                    </div>
                    <a href="{{route('front.investment.property', ['investment_id' => $room->investment_id, 'floor' => $room->floor_id, 'property' => $room->id])}}" class="btn btn-primary"><span>zobacz</span></a>
                </div>
            </div>
        </div>
    @endforeach
@endif



<div id="roomsList" @if(Route::currentRouteName() === 'clipboard.index') class="border-bottom-0" @endif>
    <div class="container p-0">
        @if($properties->count() > 0)
            @foreach($properties as $room)
                <div class="row m-0 @if($room->status <> 3) row-clickable @endif row-property @if($room->specialoffer && $room->status <> 3 || $room->safe_loan && $room->status <> 3) row-specialoffer @endif" data-room="{{$room->id}}" data-url="{{route('front.investment.property', ['investment_id' => $room->investment_id, 'floor' => $room->floor_id, 'property' => $room->id])}}">
                    @if($room->specialoffer && $room->status <> 3 || $room->safe_loan && $room->status <> 3)
                        <span class="ribbon1">
                            @if($room->specialoffer)
                                @if(!$room->specialoffer_text)
                            <span>Oferta specjalna</span>
                                @else
                            <span>{{ $room->specialoffer_text }}</span>
                                @endif
                            @endif
                            @if($room->safe_loan)
                                <span>Bezpieczny kredyt 2%</span>
                            @endif
                        </span>
                    @endif
                    <div class="col-12 col-sm-4 col-md col-top p-0 d-flex align-items-center justify-content-center justify-content-sm-start">
                        @if($room->status <> 3)
                        <h2><a href="{{route('front.investment.property', ['investment_id' => $room->investment_id, 'floor' => $room->floor_id, 'property' => $room->id])}}">{{$room->name_list}} <strong>{{$room->number}}</strong></a></h2>
                        @else
                            <h2>{{$room->name_list}} <strong>{{$room->number}}</strong></h2>
                        @endif
                    </div>
                    <div class="col-6 col-sm-4 col-md justify-content-center">
                        @if($room->file)
                            <picture>
                                <source type="image/webp" srcset="/investment/property/list/webp/{{$room->file_webp}}">
                                <source type="image/jpeg" srcset="/investment/property/list/{{$room->file}}">
                                <img src="/investment/property/list/{{$room->file}}" alt="{{$room->name}}">
                            </picture>
                        @endif
                    </div>
                    <div class="col-6 col-sm-4 col-md pe-3 pe-lg-5 d-flex align-items-center">
                        <ul class="mb-0 list-unstyled">
                            @if($room->price && $room->investment->show_prices)
                                <li>cena: <b>@money($room->price)</b></li>
                            @endif
                            <li>pokoje: <b>{{$room->rooms}}</b></li>
                            <li>pow.: <b>{{$room->area}} m<sup>2</sup></b></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md mt-3 mt-md-0 d-flex align-items-center justify-content-center">
                        <span class="badge room-list-status-{{ $room->status }}">{{ roomStatus($room->status) }}</span>
                    </div>
                    <div class="col-6 col-md mt-3 mt-md-0 d-flex align-items-center justify-content-end col-list-btn p-0">
                        <div class="w-100">
                            @if($room->status <> 3)
                            <a href="{{route('front.investment.property', ['investment_id' => $room->investment_id, 'floor' => $room->floor_id, 'property' => $room->id])}}" class="bttn">ZOBACZ</a>
                            @endif
                            @if(Route::currentRouteName() === 'clipboard.index')
                                <button id="addToFav" class="bttn mt-3" data-id="{{$room->id}}"><i class="lar la-trash-alt"></i> USUŃ Z ULUBIONYCH</button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col-12 text-center pt-4 pb-4">
                    <b>Brak wyników</b>
                </div>
            </div>
        @endif
    </div>
</div>
<script>
    const rows = document.querySelectorAll('.row-clickable');
    rows.forEach(row => {
        row.addEventListener('click', function(event) {
            if (event.target.matches('#addToFav')) {
                console.log("#addToFav");
            } else {
                const url = this.getAttribute('data-url');
                console.log(url);
                window.location.href = url;
            }
        });
    });
</script>