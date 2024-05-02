<div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Bestseller Products</h1>
                    <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                </div>
                <div class="row g-4">
                    @if (count($bests) > 0)
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            @foreach ($bests as $best )
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{asset("Storage/best/$best->imgae")}}" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">{{ $best->title }}</a>
                                    
                                    <h4 class="mb-3">{{ $best->salary }}</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    @endif
                   
                    
            </div>
        </div>