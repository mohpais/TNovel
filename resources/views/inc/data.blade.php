<div class="row">
    @foreach ($novel as $item)                                        
    <!-- Start Single Product -->
    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product__thumb">
            <a class="first__img" href="/view/{{$item->slug}}"><img src="images/post/{{$item->gambar}}" alt="product image"></a>
            <a class="second__img animation1" href="/view/{{$item->slug}}"><img src="images/post/{{$item->gambar}}" alt="product image"></a>
            <div class="hot__box" style="background-color: #ff3300">
                <span class="hot-label">{{$item->status}}</span>
            </div>
        </div>
        <div class="product__content content--center">
            <h4><a href="/read/{{$item->slug}}">{{$item->nama}}</a></h4>
            <div class="action">
                <div class="actions_inner">
                    <ul class="add_to_links">
                        <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                        <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#novel-{{$item->slug}}"><i class="bi bi-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Product -->
    @endforeach
    <div class="col-md-12" style="text-align:center !important;">
    {{ $novel->links() }}
    </div>
</div>
