<div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-primary">Our Testimonial</h4>
                    <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
                </div>
                @if (count($letters) > 0)
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($letters as $letter )
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">{{ $letter->description }} 
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="{{asset("Storage/letter/$letter->imgae")}}" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">{{ $letter->name }}</h4>
                                    <p class="m-0 pb-3">{{ $letter->title }}</p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>                    
                @endif
                    
                    
                </div>
            </div>