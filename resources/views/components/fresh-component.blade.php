@if (count($freshs) > 0)

<div class="container-fluid vesitable py-5">
    <div class="container py-5">
        <h1 class="mb-0">Fresh Organic Vegetables</h1>

        <div class="owl-carousel vegetable-carousel justify-content-center">
@foreach ($freshs as $fresh )

            <div class="border border-primary rounded position-relative vesitable-item">
                <div class="vesitable-img">
                <img src="{{asset("storage/products/$fresh->imgae")}}" alt="" width="50px">
                </div>
                <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">{{ $fresh->category->name }}</div>
                <div class="p-4 rounded-bottom">
                    <h4>{{ $fresh->title }}</h4>
                    <p>{{ $fresh->description   }}</p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">{{ $fresh->salary }}</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                    </div>
                </div>
            </div>

@endforeach
                
           
           
        </div>

    </div>
</div>

@endif