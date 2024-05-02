<div class="container-fluid featurs py-5">
            <div class="container py-5">
                @if (count($featuers) > 0)
                <div class="row g-4">
                    @foreach ($featuers as $featuer )
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fas {{ $featuer->icon }} fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>{{ $featuer->name }}</h5>
                                <p class="mb-0">{{ $featuer->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div> 
                @endif
                    
                    
                
            </div>
        </div>