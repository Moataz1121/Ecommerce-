<div class="container-fluid py-5">
            <div class="container">
                <div class="bg-light p-5 rounded">
                @if (count($skills) > 0)

                    <div class="row g-4 justify-content-center">
                    @foreach ($skills as $skill )

                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa {{ $skill->icon }} text-secondary"></i>
                                <h4>{{ $skill->title }}</h4>
                                <h1>{{ $skill->number }}</h1>
                            </div>
                            
                        </div> 
                        @endforeach
                      
                    </div>
                    @endif

                </div>
            </div>
        </div>