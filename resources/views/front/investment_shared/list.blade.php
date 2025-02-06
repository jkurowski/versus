@if($properties->count() > 0)
    @foreach($properties as $room)
        <div data-axis="row" class="col-12 main-ap-box-row" data-aos="fade">
            <div class="main-ap-box-container">
                <!-- bg-success - dostępne -->
                <!-- bg-warning - rezerwacja -->
                <!-- bg-danger - sprzedane -->
                <div class="ap-tag {{ roomStatusBadge($room->status) }}">{{ roomStatus($room->status) }}</div>
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
                        @if($room->show_prices)
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