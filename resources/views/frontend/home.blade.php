<x-frontend-layout>
    <!-- Section 1 -->
    <section>
        <div class="container">
            <div class="row">
                @foreach ($latestNews as $index=>$item)
                   @if ($index < 4)
                        <div class="col-md-12 my-2">
                            <div class="card">
                                <div class="card-body p-5 text-center">
                                    <h1>{{ $item->title }}</h1>
                                    <img src="{{ asset($item->featured) }}" alt="{{ $item->featured }}">
                                </div>
                            </div>
                        </div>
                   @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Section 1 -->

    <!-- section 2: Politics News -->
    <section>
        <div class="container">
            <div class="row">
                <!-- Left Side -->
                <div class="col-md-9">
                    <div class="bg-secondary py-1">
                        <h3 class="mx-2 text-white">राजनीति</h3>
                    </div>


                        <div class="row my-2">
                            <div class="col-md-6">
                                <img src="{{ asset($politics[0]->featured) }}" class="img-fluid" alt="">
                                <h5>{{ $politics[0]->title }}</h5>
                            </div>
                            <div class="col-md-6">
                                @foreach ($politics as $index=>$item)
                                   @if ($index >0  && $index < 4)
                                   <div class="row my-2">
                                    <div class="col-md-3">
                                        <img src="{{ asset($item->featured) }}" class="img-fluid" alt="">
                                    </div>

                                    <div class="col-md-9">
                                        <h6>{{ $item->title }}</h6>
                                        <div>
                                           <small class="text-muted"> <i class="fa-regular fa-clock"></i> {{ nepalidate($item->created_at) }}</small>
                                        </div>
                                    </div>
                                </div>
                                   @endif
                                @endforeach
                            </div>
                        </div>

                </div>

                <!-- Right Side -->
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <!-- End of section 2 -->
</x-frontend-layout>
