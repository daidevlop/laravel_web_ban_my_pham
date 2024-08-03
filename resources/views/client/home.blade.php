@extends('client.layouts.master')
@section('contents')
    <div class="carousel slide" data-bs-ride="carousel" id="carousel-banner-home">
        <div class="carousel-inner"></div>
        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carousel-banner-home" type="button"><span
                class="fa-solid fa-chevron-left"></span></button>
        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carousel-banner-home"
            type="button"><span class="fa-solid fa-chevron-right"></span></button>
    </div>
    <h2 class="text-center mb-4 mt-4">SẮP HẾT HÀNG</h2>

    <div class="product-loop row">
        @foreach ($stockProducts as $stock)
            <div class="col-md-3 col-sm-6 col-xs-6 mb-2">
                <div class="product-thumb po-relative">
                    <div class="image p-relative">
                        <a href="{{route('products-client.show',$stock->id)}}">
                            <img src="{{Storage::url($stock->img)}}" width="261" height="326"
                                alt="Endless Love" title="Endless Love" class="img-fluid lozad" />
                            <span class="percent-off-rounded">{{$stock->stock}}<br />Stock</span>
                        </a>
                    </div>
                    <div class="content">
                        <div class="description">
                            <h3><a class="product-item-title" href="{{route('products-client.show',$stock->id)}}">{{$stock->name}}</a></h3>
                            <div class="price">
                                <span class="price-new">{{$stock->discount}}VND</span> <span class="price-old">{{$stock->price}}VND</span>
                            </div>
                        </div>
                        <div class="buynow-button text-center">
                            <form action="{{route('car.store',$stock->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="id_product" value="{{$stock->id}}">
                                <input type="hidden" name="discount" value="{{$stock->discount}}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" style="{{ Auth::check() ? '' : 'display: none;' }}">Them vao gio hang</button>
                            </form>
                        </div>
                    </div>
                    <input type="hidden" name="product_id" value="6942" />
                    <input type="hidden" name="quantity" value="1" />
                </div>
            </div>
        @endforeach
    </div>


    <h2 class="text-center mb-4 mt-4">ĐẶT NHIỀU NHẤT</h2>
    <div class="product-loop row">
        @foreach ($products as $item)
            <div class="col-md-3 col-sm-6 col-xs-6 mb-2">
                <div class="product-thumb po-relative">
                    <div class="image p-relative">
                        <a href="{{route('products-client.show',$item->id)}}">
                            <img src="{{ Storage::url($item->img) }}" width="261" height="326" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <div class="description">
                            <h3><a class="product-item-title" href="{{route('products-client.show',$item->id)}}">{{ $item->name }}</a>
                            </h3>
                            <div class="price">
                                <span class="price-new">{{ $item->price }} VND</span>
                            </div>
                        </div>
                        <div class="buynow-button text-center">
                            <form action="{{route('car.store',$item->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="id_product" value="{{$item->id }}">
                                <input type="hidden" name="discount" value="{{$item->discount}}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" style="{{ Auth::check() ? '' : 'display: none;' }}">Them vao gio hang</button>
                            </form>
                        </div>
                    </div>
                    <input type="hidden" name="product_id" value="" />
                    <input type="hidden" name="quantity" value="1" />
                </div>
            </div>
        @endforeach
    </div>
@endsection
