<title>{{ $post->title}}</title>
<meta name="Keywords" content="{{ $post->title}}" />
<meta name="Description" content="{{ $post->title}}" />

@extends('layout')
@section('content')



<div class="container-fluid" style="padding: 0 100px 0 100px;">


    <div class="img-all-sp">
        <div class="row" style="padding-top: 30px;">

          
            <div class="col-md-9">
                <h5 style="margin-top:15px;font-size: 19px;
                 border-bottom: 2px solid #ffcc2a;
                  padding-bottom: 9px;font-weight: 700;color:#1a7ed3;">{{$post->tieude}}</h5>

                {!!$post->noidung!!}


            </div>
            <div class="col-md-3 danhmuc_lon">

                <div class="danhmuc">



                    <div class="list-type">
                        <ul id="ul_meme" style="margin-top: 15px;">
                            <li style="float:none" id="ul_menu"><b>DANH MỤC SẢN PHẨM</b></li>
                            @foreach($types as $item)
                            <li> <a href="{{url('type/'.$item->slug)}}"><i style="font-size:1rem" class="fa-solid fa-angle-right"></i>
                                    {{$item->type_name}}</a>
                            </li>
                            @endforeach






                        </ul>
                    </div>





                </div>
            </div>

        </div>
    </div>

</div>



























@endsection