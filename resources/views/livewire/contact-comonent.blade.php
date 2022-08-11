<div>
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Contact Us</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Contact Us</h6>
                <h1 class="display-5">Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="bg-primary h-100 p-5">
                        <form wire:submit.prevent="ContactUs">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="row g-3">
                                <div class="col-6">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder="Magaca" style="height: 55px;" wire:model="name">
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="col-6">
                                    <input type="number" class="form-control bg-light border-0 px-4" placeholder="Numberkaga" style="height: 55px;" wire:model="phone">
                                    @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder="Gobolka" style="height: 55px;" wire:model="gobol">
                                    @error('gobol') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0 px-4 py-3" rows="2" placeholder="Faah-Faahinta Cabashada" wire:model="message"></textarea>
                                    @error('message') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-secondary h-100 p-5">
                        <h2 class="text-white mb-4">Nagu Soo Booqo</h2>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-geo-alt fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Xaffiiskeena</h5>
                                <span class="text-white">KM4, Mogadishu, Somalia</span>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-envelope-open fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Nagala soo xiriir </h5>
                                <span class="text-white">info@sostec.com</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-phone-vibrate fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Naga soo wac</h5>
                                <span class="text-white">+25294834398</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</div>
