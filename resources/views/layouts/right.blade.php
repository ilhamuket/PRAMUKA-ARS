<div class="col-lg-4">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Berita Pramuka</h4>
            @foreach ($inter as $pop)
                <div class="trand-right-single d-flex">
                    <div class="trand-right-img">
                        <img src="{{ $pop->image_url }}" alt="" width="100" height="100">
                    </div>
                    <div class="trand-right-cap">
                        <span class="color1">{{ $pop->categories->name }}</span>
                        <h4><a href="{{ route('detail',$pop->id) }}">{{ $pop->name }}</a></h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h4 class="card-title mb-3">Kategori Berita</h4>
            @foreach ($kategori as $kategories)
                <div class="trand-right-single d-flex">
                    <div class="trand-right-cap">
                        <h4><a href="{{ route('detailKategori',$kategories->id) }}">{{ $kategories->name }}</a></h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
